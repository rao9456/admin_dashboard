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


     // isset function
     if(isset($_POST['updateMessage'])){

        // fetch data
        $name=$_POST["name"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];

        // sql to update
        $updateMessage = mysqli_query($conn,"UPDATE messages SET name='$name',phone='$phone',email=' $email',subject=' $subject',message='$message' WHERE id='".$_GET['id']."' ");
        if($updateMessage){
            echo 'data changed succesfully';
        }
        else{
            echo 'error ';
        }
    }

    ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Update Message</span>
                        </div>
                        <div class="card-body">
                            <form action="editMessage.php?id=<?php echo $studentId ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="" value="<?php echo $name?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="" value="<?php echo $email?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" name="phone" id="" value="<?php echo $phone?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="" value="<?php echo $subject?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                            <label for="message">Message</label>
                                            <input type="text" class="form-control" name="message" id="" value="<?php echo $message?>">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row col-lg-3">
                                    <button type="submit" class="btn btn-success" name="updateMessage">update message</button>
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