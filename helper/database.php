<?php
$server='localhost';
$username='root';
$password='';
$db_name='blog';
function getRows($q){
    $result=[];
    try{
        $con=mysqli_connect($GLOBALS['server'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['db_name']);
        if($con){
            $query=mysqli_query($con,$q);
            while($row = mysqli_fetch_row($query)){	
                array_push($result,$row);
            }
            mysqli_close($con);    
        }        
    }
    catch(Exception $e){

    }
    return $result;
}
?>