<?php  
    if(!isset($_SESSION["admin"])){

        header("Location:".base_url()."index.php/manager/login");

    }
?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<div class="container-fluid">
	<div class="fixed-top">
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #4267b2; height: 37px">
			<a href="#" class="navbar-brand">
				<img src="<?php echo base_url(); ?>images/please.jpg" alt="Logo" style="height: 34px; width: 45px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="#menu-toggle" class="nav-link text-white btn-outline-danger" id="menu-toggle">Menu</a></li>
					<li class="nav-item"><a href="<?php echo base_url() ?>index.php/manager/home" class="nav-link text-white btn-outline-danger" >Trang chủ</a></li>
					
					<li class="nav-item"><a href="<?php echo base_url() ?>index.php/manager/login/logout" class="nav-link text-white btn-outline-danger" >Đăng xuất</a></li>
					<!-- <li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle text-white btn-outline-danger" data-toggle="dropdown">Dropdown link</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Link 1</a>
							<a href="#" class="dropdown-item">Link 2</a>
							<a href="#" class="dropdown-item">Link 3</a>
						</div>
					</li>
					<li class="nav-item"><a href="" class="nav-link text-white btn-outline-danger" >Log out</a></li> -->
				</ul>
			</div>
			<form class="form-inline" action="#" >
				<input type="text" class="form-control" placeholder="Search..." style="height: 30px" size="40">
				<a href="#" class="btn btn-light text-center text-primary border-dark" style="height: 30px"> Tìm kiếm</a>
			</form>
		</nav>
	</div>
	
	<br/>
</div>
