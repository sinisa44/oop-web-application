
<div class="col-md-3 m-md-auto">

      <form class="form-signin" method="POST" action="<? $_SERVER['PHP_SELF']; ?>">

        <h2 class="form-signin-heading">Please Register</h2>


	    <label for="inputUsername" class="sr-only">Username</label>
	    <input type="text" id="username" class="form-control" placeholder="Username" name="username">

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>

      </form>
</div>
