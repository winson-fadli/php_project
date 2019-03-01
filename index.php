<?php
$result = 0;
if(isset($_POST["addition"]))
{
    $add1 = $_POST["input1"];
    $add2 = $_POST["input2"];
    $result = $add1 + $add2;
}

elseif(isset($_POST["subtraction"]))
{
    $min1 = $_POST["input1"];
    $min2 = $_POST["input2"];
    $result = $min1 - $min2;
}

elseif(isset($_POST["division"]))
{
    $div1 = $_POST["input1"];
    $div2 = $_POST["input2"];
    $result = $div1 / $div2;
}
elseif(isset($_POST["multiplication"]))
{
    $mul1 = $_POST["input1"];
    $mul2 = $_POST["input2"];
    $result = $mul1 * $mul2;
}
elseif(isset($_POST["refresh"]))
{
    header("Refresh; url=index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" type="text/css">
    <style>
    p {
    font-family: sans-serif;
    font-size: 35px;
}
h1 {
    font-family: sans-serif;
    font-size: 50px;
}

button {
    font-size: 35px;
    padding: 5px 10px 5px 10px;
    background-color: aliceblue;
    color: black;
    border-width: 5px;
    border-color: black;
    border-radius: 10px;
}
input {
    font-size: 35px;
    padding: 5px 10px 5px 10px;
    background-color: aliceblue;
    color: black;
    border-width: 5px;
    border-color: black;
    border-radius: 10px;
}
button:hover {
    font-size: 38px;
    padding: 5px 10px 5px 10px;
    background-color: grey;
    color: black;
    border-width: 5px;
    border-color: black;
    border-radius: 10px;
}
input:hover {
    font-size: 36px;
    padding: 5px 10px 5px 10px;
    background-color: grey;
    color: black;
    border-width: 5px;
    border-color: black;
    border-radius: 10px;
}
* {
    margin: 5px;
}
    </style>
</head>
<body>
<h1>Calculator</h1>
<form action="index.php" method="post">
<p>Input 1</p><br>
<input type="text" name="input1"><br>
<p>Input 2</p><br>
<input type="text" name="input2"><br>
<input type="submit" name="addition" value="addition">
<input type="submit" name="subtraction" value="subtraction"><br>
<input type="submit" name="multiplication" value="multiplication">
<input type="submit" name="division" value="division">
<input type="submit" name="refresh" value="refresh"><br>
<input type="text" name="output" value="<?php echo $result; ?>"><br>
</form>

    
</body>
</html>