<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FrozenVentures</title>
    <link rel="icon" type="image/x-icon" href="../../assets/images/logo.png" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/styles/sign.css" />
  </head>
  <body>
    <div class="sign-in-container">
      <div class="image-container">
        <img
          class="sign-image"
          src="../../assets/images/1.jpg"
          alt="Background"
        />
      </div>

      <div class="form-container">
        <div
          class="title-container"
          onclick="window.location.href='../../index.php'"
        >
          <img src="../../assets/images/logo.png" alt="logo" />
          <h1>FrozenVentures</h1>
        </div>
    <form action="" method="get" id="form">
    <div class="input-container">
          <h4>Username:</h4>
          <input type="text" name="username" />
        </div>

        <div class="input-container">
          <div class="container">
            <h4>Password:</h4>
            <div class="bx-container">
              <i class="bx bx-show"></i>
              <i class="bx bxs-hide"></i>
            </div>
          </div>

          <input class="password" type="password" name="password" />
        </div>
       
    </form>
        <div class="button-container">
        <button class="submit" type="submit">Sign In</button>
          <p>Dont Have An Account? <a href="sign-Up.php">Sign Up</a></p>
        </div>

        <div class="other-sign">
          <div class="text-container">
            <div class="line"></div>
            <p>Or Sign In With</p>
            <div class="line"></div>
          </div>

          <div class="social-container">
            <button><i class="bx bxl-google"></i></button>
          </div>
        </div>
      </div>
    </div>

    <script defer src="../../assets/scripts/login.js"></script>
  
  </body>
</html>