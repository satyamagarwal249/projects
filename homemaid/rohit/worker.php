				<?php
				 include "database.php";
				 $query= "select * from worker where worker_id=$id";
                 $result = mysqli_query($con,$query);
                 $row= mysqli_fetch_assoc($result);
                 
                 
                 ?>
                      <tr>
                        <td>Registration Id</td>
                        <td><?php echo $row['reg_id'] ?></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $row['wname'] ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $row['dob'] ?></td>
                      </tr>
                   
                         
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><?php echo $row['address']?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $row['email']?></td>
                      </tr>
					  <tr>
                        <td>Phone Number</td>
                        <td><?php echo $row['phone']?></td>
                           
                      </tr>
                     
                  </table>
				  
				  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="active"><a href="jobinvi.php">Job Intivation</a></li>
		            <li class="active"><a href="jobib.php">Job Inbox</a></li>
					</ul>
					</div>
	<table>
									<?php
				 include "database.php";
				 $query= "select * from job_post where worker_id=$id";
                 $result = mysqli_query($con,$query);
                 while($row= mysqli_fetch_assoc($result))
                 {
                 
                 ?>
                      <tr>
                        <td>Job Id</td>
                        <td><?php echo $row['jobpost_id'] ?></td>
                      </tr>
                      <tr>
                        <td>User Id</td>
                        <td><?php echo $row['user_id'] ?></td>
                      </tr>
                      <tr>
                        <td>Comment</td>
                        <td><?php echo $row['feed'] ?></td>
                      </tr>
                  
                       <tr>
                        <td>Rating</td>
				       <td><?php echo $row['rating'] ;?></td>
                      </tr>
				 <?php }?> 
                   
                  </table>
				  </body>