<?php

// Validate name
if (empty(trim($_POST["name"]))) {
  $name_err = "Your name is required";
} else {
  $name = clean($_POST["name"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $name_err = "Only letters and a space are allowed"; 
  }
}
// Validate city
if (empty(trim($_POST["city"]))) {
  $city_error = "The city is required";
} else {
  $city = clean($_POST["city"]);
  // check if city only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
    $city_err = "Only letters and a space are allowed"; 
  }
}
// Validate title
if (empty(trim($_POST["title"]))) {
  $title_error = "The title is required";
} else {
  $title = clean($_POST["title"]);
  // check if title only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/", $title)) {
    $title_err = "Only letters and a space are allowed"; 
  }
}
  if(empty($name_err) && empty($city_err) && empty($title_err)) {
    $fields = ['name' => $name, 'city' => $city, 'title' => $title];
    $id = $_POST['id'];    
    $employee = new Employee();
    $employee->save($fields, $id);
  }
  
