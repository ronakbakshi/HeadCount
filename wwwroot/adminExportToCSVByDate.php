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

    <title>Head Count Admin Export Data</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
                <p class="lead"> Export</p>
                <div class="list-group">
                    <a href="adminExport.php" class="list-group-item ">Export to CSV</a>
                    <a href="adminExportToExcel.php" class="list-group-item ">Export to Excel by Date</a>
                    <a href="adminExportToCSVByDate.php" class="list-group-item active">Export to CSV by Date</a>
                </div>
            </div>




            <div class="col-md-9">
			<legend> Export to CSV by Date</legend>
			<p>By Clicking the export button you will export the head count data between the specified dates to a CSV file. </p></br>
			<p> Please you the format YYYY-MM-DD HH:MM:SS </p>
			<form action="exportToCSVByDate.php" method="post">
			
<div class="well">
  <div class="input-append date" id="datetimepicker1">
    <input data-format="dd/MM/yyyy hh:mm:ss"  type="text">
    <span class="add-on">
      <i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar">
      </i>
    </span>
  </div>
</div>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });
  });
</script>


			to
			<input name="endDate" type=datetime ></br>
			<input type="checkbox" name="firstFloor" value='1' checked="checked">First Floor</br>
			 <input type="checkbox" name="secondFloor" value='2' checked="checked">Second Floor</br>
			  <input type="checkbox" name="thirdFloor" value='3' checked="checked">Third Floor</br>
			<input type="submit" value="Export To CSV">
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
	<script src="js/bootstrap-datetimepicker.min.js"></script> 
</body>

</html>
