<?php
$db_server="localhost";
$db_username="root";
$db_password="";
$db_name="thirddatabase";
function execute ($query)
{
  global $db_server,$db_username,$db_password,$db_name;
  $conn=mysqli_connect($db_server,$db_username,$db_password,$db_name);
  if($conn){
    if(mysqli_query($conn,$query)){
      return true;
    }
    else{
      return mysqli_error($conn);
    }
  }

}
function get($query) 
    {
        global $db_server,$db_username,$db_password,$db_name;
        $conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);
        $data = array();
        if($conn){
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
        return $data;

    }

 ?>