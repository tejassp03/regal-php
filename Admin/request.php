<?php

include 'config.php';



if(isset($POST['topic']))
{
$query="SELECT sub_topic from topics where topic=".$POST['topic'];
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_array($res))
    {
        
    }
}


}


?>