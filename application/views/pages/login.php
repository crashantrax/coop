<div class="main-container">
			<div class="login-container">
				<div class="login-header"><div class="login-header-text">Login</div></div>
				<div class="col-md-12">
					<form  method="POST" action="<?php echo base_url('stats/login_validation'); ?>">
						<div class="panel-primary">
							<br><br><br>
								<div class="form-group">
									<i class="glyphicon glyphicon-user">&nbsp</i>
									<input class="form-control" type="text" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<i class="glyphicon glyphicon-lock">&nbsp</i>
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
								<div class="error_message"><i><?php echo $error_message; ?></i></div>
								<div class="click-container">
									<button type="submit" class="btn btn-login">Login</button>
									<div class="link-container">
										<u><a class="link" href="<?php echo base_url('stats/register') ?>">Create Account</a></u>
										<u><a class="link" href="forgot.php">Forgot Password</a></u>
									</div>	
								</div>
						</div>
					</form>
				</div>		
			</div>
		</div>
	</div>


	