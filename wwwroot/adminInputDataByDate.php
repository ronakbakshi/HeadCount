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

    <title>Head Count Admin Import Data</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<script src="js/tabcontent.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/tabs.css">
	<script src="js/SubmissionValidation.js" type="text/javascript"></script>
		 
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
                <p class="lead">Input</p>
                <div class="list-group">
                    <a href="adminInput.php" class="list-group-item ">View Data</a>
                    <a href="adminInputData.php" class="list-group-item ">Input Data</a>
					<a href="adminClearData.php" class="list-group-item"> Clear Data</a>
					<a href="adminInputDataByDate.php" class="list-group-item active">Input Data by Date</a>
                </div>
            </div>
	

            <div class="col-md-9">
			<legend>Input Data</legend>
			<ul class="tabs" data-persist="true">
    <li class="selected"><a href="#Div1"><span>First Floor</span></a></li>
    <li class=""><a href="#Div2"><span>Second Floor</span></a></li>
    <li class=""><a href="#Div3"><span>Third Floor</span></a></li>
	
</ul>
				<div class="tabcontents">
			<div id="Div1" style="display: block;">
        
        <div id ="fpg1">
            <!--First Floor Text Boxes--> 
 <img id="firstfloor" name="firstFloorSubmit"  src="images/FirstFloor1-min.png" alt=""/>
           <form action="SubmitFirstFloorByDate.php" onsubmit="return validateFormFirstFloor ()" method="post" id="form1" >
            <input id="iplacetxt" name="area1" type="text"  />
            <input id="techincalservicetxt" name="area2" type="text"  />
            <input id="technologyassistant" name="area3" type="text"  />
            <input id="bigtables" name="area4" type="text"  />
            <input id="conferenceroom"  name="area5" type="text"  />
            <input id="novelgrounds" name="area6" type="text"  />
			Date: <input name="date1" type="datetime"/>
			<input id="submitButton"  type="submit" value="Submit">
            </form>
         
            
       
        </div>
        </div>
		<div id="Div2">
		<div id = "spg">
           <img id= "secondfloor" src="images/SecondFloor1.png" alt=""/>
		   <form action="SubmitSecondFloorByDate.php" onsubmit="return validateFormSecondFloor()" method="post" id="form2">
             <input id="TDC" name="floor2area1" type="text"  /> 
              <input id="groupstudy" name="floor2area2" type="text"  />
               <input id="writingplace" name="floor2area3" type="text"  />
                <input id="studyarea" name="floor2area4" type="text"  />
				Date: <input name="date2" type="datetime"/>
				<input id="submitButton"  type="submit" value="Submit">
				
                </form>

        </div>
		</div>
		<div id="Div3" >
		<div id = "tpg">

            <img id ="thirdfloor" src="images/ThirdFloor-min.png" alt=""/>

		<form action="SubmitThirdFloorByDate.php" onsubmit="return validateFormThirdFloor()" method="post" id="form3">
            <input id="studyplace1" name="floor3area1" type="text"  />
            <input id="studyplace2" name="floor3area2" type="text"  />
            <input id="studyplace3" name="floor3area3" type="text"  />
            <input id="studyplace4" name="floor3area4" type="text"  />
            <input id="studyplace6" name="floor3area5" type="text"  />
            <input id="iv1" name="floor3area6" type="text"  />
            <input id="iv2" name="floor3area7" type="text"  />
			Date: <input name="date3" type="datetime"/>
			<input id="submitButton"  type="submit" value="Submit">
		</form>
        </div>
		</div>
        </div>
                

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
