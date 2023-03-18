<?php
include "database.php";
$id = $_GET['id'];
if(isset($_POST['submit'])){
	$first_name  = $_POST['first_name'];
	$email  = $_POST['email'];
	$message  = $_POST['message'];

	$sql = "UPDATE `my_project` SET `name`='$first_name',`comments`='$message',
    `email`='$email' WHERE id=$id";

	 $result = mysqli_query($connection,$sql);
	 if($result){
		header("location: main.php?msg=Comment Updated successfully");
	 }else{
		echo "Failed: " .mysqli_error($connection);
		
	 }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>How to become a Web Developer</title>
	<!-- boostrap link starts -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<!-- boostrap link ends -->
     <!-- font awesome link starts -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
	  integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- font awesome link ends -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
	<script type="text/javascript">
		setInterval(function(){winow.location=''},1000)
	</script>
</head>
<body style="margin-bottom: 10px">
	<h2>Edit Comments Here</h2>
		
			

         <!-- table section starts -->
		 <?php
		   if(isset($_GET['msg'])) {
			$msg = $_GET['msg'];

			echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            $msg
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
			";
		   }
		 
		 ?>
		 <table class="table table-hover table-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">COMMENT</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
	<?php
	// include "database.php";
	$sql = "SELECT * FROM `my_project`";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result)) {
          ?>
			<tr>
				<td> <?php echo $row['id'] ?> </td>
				<td> <?php echo $row['name'] ?> </td>
				<td> <?php echo $row['email'] ?> </td>
				<td> <?php echo $row['comments'] ?> </td>
				
				<td>
					<a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class ="fa-solid fa-pen-square 
					fs-5 me-3"></i> </a>
					<a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class ="fa-solid fa-trash fs-5"></i> </a>
				</td>
				
				</tr>
		  <?php
	}
	?>
   

  </tbody>
</table>
         <!-- table section ends -->
			<div>
               <div class="navbar navbar-light justify-content-center fs-3 mb-5">
                     
			   </div>
			   <div class="container pb-4">
				 <div class="text-center  mb-4">
                    <h3>Edit Comments</h3>
					<p>Edit Comments To Re-post</p>
				 </div>
			   </div>
			  <?php
            //    $id = $_GET['id'];
               $sql = "SELECT * FROM my_project WHERE id = $id LIMIT 1 ";
              $result = mysqli_query($connection,$sql);
              $row = mysqli_fetch_assoc($result);

              ?>
			   <div class="container d-flex justify-content-center">
                <form method="post" style = "width:50vw; min-width:300px;">
				<div class="row">
					<div class="col">
						<label class="form-label">First Name</label>
						<input type="text" name = "first_name" value="<?php echo $row['name'] ?>" class="form-control" >
					</div>
					
					<div class="col mb-3">
						<label class="form-label">Email</label>
						<input type="email" name = "email" value="<?php echo $row['email'] ?>" class="form-control" >
					</div>

					<div class="mb-3">
						<label class="form-label">Comments</label>
						  <textarea value="<?php echo $row['comments'] ?>" name="message" class="form-control" ></textarea>
						
					</div>
					<div class="mb-5">
						<button type="submit" name="submit" class="btn btn-success" >Update</button>
						<a href="main.php" class="btn btn-danger">Cancel</a>
					</div>
				</div> 

				</form>
			   </div>
	 			
			</div>
			
	 		</div>
	 	</div>
	</div>
	
	<!-- bootstrap js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
	 integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script
	<!-- bootstrap js link -->
</body>
</html> 