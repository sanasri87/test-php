
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" id="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus value="abc@gmail.com">
        <input type="password" class="form-control" placeholder="Password" required value="abc">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <div class="btn btn-lg btn-primary btn-block" type="submit" onclick="shakeForm();">Sign in</button>
      </form>

    </div> <!-- /container -->

    	<script src="../js/jquery-1.11.0.js"></script>
      <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript">
    function shakeForm() {
    	     $("#form-signin").effect( "shake" );  
	}
    </script>
  </body>
</html>
