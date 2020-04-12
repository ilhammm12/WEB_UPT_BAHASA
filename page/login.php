<?php 
$title = "Log In";
$bannerimg="../asset/img/banner-auth.jpg";
 ?>
<?php require_once('header2.php') ?>
	<section id="log-in" class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-4">
					<p><span class="has-text-primary">Hello</span>, try to connect with us.</p>
					<h3 class="is-size-3">Log In</h3>
					<form action="">
						<div class="field">
						  	<label>Email</label>
						  	<div class="control">
						    	<input class="input" type="email" placeholder="you@example.com" required>
						  	</div>
						</div>

						<div class="field">
						  	<label>Password</label>
						  	<div class="control">
						    	<input class="input" type="password" placeholder="Enter your password" required>
						  	</div>
						</div>
						
						<div class="field">
							<p class="control">
								<button type="submit" class="button is-primary">Log In</button>
							</p>
						</div>
					</form>
					<div class="has-text-centered">
						<p>Don't have any account ? <a href="signup.php" class="has-text-primary">Sign up</a></p>
					</div>
				</div>
			</div>
		</div>		
	</section>
<?php require_once('footer.php') ?>
