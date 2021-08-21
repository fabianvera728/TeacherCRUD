<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head($teacher->getFullName() . " " . $teacher->getLastName(), "/public/views/teacher/detail/Detail.css"); ?>

<body>
<div class="Detail">
  <div class="Detail__title  px">
    <h1 class="text-bold-2 strong">Hi, this is <?php echo $teacher->getFullName() ?>'s profile</h1>
    <p class="">Take a look at your information</p>
  </div>
  <div class="Detail__options-wrapper px">
    <a href="/teacher/list" class="btn btn-secondary">
      <i class="fas fa-arrow-left"></i>
      Go back
    </a>
  </div>
  <div class="Detail__wrapper px">
    <div class="Detail__card">
      <div class="Detail__profile">
        <div class="Detail__rounded-photo">
          <img src="<?php echo $teacher->getPhoto() ?>"
               alt="Photo of  <?php echo $teacher->getFullName() . " " . $teacher->getLastName() ?>"/>
        </div>
        <div class="">
          <h1 class="text-bold-3 strong">
            <?php echo $teacher->getFullName() . " " . $teacher->getLastName() ?>
          </h1>
        </div>
      </div>
      <div class="Detail__information">
        <div>
          <div>
            <span>
              <strong class="link">Nit: </strong>
              <?php echo $teacher->getId() ?>
            </span>
          </div>
          <div>
            <span>
              <strong class="link">Full name: </strong>
              <?php echo $teacher->getFullName() ?>
            </span>
          </div>
          <div>
            <span>
              <strong class="link">Last name: </strong>
              <?php echo $teacher->getLastName() ?>
            </span>
          </div>
          <div>
            <span>
              <strong class="link">Birthdate: </strong>
              <?php echo $teacher->getBirthdate() ?>
            </span>
          </div>
          <div>
            <span>
              <strong class="link">Contract type: </strong>
              <?php echo $contract->getContractType($teacher->getContractType())->getName() ?>
            </span>
          </div>
          <div>
            <span>
              <strong class="link">Gender: </strong>
              <?php echo $genderDAO->getGender($teacher->getGender())->getName() ?>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="Detail__options-wrapper">
      <a href="/teacher/edit/<?php echo $teacher->getId() ?>" class="btn btn-secondary">
        <i class="fas fa-edit"></i>
        Edit
      </a>
      <a href="/teacher/delete/<?php echo $teacher->getId() ?>" class="btn btn-danger">
        <i class="fas fa-trash"></i>
        Delete
      </a>
    </div>
  </div>

</div>
</body>

</html>