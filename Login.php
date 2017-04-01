
<!DOCTYPE html>
<html>
<head>
	<title>north-east</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
	
		<div class="container text-center" style="padding:50px 450px">
	<div class="logo"><h3>Login</h3></div>
	<!-- Main Form -->
	<div class="login-form-1">
							<?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  
		<form action="authenticate.php" method="POST" id="login-form" class="form text-left" >
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
				
				
								  
					<div class="form-group">
						<label for="username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
					</div>
					<button type="submit" class="login-button btn btn-primary pull-right">Login</button>
				</div>
				
				<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">Remember me</label>
					</div>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
  
		<!-- 			<div class="col-md-6 col-md-offset-3">
                    <h4></span>Log in with your credentials<span class="glyphicon glyphicon-user"></h4><br/>
                            <div class="block-margin-top">
                              <?php 

                               /* $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }*/
                               ?>  

                              <form action="authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">  
                                  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
                                  <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
                                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                             </form>
                           </div>
            </div>-->

</body>