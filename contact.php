<!DOCTYPE html>
<html lang="en">
<head>
 <title>Contact: The Unmedicated</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="Contact us with any questions or comments">

 <link rel="stylesheet" href="unmedicated.css">
 <!--[if lt IE 9]>
<script src=”http://html5shim.googlecode.com/svn/trunk/html5.js”>
</script>
<![endif]-->

 
</head>

<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";
$throwError = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $throwError = 1;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
      $throwError = 1;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $throwError = 1;
    }
  }
    
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
  if($throwError < 1) {
    $to = "jtvick05@gmail.com"; // this is your Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $comment;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $comment;
    $headers = "From:" . $email;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div id="wrapper">
<header><div id="logo"><h1><a href="index.html">The Unmedicated</a></h1></div>
 </header>
 
 <nav>
 	<ul> 		
 	    <li><a href="index.html">Home</a></li>
 		<li><a href="contact.html" class="active">Contact</a></li>
 		<li><a href="payment.html">Payment</a></li> 		
 	</ul>
</nav>


 <main>
 <hr>
 <h2 >Contact The Unmedicated</h2>
<div id="contactForm">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
		
</div>			
 </main>
 
 <footer>
 <a href="payment.html"><img class="bitcoinLogo" src="Images/bitcoin.png"></a>
 <br>
 <mark>Copyright &copy; Art-Lottery 2017</mark>
 
 
 </footer>
 </div>
</body>
</html>

