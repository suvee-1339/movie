<?php

//fetch.php


$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($form_data->search_query))
{
 $search_query = $form_data->search_query;
 $query = "
 SELECT * FROM browse 
 WHERE (movies LIKE '%$search_query%' 
 OR theatre LIKE '%$search_query%' 
 OR location LIKE '%$search_query%' 
 OR date LIKE '%$search_query%' )
 
 ";
}
else
{
 $query = "SELECT * FROM browse ORDER BY movies ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
 
}

?>