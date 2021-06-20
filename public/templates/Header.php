<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container container-fluid">
    <a class="navbar-brand" href="/home">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            Teacher
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/teacher/list">Teacher list</a></li>
            <li><a class="dropdown-item" href="/teacher/add">Add teacher</a></li>
            <li><a class="dropdown-item" href="#">Options</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about-us">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Sing in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>