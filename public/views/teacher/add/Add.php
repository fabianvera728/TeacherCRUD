<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Add new teacher", "/public/views/teacher/add/Add.css"); ?>

<body>

  <form class="container form-control" action="/teacher/add" method="post">
    <h1>Add teacher</h1>
<div class="mb-3">
      <label for="name" class="form-label">Nit</label>
      <input type="number" class="form-control" name="fid" id="fname" placeholder="Codigo" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="fusername" id="fusername" placeholder="Name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Lastname</label>
      <input type="text" class="form-control" name="flastname" id="flastname" placeholder="Lastname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="fage" class="form-label">Birthdate</label>
      <input type="text" class="form-control" name="fbirthdate" placeholder="Birthdate" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" name="fgender" id="fgender">
          <?php
          foreach ($genders as $gender) {
          ?>
                <option selected value="<?php echo $gender->getId() ?>"><?php echo $gender->getName() ?></option>
          <?php
            }
          ?>
        </select>
      </div>

    </div>
    <div class="mb-3">
      <label for="fcontracttype" class="form-label">Contract type</label>
      <select class="form-select" name="fcontracttype" id="contracttype">
        <?php
        foreach ($contracttypes as $value) {
        ?>
          <option value="<?php echo $value->getId() ?>"><?php echo $value->getName() ?></option>
        <?php
        }
        ?>

      </select>
    </div>
    <div class="mb-3">
    <label for="photoprofile" class="form-label">Photo profile</label>
      <input name="fphoto" class="form-control" id="" type="file" name="">
    </div>
    <div class="mb-3">
      <input type="submit" name="btnregister" id="btnregister" class="btn btn-primary" value="Register"/>
    </div>
  </form>
</body>

</html>
