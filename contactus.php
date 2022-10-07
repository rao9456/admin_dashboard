<!DOCTYPE html>
<html>
	
<!-- links/head here -->
<?php
		require_once('includes/links.php')
	?>


<body >
	<!-- All our code. write here   -->

	<!-- header here -->
	<?php
		require_once('includes/header.php');
	// <!-- sidebar here -->
	
		require_once('includes/sidebar.php');
    // submit user data to databse
    
     // 1. db connection
     require_once('dbconnection.php');

     if(isset($_POST{'submitMessage'})){
         // 2. fetch from data
         $name =$_POST['name'];
         $email =$_POST['email'];
         $phone =$_POST['phone'];
         $subject=$_POST['subject'];
         $message=$_POST['message'];
         

         // 3. SQL Query to insert data to database
         $queryData = mysqli_query($conn, "INSERT INTO enrollments(name, email, phone, subject, message) 
         VALUES('$name', '$email', '$phone', '$subject', '$message') ");

         // 4.check if data is inserted
         if($queryData)
         {
             echo"Data submitted succesfuly!";
             header('location:contactus.php');
         }
         else{
             echo"Error";
         }



     }

    ?>

    <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Message Us</span>
                                
                            </div>
                            <div class="card-body">
                                <form action="addstudents.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name"id="">
                                            </div>
                                        </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email"id="">
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="row">                                  
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="tel" class="form-control" name="phone"id="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="subject">Subject</label>
                                                <input type="text" class="form-control" name="email"id="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">                                    
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="message">Message</label>
                                                <textarea 
                                                    class="form-control br-radius-zero" rows="5" placeholder="Message" wire:model="message" style="height: auto !important;">
                                                </textarea>
                                                                        
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button type="submit" name="submitMessage" class="btn btn-success">Add Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>	
    </div>







<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>