<?php

error_reporting(0);
session_start();
include('connection.php');

if (isset ($_POST[('a_username')]) && isset ($_POST[('a_pass')]) )
{
$a_username=$_POST['a_username']; 
$a_pass=$_POST['a_pass'];

$query = "SELECT * FROM `admin` WHERE `a_username` = '$a_username' && `a_pass` = '$a_pass'";
$result = mysqli_query ($con, $query);

if ( mysqli_num_rows($result)>0)
{

	while ($data_row=mysqli_fetch_array($result))
		{
			$_SESSION['a_name']=$data_row['a_name'];
				header( 'location:index.php') ;
			
		}
		
}



	
	else
	echo "<script type=\"text/javascript\" >
		alert(\"Wrong Username or Password\");
		window.location=\"../../index.php\";
		</script>"; 
	

}

?>