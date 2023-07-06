<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth.php';
if (!isset($_SESSION['welcomeMessageShown'])) {
  $fullname = $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'];
  $welcomeMessage = 'Welcome, ' . $fullname . ' ! 😁';
  $_SESSION['welcomeMessage'] = $welcomeMessage;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
  <title>Home - Governor Andres Pascual College</title>
  <link rel="icon" href="../../gapc.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
      <div class="container">
        <a class="navbar-brand" href="./">
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
  <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid w-100 h-100 overflow-hidden" src="https://cdn.pixabay.com/photo/2016/11/14/05/15/academic-1822682_960_720.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-block">
          <h5>Governor Andres Pascuual College</h5>
          <p>Education is the key.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid w-100 h-100 overflow-hidden" src="./image2.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-block">
          <h5>Governor Andres Pascuual Collegel</h5>
          <p>Honesty is the best Policy</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid w-100 h-100 overflow-hidden" src="https://cdn.pixabay.com/photo/2017/09/08/00/37/friend-2727305_960_720.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-block">
          <h5>Governor Andres Pascuual Collegel</h5>
          <p>Don't do to others if you don't want it to happen to you.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
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
    <section id="about" class="about mt-5">
      <div class="container-fluid">
        <h2 class="h1-responsive font-weight-bold text-center my-2">About</h2>
        <p class="text-center w-responsive mx-auto mb-1" style="text-align: justify">
          Governor Andres Pascual College is a private educational institution
          located in Navotas City, Philippines. Founded in 1962, the school
          offers a wide range of academic programs from kindergarten to
          college, including courses in business, education, engineering, and
          health sciences. The school prides itself on providing quality
          education that is accessible and affordable to students from all
          walks of life. With a commitment to excellence and innovation,
          Governor Andres Pascual College continues to be a leading
          institution in the region.
        </p>
        <div class="row pt-5 pb-5">
          <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('./image3.jpg')">
            <button class="play-btn mb-4 playBtn"></button>
          </div>
          <div class="modal videoModal">
            <div class="modal-content">
              <span class="close closeBtn">&times;</span>
              <video id="videoPlayer" width="100%" controls>
                <source src="./gapc.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3>
                Governor Andres Pascual College<strong>
                  Offers High Quality Education</strong>
              </h3>
              <p class="font-italic">
                The first private school in Navotas that of Offers High
                Quality College Education
              </p>
              <p>
                Governor Andres Pascual College is a private educational
                institution located in Navotas City, Philippines. Founded in
                1962, the school offers a wide range of academic programs from
                kindergarten to college, including courses in business,
                education, engineering, and health sciences. The school prides
                itself on providing quality education that is accessible and
                affordable to students from all walks of life. With a
                commitment to excellence and innovation, Governor Andres
                Pascual College continues to be a leading institution in the
                region.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="about mt-5">
      <div class="container-fluid">
        <div class="row pt-5 pb-5">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3>
                Governor Andres Pascual College<strong>
                  Offers High Quality Education</strong>
              </h3>
              <p class="font-italic">
                The first private school in Navotas that of Offers High
                Quality College Education
              </p>
              <p>
                Governor Andres Pascual College is a private educational
                institution located in Navotas City, Philippines. Founded in
                1962, the school offers a wide range of academic programs from
                kindergarten to college, including courses in business,
                education, engineering, and health sciences. The school prides
                itself on providing quality education that is accessible and
                affordable to students from all walks of life. With a
                commitment to excellence and innovation, Governor Andres
                Pascual College continues to be a leading institution in the
                region.
              </p>
            </div>
          </div>
          <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('./image4.jpg')">
            <button class="play-btn mb-4 playBtn"></button>
          </div>
          <div class="modal videoModal">
            <div class="modal-content">
              <span class="close closeBtn">&times;</span>
              <video id="videoPlayer" width="100%" controls>
                <source src="./gapc2.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="about mt-5">
      <div class="container-fluid">
        <div class="row pt-5 pb-5">
          <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('./image5.jpg')">
            <button class="play-btn mb-4 playBtn"></button>
          </div>
          <div class="modal videoModal">
            <div class="modal-content">
              <span class="close closeBtn">&times;</span>
              <video id="videoPlayer" width="100%" controls>
                <source src="./gapc3.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
              <h3>
                Governor Andres Pascual College<strong>
                  Offers High Quality Education</strong>
              </h3>
              <p class="font-italic">
                The first private school in Navotas that of Offers High
                Quality College Education
              </p>
              <p>
                Governor Andres Pascual College is a private educational
                institution located in Navotas City, Philippines. Founded in
                1962, the school offers a wide range of academic programs from
                kindergarten to college, including courses in business,
                education, engineering, and health sciences. The school prides
                itself on providing quality education that is accessible and
                affordable to students from all walks of life. With a
                commitment to excellence and innovation, Governor Andres
                Pascual College continues to be a leading institution in the
                region.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container course pb-5 pt-5">
        <h2 class="h1-responsive font-weight-bold text-center my-4">
          Courses
        </h2>
        <p class="text-center w-responsive mx-auto mb-5">
          Governor Andres Pascual College offers a wide range of courses
          including Business Administration, Education, Information
          Technology, Maritime Education, Tourism Management, and many more.
        </p>
        <div class="row">
          <div class="col-md-4">
            <div class="card box">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://cdn.pixabay.com/photo/2016/09/08/04/12/programmer-1653351_960_720.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Information Technology</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="../courses/" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card box">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://cdn.pixabay.com/photo/2017/09/25/11/55/cyberspace-2784907_960_720.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Electronic Engineering</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="../courses/" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card box">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://cdn.pixabay.com/photo/2020/12/05/14/08/man-5806012_960_720.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Civil Engineering</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="../courses/" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="h1-responsive font-weight-bold text-center my-4">
          Gallery
        </h2>
        <p class="text-center w-responsive mx-auto mb-5">
          Do you have any questions? Please do not hesitate to contact us
          directly. Our team will come back to you within a matter of hours to
          help you.
        </p>
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="https://media.gettyimages.com/id/1242648900/photo/filipino-students-wait-in-line-to-enter-their-classrooms-in-a-schoolyard-after-face-to-face.jpg?s=612x612&w=gi&k=20&c=ORbShPeJRE2u9s640zV-Jp1207dZAEGUaUNl87M4MgY=" class="w-100 shadow-1-strong rounded mb-4" alt="Student Distancing" />
            <img src="https://i.pinimg.com/564x/99/5f/81/995f8106f7812e5e2ce5419ea006c82b.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Student Guy Smiling" />
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://i.pinimg.com/564x/d5/89/d2/d589d22f2f66c2ca3695ee315118e5d4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Student Girl Carrying Book" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzQdxMfy8UKFq-mTZT-kcdxZocvK0tsHVi_0uuDEClNA-_kQzySUpswIYYFt6amLRqHUs&usqp=CAU" class="w-100 shadow-1-strong rounded mb-4" alt="Student Singing PH Anthem" />
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://assets.rappler.com/612F469A6EA84F6BAE882D2B94A4B421/img/918E2F88FD8D49078B298AFDDB5E6166/students-public-schools-face-mask-january-31-2020-002_943fd2db486b478799952735ee51dd74_9ed37216de4b4158b09dd0dff629fa60.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Student During Pandemic" />
            <img src="https://thumbs.dreamstime.com/b/unemotional-university-filipino-boy-student-books-146653235.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="PokerFace Student " />
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mb-5">
        <section class="mb-4">
          <h2 class="h1-responsive font-weight-bold text-center my-4">
            Contact us
          </h2>
          <p class="text-center w-responsive mx-auto mb-5">
            Do you have any questions? Please do not hesitate to contact us
            directly. Our team will come back to you within a matter of hours
            to help you.
          </p>
          <div class="row">
            <div class="col-md-6 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="./" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="name" name="name" class="form-control" />
                      <label for="name" class="">Your name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <input type="text" id="email" name="email" class="form-control" />
                      <label for="email" class="">Your email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <input type="text" id="subject" name="subject" class="form-control" />
                      <label for="subject" class="">Subject</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                      <label for="message">Your message</label>
                    </div>
                  </div>
                </div>
              </form>
              <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
              </div>
              <div class="status"></div>
            </div>
            <div class="col-md-6 text-center">
              <div class="map-responsive">
                <div class="col-md-6 text-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.8641860384337!2d120.94189377681404!3d14.663647875526525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b4566239fe99%3A0x14da3752bbf119d3!2sGovernor%20Andres%20Pascual%20College!5e0!3m2!1sen!2sph!4v1682587819213!5m2!1sen!2sph" width="100%" height="100%" style="border: 0; border-radius: 5px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
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
                  <a href="./" class="text-reset">Home</a>
                </p>
                <p>
                  <a href="../about/" class="text-reset">About</a>
                </p>
                <p>
                  <a href="../courses/" class="text-reset">Courses</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
  </main>
</body>

</html>