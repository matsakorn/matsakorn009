<?php
$firstName=$_POST{'firstName'}
$LastName=$_POST{'LastName'}
$gender=$_POST{'gendere'}
$emall=$_POST{'emall'}
$password=$_POST{'password'}
$numder=$_POST{'numder'}

//database coonecction
$conn = new mysqli('locah=lhost','roon','','test')
if(conn->connect_error){
    echo"$conn->connect_error";
    die("connection failed:". $sonn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registrtion(firstName,LastName,gendere,emall,password,numder)(?,?,?,?,?)");
    $stmt->bind_param("sssssi", $firstName,$LastName,$gender,$emall,$password,$numder);
    $execval = $stmt->execval();
    echo $execval
    echo "registration-successfully..."
    $stmt->class();
    $stmt->class();

}
?>
