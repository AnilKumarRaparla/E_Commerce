<?php

// Database connection settings
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$studentId = $_POST["studentId"];
$studentName = $_POST["studentName"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$phone = $_POST["phone"];

// Prepare the SQL query
$stmt = $conn->prepare("INSERT INTO students (student_id, student_name, dob, email, phone) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $studentId, $studentName, $dob, $email, $phone);

//
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Details Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #006699;
	color: #fff;
	padding: 10px;
}

nav {
	background-color: #f2f2f2;
	padding: 10px;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

nav ul li {
	display: inline-block;
	margin-right: 10px;
}

nav ul li a {
	text-decoration: none;
	color: #333;
	padding: 5px;
}

main {
	padding: 10px;
}

form label {
	display: inline-block;
	width: 150px;
	text-align: right;
	margin-right: 10px;
}

form input {
	padding: 5px;
	margin-bottom: 10px;
}

form input[type="submit"],
form input[type="reset"] {
	background-color: #006699;
	color: #fff;
	border-radius: 50%;
	padding: 5px 10px;
	margin-left: 111px;
	cursor: pointer;
}

form input[type="submit"]:hover,
form input[type="reset"]:hover {
	background-color: #003366;
}

footer {
	background-color: #f2f2f2;
	padding: 10px;
	text-align: center;
}

</style>
</head>
<body>
	<header>
		<h1>Student Details Management System</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Students</a></li>
			<li><a href="#">Teachers</a></li>
			<li><a href="#">Courses</a></li>
		</ul>
	</nav>
	<main>
		<h2>Student Information</h2>
		<form>
			<label for="studentId">Student ID:</label>
			<input type="text" id="studentId" name="studentId"><br>

			<label for="studentName">Student Name:</label>
			<input type="text" id="studentName" name="studentName"><br>

			<label for="dob">Date of Birth:</label>
			<input type="date" id="dob" name="dob"><br>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email"><br>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone"><br>

			<input type="submit" value="Save">
			<input type="reset" value="Reset">
		</form>
	</main>
	<footer>
<br>
<br>
		<p>&copy; 2023 Student Details Management System</p>
<br>
<br>

	</footer>
<script>
// Get form elements
const studentId = document.getElementById("studentId");
const studentName = document.getElementById("studentName");
const dob = document.getElementById("dob");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const form = document.querySelector("form");

// Add event listener to form submit button
form.addEventListener("submit", function(event) {
  // Prevent form submission if validation fails
  if (!validateForm()) {
    event.preventDefault();
  } else {
    // Create a new AJAX request
    const xhr = new XMLHttpRequest();

    // Set the request URL and method
    xhr.open("POST", "insert_data.php", true);

    // Set the request header
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Set the request data
    const data = `studentId=${studentId.value}&studentName=${studentName.value}&dob=${dob.value}&email=${email.value}&phone=${phone.value}`;
    
    // Send the request
    xhr.send(data);
  }
});

// Validate form fields
function validateForm() {
  let isValid = true;
  
  // Validate student ID
  if (studentId.value === "") {
    alert("Please enter a student ID");
    isValid = false;
  }
  
  // Validate student name
  if (studentName.value === "") {
    alert("Please enter a student name");
    isValid = false;
  }
  
  // Validate date of birth
  const today = new Date();
  const dobDate = new Date(dob.value);
  const age = today.getFullYear() - dobDate.getFullYear();
  if (dob.value === "" || age < 18) {
    alert("Please enter a valid date of birth (you must be at least 18 years old)");
    isValid = false;
  }
  
  // Validate email address
  const emailRegex = /\S+@\S+\.\S+/;
  if (!emailRegex.test(email.value)) {
    alert("Please enter a valid email address");
    isValid = false;
  }
  
  // Validate phone number
  const phoneRegex = /^\d{10}$/;
  if (!phoneRegex.test(phone.value)) {
    alert("Please enter a valid 10-digit phone number");
    isValid = false;
  }
  
  return isValid;
}
</script>
</body>
</html>
