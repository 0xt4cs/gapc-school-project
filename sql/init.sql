-- Database Schema for GAPC School Project
-- This will be automatically executed when Docker container starts

CREATE DATABASE IF NOT EXISTS gapc_db;
USE gapc_db;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    middle_initial VARCHAR(5),
    suffix VARCHAR(10),
    address TEXT,
    nationality VARCHAR(50),
    religion VARCHAR(50),
    civil_status ENUM('single', 'married', 'widowed', 'divorced', 'separated', 'complicated') DEFAULT 'single',
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    birthdate DATE,
    age INT,
    sex ENUM('male', 'female', 'other') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_username (username),
    INDEX idx_email (email)
);

-- Create indexes for better performance
CREATE INDEX IF NOT EXISTS idx_users_auth ON users(username, email);

-- Session cleanup table (for future use)
CREATE TABLE IF NOT EXISTS user_sessions (
    id VARCHAR(128) PRIMARY KEY,
    user_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expires_at TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);