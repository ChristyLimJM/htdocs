<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>KPI Registration form</title>
      
 <link rel="stylesheet" href="login.css">
    
  </head>

  <body>
	<p class="title">Key Performance Index</p>
   <p class="subtitle">Registration</p> 
   
<form action="registrationLimit.php" method="post" enctype="multipart/form-data">

  <label for=""></label>
  <input type="text" name="staffID" placeholder="staff ID"  required>
  
  <label for=""></label>
  <input type="email" name="email" placeholder="email"  required>
  
  <label for=""></label>
  <input type="password" name="password" placeholder="password"  required>
  
  <label for=""></label>
  <input type="password" name="reconfirmPassword" placeholder="reconfirm password"  required>
  
  <button type="submit">Register</button>
  

    
</form>

  </body>
</html>

