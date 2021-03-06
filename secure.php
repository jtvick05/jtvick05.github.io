<?php

$pass = $_POST['pass'];

if($pass == "s3cure321!")
{?>
  <!DOCTYPE html>
  <html lang="en">
   <head>
      <title>The Unmedicated</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="The Unmedicated is a graphic novel created by Scott Haugh, Director of Art-Lottery, to articulate 
       mental health issues and recovery.  Copies can be purchased using bitcoins for hard copies.">
      <meta name="keywords" content="CPS, Certified Peer Specialist, Peer Support, mental health, behavioral health, crisis, suicidal thoughts, 
       alcoholism, prostitution relief, peer counseling, recovery, medication-free, bitcoin, graphic novel, noncompliance">
      
      <link rel="stylesheet" href="unmedicated.css">
      <!--[if lt IE 9]>
      <script src=”http://html5shim.googlecode.com/svn/trunk/html5.js”>
      </script>
      <![endif]-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
  </head>

  <body>
  <div id="wrapper">
   <header>
    <div id="logo"><h1><a href="index.html">The Unmedicated</a></h1></div>
   </header>
 
   <nav>
 	 <ul> 		
 	    <li><a href="index.html">Home</a></li>
 	    <li><a href="about.html">About</a></li>
 		<li><a href="contact.html">Contact</a></li>
 		<li><a href="onlineaccess.html" class="active">View Online</a>
 		<li><a href="requestcopies.html">Request Copies</a></li>
 	 </ul>
  </nav>


   <main>
    <hr>
    <table>
       <tbody>
          <tr>
          <td class="prevButton"><a class="prev" onclick="plusSlides(-1)">&#10094; Back</a></td>
          <td class="nextButton"><a class="next" onclick="plusSlides(1)">Next &#10095;</a></td>
          </tr>
       </tbody>
    </table>
    <div class="slideshow-container">
       
       <div class="slides fade">
          <div class="numbertext">1 / 8</div>
          <img src="images/001PagePhoto-CCC.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">2 / 8</div>
          <img src="images/002withImage.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">3 / 8</div>
          <img src="images/003Alley.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">4 / 8</div>
          <img src="images/004Square.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">5 / 8</div>
          <img src="images/005Large.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">6 / 8</div>
          <img src="images/006Large.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">7 / 8</div>
          <img src="images/007Large.gif" style="width:100%">
       </div>
       <div class="slides fade">
          <div class="numbertext">8 / 8</div>
          <img src="images/008Large.gif" style="width:100%"> 
       </div>
  </div>
  <table>
       <tbody>
          <tr>
          <td class="prevButton"><a class="prev" onclick="plusSlides(-1)">&#10094; Back</a></td>
          <td class="nextButton"><a class="next" onclick="plusSlides(1)">Next &#10095;</a></td>
          </tr>
       </tbody>
    </table>
   <br>

   <script src="js/slideshow.js"></script>

   </main>
   
   <footer>
   <a href="requestcopies.html"><img class="bitcoinLogo" src="images/bitcoin.png"></a>
   <br>
   <mark>Copyright &copy; Art-Lottery 2017</mark>
 
 
   </footer>
   </div>
  </body>
  </html>

<?}

else
{
    if(isset($_POST))
    {?>

            <p style="color:red;">The code that you entered is incorrect or no longer active</p>
            <form method="POST" action="secure.php">
            Access Code: <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Submit"></input>
            </form>
            <br>
            <p>Return to Homepage: <a href="index.html">The Unmedicated</a></p>
            <p>Contact: <a href="contact.html">Contact Page</a></p>
            
    <?}
}
?>