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



		/* Set a style for all buttons */


		button:hover {
			opacity: 0.8;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.cancel-container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto;
			/* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 40%;
			/* Could be more or less, depending on screen size */
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {
				-webkit-transform: scale(0)
			}

			to {
				-webkit-transform: scale(1)
			}
		}

		@keyframes animatezoom {
			from {
				transform: scale(0)
			}

			to {
				transform: scale(1)
			}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}

			.cancelbtn {
				width: 100%;
			}
		}

		.group-ip>input {
			border: 1px solid black;
			width: 150px;
			height: 30px;
			margin-left: 30px;
			padding-left: 10px;
		}

		.group-ip {
			margin-left: 20px;
			margin-bottom: 6px;
		}

		input[type="password"] {
			position: relative;
			left: 3px;
		}

		input#login {
			width: 101px;
			margin-left: 15px;
			font-size: 18px;
			font-weight: 600;
			color: #000000c7;
			margin: 10px 0 20px 15px;
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
				<?php if (!isset($_SESSION['sinhvien'])) : ?>``
					<a href="#" id="register">Register</a>
					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
					<div id="id01" class="modal">

						<form class="modal-content animate" action="<?php echo (helper::url('sinhvienController', 'login')) ?>" method="POST">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

							</div>

							<div class="container">
								<div class="group-ip">
									<label for="uname"><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="uname" required>
								</div>
								<div class="group-ip">
									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>
								</div>
								<input id="login" type="submit" value="Login" name="login">
							</div>

							<div class="cancel-container" style="background-color:#f1f1f1">
								<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							</div>
						</form>
					</div>
					<span class="flag"></span>
				<?php else : ?>
				<a href="<?php helper::url('sinhvienController','logout')?>"><i class="fas fa-sign-out-alt"></i></a>
				<?php endif ?>
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
						<li><a href="<?php echo "?searchName=$value->Tentukhoa&submit=true" ?>"><?php echo $value->Tentukhoa ?> </a></li>
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
					<span><?php echo $this->tongiaovien ?></span>
					<span>Teachers</span>

				</div>
			</div>
			<div>
				<?php foreach ($this->listgv as $gv) : ?>
					<div class="home_data">
						<div class="info">
							<a href="<?php echo "?controllerName=giangvienController&action=detail&id=$gv->id" ?>"><img width="314px" src="<?php echo $gv->avatar ?>" alt=""></a>
							<a href="<?php echo "?controllerName=giangvienController&action=detail&id=$gv->id" ?>"><?php echo $gv->hoten ?></a>
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
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		//
		var register = document.querySelector('#register');
		register.onclick = function() {
			window.alert('Sử dụng mã sinh viên của bạn để đăng nhập !')
		}
	</script>
</body>

</html>