<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Sing up", "/public/views/auth/sing-up/SingUp.css"); ?>

<body>
<div class="SingUp">
  <div class="Add__title  px">
    <h1 class="text-bold-2 strong">Here you can create a new account</h1>
    <p class="form-label-required">Fill in all the fields that contain</p>
  </div>
  <div class="SingUp__options-wrapper px">
    <a href="/login" class="btn btn-secondary">
      <i class="fas fa-arrow-left"></i>
      Go back
    </a>
  </div>
  <div class="SingUp__flex px py">
    <form
      action="/vsing-up"
      method="post"
      enctype="multipart/form-data"
      class="SingUp__grid">
      <div class="form-field-container">
        <label for="fname" class="form-label form-label-required">Full name</label>
        <input type="text" class="form-field" name="fname" id="fname" placeholder="Your full name" required>
      </div>
      <div class="form-field-container">
        <label for="flastname" class="form-label form-label-required">Last name</label>
        <input type="text" class="form-field" name="flastname" id="flastname" placeholder="Your last name" required>
      </div>
      <div class="form-field-container SingUp__grid-full-width">
        <label for="femail" class="form-label form-label-required">Email</label>
        <input type="text" class="form-field" name="femail" id="femail" placeholder="hello@creach.com" required>
      </div>
      <div class="form-field-container">
        <label for="fpassword1" class="form-label form-label-required">Password</label>
        <input type="password" class="form-field" name="fpassword" id="fpassword" required>
      </div>
      <div class="form-field-container">
        <label for="fpassword2" class="form-label form-label-required">Confirm password</label>
        <input type="password" class="form-field" name="fcpassword" id="fcpassword" required>
      </div>
      <div class="form-field-container">
        <label for="fbirthdate" class="form-label form-label-required">Birthdate</label>
        <input type="text" class="form-field" name="fbirthdate" id="fbirthdate" placeholder="2000-10-10" required>
      </div>
      <div class="form-field-container-select form-field-container">
        <label for="fgender" class="form-label form-label-required">Gender</label>
        <select class="form-field" name="fgender" id="fgender" required>
          <?php
          foreach ($genders as $gender) {
            ?>
            <option selected value="<?php echo $gender->getId() ?>"><?php echo $gender->getName() ?></option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="form-field-container">
        <label for="fphotoprofile" class="form-label">Photo profile</label>
        <div class="btn btn-secondary SingUp__full-width">
          <input name="fphoto" class="form-field input-file " id="fphotoprofile" type="file">
          <label for="fphotoprofile" class="input-file-label">
            <i class="fa fa-save"></i>
            Choose a file
          </label>
        </div>
      </div>
      <div class="SingUp__grid-full-width py">
        <input type="submit" name="btnregister" id="btnregister" class="btn btn-primary" value="Register"/>
      </div>
    </form>
  </div>
</div>
</body>

</html>

<!--
<form class="container form-control" action="/teacher/add" method="post">
  <h1>Add teacher</h1>
  <div class="mb-3">
    <label for="name" class="form-label">Nit</label>
    <input type="number" class="form-control" name="fid" id="fname" placeholder="Codigo" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="fusername" id="fusername" placeholder="Name"
           aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="flastname" id="flastname" placeholder="Lastname"
           aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="fage" class="form-label">Birthdate</label>
    <input type="text" class="form-control" name="fbirthdate" placeholder="Birthdate" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-select" name="fgender" id="fgender">
      <?php
/*      foreach ($genders as $gender) {
        */ ?>
        <option selected value="<?php /*echo $gender->getId() */ ?>"><?php /*echo $gender->getName() */ ?></option>
        <?php
/*      }
      */ ?>
    </select>
  </div>

  </div>
  <div class="mb-3">
    <label for="fcontracttype" class="form-label">Contract type</label>
    <select class="form-select" name="fcontracttype" id="fcontracttype">
      <?php
/*      foreach ($contracttypes as $value) {
         */ ?>
        <option value="<?php /*echo $value->getId() */ ?>"><?php /*echo $value->getName() */ ?></option>
        <?php
/*      }
       */ ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="photoprofile" class="form-label">Photo profile</label>
    <input name="fphoto" class="form-control" id="" type="file" name="">
  </div>
  <div class="mb-3">
    <input type="submit" name="btnregister" id="btnregister" class="btn btn-primary" value="Register"/>
  </div>
</form>-->