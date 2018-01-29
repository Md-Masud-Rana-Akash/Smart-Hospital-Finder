
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap-lumen.css">
	<!-- <link rel="stylesheet" href="contents/css/jquery-ui.css">
	<link rel="stylesheet" href="contents/css/toastr.css">
	<link rel="stylesheet" href="contents/css/datatables.min.css"> -->

	<style type="text/css">

		.label{
			font-size: 14px;
		}

		h1 {
    	text-align: center;
		}


	</style>
     


</head>
<body>
	<h1>Login</h1>
	<br>
	<div class="container col-md-offset-4">
		<div class="form col-xs-4">
			<form method="post" id="login">
			<div class="form-group ">
				<label for="username" class="label label-info">username</label>
				<input type="text" name="username" class="form-control" msg="please enter a username" id="username">
				<!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
			</div>

			<div class="form-group">
				<label for="password" class="label label-info">password</label>
				<input type="password" name="password" msg="please enter a password" class="form-control" id="password">
				<!-- <label for="password" id="passwordError" class="label label-warning"></label>
			</div> -->
			<br>

			<div class="form-group">
		<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-secondary">Reset</button>
			</div>


		</form>
		</div>
	</div>
</body>
</html>