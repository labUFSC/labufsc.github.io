
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

echo "
<?php
 
$people_json = file_get_contents('people.json');
 
$decoded_json = json_decode($people_json, false);
 
echo $decoded_json->name;
// Monty
 
echo $decoded_json->email;
// monty@something.com
 
echo $decoded_json->age;
// 77
 
?>";

<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>
