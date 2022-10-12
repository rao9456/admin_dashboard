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
        
    // fetch student records using where
    $fetchMessages = mysqli_query($conn,"SELECT * FROM messages WHERE id='".$_GET['id']."' ");
    while($row = mysqli_fetch_array($fetchMessages)){
        $id= $row['id'];
        $name= $row['name'];
        $email= $row['email'];
        $phone= $row['phone'];
        $subject= $row['subject'];
        $message= $row['message'];
        
       
    }

    
    ?>


    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span> Student Info</span>
                            <span class="float-left">
                                <i class="fa fa-user fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Name: <span><?php echo $name ?></span>
                                </li>
                                <li class="list-group-item">
                                    Phone: <span><?php echo $phone ?></span>
                                </li>
                                <li class="list-group-item">
                                    Email: <span><?php echo $email ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span> Message Details</span>
                            <span class="float-left">
                                <i class="fa fa-folder-open fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Subject: <span><?php echo $subject ?></span>
                                </li>
                                <li class="list-group-item">
                                    Message: <span><?php echo $message ?></span>
                                </li>
                                
                            </ul>
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