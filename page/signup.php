<?php 
$title = "Sign Up";
$bannerimg="../asset/img/banner-auth.jpg";
 ?>
<?php require_once('header2.php') ?>
	<section id="sign-up" class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-5">
					<p><span class="has-text-primary">Create</span> an account to get started.</p>
					<h3 class="is-size-3">Sign Up</h3>
					<form action="">
						<div class="field">
							<label>Name</label>
							<div class="control">
								<input class="input" type="text" placeholder="Enter full name" required>
							</div>
						</div>
					  	
					  	<div class="field-body">
					    	<div class="field">
						  		<label>Place & date of birth</label>
					      		<div class="control is-expanded">
					        		<input class="input" type="text" placeholder="Cities" required>
					      		</div>
					   	 	</div>
					    	<div class="field">
					    		<label class="is-invisible">-</label>
					      		<div class="control is-expanded">
					        		<input class="input" type="date" required>
					      		</div>
					    	</div>
					  	</div>

					  	<div class="field">
							<label>Email</label>
							<div class="control">
								<input class="input" type="email" placeholder="you@example.com" required>
							</div>
						</div>
						
						<label>Phone number</label>
						<div class="field-body">
					      	<div class="field has-addons">
					        	<div class="control">
					          		<a class="button is-static">
					            	+62
					          		</a>
					        	</div>
					        	<div class="control is-expanded">
					          		<input class="input" type="tel" placeholder="Your phone number" required>
					        	</div>
					      	</div>
						</div>
						
						<div class="field-body">
					    	<div class="field">
						  		<label>Password</label>
					      		<div class="control is-expanded">
					        		<input class="input" type="password" placeholder="Enter password" required>
					      		</div>
					   	 	</div>
					    	<div class="field">
						  		<label>Re-type password</label>
					      		<div class="control is-expanded">
					        		<input class="input" type="password" placeholder="Confirm" required>
					      		</div>
					    	</div>
					  	</div>
						
						<div class="field">
							<p class="control">
								<button type="submit" class="button is-primary">Sign Up</button>
							</p>
						</div>
					</form>
					<div class="has-text-centered">
						<p>Already have an account ? <a href="login.php" class="has-text-primary">Log In</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php require_once('footer.php') ?>
