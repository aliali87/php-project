<?php
$connect=mysqli_connect('localhost','root','','work');
if(!$connect){
    echo("Eroor Connect");
}
?>

<?php
$query="select * from users";
$result=mysqli_query($connect,$query);
if($result) {
    $cnt=0;
    $element = array();
    while ($row = mysqli_fetch_assoc($result)) {
     $element[]=$row;
     $cnt++;
    }
    echo json_encode($element);
    //echo"<br/>"."Raw Count: ".$cnt;
    mysqli_free_result($result);
    mysqli_close($connect);
}
?>