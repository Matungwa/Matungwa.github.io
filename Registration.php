<?php
//establish conection
$connection=new mysqli("localhost","root","","registration");
//check connection
if($connection==false){
    die("error: we could not connect o your server.".mysqli_connect_error());
}
//attempt to insert data into our datbase
// decrare variables to be inserted into the db
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$sname=$_POST['sname'];                                   
$uname=$_POST['uname'];
$dbirth=$_POST['dob'];
$contact=$_POST['contacts'];
$email=$_POST['email'];
$password=$_POST['psw'];
$cv=$_POST['cv'];

//querying the db to accept data

$sql=" INSERT INTO table1 (Firstname,Middlename,Surname,Username,dob,Contacts,Email,Pasword,CV)
VALUES('$fname','$mname','$sname','$uname','$dbirth','$contact','$email','$password','$cv')";  

if(mysqli_query($connection,$sql)){
echo"records added";
}else{
echo "error" .$sql.mysqli_error($connection);
}

//attempt to get results
 $mysquery="SELECT * FROM table1";
  $result=$connection->query($mysquery);

?>