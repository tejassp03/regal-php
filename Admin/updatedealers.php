<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminiid_iclub";

/* Create connection */
$con =mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST['adddealer'])){
	$name=$_POST['name'];
	$address=addslashes($_POST['address']);
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	$hobli=$_POST['hobli'];
	$taluk=$_POST['taluk'];
    $pincode=$_POST['pincode'];
	
    $sqll="select * from prajaseve_dealers where Phone='$phone'";
				$ress=mysqli_query($con,$sqll);
				if(mysqli_num_rows($ress)>0){
					echo '<script>alert("The Dealer data exists."); location.href="prajaseve.php";</script>';
				}
                else
                {
                    $query = " insert into `prajaseve_dealers`(Company,Name,Address,Hobli,Taluk,Pincode,Phone) values('$company','$name','$address','$hobli','$taluk','$pincode','$phone' )";
		            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    if($result)
		            {
                        echo '<script>alert("Successfully Uploaded"); location.href="prajaseve.php";</script>';
                    }
                    else
                    {
                        echo '<script>alert("Error Uploading Data"); location.href="prajaseve.php";</script>';

                    }
                }
            }

?>