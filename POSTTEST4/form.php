<link rel="stylesheet" href="form.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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
<div class="bg"><center> <h1>Congratulations your registration is Success !!!</h1> <center></div>

<div class = "form">
<?php
if (isset($_POST["name"]))
        {
            $name = $_POST["name"];
        }
if (isset($_POST["email"]))
        {
            $email = $_POST["email"];
        }
        $password = $_POST['password']; //mengambil inputan dari form dengan name password
        $password2 = $_POST['konfirmasipassword']; //mengambil inputan dari form dengan name password2    
 
        if($name==""){
            echo " name tidak boleh kosong ";
        }

        
        if($password==$password2){ // kondisi jika password = password2
            echo " Name = ". $name  ." <br> <br>";  
            echo " Email = ". $email ."<br>";
            if (isset($_POST['tombolregistrasi'])) {
                $phonenumber = $_POST['phonenumber'];
                echo "<br>Phone Number = $phonenumber";
                }
                if (isset($_POST["address"]))
                {
                    $address = $_POST["address"];
                    echo "<br><br>Address = ". $address ."";  
                }
           }else{ // sebaliknya, jika password tidak sama dengan password 2
            echo 'Maaf password anda tidak sama, silahkan coba lagi ' ; //tamplikan error
           }    
?>
</div>  
</body>

