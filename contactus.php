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

     $fetchMessage=mysqli_query($conn,"SELECT * FROM messages");
     ?>
 
 
 <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                             <span>Messages</span>
                             <span class="float-right">
                                 <a href="addmessage.php" class="btn btn-secondary btn-sm">add message</a>
                             </span>
                         </div>
                         <div class="card-body">
                             <table class="table table-striped table-hover ">
                                <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Phone</th>
                                     <th>Subject</th>
                                     <th>Message</th>
                                     <th>Created At</th>
                                     <th>Action</th>
                                 </tr>
                                </thead>
                                <tbody>                                    
                                    <?php
                                        $count=1; 
                                        while( $row= mysqli_fetch_array($fetchMessage)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['phone']?></td>
                                            <td><?php echo $row['subject']?></td>
                                            <td><?php echo $row['message']?></td>
                                            <td><?php echo $row['created_at']?></td>
                                            <td>
                                                <a href="editmessage.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="viewMessage.php?id=<?php echo $row['id']?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="deleteMessage.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $count++; }?>
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