<?php
include "./public/templates/utils.php";
?>
<html lang="es">
<?php echo head("Add teacher"); ?>

<body>

  <form class="container form-control" action="#" method="post">
    <h1>Add teacher</h1>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="fname" id="fname" placeholder="Name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Lastname</label>
      <input type="text" class="form-control" name="flastname" id="flastname" placeholder="Lastname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="fage" class="form-label">Age</label>
      <input type="number" class="form-control" id="fage" placeholder="Age" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="fsex" class="form-label">Sex</label>
      <input type="text" class="form-control" name="fsex" id="fsex" placeholder="Sex" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="fcontracttype" class="form-label">Contract type</label>
      <select class="form-select" name="contracttype" id="contracttype">
        <?php
        foreach ($contracttypes as $value) {
        ?>
          <option value="<?php echo $value->getName() ?>"><?php echo $value->getName() ?></option>
        <?php
        }
        ?>

      </select>
    </div>
    <div class="mb-3">
    <label for="fcontracttype" class="form-label">Photo profile</label>
      <input class="form-control" id="" type="file" name="">
    </div>
    <div class="mb-3">
      <input type="submit" name="btnregister" id="btnregister" class="btn btn-primary" value="Register"/>
    </div>
  </form>
</body>

</html>
