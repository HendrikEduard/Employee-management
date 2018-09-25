
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="jumbotron">
          <h4 class="p-4"><?= intval($_GET['id']) ? Update : Add;?> Employee</h4>
          <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name" value="<?= out($result->name) ?>" autocomplete="off" required>
              <span class="help-block"><?= $name_err;?></span>
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city" placeholder="City" value="<?= out($result->city) ?>" autocomplete="off" required>
              <span class="help-block"><?= $city_err;?></span>
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title" value="<?= out($result->title) ?>" autocomplete="off" required>
              <span class="help-block"><?= $title_err;?></span>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="<?= intval($_GET['id']) ? Update : Add;?> Employee"> &nbsp; 
            <a class="btn btn-secondary" href="index">Cancel</a>
            <?php echo intval($_GET['id']) ? "<input type=\"hidden\" name=\"id\" value=\"$result->id\" >" : '';?>
          </form>
        </div>
      </div>
    </div>
  </div>