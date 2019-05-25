<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>QLSV</title>
	<link href="https://fonts.googleapis.com/css?family=Saira:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="asset/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style>
		.info a:first-child {
			width: 314px;
			height: 190.25px;
			overflow: hidden;
			display: inline-block;
			margin-bottom: 5px;
		}

		.info a:nth-child(2) {
			font-size: 17px;
			color: black;
			text-transform: capitalize;
			display: inline-block;
			margin-top: 3px;
		}
	</style>
</head>

<body>
	<div class="container">
		<header>
			<div class="logo">
				<h1><a href="<?php helper::url('home', 'index') ?>" style="color:white"><span style="color:red">Q</span>LSVS</a></h1>
			</div>
			<div class="search">
				<form action="<?php helper::url('home', 'search') ?>" method="GET" class="searchGr">
					<div class="f-search">
						<input type="text" placeholder="Search 54354 Teacher" name="searchName">
					</div>
					<span>
						<input style="padding-top: 36px;" type="submit" name="submit" value="true">

					</span>
				</form>
			</div>
			<div class="soligan">
				<h2>
					THE BEST
					<span>
						lecturers</span>
					uni
				</h2>
			</div>
			<div class="login">
				<a href="">Register</a>
				<button>Login</button>
				<span class="flag"></span>
			</div>
		</header>
		<nav class="navigation">
			<div class="top_search">
				<ul>
					<li>
						<div class="categories">
							<form action="ABC.HTML" class="categories" method="POST">
								<select name="teachers" id="select">
									<option value="volvo">Volvo XC90</option>
									<option value="saab">Saab 95</option>
									<option value="mercedes">Mercedes SLK</option>
									<option value="audi">Audi TT</option>
								</select>
							</form>
						</div>
					</li>
					<li class="top_6"><a href="">History</a></li>
					<li class="top_6"><a href="">Best Videos</a></li>
					<li class="top_6"><a href="">Channels</a></li>
					<li class="top_6"><a href="">Profile</a></li>
					<li class="top_6"><a href="">Yasuo</a></li>
					<li class="top_6"><a href="">Garen</a></li>
					<?php
					foreach ($this->topKeywords as $value) {
						?>
						<li><a href="<?php echo"?searchName=$value->Tentukhoa&submit=true" ?>"><?php echo $value->Tentukhoa ?> </a></li>
					<?php
				}
				?>

			</div>

		</nav>
		<main>
			<div class="list_data">
				<div>
					<button id="home">
						HOME
					</button>
					<button id="sub">
						<i class="fas fa-wifi"></i>
						My subscriptions
					</button>
					<button id="ilike">
						<i class="fas fa-thumbs-up"></i>
						Teacher I like
					</button>
				</div>
				<div class="totalTeacher">
					<i class="fas fa-graduation-cap"></i>
					<span><?php echo$this->tongiaovien ?></span>
					<span>Teachers</span>

				</div>
			</div>
			<div>
				<?php foreach ($this->listgv as $gv) : ?>
					<div class="home_data">
						<div class="info">
							<a href="<?php echo"?controllerName=giangvienController&action=detail&id=$gv->id"?>"><img width="314px" src="<?php echo $gv->avatar ?>" alt=""></a>
							<a href="<?php echo"?controllerName=giangvienController&action=detail&id=$gv->id"?>"><?php echo $gv->hoten ?></a>
							<p class="totalLike">
								<?php echo $gv->solike ?>
								<i class="fas fa-heart"></i>
							</p>
						</div>
					</div>
				<?php
			endforeach;
			?>
			<div class="clear"></div>
		</main>
		<div class="pagination">
			<?php echo $this->pagination ?>
		</div>
		<footer>
			<div class="address">

			</div>
		</footer>
	</div>
	<script src="asset/js.js"></script>
</body>

</html>