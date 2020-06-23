<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <title>Home</title>
</head>

<body>
    <form method="POST" action="submit.php">
        <div class="top">Legal Circle</div>
        <br><br><br><br> <br>
        <div class="image-slider"><center><br><img src="image/legal.png" width="42%"></center></div>
        <br><br>
        <center><h1>About us</h1></center>
        <hr size="2px" color="#000">
        <center><p>"Write something about the company, e.g what the company does, how it operates , why choose this company to perform that service
             out all the companies available and etc."</p></center>
             <br><br>
        <center><h1>Our Services</h1></center>
        <hr size="3px" color="#000">
        <br>
        <center>
        <div class="services">
            <div class="services-items">
               <p> Contract drafting</p>         
            </div>
            <div class="services-items">
                <p>Contract reviewing</p>
            </div>
            <div class="services-items">
                <p>Company registration</p>
            </div>
            <div class="services-items">
                <p>Legal Research</p>
            </div>
        </div>
        </center>
        <br>
        <center><h1>Contact Us</h1></center>
        <hr size="4px" color="#000">
       <center>
        <div class="services">
            <input type="text" placeholder="Name" name="txtName" required>
            <input type="text" placeholder="Surname" name="txtSurname" required>
            <input type="text" placeholder="Email Address" name="txtemail" required>
            <input type="number" placeholder="Contact number" name="txtNum" require>
        </div>
        <center>
            <textarea rows="10" placeholder="Type your query here......."></textarea>
        </center>
        <br>
       <center>
           <button name="btnSubmit">Submit</button>
       </center>
       <br>
       <br>
       <footer>
            <br>
            <br>
            <center>Powered by <p class="logo"> nectarine<p></center>
        </footer>
    </form>
</body>

</html>