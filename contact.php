<?php

include("functions.php");

if(!(isset($_POST['submit'])) ) 
				{	
			
			echo	'<h3 align = "center">Fill out my contact form:</h3>';
	
			if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == "success") {
				echo '<div>Data entered successfully!</div';
			}
	
			echo '<form method = "POST" action = "">
				<div class = "form-group">
	
	
				<label>First name: </label>
					<input class = "form-control" type="text" id="fname" name="fname" onblur="checkName(this.value, this.id)"/> 
						<p class="help-block" id="fnameHelp"></p>
				</div>
	
				<div class = "form-group">
				<label>Last name: </label>
					<input class = "form-control" type="text" name="lname" id="lname" onblur="checkName(this.value, this.id)"/> 
						<p class="help-block" id="lnameHelp"></p>
				</div>
		
				<div class = "form-group">
				<label>E-mail: </label>
					<input class = "form-control" type="text" name="email" id="email" onblur="checkEmail(this.value, this.id)"/> 
						<p class="help-block" id="emailHelp"></p>
				</div>
	
				<div class = "form-group">
				<label>Username: </label>
					<input class = "form-control" type="text" name="username" id="username" onblur="checkUsername(this.value, this.id)"/> 
						<p class="help-block" id="usernameHelp"></p>
				</div>
	
				<div class = "form-group">
				<label>Comments: </label>
					<textarea class = "form-control" type="text" name="comments" id="comment" onblur="checkComments(this.value, this.id)"></textarea> 
						<p class="help-block" id="commentHelp"></p>
				</div>
					<button type ="submit" name="submit" value="submit">Submit</button>
					</form>';				
				
	
		
				}
					if(isset($_POST['submit'])) {
						$dblink=db_connect("contactData");
						$firstName=$_REQUEST['fname'];
						$lastName=$_REQUEST['lname'];
						$email=$_REQUEST['email'];
						$userName=$_REQUEST['username'];
						$comments=$_REQUEST['comments'];
						
						$sql="Insert into `user_input` (`first_name`,`last_name`,`email`,`comments`,`username`) values";
						
						$sql.=" ('$firstName','$lastName', '$email', '$comments', '$userName') ";
						
						$dblink->query($sql) or
							die("Something went wrong with $sql".$dblink->error);
							redirect("index.php?page=contact&msg=success");
					/*	echo '<h2>Results: </h2>';
						echo '<p>First name: '.$firstName.'</p>';
						echo '<p>Last name: '.$lastName.'</p>';
						echo '<p>E-mail: '.$email.'</p>';*/
					}
				
			
?>
<script src ="assets/js/validation.js"></script>
