<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labtask1</title>
</head>
<body>
<h2>REGRISTATION</h2>
<form action="profile.php" method="post">
 
 <label for="name">
 First Name:<input type="text" name="fname" placeholder="Enter your first Name" required="">
 </label><br><br>

 <label for="name">
 Last Name:<input type="text" name="lname" placeholder="Enter your last name" required="">
 </label><br><br>
 <label for="name">
 Age:<input type="number" name="age" placeholder="Enter your age" required="">
 </label><br><br>
 <label for="name">
 Designnation:<input type="radio" name="designnation" placeholder="Enter your designnation" value="junior programmer" checked> junior programmer
 </label><br><br>
 <label for="name">
<input type="radio" name="designnation" placeholder="Enter your designnation" value="senior officer" checked> senior officer
 </label><br><br>
 <input type="radio" name="designnation" placeholder="Enter your designnation" value="project lead" checked>project lead
 </label><br><br>
 <label for="name">
 Email:<input type="email" name="email" placeholder="Enter your email" required="">
 </label><br><br>

 <label for="name">
 Password:<input type="password" name="password" placeholder="Enter your password" required="">
 </label><br><br>
 
<input type="submit" name="submit">
<input type="reset" name="reset">


</body>
</html>