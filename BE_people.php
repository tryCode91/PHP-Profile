<?php
require_once $_SERVER['DOCUMENT_ROOT']."/v2Test/dbsqlconnection.php";
$res=array();
$sql="select persons.ID, persons.Firstname, persons.Lastname,persons.Musictaste,persons.Email,
storeImage.imageID, storeImage.Image, storeImage.time_added, person_details.id, person_details.Work_experience,person_details.Additional_details,
person_details.time from persons 
left JOIN storeImage ON (storeImage.imageID = persons.ID)
left JOIN person_details ON (person_details.id = persons.ID) 
where
storeImage.time_added = (select max(n2.time_added) from storeImage n2 where n2.imageID = persons.id)
AnD (person_details.time = (select max(n2.time) from person_details n2 where n2.id = persons.id))
";
$result = sqlsrv_query($conn,$sql);
while($row=sqlsrv_fetch_array($result)){
    $res[]=array(
        'ID'=>$row['ID'], 
		'Name'=>ucfirst($row['Firstname'])." ".ucfirst($row['Lastname']), 
		'Email'=>$row['Email'], 
		'Musictaste'=>$row['Musictaste'],
        'Image'=>$row['Image'],
        'Work_exp'=>$row['Work_experience'],
        'Additional_details'=>$row['Additional_details'],
    );
}
json_encode($res);
?>  