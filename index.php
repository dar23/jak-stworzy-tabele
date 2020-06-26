<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<br>

<?php 




$conn= new mysqli('127.0.0.1','root','','messages');




if($conn){

echo'connected!<br>';


}else{


echo'no-connected';

}



$base='CREATE DATABASE pindol';


if($base){


echo'base created!<br>';




}else{

echo'no created base!';


}


$conn->query($base);





$tabled="CREATE TABLE rekordy (

    id int(6)  unsigned auto_increment primary key,
    wiersz varchar(30) not null
    )";
    
    
    
    if($tabled){
    
    
    echo'table created!';
    
    
    
    }else{
    
    
    echo'table no_created!';
    
    
    
    }
    




































?>















</body>
</html>