			<ul class="nav nav-tabs nav-justified">
  			
  				<li class="active"><a data-toggle="tab" href="#home">Author Registration</a></li>
  				<li><a data-toggle="tab" href="#menu1">User Registration</a></li>
			
			</ul>

			<div class="tab-content">
  
  				<div id="home" class="tab-pane fade in active">

    				<div class="col-md-12">
 		   			
 		   				<form name="author_registration" method="POST" action="author_registration.php">

  		
  							<table class="table table-hover">
    						
    							<tr>
    						
    								<td>
    									<label for="author_name">First Name:</label>
    								</td>

	    							<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="Your First Name"><input class="form-control" id="author_name" name="author_name" required></a>
  									</td>
  							
  								</tr>

  								<tr>
    						
    								<td>
    									<label for="author_mname">Middle Name:</label>
    								</td>

    								<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="Your Middle Name"><input class="form-control" id="author_mname" name="author_mname" required></a>
  									</td>
  							
  								</tr>

  								<tr>
    						
    								<td>
    									<label for="author_name">Last Name:</label>
    								</td>

    								<td>
    								<a href="#" data-toggle="tooltip" data-placement="top" title="Your Last Name"><input class="form-control" id=	"author_lname" name="author_lname" required></a>
  									</td>
  							
  								</tr>

  								<tr>
    						
    								<td>
    									<label for="author_penname">Pen Name:</label>
    								</td>

    								<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="Your Pen Name, this name will be credited for all your publications"><input class="form-control" id="author_penname" name="author_penname" required></a>
  									</td>
  							
  								</tr>

  								<tr>
    						
    								<td>
    									<label for="author_email">Email Address:</label>
    								</td>

    								<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="Your email address for registration"><input type="email" class="form-control" id="author_email" name="author_email" required></td>
  									</td>
  							
  								</tr>
	
								<tr>
    								<td>
    									<label for="author_password">Password:</label>
    								</td>

    								<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="Ensure your password is atleast 8 characters long and includes a number as well as a special character"><input type="password" class="form-control" id="author_password" name="author_password" required>
  									</td>
  							
  								</tr>

  								<tr>
    								<td>
    									<label for="author_sex">Sex:</label>
    								</td>

    								<td>
    									<select id="author_sex" name="author_sex" required>
    										<option value="Male">Male</option>
    										<option value="Female">Female</option>
    									</select>	
    								</td>
  							
  								</tr>

  								<tr>
    								<td>
    									<label for="author_DOB">Date Of Birth:</label>
    								</td>

    								<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="So that we never forget to wish you!"><input type="date" id="author_DOB" name="author_DOB" required>
    								</td>
  							
  								</tr>

  								<tr>
    								<td>
    									<label for="author_num">Phone Number:</label>
    								</td>

  		  							<td>
    									<a href="#" data-toggle="tooltip" data-placement="top" title="Your Mobile Phone Number">
    									<select id="author_num1" name="author_num1" required>
    										<option value="+91">+91</option>
    									</select>		
    									<input type="number" id="author_num2" name="author_num2" max="10" required>
    								</td>
  							
  								</tr>
  						
  							</table>			
  					
  						<button type="submit" class="btn btn-primary">Submit</button>

  						<button type="Reset" class="btn btn-primary pull-right">Reset</button>

					</form>
  
  				</div>

  		</div>
  
  		<div id="menu1" class="tab-pane fade">
    
   			<div class="col-md-12">
 		   			
 	   			<form name="user_registration" method="POST" action="user_registration.php">
  		
  					<table class="table table-hover">
    						
    					<tr>
   					
   							<td>
   								<label for="user_name">First Name:</label>
   							</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="Your First Name"><input class="form-control" id="user_name" name="user_name" required></a>
  							</td>
  							
  						</tr>

  						<tr>
    						
    						<td>
    							<label for="user_mname">Middle Name:</label>
    						</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="Your Middle Name"><input class="form-control" id="user_mname" name="user_mname" required></a>
  							</td>
  							
  						</tr>

  						<tr>
    						
    						<td>
    							<label for="user_name">Last Name:</label>
    						</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="Your Last Name"><input class="form-control" id="user_lname" name="user_lname" required></a>
  							</td>
  							
  						</tr>

  						<tr>
    						
    						<td>
    							<label for="user_email">Email Address:</label>
    						</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="Your email address for registration"><input type="email" class="form-control" id="user_email" name="user_email" required></td>
  							</td>
  							
  						</tr>
	
						<tr>
    						<td>
    							<label for="user_password">Password:</label>
    						</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="Ensure your password is atleast 8 characters long and includes a number as well as a special character"><input type="password" class="form-control" id="user_password" name="user_password" required>
  							</td>
  							
  						</tr>

  						<tr>
    						<td>
    							<label for="user_sex">Sex:</label>
    						</td>

    						<td>
    							<select id="user_sex" name="user_sex" required>
    								<option value="Male">Male</option>
    								<option value="Female">Female</option>
    							</select>	
    						</td>
  							
  						</tr>

  						<tr>
    						<td>
    							<label for="user_DOB">Date Of Birth:</label>
    						</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="So that we never forget to wish you!"><input type="date" id="user_DOB" name="user_DOB" required>
    						</td>
  							
  						</tr>

  						<tr>
    						<td>
    							<label for="user_num">Phone Number:</label>
    						</td>

    						<td>
    							<a href="#" data-toggle="tooltip" data-placement="top" title="Your Mobile Phone Number">
    							<select id="user_num1" name="user_num1" required>
    								<option value="+91">+91</option>
    							</select>		

    							<input type="number" id="user_num2" name="user_num2" max="10" required>
    						</td>
  							
  						</tr>
  						
  						</table>			
  					
  					<button type="submit" class="btn btn-primary">Submit</button>

  					<button type="Reset" class="btn btn-primary pull-right">Reset</button>

				</form>
  
			</div>
  			
		</div>
