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

        if(isset($_POST{'submitEnrollments'})){
            // 2. fetch from data
            $name =$_POST['name'];
            $regnumber = $_POST['reg_number'];
            $phone =$_POST['phone'];
            $email =$_POST['email'];
            $course =$_POST['course'];

            // 3. SQL Query to insert data to database
            $queryData = mysqli_query($conn, "INSERT INTO enrollments(name, reg_number, phone, email, course) 
            VALUES('$name', '$regnumber', '$phone', '$email', '$course') ");

            // 4.check if data is inserted
            if($queryData)
            {
                echo"Data submitted succesfuly!";
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
							<span>Enrolled Students</span>
							
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
                                            <label for="reg_number">Reg Number</label>
                                            <input type="text" class="form-control" name="reg_number"id="">
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
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email"id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="course">Course</label>
                                            <select  class="form-control" name="course"id="">
                                                <option value="">--select a course---</option>
                                                <option value="Web Design & Development">Web Design & Development</option>
                                                <option value="Data Analysis">Data Analysis</option>
                                                <option value="Android Application Development">Android Application Development</option>
                                            </select>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button type="submit" name="submitEnrollments" class="btn btn-success">Enroll</button>
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