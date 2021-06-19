<?php
include "./public/templates/utils.php";
?>
<html lang="es">
<?php echo head("Teacher crud"); ?>

<body>
  <div class="container">
    <blockquote class="text-center">
      <h1>
        Teacher list
      </h1>
    </blockquote>
    <div class="row d-flex">
      <form class="col d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary me-2" type="submit">Search</button> 
      </form>
      <a class="col-3 btn btn-success" href="/teacher/add">Add teacher</a>
     
    </div>
    <table class="table table-striped table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Code</th>
          <th scope="col">Name</th>
          <th scope="col">Lastname</th>
          <th scope="col">Birthdate</th>
          <th scope="col">Gender</th>
          <th scope="col">Contract type</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($teachers as $teacher) {
        ?>
          <tr>
          <td><img style="width: 50px; border-radius: 50%" src="<?php echo $teacher->getPhoto() ?>" class="rounded mx-auto d-block" alt="..."></td>
            <td><?php echo $teacher->getId() ?></td>
            <td><?php echo $teacher->getFullName() ?></td>
            <td><?php echo $teacher->getLastName() ?></td>
            <td><?php echo $teacher->getBirthdate() ?></td>
            <td><?php echo $gender->getGender($teacher->getGender())->getName() ?></td>
            <td><?php echo $contracttype->getContractType($teacher->getContractType())->getName() ?></td>
            <td><a class="btn btn-outline-primary" href="/teacher/edit/<?php echo $teacher->getId()?>">
                Edit <i class="far fa-edit"></i></a>
            </td>
            <td><a class="btn btn-outline-danger" 
            href="/teacher/delete/<?php echo $value['tea_cod'] ?>">Delete
            <i class="far fa-trash-alt"></i></a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <button class="btn btn-primary">Hola mundo</button>
  </div>
</body>

</html>
