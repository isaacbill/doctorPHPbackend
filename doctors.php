<?php
$host='localhost';
$user='root';
$pwd='';
$db='doctorappointment';
$conn=mysqli_connect($host,$user,$pwd,$db);

if (!$conn) {
	die("ERROR in connection:" .mysqli_connect_error());
}
$response= array();
$sql_query="select * from doctors";
$result=mysqli_query($conn,$sql_query);

if(mysqli_num_rows($result) >0){
	$response['success']=1;
	$doctors=array();
	while ($row=mysqli_fetch_assoc($result)) {
		# code...
		array_push($doctors,$row);
	}
	$response['doctors']=$doctors;
}
else{
	$response['success']=0;
	$response['message']='No Data';
}
echo json_encode($response);
mysqli_close($conn);
?>
