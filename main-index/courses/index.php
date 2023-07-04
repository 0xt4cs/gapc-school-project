<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
  <title>Courses - Governor Andres Pascual College</title>
  <link rel="icon" href="../../gapc.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8668404933371529" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./styles.css" />
</head>
</script>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
      <div class="container">
        <a class="navbar-brand" href="../home/">
          <h2 class="fw-bold mb-2 mb-lg-0 mb-sm-0">
            Governor Andres Pascual College
          </h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bi bi-list"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../home/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../courses/">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contactus/">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../payroll/">Payroll</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 action-menu text-end">
            <li class="nav-item">
              <a class="nav-link" href="../../logout.php">
                <i class="fa-solid fa-right-from-bracket"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <iframe src="../../media/" frameborder="0" style="
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 350px;
        height: 80px;
        z-index: 999;
      "></iframe>
  <main id="main">
    <section id="first-content">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="pbanner">Courses & Programs</h1>
          </div>
        </div>
      </div>
    </section>
    <section id="second-content">
      <div class="program-cards">
        <div class="program-card">
          <div class="table-responsive">
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">
                    COLLEGE OF ARTS AND SCIENCE (CAS)
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">Bachelor of Arts in Journalism</td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Arts in Political Science
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Public Administration
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Social Work
                  </td>
                </tr>
              </tbody>
            </table>

            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">COLLEGE OF CRIMINOLOGY</th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Criminology
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">
                    COLLEGE OF BUSINESS AND ACCOUNTANCY(CBA)
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Business Administration (B.S.B.A)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    BSBA Major in Financial Management
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    BSBA Major in Human Resource Management
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    BSBA Major in Marketing Management
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Accountancy (B.S.A)
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">
                    COLLEGE OF ENGINEERING AND TECHNOLOGY
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Computer Science
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Information Technology
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Computer Engineering
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Electrical Engineering
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Science in Information Major in CyberSecurity
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">
                    COLLEGE OF TEACHER EDUCATION (C.T.E)
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor in Elementary Education (BEED)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor in Secondary Education Major in English
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor in Secondary Education Major in Mathematics
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Bachelor of Early Childhood Education (BECED)
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">
                    SCHOOL OF GRADUATE STUDIES (S.G.S)
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Doctor of Education major in Educational Management
                    (EDDEM)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Doctor in Business Administration (DMA)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Doctor in Public Administration (DPA)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Master of Arts in Educational Management (MAEM)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Master in Business Adminstration (MBA)
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Master in Public Administration (MPA)
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">
                    SCHOOL OF GRADUATE STUDIES (S.G.S)
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Professional Education Program - Open University
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="program-courses">
              <thead>
                <tr>
                  <th class="program-title">POST BACCALAUREATE PROGRAM</th>
                </tr>
              </thead>
              <tbody>
                <tr class="program-row">
                  <td class="program-col">
                    Certificate on Professional Education (C.P.E) 18 units
                  </td>
                </tr>
                <tr class="program-row">
                  <td class="program-col">
                    Refresher Course 12-15 units (10 years ago)
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-lg-start bg-custom py-3 text-white d-flex flex-column">
      <div class="flex-grow-1">
        <section class="">
          <div class="container text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-start">
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fa-solid fa-graduation-cap"></i> Governor Andres
                  Pascual College
                </h6>
                <p>
                  This is just an Fictional Educational Website Project by First-Year College Students
                </p>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-start">
                <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                <p>
                  <a href="../home/" class="text-reset">Home</a>
                </p>
                <p>
                  <a href="../about/" class="text-reset">About</a>
                </p>
                <p>
                  <a href="./" class="text-reset">Courses</a>
                </p>
                <p>
                  <a href="../contactus/" class="text-reset">Contact</a>
                </p>
                <p>
                  <a href="../payroll/" class="text-reset">Payroll</a>
                </p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-start">
                <h6 class="text-uppercase fw-bold mb-4">Social Media</h6>
                <p>
                  <i class="fa-sharp fa-solid fa-map-location-dot"></i>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1045 M. Naval Street, San
                  Jose, Navotas City
                </p>
                <p>
                  <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;governorpascua@college.edu.ph
                </p>
                <p>
                  <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(02) - 829036<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(02)
                  - 829035
                </p>
                <p>
                  <i class="fa-brands fa-facebook-f"></i>
                  <a href="https://www.facebook.com/pages/Governor-Andres-Pascual-College/106046116101695">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Official FB Page</a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05)">
        <p>
          Group 4 - Set A <br />
          Taculad | Amonelo | Cabilin | Roberto<br />©️2023 Copyright All
          Reserved
        </p>
      </div>
    </footer>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>