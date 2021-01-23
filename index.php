<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRIME PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <link href="css/bootstrap.css" rel="stylesheet"/>	
    <link href="css/tab.css" rel="stylesheet"/>
    <link href="css/modern-business.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Crime Analysis</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a style="cursor:pointer;" data-toggle="modal" data-target="#myModal1"> Admin </a>
                            </li>

                            <li>
                                <a style="cursor:pointer;" data-toggle="modal" data-target="#myModal2">Station Admin</a>
                            </li>

                            <li>
                                <a style="cursor:pointer;" data-toggle="modal" data-target="#myModal3">Employee</a>
                            </li>
							
                            <li>
                                <a style="cursor:pointer;" data-toggle="modal" data-target="#myModal4">Citizen</a>
                            </li>
							
                        </ul>
                    </li>				
				
                    <li>
                        <a href="about.php">About</a>
                    </li>
					
                    <li>
                        <a style="cursor:pointer;" data-toggle="modal" data-target="#myModal4">Status</a>
                    </li>
			
                    <li>
                        <a href="citizen.php">Citizen Registeration</a>
                    </li>
					
                </ul>
            </div>
        </div>
    </nav>
<br>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/home2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/01.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/02.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Admin Login -->
	
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="connect.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Admin Login</h4>
				</div>

				<div class="modal-body">
					User-Id <span style="color:red">*</span>
					<input type="text" name="uid" id="uid" autofocus class="form-control" required/>

					Password <span style="color:red">*</span>
					<input type="password" name="pwd" id="pwd" class="form-control" required/>
					
				</div>				
			
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary">			
				</div>
			</div>
		</form>	
	</div>
</div>	

<!-- StationAdmin Login -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="connect2.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Station Admin Login</h4>
				</div>

				<div class="modal-body">
					Station-Id <span style="color:red">*</span>
					<input type="text" name="sid" id="sid" autofocus class="form-control" required/>

					Password <span style="color:red">*</span>
					<input type="password" name="pwd" id="pwd" class="form-control" required/>
				
			
					Station <span style="color:red">*</span>
					<select name="sname1" class="form-control" id="sname1" required>
						<option value=""> Select Station </option>
							<?php
								include_once('db.php');
								
								$qry="select distinct(stn_name) from station_admin";
								$res = mysqli_query($con,$qry);
								
								while($result=mysqli_fetch_array($res))
								{
									echo"<option value='".$result[0]."'>".$result[0]."</option>";
								}
							?>
						</select>
						
					<a style="cursor:pointer;" data-toggle="modal" data-target="#stnadmin">Forgot Password?</a>	
						
				</div>
				
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary"/>			
				</div>
			</div>
		</form>	
	</div>
</div>

<!-- Employee Login -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="connect3.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Employee Login</h4>
				</div>

				<div class="modal-body">
					User-Id <span style="color:red">*</span>
					<input type="text" name="eid" id="eid" autofocus class="form-control" required/>

					Password <span style="color:red">*</span>
					<input type="password" name="epwd" id="epwd" class="form-control" required/>
					
					Station <span style="color:red">*</span>
					<select name="sname" class="form-control" id="sname" required>
							<option value=""> Select Station </option>
								<?php
									include_once('db.php');
									
									$qry="select distinct(stn_name) from station_admin";
									$res = mysqli_query($con,$qry);
									
									while($result=mysqli_fetch_array($res))
									{
										echo"<option value='".$result[0]."'>".$result[0]."</option>";
									}
								?>
						</select>
						
						<a style="cursor:pointer;" data-toggle="modal" data-target="#stnofficer">Forgot Password?</a>
				</div>
			
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary">			
				</div>
			</div>
		</form>	
	</div>
</div>


<!-- Citizen Login -->
	
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="connect4.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Citizen Login</h4>
				</div>

				<div class="modal-body">
					Email <span style="color:red">*</span>
					<input type="text" name="c_mail" id="c_mail" autofocus class="form-control" required/>

					Password <span style="color:red">*</span>
					<input type="password" name="c_pwd" id="c_pwd" class="form-control" required/>
					
					<a style="cursor:pointer;" data-toggle="modal" data-target="#citizen">Forgot Password?</a>
					
				</div>
			
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary">			
				</div>
			</div>
		</form>	
	</div>
</div>


<!-- Stn Admin Forgot Pwd  -->

<div class="modal fade" id="stnadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="stnadmin_forgotpwd.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enter E-Mail ID</h4>
				</div>

				<div class="modal-body">
					Email <span style="color:red">*</span>
					<input type="email" name="mail" id="mail" class="form-control" required/>
					
					Station <span style="color:red">*</span>
					<select name="sname1" class="form-control" id="sname1" required>
						<option value=""> Select Station </option>
							<?php
								include_once('db.php');
								
								$qry="select distinct(stn_name) from station_admin";
								$res = mysqli_query($con,$qry);
								
								while($result=mysqli_fetch_array($res))
								{
									echo"<option value='".$result[0]."'>".$result[0]."</option>";
								}
							?>
						</select>					
					
				</div>
				
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary"/>			
				</div>
			</div>
		</form>	
	</div>
</div>


<!-- Stn Officer Forgot Pwd  -->

<div class="modal fade" id="stnofficer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="stnofficer_forgotpwd.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enter E-Mail ID</h4>
				</div>

				<div class="modal-body">
					Email <span style="color:red">*</span>
					<input type="email" name="mail" id="mail" class="form-control" required/>
					
					Station <span style="color:red">*</span>
					<select name="sname1" class="form-control" id="sname1" required>
						<option value=""> Select Station </option>
							<?php
								include_once('db.php');
								
								$qry="select distinct(stn_name) from station_admin";
								$res = mysqli_query($con,$qry);
								
								while($result=mysqli_fetch_array($res))
								{
									echo"<option value='".$result[0]."'>".$result[0]."</option>";
								}
							?>
						</select>					
					
				</div>
				
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary"/>			
				</div>
			</div>
		</form>	
	</div>
</div>

<!-- Citizen Forgot Pwd  -->

<div class="modal fade" id="citizen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="myForm1" name="myForm1" action="citizen_forgotpwd.php" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enter E-Mail ID</h4>
				</div>

				<div class="modal-body">
					Email <span style="color:red">*</span>
					<input type="email" name="mail" id="mail" class="form-control" required/>
				</div>
				
				<div class="modal-footer">
					<input type="Submit" value="Submit" class="btn btn-primary"/>			
				</div>
			</div>
		</form>	
	</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script>
		$('.carousel').carousel
		(
			{
				interval: 5000
			}
		)
	</script>
</body>
</html>