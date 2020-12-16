<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$name = "";
$matric    = "";
$dob = "";
$gender    = "";
$number = "";
$department    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $matric = mysqli_real_escape_string($db, $_POST['matric']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $department = mysqli_real_escape_string($db, $_POST['department']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($matric)) { array_push($errors, "Matric number is required"); }
  if (empty($dob)) { array_push($errors, "Date Of Birth is required"); }
  if (empty($gender)) { array_push($errors, "Select Gender"); }
  if (empty($number)) { array_push($errors, "Number is required"); }
  if (empty($department)) { array_push($errors, "Department is required"); }



	

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, name, matric, dob, gender, number, department) 
  			  VALUES('$username', '$email', '$password', '$name', '$matric', '$dob', '$gender', '$number', '$department')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 