<?php
	require_once('auth.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome | B.D Owens Library | Northwest Missouri State University</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--linking the CSS-->
      

        <link rel="stylesheet" type="text/css" href="css/homepage.css">
		 <script src="js/tabcontent.js" type="text/javascript"></script>
		 <link rel="stylesheet" type="text/css" href="css/tabs.css">
        <link rel="shortcut icon" href=""/>
		<script src="js/SubmissionValidation.js" type="text/javascript"></script>

    </head>
    <body>
		<ul class="tabs" data-persist="true">
    <li class="selected"><a href="#Div1"><span>First Floor</span></a></li>
    <li class=""><a href="#Div2"><span>Second Floor</span></a></li>
    <li class=""><a href="#Div3"><span>Third Floor</span></a></li>
	<li><a href="index.php"><span align="right">logout</span></a></li>
</ul>
        <div class="tabcontents">
    <div id="Div1" style="display: block;">
        
        <div id ="fpg1">
            <!--First Floor Text Boxes--> 
 <img id="firstfloor" name="firstFloorSubmit"  src="images/FirstFloor1-min.png" alt=""/>
           <form action="submitFirstFloor.php" onsubmit="return validateFormFirstFloor ()" method="post" id="form1" >
            <input id="iplacetxt" name="area1" type="text"  />
            <input id="techincalservicetxt" name="area2" type="text"  />
            <input id="technologyassistant" name="area3" type="text"  />
            <input id="bigtables" name="area4" type="text"  />
            <input id="conferenceroom"  name="area5" type="text"  />
            <input id="novelgrounds" name="area6" type="text"  />
			<input id="submitButton"  type="submit" value="Submit">
            </form>
         
            
       
        </div>
        </div>
		<div id="Div2">
		<div id = "spg">
           <img id= "secondfloor" src="images/SecondFloor1.png" alt=""/>
		   <form action="submitSecondFloor.php" onsubmit="return validateFormSecondFloor()" method="post" id="form2">
             <input id="TDC" name="floor2area1" type="text"  /> 
              <input id="groupstudy" name="floor2area2" type="text"  />
               <input id="writingplace" name="floor2area3" type="text"  />
                <input id="studyarea" name="floor2area4" type="text"  />
				<input id="submitButton"  type="submit" value="Submit">
                </form>

        </div>
		</div>
		<div id="Div3" >
		<div id = "tpg">

            <img id ="thirdfloor" src="images/ThirdFloor-min.png" alt=""/>

		<form action="submitThirdFloor.php" onsubmit="return validateFormThirdFloor()" method="post" id="form3">
            <input id="studyplace1" name="floor3area1" type="text"  />
            <input id="studyplace2" name="floor3area2" type="text"  />
            <input id="studyplace3" name="floor3area3" type="text"  />
            <input id="studyplace4" name="floor3area4" type="text"  />
            <input id="studyplace6" name="floor3area5" type="text"  />
            <input id="iv1" name="floor3area6" type="text"  />
            <input id="iv2" name="floor3area7" type="text"  />
			<input id="submitButton"  type="submit" value="Submit">
		</form>
        </div>
		</div>
        </div>
        
          


    </body>
</html>
