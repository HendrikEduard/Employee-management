<?php session_start();
require_once '../init.php';
require_once LNBPATH.'/layout/header.php';  
require_once LNBPATH.'/layout/nav.php'; 
?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <a class="float-right btn btn-primary" href="create">
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
              $rows = $employee->get_all(); 
              foreach ($rows as $employee) { ?>
                <tr>
                <td><?= $employee->name ?></td>
                <td><?= $employee->city ?></td>
                <td><?= $employee->title ?></td>
                <td>
                  <a class="btn btn-sm btn-secondary" href = "edit?id=<?= $employee->id ?>">Edit</a> 
                  <a class="btn btn-sm btn-danger" href = "delete?id=<?= $employee->id ?>">Delete</a>
                </td>
              </tr>
           <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php require_once LNBPATH.'/layout/footer.php'; 
