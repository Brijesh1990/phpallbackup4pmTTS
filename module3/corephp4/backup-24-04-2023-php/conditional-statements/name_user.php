<?php 
if(isset($_POST["sub"]))
{
    $unm=$_POST["unm"];
    echo "<h1>My name is :$unm</h1>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        Enter your name :<input type="text" name="unm" placeholder="Enter your name *" required>
        <br><br>
        <input type="submit" name="sub" value="Check">

    </form>
    
</body>
</html>