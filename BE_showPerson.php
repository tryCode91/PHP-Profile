<?php require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";

$sql ="select ID, Firstname, Lastname, Age, Email, Status, Musictaste, Language, format(Start_time, 'yyyy-MM-dd') as Start_time from Persons order by ID";

$result=sqlsrv_query($conn, $sql);
if(!$result){
	echo "Error in result query";
}

$result_arr = array();
while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
	$result_arr[] = array(
		'ID'=>$row['ID'], 
		'Name'=>ucfirst($row['Firstname'])." ".ucfirst($row['Lastname']), 
		'Email'=>$row['Email'], 
		'Age'=>$row['Age'], 
		'Status'=>$row['Status'],
		'Musictaste'=>$row['Musictaste'],
		'Language'=>$row['Language'],
		'Start_time'=>$row['Start_time'],
	);
}
$result_json = json_encode($result_arr);

//chartjs
$sql ="select Musictaste, count(ID) as total from persons group by Musictaste";
$result = sqlsrv_query($conn, $sql);
$music_arr=array();
while($row = sqlsrv_fetch_array($result)){
	$music_arr[] = array(
			'total'=>$row['total'], 
			'Musictaste'=>$row['Musictaste']
	);
}

$sql = "select Language, count(ID) as total from Persons group by Language";
$result = sqlsrv_query($conn, $sql);
$lang_arr=array();
while($row=sqlsrv_fetch_array($result)){
	$lang_arr[]=array(
		'total'=>$row['total'],
		'Language'=>$row['Language']
	);
}
sqlsrv_free_stmt($result);
sqlsrv_close($conn);
?>