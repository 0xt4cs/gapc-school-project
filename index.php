<?php
session_start();

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
  header("Location: ./main-index/home/");
  exit;
}

require_once './login_process.php';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
if (isset($_SESSION['message'])) {
  unset($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
  <title>Login - Governor Andres Pascual College</title>
  <link rel="icon" href="./gapc.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="loading-wrapper" id="loadingWrapper">
    <div class="logo-container loading-logo">
      <img src="./gapc.png" alt="GAPC LOGO" />
      <div class="progress-ring-container">
        <svg class="progress-ring" width="800" height="800">
          <circle class="progress-ring__circle" stroke="#f70c0e" stroke-width="10" fill="transparent" r="224" cx="240" cy="240" />
        </svg>
      </div>
    </div>
    <div class="loading-percentage" id="loadingPercentage">0%</div>
  </div>
  <div class="cover-container">
    <div class="logo-container">
      <img src="gapc.png" alt="Logo" />
    </div>
    <div class="login-container">
      <h2>Login</h2>
      <form id="login-form" action="./login_process.php" method="POST">
        <div class="input-group">
          <i class="fas fa-user input-icon"></i>
          <input type="text" name="username" placeholder="Username or Email" required />
        </div>
        <div class="input-group">
          <i class="fas fa-lock input-icon"></i>
          <input type="password" name="password" placeholder="Password" required />
          <i class="fas fa-eye show-hide-icon" style="right: 10px"></i>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox" id="savePasswordCheckbox" /> Save
            Password</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit">Login</button>
      </form>
      <script>
        const message = "<?php echo $message; ?>";
        if (message) {
          alert(message);
        }
      </script>
      <p>
        Don't have an account? <a href="./register.php">Create Account!</a>
      </p>
      <span id="dateTime">
        <i class="fas fa-calendar-alt"></i>
        <span class="date"></span>
        <i class="fas fa-clock"></i>
        <span class="time"></span>
      </span>
    </div>
  </div>
  <div class="captcha-modal" id="captchaModal">
    <div class="captcha-modal-content">
      <h1>Please complete the captcha below:</h1>
      <div id="captcha"></div>
      <button id="captchaSubmit">Submit</button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>