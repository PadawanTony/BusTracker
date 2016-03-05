<?php
// array for JSON response
$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

//initial query
$query = "SELECT * FROM Routes";


//execute query
try {
    $stmt   = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch (PDOException $ex) {
    $response["success"] = 0;
    $response["message"] = "Database Error!";
    die(json_encode($response));
}

// Finally, we can retrieve all of the found rows into an array using fetchAll 
$rows = $stmt->fetchAll();

if (!empty($rows)) {		
		$response["success"] = 1;
		$response["request"]   = array();
		
		foreach ($rows as $row) {
		        $therequest = array();
		        $therequest["ID"] = $row["ID"];
		        $therequest["name"] = $row["name"];
		        $therequest["school"]  = $row["school"];
		        
		         //update our repsonse JSON data
		         array_push($response["request"], $therequest);
		}
				
		echo json_encode($response);    
} else {
        // no product found
	$response["success"] = 0;
	$response["message"] = "No product found";
	
        // echo no users JSON
	echo json_encode($response);
}
?>