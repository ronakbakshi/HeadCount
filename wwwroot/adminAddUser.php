<?php
	require_once('auth.php');
	$_SESSION['username'] = $_POST['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Head Count Admin User Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminHome.php">Head Count </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="adminUser.php">Users</a>
                    </li>
                    <li>
                        <a href="AdminInput.php">Input data</a>
                    </li>
                    <li>
                        <a href="AdminExport.php">Export data</a>
                    </li>
					<li >
					<a align="right" href="index.php">Log out</a>
					</li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
			<div class="col-md-3">
                <p class="lead">Users</p>
                <div class="list-group">
                    <a href="adminUser.php" class="list-group-item ">View Users</a>
                    <a href="adminAddUser.php" class="list-group-item active">Add Users</a>
                    <a href="adminRemoveUser.php" class="list-group-item">Remove Users</a>
                </div>
            </div>


            <div class="col-md-9">
			
			<form id='register' action='addUser.php' method='post' accept-charset='UTF-8'>
			<fieldset >
			<legend>Add User</legend>
			<?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<label for='name' >First Name*: </label></br>
			<input type='text' name='FirstName' id='FirstName' maxlength="50" /></br>
			
			<label for='name' >Last Name*: </label></br>
			<input type='text' name='LastName' id='LastName' maxlength="50" /></br>
			
			<label for='email' >Email Address*:</label></br>
			<input type='text' name='email' id='email' maxlength="50" /></br>
			 
			<label for='username' >UserName*:</label></br>
			<input type='text' name='username' id='username' maxlength="50" /></br>
			 
			<label for='password' >Password*:</label></br>
			<input type='password' name='password' id='password' maxlength="50" /></br>
			<label for ='administrator'> Administrator</label>
			
			<input type="checkbox" name='administrator' id= 'administrator' value="Yes" /></br>
				
			<input type='submit' name='Submit' value='Submit' />
			 
			</fieldset>
			</form>
                

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Head Count 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
