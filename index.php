<?php
    require('config.php');
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
    
     <link rel="stylesheet" href="style.css" type="text/css">

     <title>Sing Up</title>
 </head>
 <body>

            <div class="imag-reg">
            <img src="img/digitalcode.png" width="300">

            </div>
                    <div class="title-reg">
                        Pagina de inregistrare
                    </div>
         <div class="singup">
      
         <form action="singup.inc.php" method="POST">
       
        <input type="text" placeholder="Enter Username" name="username"> <br> <br>
      
        <input type="password" placeholder="Enter Password" name="password"> <br> <br>
       
        <input type="email" placeholder="Enter Email" name="email"> <br> <br>
        
        <input type="prenume" placeholder="Enter Prenume" name="prenume"> <br> <br> 
        <input type="number" placeholder="Enter Age" name="age"> <br> <br> 
        <input type="text" placeholder="Enter Nume" name="nume">    <br> <br>
        <input type="submit" name="trimite" value ="Trimite"> <br> <br>
       
      
        </form>
        </div>
     
 </body>
 </html>