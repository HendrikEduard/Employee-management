<?php session_start();
  spl_autoload_register(function($class) {
    require_once "classes/{$class}.php";
  });
// Define variables and initialize with empty values
$name = $city = $title = "";
$name_err = $city_err = $title_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once 'process-create.php';
}
  require_once 'layout/header.php';  
  require_once 'layout/nav.php'; 
?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <h4 class="p-4">Add Employee</h4>
          <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name">
              <span class="help-block"><?= $name_err;?></span>
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city" placeholder="City">
              <span class="help-block"><?= $city_err;?></span>
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title">
              <span class="help-block"><?= $title_err;?></span>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Add Employee"> &nbsp; 
            <a class="btn btn-secondary" href="index">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'layout/footer.php'; 
