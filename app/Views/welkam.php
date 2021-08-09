<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Custom stlylesheet -->
	<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
            <div class="booking-form2"><?php $session = session()?>
            <h2>Selamat datang <b><?php echo $session->get('nama')?></b>!</h2>
            <?php if($session->has('isLogin')){
                // do something when exist
                echo "<a href='auth/logout'>Logout</a>";}
            else{
                // do something when doesn't exist
                }?>
        </div>
        <br>
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Buat reservasi Anda!</h1>
							<p>Lorem ipsum amet nggeh dolor okee
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form>
								<div class="form-group">
									<span class="form-label">Nama Hotel</span>
									<select class="form-control">
												<option>Best Western Papilio Hotel</option>
												<option>LUMINOR Hotel</option>
												<option>Shangri-La Surabaya</option>
											</select>
                                            <span class="select-arrow"></span>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div></form>
                                <?php if($session->has('isLogin')){
                // do something when exist
                echo '<div class="form-btn">
									<a href=sukses><button class="submit-btn">Pesan</button></a>
								</div>';}
            else{
                // do something when doesn't exist
                echo "<a href='auth/login'><button class='submit-btn'>Login terlebih dahulu</button></a>";}?>
								<!-- <div class="form-btn">
									<button class="submit-btn">Pesan</button>
								</div> -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>