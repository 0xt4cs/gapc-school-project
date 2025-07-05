<?php
/**
 * Database Migration Script
 * This script will migrate existing plain text passwords to secure hashed passwords
 * Run this once after deploying the new security updates
 */

require_once __DIR__ . '/config/database.php';

function migratePasswords() {
    try {
        $db = Database::getInstance();
        
        // Find all users with plain text passwords (passwords without '$' are likely plain text)
        $query = "SELECT id, password FROM users WHERE password NOT LIKE '%$%'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll();
        
        $migratedCount = 0;
        
        foreach ($users as $user) {
            // Hash the existing password
            $hashedPassword = hashPassword($user['password']);
            
            // Update the password
            $updateQuery = "UPDATE users SET password = :hashedPassword WHERE id = :id";
            $updateStmt = $db->prepare($updateQuery);
            $updateStmt->bindParam(':hashedPassword', $hashedPassword);
            $updateStmt->bindParam(':id', $user['id']);
            
            if ($updateStmt->execute()) {
                $migratedCount++;
            }
        }
        
        echo "Migration completed successfully. $migratedCount passwords migrated.\n";
        
    } catch (Exception $e) {
        echo "Migration failed: " . $e->getMessage() . "\n";
        return false;
    }
    
    return true;
}

// Run migration if called directly
if (php_sapi_name() === 'cli') {
    echo "Starting password migration...\n";
    migratePasswords();
}