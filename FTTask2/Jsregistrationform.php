<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
 <body>
    
    <form action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
            <h1>Registration Form</h1>
            <hr>
            <div class="fileds">
                <label class="labels" for="firstName">First Name:</label>
                <input name="firstName" id="firstName" type="text" required>
                <span id="err-fname" >*</span>
            </div>
            <div class="fileds">
                <label class="labels" for="lasttName">Last Name:</label>
                <input name="lastName" id="lasttName" type="text" required>
                <span id="err-lname" >*</span>
            </div>
            <div class="fileds">
                <label class="labels" for="age">Age:</label>
                <input name="age" id="age" type="text" required>
                <span id="err-age" >*</span>
            </div>
            <div class="fileds">
                <p class="labels">Designation:</p>
                <div class="filed-item">
                    <input id="junior" name="designation" type="radio" value="Junior Programmer">
                    <label for="junior">Junior Programmer</label>
                    <input id="senior" name="designation" type="radio" value="Senior Programmer">
                    <label for="senior">Senior Programmer</label>
                    <input id="lead" name="designation" type="radio" value="Project Lead">
                    <label for="lead">Project Lead</label>
                    <span id="err-designation" >*</span>
                </div>
            </div>
            <div class="fileds">
                <p class="labels">Preferrde language</p>
                <div class="filed-item">
                    <input name="java" id="java" type="checkbox" value="JAVA">
                    <label for="java">JAVA</label>
                    <input name="php" id="php" type="checkbox" value="PHP">
                    <label for="php">PHP</label>
                    <input name="c++" id="c++" type="checkbox" value="C++">
                    <label for="c++">C++</label>
                    <span id="err-preferrde language" >*</span>
                </div>
            </div>
            <div class="fileds">
                <label class="labels" for="email">E-mail:</label>
                <input name="email" id="email" type="email" required>
                <span id="err-email" >*</span>
            </div>
            <div class="fileds">
                <label class="labels" for="password">Password:</label>
                <input name="password" id="password" type="password" required>
                <span id="err-password" >*</span>
            </div>
            <div class="fileds">
                <label class="labels" for="file">Please choose a file</label>
                <input id="file" type="file">
                <span id="err-please choose a file" >*</span>
            </div>
            <input name="submit" class="button" type="submit" value="Submit">
            <input name="reset" class="button" type="submit" value="Reset">
</form>
<script src="js/validation.js"></script>
</body>
</html>