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
		require_once('includes/header.php')
	?>

	<!-- sidebar here -->
	<?php
		require_once('includes/sidebar.php')
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
							<form action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name=""id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="reg_number">Reg Number</label>
                                            <input type="text" class="form-control" name=""id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" name=""id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name=""id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="course">Course</label>
                                            <select  class="form-control" name=""id="">
                                                <option value="">--select a course---</option>
                                                <option value="">Web Design & Development</option>
                                                <option value="">Data Analysis</option>
                                                <option value="">Android Application Development</option>
                                            </select>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-success">Enroll</button>
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