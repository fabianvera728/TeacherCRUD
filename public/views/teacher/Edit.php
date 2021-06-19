<?php
include "./public/templates/utils.php";
?>
<html lang="es">
<?php echo head("Edit teacher"); ?>

<body>
  <div class="container">

  <form action="/teacher/update/<?php echo $teacher->getId() ?>" method="post" class="col-lg-4">
      <h1>Edit </h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="fusername" value="<?php echo $teacher->getFullName() ?>" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lastname</label>
        <input type="text" class="form-control" name="flastname" value="<?php echo $teacher->getLastName() ?>">
      </div>
      <div class="mb-3">
        <label for="birthdate" class="form-label">Birthdate</label>
        <input type="text" class="form-control" name="fbirthdate" value="<?php echo $teacher->getBirthdate() ?>">
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" name="fgender" id="fgender">
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
      <div class="mb-3">
        <label for="contracttype" class="form-label">Contract type</label>
        <select class="form-select" name="fcontracttype" id="contracttype">
          <?php
          foreach ($contracttypes as $value) {
          ?>
            <?php if ($teacher->getContractType() == $value->getId()) { ?> 
              <option selected value="<?php echo $value->getId() ?>"><?php echo $value->getName() ?></option>
            <?php
            } else {
            ?>
              <option value="<?php echo $value->getId() ?>"><?php echo $value->getName() ?></option>

          <?php
            }
          }
          ?>
        </select>
      </div>
      <div class="mb-3 row">
<input type="hidden" name="fdefaultphoto" value="<?php echo $teacher->getPhoto() ?>">
      <img class="col-2" name="fdefaultpo"
src="<?php echo $teacher->getPhoto() ?>" style="border-radius: 50%;" alt="">
      <input class="col form-control" value="<?php echo $teacher->getPhoto() ?>" 
            src="<?php echo $teacher->getPhoto() ?>"
            id="" type="file" name="fphoto">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit"/>
      </div>
    </form>
  </div>
</body>

</html>
