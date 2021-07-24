<?php

if(isset($_POST['submit'])) {  
   
      $name = $_POST["First Name"];
      $email = $_POST["Last Name"];
      $pass=$_POST["Email Adress"];
      $cpass=$_POST["Password"];
      echo "New record  ".$FirstName ." " .$LastName." " .$Emailadress. " ". $PassWord;

      $c=mysqli_connect("localhost:8080","","");
      mysqli_select_db($c,"Magadhifarm");
      $q="insert into login2 values('$FirstName','$LastName','$EmailAdress','$Password')";
    
      if (mysqli_query($c, $q)) {
          echo "New record created successfully";
        } 
        else {
          echo"Error: " . $q . "<br>" . mysqli_error($c);
  } 
}
?>