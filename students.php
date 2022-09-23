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
							<span class="float-right">
								<a href="addstudents.php" class="btn btn-secondary btn-sm">add student</a>
							</span>
						</div>
						<div class="card-body">
							<table class="table table-stripped table-hover  ">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Reg Number</th>
										<th>Phone</th>
										<th>Email</th>
										<th>course</th>
										<th>Enrolled On</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Reddrick Alberto</td>
										<td>9456</td>
										<td>0794390502</td>
										<td>reddrickotundo1@gmail.com</td>
										<td>Web Design & Development</td>
										<td>22nd September</td>
										<td>
											<a href="" class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="" class="btn btn-success btn-sm">
											<i class="fa fa-eye"></i>
											</a>
											<a href="" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
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