<?php
$connect=mysqli_connect('localhost','root','','work');
if(!$connect){
    echo("Eroor Connect");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    User Name<input type="text" name="user" >
    <br/>
    Password    :<input type="password" name="password">
    <br/>
    <input type="submit" name="submit" value="insert data">
    <br/>
</form>
<?php
print_r($_POST);
if($_POST['submit']){
    $user=$_POST['user'];
    $password=$_POST['password'];
    $query1="insert into users(name,password)values("."\"".$user."\"".","."\"".$password."\"".")";
    echo "<br/>".$query1;
    $result=mysqli_query($connect,$query1);
    if(!$result){
        die("Error in sql");
    }
    $query2="insert into users(name,password)values(\"Alimsllem\",\"12345\")";
    echo "<br/>".$query1;
    for($i=0;$i<100;$i++) {
        $result = mysqli_query($connect, $query2);
        if(!$result){
            die("Error in sql");
        }
    }
}
mysqli_close(($connect));
echo "Connection Closed";
?>
</body>
</html>