<?php
function getTagColor($id)
{
  return match ($id) {
    "1" => "green",
    "2" => "purple",
    "3" => "teal",
    "4" => "pink",
    default => "yellow",
  };
}

?>

<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Teacher list", "/public/views/teacher/list/List.css"); ?>

<body>
<div class="List">
  <blockquote class="text-bold-2 strong">
    <h1>
      Teacher list
    </h1>
  </blockquote>
  <form action="/teacher/search"
      method="post"
      enctype="multipart/form-data"
      class="List__search-wrapper px">
    <input id="search" class="form-field" name="searchname" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-secondary List__btnsearch" type="submit">
      <i class="fa fa-search"></i>
      Search
    </button>
  </form>
  <div class="List__options-wrapper px">
    <a href="/home" class="btn btn-secondary">
      <i class="fas fa-arrow-left"></i>
      Go back
    </a>
    <a href="/teacher/add" class="btn btn-primary">
      <i class="fas fa-user-plus"> </i> Add teacher
    </a>
  </div>
  <section class="List__cards">
    <div class="List__grid px">
      <?php
      foreach ($teachers as $teacher) { ?>

        <article class="List__card">
          <a href="/teacher/detail/<?php echo $teacher->getId() ?>">
            <img src="<?php echo $teacher->getPhoto() ?>"
                 class="" alt="Foto de  <?php echo $teacher->getFullName() . " " . $teacher->getLastName() ?>">
            <div class="List__teacher-about">
              <div class="List__teacher-type">
                <span class="List__text-left tag tag-<?php echo getTagColor($teacher->getContractType()) ?>">
                  <?php echo $contracttype->getContractType($teacher->getContractType())->getName() ?>
                </span>
                <span class="List__text-right"><span class="strong">Nit: </span><?php echo $teacher->getId() ?></span>
              </div>
              <a href="/teacher/edit/<?php echo $teacher->getId() ?>" class="link link-primary">
                <?php echo $teacher->getFullName() . " " . $teacher->getLastName() ?>
              </a>
            </div>
          </a>
        </article>

        <?php
      }
      ?>
    </div>
  </section>
</div>
</body>

</html>
