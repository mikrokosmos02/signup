<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>FLAP- Sign in</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <a href="https://icons8.com/icon/kt02yz5te3sw/image"></a>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,900;1,400;1,900&family=Ubuntu:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7a12bf0e3b.js" crossorigin="anonymous"></script>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<section class="vh-100" style="background-color: #eee;">
<div class="container h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-lg-12 col-xl-11">
      <div class="card text-black" style="border-radius: 25px;">
        <div class="card-body p-md-5">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>

  <form method="post"  class="mx-1 mx-md-4" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="d-flex flex-row align-items-center mb-4">
      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
      <div class="form-outline flex-fill mb-0">
  		<label class="form-label">Username</label>
  		<input type="text" name="username" class="form-control"  >
  	</div>
    </div>

  	<div class= "d-flex flex-row align-items-center mb-4">
      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
      <div class="form-outline flex-fill mb-0">
  		<label class="form-label">Password</label>
  		<input type="password" class="form-control" name="password">
  	</div>
    </div>

  	<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  		<button type="submit" class="btn btn-primary btn-lg" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</body>
</html
