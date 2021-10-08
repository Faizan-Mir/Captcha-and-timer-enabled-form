<html>
<head>
<link rel="stylesheet" href="aelum.css">



</head>
<body>
hi 
<?php
session_start();
require("botdetect.php");


 
$servername = "localhost";
$username = "username";  // Kindly Provide your MySQL username here for this to work on your system. 
$password = "password";   // Kindly Provide your MySQL Passoword here for this to work on your system. 
$dbname= "aelum"; 
// Creating Connection 
$conn = new mysqli($servername, $username, $password);

//Creating Database named aelum 
$conn->query('CREATE DATABASE aelum'); 

// Connecting to the Database aelum
$conn = new mysqli($servername, $username, $password, $dbname);


// Creating a Table for our form entries named formEntries
// This Table contains four columns viz Name, Email, DOB and About_Yourself. 
$conn->query('CREATE TABLE formEntries (
Name VARCHAR(100) NOT NULL,
Email VARCHAR(100) PRIMARY KEY,
DOB VARCHAR(20) NOT NULL,
About_Yourself VARCHAR(1000) NOT NULL
)');  

?>
<script>

var i = 180;
function myFunction() {
  var myobj = document.getElementById("FORM");
  myobj.remove();
}
var interval = setInterval( increment, 1000);

function increment(){
    i--;
     document.getElementById("time").innerHTML = Math.floor(i/60) + " : " + (i%60);
    if(i<1){
    myFunction(); 
	alert('Time Over. Form will Disapper Now'); 
    clearInterval(interval);
  
    }
}
</script>

<center><h1 style=" font-size:50px; color:'green';"> The Form will Disapper after: </h1>
<br>
<div id="time" style=" font-size:60px; color:'red';">  </div>
</center>
<center>
<div class="container" id="FORM">  
  <form id="contact" action="test.php" method="post">
   <center> <h3>AELUM CONSULTANCY</h3>
    <h4>Tell Us About Yourself</h4>  </center>
    
	<fieldset>
      <input placeholder="Your name" type="text" name="Name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="Email" tabindex="2" required>
    </fieldset>
    <fieldset>
     Your Date of Birth  &nbsp; &nbsp; &nbsp; <input  type="date" name="DOB" tabindex="3" required>
    </fieldset>
   
    <fieldset>
      <textarea placeholder="Tell Us Something About Yourself" name= "About_Yourself" tabindex="4" required></textarea>
    </fieldset>
	<fieldset>
	<center><p> <?php  $ExampleCaptcha = new Captcha("ExampleCaptcha");
  $ExampleCaptcha->UserInputID = "CaptchaCode";
  echo $ExampleCaptcha->Html();    ?>   </p>  </center>
	<br><br>
	<input placeholder="Enter the Captcha Code Shown Above" name="CaptchaCode" id="CaptchaCode" tabindex="5" type="text" required />
</fieldset>
		
    <fieldset>
      <button name="submit_btn" type="submit" id="contact-submit" >Submit</button>
    </fieldset>
	
	
   
  </form>
  
  
</div>
</center>
<?php
if(isset($_POST['submit_btn'])) {
	
	$Email= $_POST["Email"]; 
$Name= $_POST["Name"];
$DOB= $_POST["DOB"];
$About_Yourself= $_POST["About_Yourself"];

    // Checking if the Captcha is Correct or not
    $isHuman = $ExampleCaptcha->Validate();
    
    if (!$isHuman) {
      echo "<script> alert('Wrong Captcha') </script>"; 
    } else {
		//Inserting data into our Table, only if the Captcha is Correct 
      $conn->query(" INSERT INTO formEntries(Name, Email, DOB, About_Yourself)
VALUES ('$Name', '$Email', '$DOB', '$About_Yourself') 
"); 

     echo "<script> alert('Your Responses have been Saved in the formEntries Table of aelum Databse') </script> "; 
    } 
  }



?>

</body>
</html>