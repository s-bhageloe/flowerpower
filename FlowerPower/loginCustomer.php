<?php
include 'database.php';
$obj = new database();
$obj->insertCustomerUser('sameer', 'yes');



if(isset($_POST['submit'])){

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
        }

    }

    if(!$error){
        
    }else{
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inloggen klanten</title>
</head>
<body>
	<div class="box">
		<h2>Inloggen klanten</h2>
		<div class="box-content">
    		<form method="post" action="index.php">
    			<p> Username </p>
       		<input type="text" title="username" placeholder="Username" /><br>
        		<p> Password </p>
        	<input type="password" title="password" placeholder="Password" /><br><br>
        	<button type="submit" class="btn">Login</button><br>
    		</form>
		</div>
	</div>
</body>