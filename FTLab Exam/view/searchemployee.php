<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employee</title>
    
</head>
 <body>
     <h1>Search Employee</h1>
 <form action="/action_page.php">
 <label for="search by id">Search By Id</label><br>
<input type="text" id="id"><br>
<label for="search by name">Search By Name</label><br>
<input type="text" id="name" ><br>
<label for="search by salary">Search By Salary</label><br>
minimum<input type="text" id="minimum" ><br><br>
maximum<input type="text" id="maximum" ><br>
<input type="submit" value="Submit" id="button">

</form><br>
<div id="result"></div>
<script>
$('#button').click(function() {
var val1 = $('#id').val();
var val2 = $('#name').val();
var val3 = $('#minimum').val();
var val4 = $('#maximum').val();
$.ajax({
type: 'POST',
url: '/controll/employeesearchcontroller.php',
data: { text1: val1, text2: val2, text3: val3, text4: val4 },
success: function(response) {
$('#result').html(response);
}
});
});
</script>
</body>
</html>