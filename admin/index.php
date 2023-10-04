<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
  	<!-- Google Font -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<body class="hold-transition login-page" style="background-color:grey" >
<div class="login-box" style="background-color:#01161E ;color:white ; font-size: 22px;font-family:'Bebas Neue', sans-serif;">
  	<div class="login-logo" style="margin-top: 25px; background-color:#01161E ;color:white ; font-size: 22px;font-family:'Bebas Neue', sans-serif; ">
  	<img src="images/logo_polifonia_back.webp" alt="">	
	<h1>ADMIN PANEL</h1>
		
  	</div>
  
  	<div class="login-box-body" style="background-color: #00c0ef70;color:white;font-size: 22px;font-family:'Bebas Neue', sans-serif;" >
    	<p class="login-box-msg" style="color:white ; font-size: 20px  " >Sign in to the admin panel</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-curve" style="text-align: center;background-color: rgb(236, 208, 160) ;color:black ; font-size: 20px; "  name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>