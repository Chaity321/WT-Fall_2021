<html>
    <body>
        
        <?php
        $fname=$lname=$email=$gender=$mobileno=$dob=$hsc=$ssc=$course=$yearenroll=$yearenroll="";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["lname"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $mobileno = test_input($_POST["mobileno"]);
            $dob = test_input($_POST["dob"]);
            $hsc = test_input($_POST["hsc"]);
            $ssc = test_input($_POST["ssc"]);
            $course = test_input($_POST["course"]);
            $yearenroll = test_input($_POST["yearenroll"]);
            $yearenroll = test_input($_POST["yearenroll"]);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>

    </body>
</html>