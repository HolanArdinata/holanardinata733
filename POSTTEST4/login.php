<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
   <div class="header">
        <div class="logo">        
                <h1><a href="index.html">Mercle Devices</a></h1>
            </div>
                  <div class="menu">
                    <a href="index.html">HOME</a>
                    <a href="product.html">PRODUCT</a>
                    <a href="contact.html">CONTACT</a>
                    <a href="about.html">ABOUT US</a>
                    <a href="login.php">LOGIN/LOG OUT</a>  
            </div>
             </div>
<div class="input">
<form action="form.php" method="post" >
  <table>
    <tr> 
      <center> <h1> Login Membership Mercle Device</h1></center>
    </tr>
    <tr>
      <td>Name</td>
      <td> : </td>
      <td><input type="text" name="name" required= "name"> <br></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="email" name="email" required= "Email"> <br></td>
    </tr>
    <tr>
    <td>Phone Number</td>
      <td>:</td>
      <td><input type="text" name="phonenumber" required= "Phonenumber"> <br></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td><input type="text" name="address"required= "Address"> <br></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="password" required= "Password"> <br></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td>:</td>
      <td><input type="password" name="konfirmasipassword"required= "confirm password"> <br></td>
    </tr> 
    <tr>
      <td><input type="submit" name="tombolregistrasi" value="CONFIRM"> <br></td>
    </tr>
  </table>
        
   
</form>

</div>


 
</body>
</html>
