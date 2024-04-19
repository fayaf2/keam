<?php
$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$ParentName = isset($_POST['ParentName']) ? $_POST['ParentName'] : '';
$place = isset($_POST['Place']) ? $_POST['Place'] : '';
$mobile = isset($_POST['Mobile']) ? $_POST['Mobile'] : '';
$School = isset($_POST['School']) ? $_POST['School'] : '';

// Save the responses to a text file
$data = "Name: $name\nParent Name: $ParentName\nPlace: $place\nMobile Number: $mobile\nSchool: $School\n";
file_put_contents('responses.txt', $data, FILE_APPEND);

// Redirect to a specific link
header('Location:exa.html');
exit;
?>
