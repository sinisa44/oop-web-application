
	<div class="col-md-3 m-md-auto">
		<form class="form-signin" action="<? $_SERVER['PHP_SELF']; ?>" method="post">

			<h2 class="form-signin-heading">Please Login</h2>


			<input name="username" type="text" class="form-control" placeholder="Username" required autofocus>

			<label for="inputPassword" class="sr-only" name="password">Password</label>
			<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
		</form>

	</div>
