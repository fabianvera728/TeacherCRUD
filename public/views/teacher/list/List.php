<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Teacher crud", "/public/views/teacher/list/List.css"); ?>

<body>
<div class="List">
  <blockquote class="text-bold-2 strong">
    <h1>
      Teacher list
    </h1>
  </blockquote>
  <div class="List__search-wrapper px">
    <input id="search" class="form__field" type="search" placeholder="Search" aria-label="Search">
    <a href="#" class="btn btn-secondary" type="submit">
      <i class="fa fa-search"></i>
      Search
    </a>
  </div>
  <div class="List__options-wrapper px">
    <a href="/home" class="btn btn-secondary">Go back</a>
    <a href="/teacher/add" class="btn btn-primary">Add teacher</a>
  </div>
  <table class="List__table-wrapper">
    <thead class="">
    <tr>
      <th scope="">Image</th>
      <th scope="">Code</th>
      <th scope="">Name</th>
      <th scope="">Lastname</th>
      <th scope="">Birthdate</th>
      <th scope="">Gender</th>
      <th scope="">Contract type</th>
      <th scope="">Edit</th>
      <th scope="">Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($teachers as $teacher) {
      ?>
      <tr>
        <td><img style="width: 50px; border-radius: 50%" src="<?php echo $teacher->getPhoto() ?>"
                 class="rounded mx-auto d-block" alt="..."></td>
        <td><?php echo $teacher->getId() ?></td>
        <td><?php echo $teacher->getFullName() ?></td>
        <td><?php echo $teacher->getLastName() ?></td>
        <td><?php echo $teacher->getBirthdate() ?></td>
        <td><?php echo $gender->getGender($teacher->getGender())->getName() ?></td>
        <td><?php echo $contracttype->getContractType($teacher->getContractType())->getName() ?></td>
        <td><a class="btn btn-outline-primary" href="/teacher/edit/<?php echo $teacher->getId() ?>">
            Edit <i class="far fa-edit"></i></a>
        </td>
        <td><a class="btn btn-outline-danger"
               href="/teacher/delete/<?php echo $teacher->getId() ?>">Delete
            <i class="far fa-trash-alt"></i></a></td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
</div>
</body>

</html>
