<link rel="stylesheet" href="/public/templates/header/Header.css">


<header class="Header">
  <div class="Header__brand">
    <a href="/home">
      <?php require_once('./public/templates/brand/Brand.php') ?>
    </a>
  </div>
  <div class="Header__nav Header__visible">
    <nav class="Header__push-center">
      <ul>
        <li class="pr-2"><a class="link" href="/home">Home</a></li>
        <li class="pr-2"><a class="link" href="/teacher/list">Teachers</a></li>
        <li><a class="link" href="/about-us">About us</a></li>
      </ul>
    </nav>
    <div class="">
      <a class="btn btn-secondary" href="/login">Sing up</a>
      <a class="btn btn-primary" href="/login">Log in</a>
    </div>
  </div>
  <div>
    <a class="Header__hamburger Header__burger-icon " href="javascript:void(0);">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</header>
<script>
  const hamburger = document.querySelector(".Header__hamburger");
  const navMenu = document.querySelector(".Header__nav");

  hamburger.addEventListener("click", toggleMenu);
  let index = 0;

  function toggleMenu() {
    if (index === 1) {
      navMenu.classList.add("Header__visible");
      index = 0;
    } else {
      navMenu.classList.remove("Header__visible");
      index = 1;
    }
  }
</script>