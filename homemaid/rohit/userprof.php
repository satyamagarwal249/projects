				<?php
				 $query= "select * from user_reg where reg_id=$id";
                 $result = mysqli_query($con,$query);
                 $row= mysqli_fetch_assoc($result)
                 
                 
                 ?>
                      <tr>
                        <td>Registration Id</td>
                        <td><?php echo $row['reg_id'] ?></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $row['uname'] ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $row['dob'] ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><?php echo $row['address'] ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $row['email'] ?></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $row['phone']  ; ?></td>
                           
                      </tr>
                     
				 
                  </table>
				  
				  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="active"><a href="addjobpost.php">Add Jobpost</a></li>
		            <li class="active"><a href="searchworker.php">Search Worker</a></li>
		            <li class="active"><a href="currentwork.php">Current work</a></li>
					</ul>
					</div>
