
<?php echo Asset::css('base.css'); ?>
  if (logged_in?){
    <div class="container">
      <h1 class="headline">
        <a onclick="location.href='/'">HOME</a>
      </h1>
      <ul class="nav-list">
        <li onclick="location.href='signup' " class="nav-list-item">Sign Up</li>
        <li onclick="location.href='login' " class="nav-list-item">Log In</li>
      </ul>
    </div>
  } else {
    <div class="container">
      <h1 class="headline">
        <a onclick="location.href='/'">HOME</a>
      </h1>
      <ul class="nav-list">
        <li onclick="location.href='signup' " class="nav-list-item">Sign Up</li>
        <li onclick="location.href='login' " class="nav-list-item">Log In</li>
      </ul>
    </div>
  }

