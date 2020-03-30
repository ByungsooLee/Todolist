<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- jquery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <?php echo Asset::css('base.css'); ?>
  </head>
  <header>
	<div class="container">
		<h1 class="headline">
			<p class='index home'>HOME</p>
		</h1>
		<ul class="nav-list">
			<li onclick="location.href='signup.php' " class="nav-list-item">Sign Up</li>
			<li onclick="location.href='login.php' " class="nav-list-item">Log In</li>
		</ul>
	</div>
	</header>
	<body>
