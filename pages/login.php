<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up for survey plus</title>
    <link rel="stylesheet" href="../src/css/style.css">
    
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
            <a class="navbar-brand" href="#"><img src="../assets/icons/SURVEY plus.svg" alt="" srcset=""></a>
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
            <a class="nav-link" href="#">Sign up</a>
          </li>
          <button type="submit" class="btn btn-primary" >Sign in</button>
        </div>
        
      </nav>

    <div class="row">
        <div class="col">
            <img src="" alt="">
        </div>
        <div class="col">
            <!-- form elemts -->
        <form method="POST" action="action.php">
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
            </div>   
        
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
    
            <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword">
            </div>

            <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
 
        </div>
    </div>

</body>
</html>