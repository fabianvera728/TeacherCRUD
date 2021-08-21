<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Log in", "./public/views/auth/login/Login.css"); ?>
<body>
<div class="Login">
  <div class="Login__brand">
    <div>
      <a href="/home">
        <?php include('./public/templates/brand/Brand.php') ?>
      </a>
    </div>
  </div>
  <div class="Login__wrapper">
    <div class="Login__card">
      <p class="text-bold-3 strong">Log in</p>
      <form action="/vlogin" method="post">
        <div class="form-field-container Add__grid-full-width">
          <label for="femail" class="form-label">Email</label>
          <input type="text" class="form-field" name="femail" id="femail" placeholder="hello@creach.com" required>
        </div>
        <div class="form-field-container Add__grid-full-width">
          <label for="fpassword" class="form-label">Password</label>
          <input type="password" class="form-field" name="fpassword" id="fpassword" placeholder="Your password"
                 required>
        </div>
        <div class="py">
          <input type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary" value="Log in"/>
        </div>
      </form>
    </div>
  </div>
  <div class="Login__center-link">
    <span>Don’t have an account? <a href="/sing-up" class="link link-primary strong">Sign up</a></span>
  </div>
</div>
</body>



