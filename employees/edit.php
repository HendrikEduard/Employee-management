<?php session_start();
require_once '../init.php';

if(isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $employee = new Employee();
  $result = $employee->get_by_id($id);
}
// Define variables and initialize with empty values
$name = $city = $title = "";
$name_error = $city_error = $title_error = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate name
  // if (empty(trim($_POST["name"]))) {
  //   $name_error = "Your name is required";
  // } else {
    $name = clean($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $name_error = "Only letters and a space are allowed"; 
    }
  // }
  // Validate city
  if (empty(trim($_POST["city"]))) {
    $city_error = "The city is required";
  } else {
    $city = clean($_POST["city"]);
    // check if city only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
      $city_error = "Only letters and a space are allowed"; 
    }
  }
  // Validate title
  if (empty(trim($_POST["title"]))) {
    $title_error = "The title is required";
  } else {
    $title = clean($_POST["title"]);
    // check if title only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $title)) {
      $title_error = "Only letters and a space are allowed"; 
    }
  }
  if(empty($name_error) && empty($city_error) && empty($title_error)) {
    $fields = ['name' => $name, 'city' => $city, 'title' => $title];
    $id = $_POST['id'];
    $employee = new Employee();
    $employee->save($fields, $id);
  }
}
require_once LNBPATH.'/layout/header.php';  
require_once LNBPATH.'/layout/nav.php';  
require_once LNBPATH.'/employees/creadd-form.php';
require_once LNBPATH.'/layout/footer.php'; 
