<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey System</title>
    <link rel="stylesheet" href="src/css/style.css">

    <!--media query custom css-->
    <link rel="stylesheet" href="src/css/media.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    
                <!--drop down-->
                <div class="nav-col mobile" id="navbarNav">
                    <ul class="navbar-nav-lg">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                    </ul>
                  </div>
<div class="container">
                      
    <nav class="navbar navbar-expand-lg bg-light">
        <!--mobile navigation-->

        <div class="mobile-nav">
            <a class="navbar-brand" href="#"><img src="assets/icons/SURVEY plus.svg" alt="" srcset=""></a>
            <i class="bi bi-list" id="turgle-nav"></i>
            <i class="bi bi-x" id="close-nav"></i>

        </div>
        <div class="contain">

        <!--this section contains both custom css and bootstrap-->
        <!--inserting the logo-->

          <a class="navbar-brand" href="#"><img src="assets/icons/SURVEY plus.svg" alt="" srcset=""></a>

          <div class="nav-col" id="navbarNav">
            <ul class="navbar-nav-lg">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Explore</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
            </ul>
          </div>

          <li class="nav-item">
            <a class="nav-link" href="./pages/login.php">Sign up</a>
          </li>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
        
      </nav>
      <div class="row p-4" >
        <div class="col-sm-12 col-md-6">
            <img src="assets/images/hero_image.svg" alt="" srcset="" id="hero">
        </div>
        <div class="col-sm-12 col-md-6 pt-4">
            <h1 class="md-text-left sm-text-center pt-4">Reach your audience wherever they may be</h1>
            <h2 class="md-text-left sm-text-center">Get answers with surveys</h2>
            <p class="md-text-left sm-text-center">Share your survey via email, SMS, Facebook, Twitter, blogs and more</p>
            <p class="md-text-left sm-text-center">Be the person with great ideas. Surveys give you actionable insights and fresh perspectives.</p>

            <button type="button" class="btn btn-outline-primary">Get Started For Free</button>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-6 pt-4 sm-text-center">
            <h2 class="text-center pt-4">Need an enterprise-grade solution?</h2>
            <p class="text-center pt-4">SURVEYplus is best survey system to empower organisations to gain insights from customers, employees and the market – securely and at scale.</p>
        </div>
      </div>

      <div class="row p-4" >
        <div class="col-sm-12 col-md-6">
            <img src="assets/images/hero-2.png" alt="" srcset="" id="hero">
        </div>
        <div class="col-sm-12 col-md-6 pt-4">
            <h1 class="md-text-left sm-text-center pt-4">Everything you need to create the best surveys</h1>
            <p class="">Get access to survey templates that speak to customers, employees, or your target audience.
                Choose from expert-written sample questions to include in your surveys.
                Score your surveys to estimate their success rates with SurveyMonkey Genius.
                Explore our best practices for creating the even the most sophisticated surveys.</p>

        </div>
      </div>



</div>
    <script src="src/javascript/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>