<?php session_start();
spl_autoload_register(function($class) {
  require_once "classes/{$class}.php";
});

if(isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $employee = new Employee();
  $result = $employee->get_by_id($id);
}

// Define variables and initialize with empty values
$name = $city = $title = "";
$name_err = $city_err = $title_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once 'process-edit.php';
}
require_once 'layout/header.php';  
require_once 'layout/nav.php'; 
?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <h4 class="p-4">Edit Employee</h4>
          <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?= $result->name ?>">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city" value="<?= $result->city ?>">
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" value="<?= $result->title ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Update Employee"> &nbsp; 
            <a class="btn btn-secondary" href="index">Cancel</a>
            <input type="hidden" name="id" value="<?= $result->id ?>">
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require_once 'layout/footer.php'; 
