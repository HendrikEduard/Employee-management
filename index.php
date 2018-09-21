<?php session_start();
spl_autoload_register(function($class) {
  require_once "classes/{$class}.php";
});
if(isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $employee = new Employee();
  $result = $employee->delete($id);
}  
require_once 'layout/header.php';  
require_once 'layout/nav.php'; 
?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <a class="float-right btn btn-primary" href="create-employee">
            Add Employee
          </a>
          <h4 class="p-4">Current Employees</h4>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
        <?php $employee = new Employee();
              $rows = $employee->read(); 
              foreach ($rows as $row) { ?>
                <tr>
                <td><?= $row->name ?></td>
                <td><?= $row->city ?></td>
                <td><?= $row->title ?></td>
                <td>
                  <a class="btn btn-sm btn-secondary" href = "edit-employee?id=<?= $row->id ?>">Edit</a> 
                  <a class="btn btn-sm btn-danger" href = "index?id=<?= $row->id ?>">Delete</a>
                </td>
              </tr>
           <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php require_once 'layout/footer.php'; 
