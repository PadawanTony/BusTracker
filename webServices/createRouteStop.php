<?php
header('Content-type: text/plain; charset=utf-8');
/*
Our "config.inc.php" file connects to database every time we include or require
it within a php script.  Since we want this script to add a new user to our db,
we will be talking with our database, and therefore,
let's require the connection to happen:
*/
require("db_connect.php");

//if posted data is not empty
if (!empty($_POST)) {
    //If the username or password is empty when the user submits
    //the form, the page will die.
    //Using die isn't a very good practice, you may want to look into
    //displaying an error message within the form instead.
    //We could also do front-end form validation from within our Android App,
    //but it is good to have a have the back-end code do a double check.
    if (empty($_POST['routeID']) || empty($_POST['stopTime']) || empty($_POST['nameOfStop']) || empty($_POST['lat']) || empty($_POST['lng']) ) {


        // Create some data that will be the JSON response
        $response["success"] = 0;
        $response["message"] = "Something went wrong";

        //die will kill the page and not execute any code below, it will also
        //display the parameter... in this case the JSON data our Android
        //app will parse
        die(json_encode($response));
    }
    
$routeID = $_POST['routeID'];
$stopTime = $_POST['stopTime'];
$nameOfStop = $_POST['nameOfStop'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

    //If we have made it here without dying, then we are in the clear to
    //create a new user.  Let's setup our new query to create a user.
    //Again, to protect against sql injects, user tokens such as :user and :pass
    $query = "INSERT INTO RouteStops( routeID, stopTime, nameOfStop, lat, lng ) VALUES ( '$routeID', TIME('$stopTime'), '$nameOfStop', '$lat', '$lng' )";


    //time to run our query, and create the user
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message.
        //die("Failed to run query: " . $ex->getMessage());

        //or just use this use this one:
        $response["success"] = 0;
        $response["message"] = "Database Error2. Please Try Again!";
        die(json_encode($response));
    }

    //If we have made it this far without dying, we have successfully added
    //a new user to our database.  We could do a few things here, such as
    //redirect to the login page.  Instead we are going to echo out some
    //json data that will be read by the Android application, which will login
    //the user (or redirect to a different activity, I'm not sure yet..)
    $response["success"] = 1;
    $response["message"] = "Stop Successfully Added!";
    echo json_encode($response);

    //for a php webservice you could do a simple redirect and die.
    //header("Location: login.php");
    //die("Redirecting to login.php");


} else {
?>
	<h1>Register</h1>
	<form action="createRouteStop.php" method="post">
	    routeID:<br />
	    <input type="text" name="routeID" value="" />
	    <br /><br />
        time:<br />
        <input type="text" name="stopTime" value="" />
        <br /><br />
        name:<br />
        <input type="text" name="nameOfStop" value="" />
        <br /><br />
	    Lat:<br />
	    <input type="text" name="lat" value="" />
	    <br /><br />
	    Lng:<br />
	    <input type="text" name="lng" value="" />
	    <br /><br />
	    <input type="submit" value="Submit" />
	</form>
	<?php
}
?>