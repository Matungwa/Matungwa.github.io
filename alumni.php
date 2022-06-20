<?php
//establish conection
$connection=new mysqli("localhost","root","","alumni");
//check connection
if($connection==false){
    die("error: we could not connect to your server.".mysqli_connect_error());
}
//attempt to insert data into our datbase
// decrare variables to be inserted into the db
$aname=$_POST['aname'];
$yoe=$_POST['yoe'];
$yog=$_POST['yog'];                                   
$add=$_POST['add'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$hmatt=$_POST['hmatt'];
$ftatt=$_POST['ftatt'];
$os=$_POST['os'];
$divi=$_POST['divi'];

//querying the db to accept data

$sql=" INSERT INTO form2 (alumniname,enrollment,graduation,adres,email,mobile,hmatt,ftatt,os,divi)
VALUES('$aname','$yoe','$yog','$add','$email','$tel','$hmatt','$ftatt','$os','$divi')";

if(mysqli_query($connection,$sql)){
echo"records added";
}else{
echo "error" .$sql.mysqli_error($connection);
}

//attempt to get results
$mysquery="SELECT * FROM form2";
$result=$connection->query($mysquery);

/*display results
if ($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        echo "<br>alumniname: ".$row["aname"];
        echo "<br>enrollment: ".$row["yoe"];
        echo "<br>graduation: ".$row["yog"];
        echo "<br>adres: ".$row["add"];
        echo "<br>email: ".$row["email"];
        echo "<br>mobile: ".$row["tel"];
        echo "<br>hmatt: ".$row["hmatt"];
        echo "<br>ftatt: ".$row["ftatt"];
        echo "<br>os: ".$row["os"];
        echo "<br>divi: ".$row["divi"];
    }

}else  echo "no data"*/
if (mysqli_num_rows($result) > 0){
    $sn=1;
    while($data=mysqli_fetch_assoc($result)){
        ?><table style = "border:2px">
        <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $data['alumniname'];  ?></td>
            <td><?php echo $data['enrollment'];  ?></td>
            <td><?php echo $data['graduation'];  ?></td>
            <td><?php echo $data['adres'];  ?></td>
            <td><?php echo $data['email'];  ?></td>
            <td><?php echo $data['mobile'];  ?></td>
            <td><?php echo $data['hmatt'];  ?></td>
            <td><?php echo $data['ftatt'];  ?></td>
            <td><?php echo $data['os'];  ?></td>
            <td><?php echo $data['divi'];  ?></td>
            </tr></table>
            <?php

        $sn++;}
    }