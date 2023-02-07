<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
    />
    <link
    href="index.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    
</head>
<body class="bg-white">
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">

<div class="col-md-9 col-lg-6 col-xl-5">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
        <img src="https://img.freepik.com/premium-vector/user-verification-unauthorized-access-prevention-private-account-authentication-cyber-security_566886-2817.jpg?w=1380"
          class="img-fluid" alt="Sample image">
        <a href="#!">
            <div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2)"></div>
        </a>
    </div>
</div>
        
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <h1 class="auth-title">Sign in.</h1>
            <p class="auth-subtitle mb-5">
              Sign in with your data that you entered during registration.
            </p>    
             <!-- cek pesan notifikasi -->
             <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<div class='alert alert-danger'>Login Failed!!</div>";
                        }else if($_GET['pesan'] == "logout"){
                            echo "<div class='alert alert-success'>Logout Successfully</div>";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "<div class='alert alert-danger'>Anda Harus Login Terlebih Dahalu</div>";
                        }
                    }
              ?>
        <form action="auth/login.php" method="post">
          <!-- Email input -->
          <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  class="form-control form-control-xl"
                  placeholder="Username"
                  name="username"
                />
                <div class="form-control-icon">
                  <i class="bi bi-person"></i>
                </div>
              </div>
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="password"
                  class="form-control form-control-xl"
                  placeholder="Password"
                  name="password"
                />
                <div class="form-control-icon">
                  <i class="bi bi-shield-lock"></i>
                </div>
              </div>

        <div class="d-flex justify-content-between align-items-center">
        <input type="submit" placeholder="SIGN IN" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">
          <div class="text-center text-lg-start pt-2">
            <p class="small fw-bold pt-1 mb-0">Don't have an account? <a href="auth/register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#435ebe" fill-opacity="1" d="M0,0L34.3,37.3C68.6,75,137,149,206,154.7C274.3,160,343,96,411,74.7C480,53,549,75,617,112C685.7,149,754,203,823,218.7C891.4,235,960,213,1029,186.7C1097.1,160,1166,128,1234,128C1302.9,128,1371,160,1406,176L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Created with <i class="fas fa-heart text-danger"></i> by Najm Xhavier
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
    
  <!-- Gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script>
    gsap.from('.row',{ duration: 1,y: '-150%'});
  </script>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
</body>
</html>
















