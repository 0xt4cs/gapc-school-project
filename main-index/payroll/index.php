<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/public/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
  <title>Payroll - Governor Andres Pascual College</title>
  <link rel="icon" href="../../gapc.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8668404933371529" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body>
  <div class="main-wrapper">
    <div class="container-fluid">
      <div class="row g-0">
        <div class="col-md-3">
          <div class="left-panel">
            <button type="button" class="btn btn-link go-back-btn">&larr; Go Back</button>
            <form id="payroll-form">
              <div id="user-info">
                <h3>User Information</h3><Br>
                <label for="company-name" class="input-label">Company Name :</label>
                <input type="text" class="form-control" id="company-name" placeholder="Company Name" required>
                <label for="full-name" class="input-label">Full Name :</label>
                <input type="text" class="form-control" id="full-name" placeholder="Full Name" required>
                <label for="position" class="input-label">Position :</label>
                <input type="text" class="form-control" id="position" placeholder="Position" required>
                <label for="days-worked" class="input-label">Day(s) of Work :</label>
                <input type="number" class="form-control" id="days-worked" placeholder="Days of Work" required>
                <label for="hours-worked" class="input-label">Hour(s) of Work :</label>
                <input type="number" class="form-control" id="hours-worked" placeholder="Hours of Work" required>
                <label for="hourly-rate" class="input-label">Hourly Rate :</label>
                <input type="number" class="form-control" id="hourly-rate" placeholder="Hourly Rate" required>
                <button type="button" class="btn btn-custom" id="continue-btn">Continue</button>
              </div>
              <div id="deductions" style="display:none;">
                <h3>Deductions</h3>
                <label for="sss" class="input-label">SSS :</label>
                <input type="number" class="form-control" id="sss" placeholder="SSS" required>
                <label for="gsis" class="input-label">GSIS :</label>
                <input type="number" class="form-control" id="gsis" placeholder="GSIS" required>
                <label for="phil-health" class="input-label">Phil-Health :</label>
                <input type="number" class="form-control" id="phil-health" placeholder="Phil Health" required>
                <label for="other-fees" class="input-label">Other Fees :</label>
                <input type="number" class="form-control" id="other-fees" placeholder="Other Fees" required>
                <button type="button" class="btn btn-link" id="up-arrow-btn">&uarr; Go Back</button>
                <button type="submit" class="btn btn-custom">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-9">
          <div class="right-panel">
            <h3>Generated Payroll Data</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Company Name</th>
                  <th scope="col">Employee Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Day(s) of Work</th>
                  <th scope="col">Hour(s) of Work</th>
                  <th scope="col">Total Deductions</th>
                  <th scope="col">Gross Pay</th>
                  <th scope="col">Net Pay</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody id="payroll-data">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="print-container" style="display: none;"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>

</html>