  <?php
  session_start();

  // Include secure database configuration for CSRF token generation
  require_once './config/database.php';

  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: ./main-index/home/");
    exit;
  }

  $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
  if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
  }

  // Generate CSRF token
  $csrfToken = generateCSRFToken();
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <title>Register - Governor Andres Pascual College</title>
    <link rel="icon" href="./gapc.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <div class="cover-container">
      <div class="logo-container">
        <img src="./gapc.png" alt="Logo" />
      </div>
      <div class="register-container">
        <h2>Register</h2>
        <form action="./registration_process.php" method="POST">
          <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>" />
          <div class="input-group">
            <i class="fas fa-user input-icon"></i>
            <input type="text" name="firstName" placeholder="First Name" required />
          </div>
          <div class="input-group">
            <i class="fas fa-user input-icon"></i>
            <input type="text" name="lastName" placeholder="Last Name" required />
          </div>
          <div class="input-group">
            <i class="fas fa-user input-icon"></i>
            <input type="text" name="middleInitial" placeholder="Middle Initial (Optional)" maxlength="1" />
          </div>
          <div class="input-group">
            <i class="fas fa-user input-icon"></i>
            <input type="text" name="suffix" placeholder="Suffix (Optional)" />
          </div>
          <div class="input-group">
            <i class="fas fa-map-marker-alt input-icon"></i>
            <input type="text" name="address" placeholder="Address" required />
          </div>
          <div class="input-group">
            <i class="fas fa-globe input-icon"></i>
            <input type="text" name="nationality" placeholder="Nationality" required />
          </div>
          <div class="input-group">
            <i class="fas fa-praying-hands input-icon"></i>
            <input type="text" name="religion" placeholder="Religion" required />
          </div>
          <div class="input-group">
            <label for="civilStatus">Civil Status: </label>
            <select name="civilStatus" required class="civil-status-select">
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="widowed">Widowed</option>
              <option value="divorced">Divorced</option>
              <option value="separated">Separated</option>
              <option value="complicated">Complicated</option>
            </select>
          </div>
          <div class="input-group">
            <i class="fas fa-user input-icon"></i>
            <input type="text" name="username" placeholder="Username" required />
          </div>
          <div class="input-group">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-group">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" id="password" name="password" placeholder="Password" onkeyup="checkPasswordStrength();" required />
            <i class="fas fa-eye show-hide-icon" style="right: 10px"></i>
          </div>
          <div id="strengthBar">
            <div id="strength"></div>
          </div>
          <p>Password Strength:
            <span id="password-strength-text"></span>
          </p>
          <div class="input-group">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required />
          </div>
          <div class="input-group">
            <i class="fas fa-birthday-cake input-icon"></i>
            <input type="date" name="birthdate" placeholder="Birthday" required />
          </div>
          <div class="input-group">
            <i class="fas fa-sort-numeric-up input-icon"></i>
            <input type="number" id="age" name="age" placeholder="Age" readonly required />
          </div>
          <div class="sex-select">
            <label>
              <input type="radio" name="sex" value="male" required />
              Male
            </label>
            <label>
              <input type="radio" name="sex" value="female" required />
              Female
            </label>
            <label>
              <input type="radio" name="sex" value="other" required />
              Other
            </label>
          </div>
          <button type="submit">Register</button>
        </form>
        <script>
          const message = "<?php echo $message; ?>";
          if (message) {
            alert(message);
          }
        </script>
        <p>Already have an account? <a href="./">Login!</a></p>
        <span id="dateTime">
          <i class="fas fa-calendar-alt"></i>
          <span class="date"></span>
          <i class="fas fa-clock"></i>
          <span class="time"></span>
        </span>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./registerScript.js"></script>
  </body>

  </html>