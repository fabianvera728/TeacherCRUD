<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Add new teacher", "/public/views/teacher/add/Add.css"); ?>

<body>
<div class="Add">
  <div class="Add__title  px">
    <h1 class="text-bold-2 strong">Here you can add a new teacher</h1>
    <p class="form-label-required">Fill in all the fields that contain</p>
  </div>
  <div class="Add__options-wrapper px">
    <a href="/teacher/list" class="btn btn-secondary">
      <i class="fas fa-arrow-left"></i>
      Go back
    </a>
  </div>
  <div class="Add__flex px py">
    <form
      action="/teacher/vadd"
      method="post"
      enctype="multipart/form-data"
      class="Add__grid">
      <div class="form-field-container Add__grid-full-width">
        <label for="fnit" class="form-label form-label-required">Nit</label>
        <input type="text" class="form-field" name="fid" id="fnit" placeholder="Your nit code" required>
      </div>
      <div class="form-field-container">
        <label for="fname" class="form-label form-label-required">Full name</label>
        <input type="text" class="form-field" name="fname" id="fname" placeholder="Your full name" required>
      </div>
      <div class="form-field-container">
        <label for="flastname" class="form-label form-label-required">Last name</label>
        <input type="text" class="form-field" name="flastname" id="flastname" placeholder="Your last name" required>
      </div>
      <div class="form-field-container">
        <label for="fbirthdate" class="form-label form-label-required">Birthdate</label>
        <input type="text" class="form-field" name="fbirthdate" id="fbirthdate" placeholder="2000-10-10" required>
      </div>
      <div class="form-field-container-select form-field-container">
        <label for="fcontracttype" class="form-label form-label-required">Contract type</label>
        <select class="form-field" name="fcontracttype" id="fcontracttype" required>
          <?php
          foreach ($contracttypes as $type) {
            ?>
            <option value="<?php echo $type->getId() ?>"><?php echo $type->getName() ?></option>
            <?php
          }
          ?>
        </select>
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
        <div class="btn btn-secondary Add__full-width">
          <input name="fphoto" class="form-field input-file " id="fphotoprofile" type="file">
          <label for="fphotoprofile" class="input-file-label">
            <i class="fa fa-save"></i>
            Choose a file
          </label>
        </div>
      </div>
      <div class="Add__grid-full-width py">
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