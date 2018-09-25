<?php
// Process delete operation after confirmation
//if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
   // require_once "config.php";
    
    // Prepare a delete statement
 //   $sql = "DELETE FROM employees WHERE id = :id";
    
//    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
 //       $stmt->bindParam(":id", $param_id);
        
        // Set parameters
 //       $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
   //     if($stmt->execute()){
            // Records deleted successfully. Redirect to landing page
   //         header("location: index.php");
     //       exit();
 //       } else{
     //       echo "Oops! Something went wrong. Please try again later.";
  //      }
 //   }
     
    // Close statement
 //   unset($stmt);
    
    // Close connection
 //   unset($pdo);
//} else{
    // Check existence of id parameter
 //   if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
 //       header("location: error.php");
 //       exit();
  //  }
//}
require_once '../init.php';
if(isset($_POST["id"]) && !empty($_POST["id"])) {
	$id = intval($_POST['id']);
  $employee = new Employee();
  $result = $employee->delete($id);
}  
require_once LNBPATH.'/layout/header.php';  
require_once LNBPATH.'/layout/nav.php'; 
?>

<div class="container mt-5">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="jumbotron">
          <h1 class="p-4 text-danger text-center">Delete Record</h1>
					<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
						<div class="alert alert-danger text-center">
							<input type="hidden" name="id" value="<?= intval($_GET["id"]); ?>"/>
							<p>Are you sure you want to delete this record?</p>
								<input type="submit" value="Yes, Delete!" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')">
								<a href="index.php" class="btn btn-secondary">No</a>
						</div>
					</form>
				</div>
      </div>
    </div>
	</div>

<?php require_once LNBPATH.'/layout/footer.php'; 
	