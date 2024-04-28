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

        <div class="input-container">
          <h4>Email:</h4>
          <input type="text" />
        </div>

        <div class="input-container">
          <h4>Name:</h4>
          <input type="text" />
        </div>

        <div class="input-container">
          <h4>Username:</h4>
          <input type="text" />
        </div>

        <div class="input-container">
          <div class="container">
            <h4>Password:</h4>
            <div class="bx-container">
              <i class="bx bx-show" onclick="showPass()"></i>
              <i class="bx bxs-hide" onclick="hidePass()"></i>
            </div>
          </div>
          <input class="password" type="password" />
        </div>

        <div class="button-container">
          <button>Sign Up</button>
          <p>Already Have An Account? <a href="sign-in.php">Sign In</a></p>
        </div>

        <div class="other-sign">
          <div class="text-container">
            <div class="line"></div>
            <p>Or Sign Up With</p>
            <div class="line"></div>
          </div>

          <div class="social-container">
            <button><i class="bx bxl-google"></i></button>
          </div>
        </div>
      </div>
    </div>

    <script>
      let show = document.querySelector(".bx-show");
      let hide = document.querySelector(".bxs-hide");
      let pass = document.querySelector(".password");

      function showPass() {
        show.style.display = "none";
        hide.style.display = "block";
        pass.type = "text";
      }

      function hidePass() {
        hide.style.display = "none";
        show.style.display = "block";
        pass.type = "password";
      }
    </script>
  </body>
</html>
