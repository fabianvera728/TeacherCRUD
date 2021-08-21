<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Edit teacher", "/public/views/teacher/edit/Edit.css"); ?>

<body>

<div class="Edit">
  <div class="Edit__title  px">
    <h1 class="text-bold-2 strong">Here you can add a new teacher</h1>
    <p class="form-label-required">Fill in all the fields that contain</p>
  </div>
  <div class="LEdit__options-wrapper px">
    <a href="/teacher/list" class="btn btn-secondary">
      <i class="fas fa-arrow-left"></i>
      Go back
    </a>
  </div>
  <div class="Edit__flex px py">
    <form
      action="/teacher/update/<?php echo $teacher->getId() ?>"
      method="post"
      enctype="multipart/form-data"
      class="Edit__grid">
      <div class="form-field-container Edit__grid-full-width">
        <label for="fnit" class="form-label form-label-required">Nit</label>
        <input type="text" class="form-field" name="fid" id="fnit" placeholder="Your nit code" disabled
        value = "<?php echo $teacher->getId() ?>">
      </div>
      <div class="form-field-container">
        <label for="fname" class="form-label form-label-required">Full name</label>
        <input type="text" class="form-field" name="fname" id="fname" placeholder="Your full name"
               value="<?php echo $teacher->getFullName() ?>" required>
      </div>
      <div class="form-field-container">
        <label for="flastname" class="form-label form-label-required">Last name</label>
        <input type="text" class="form-field" name="flastname" id="flastname" placeholder="Your last name" required
               value="<?php echo $teacher->getLastName() ?>">
      </div>
      <div class="form-field-container">
        <label for="fbirthdate" class="form-label form-label-required">Birthdate</label>
        <input type="text" class="form-field" name="fbirthdate" id="fbirthdate" placeholder="2000-10-10" required
               value="<?php echo $teacher->getBirthdate() ?>">
      </div>
      <div class="form-field-container-select form-field-container">
        <label for="fcontracttype" class="form-label form-label-required">Contract type</label>
        <select class="form-field" name="fcontracttype" id="fcontracttype" required>
          <?php
          foreach ($contracttypes as $type) {
            ?>
            <?php if ($teacher->getContractType() == $type->getId()) { ?>
              <option selected value="<?php echo $type->getId() ?>"><?php echo $type->getName() ?></option>
              <?php
            } else {
              ?>
              <option value="<?php echo $type->getId() ?>"><?php echo $type->getName() ?></option>
              <?php
            }
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
            <?php if ($teacher->getGender() == $gender->getId()) { ?>
              <option selected value="<?php echo $gender->getId() ?>"><?php echo $gender->getName() ?></option>
              <?php
            } else {
              ?>
              <option value="<?php echo $gender->getId() ?>"><?php echo $gender->getName() ?></option>
              <?php
            }
          }
          ?>
        </select>
      </div>
      <div class="form-field-container">
        <input type="hidden" name="fdefaultphotot" value="<?php echo $teacher->getPhoto() ?>">
        <label for="fphotoprofile" class="form-label">Photo profile</label>
        <div class="btn btn-secondary Add__full-width">
          <input type="file" name="fphotoprofile" class="form-field input-file" 
            id="fphotoprofile" src="<?php echo $teacher->getPhoto() ?>"
          >
          <label for="fphotoprofile" name="fphoto" class="input-file-label">
            <i class="fa fa-save"></i>
            Choose a file
          </label>
        </div>
      </div>
      <div class="Edit__grid-full-width py">
        <input type="submit" name="btnregister" id="btnregister" class="btn btn-primary" value="Update"/>
      </div>
    </form>
  </div>
</div>
</body>

</html>
