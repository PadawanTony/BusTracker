<?php

    //load and connect to MySQL database stuff
    require("db_connect.php");

    //if posted data is not empty
    if (!empty($_POST)) {
    //If the username or password is empty when the user submits
    //the form, the page will die.
    //Using die isn't a very good practice, you may want to look into
    //displaying an error message within the form instead.
    //We could also do front-end form validation from within our Android App,
    //but it is good to have a have the back-end code do a double check.
        if (empty($_POST['routeID']) ) {
            // Create some data that will be the JSON response
            $response["success"] = 0;
            $response["message"] = "Something went wrong";
            //die will kill the page and not execute any code below, it will also
            //display the parameter... in this case the JSON data our Android
            //app will parse
            die(json_encode($response));
        }

    $routeID = $_POST['routeID'];

    //gets bus's coordinates
    $query = "SELECT * FROM Coordinates WHERE routeID='$routeID' ORDER BY theDate DESC, theTime DESC LIMIT 1;";

    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute();
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message.
        //die("Failed to run query: " . $ex->getMessage());

        //or just use this use this one to product JSON data:
        $response["success"] = 0;
        $response["message"] = "Database Error1. Please Try Again!";
        echo json_encode($response);

    }

    //fetching all the rows from the query
    $row = $stmt->fetch();
    if (!empty($row)) {        
        $response["success"] = 1;
        $response["message"]   = array();
        
        $therequest = array();
        $therequest["ID"] = $row["ID"];
        $therequest["routeID"] = $row["routeID"];
        $therequest["theDate"]  = $row["theDate"];
        $therequest["theTime"]  = $row["theTime"];
        $therequest["lat"]  = $row["lat"];
        $therequest["lng"]  = $row["lng"];
        
        //update our repsonse JSON data
        array_push($response["message"], $therequest);
        echo json_encode($response);    

    } else {
        // no coords found
        $response["success"] = 0;
        $response["message"] = "No coords found";
        
        // echo no coords JSON
        echo json_encode($response);
    }
}else {
?>
    <h1>Register</h1>
    <form action="getCoordinates.php" method="post">
        routeID:<br />
        <input type="text" name="routeID" value="" />
        <br /><br />
        <input type="submit" value="Submit" />
    </form>
    <?php
}
?>