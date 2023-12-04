<?php
      require 'function_mahasiswa.php';
      if (isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' ");

        if (mysqli_num_rows($result) ===1){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
              header("Location: dashboard/dashboard.php");
            }
        }
      }
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel='stylesheet' href="style.css">

</head>

<body background="login.jpg">

<div class="container">
  

  <form action="" method="post">
      <img class="mt-2" src="uns.png" alt="" width="120" height="140">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit" name="login" id="login">Login</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; Web Akademik 2023</p>
  </form>
</div>
</body>
</html>
