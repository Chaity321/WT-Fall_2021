<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midlabexam</title>
</head>
<body>
    <h2>Please fill up the form</h2>
<form action="result.php" method="post">
 
 <label for="name">
 First Name:<input type="text" name="fname" placeholder="Enter your first Name" required="">
 </label><br><br>

 <label for="name">
 Last Name:<input type="text" name="lname" placeholder="Enter your last name" required="">
 </label><br><br>
 <label for="name">
 Email:<input type="email" name="email" placeholder="Enter your email" required="">
 </label><br><br>

<label for="name">
Gender:<input type="radio" name="gender" placeholder="Enter your gender" value = male required=""> male
<input type="radio" name="gender" placeholder="Enter your gender" value = female required=""> female
</label><br><br>
<label for="name">
Mobile No:<input type="number" name="mobile no" placeholder="Enter your mobile no" required="">
 </label><br><br>

 <label for="name">
Date of Birth:<input type="date" name="dob" placeholder="Enter your date of birth" required="">
 </label><br><br>
 

 <label for="name">
HSC results:<input type="integer" name="hsc results" placeholder="Enter your hsc results" required="">
 </label><br><br>
 
 <label for="name">
SSC results:<input type="integer" name="ssc results" placeholder="Enter your ssc results" required="">
 </label><br><br>

 <label for="name">
Select a course you want to enroll:<select name="enroll">

<option value="CSE">CSE 
</option>
<option value="EEE">EEE</option>
 <option value="BBA">BBA</option>
</select>
<br>
</label>
<label for="name">
choose a year enrolling year:<select name="enroll">

<option value="2021">2021 
</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
 <option value="2018">2018</option>
</select>
<br>
</label>

<label for="name">
choose a year enrolling year:<select name="enroll">

<option value="Summer">Summer 
</option>
<option value="Spring">Spring</option>
<option value="Fall">Fall</option>
</select>
<br>
</label>
<input type="submit" name="submit" value = "Insert Data">
</form>
</body>
</html>