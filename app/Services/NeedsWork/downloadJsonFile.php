<?php
header('Content-type: text/plain; charset=utf-8');

    //load and connect to MySQL database stuff
    require("db_connect.php");

    //gets bus's coordinates
    // $query = "SELECT * FROM Coordinates ORDER BY theTime DESC LIMIT 1;";
    // Routes.ID, Routes.name, Routes.school, 
    $query_routes = "SELECT * FROM Routes;";

    $query_stops = "SELECT RouteStops.routeID, RouteStops.stopTime,RouteStops.nameOfStop, RouteStops.description, RouteStops.lat AS rsLat, RouteStops.lng AS rsLng 
              FROM Routes 
              INNER JOIN RouteStops on Routes.ID = RouteStops.routeID;";


    $query_snapped = "SELECT SnappedPoints.routeID, SnappedPoints.lat, SnappedPoints.lng, SnappedPoints.originalIndex, SnappedPoints.placeID 
              FROM Routes 
              INNER JOIN SnappedPoints on Routes.ID = SnappedPoints.routeID;";


    try {
        $stmt_routes = $db->prepare($query_routes);
        $result_routes = $stmt_routes->execute();

        $stmt_stops = $db->prepare($query_stops);
        $result_stops = $stmt_stops->execute();
        
        $stmt_snapped   = $db->prepare($query_snapped);
        $result_snapped = $stmt_snapped->execute();    
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
    $row_routes = $stmt_routes ->fetchAll();
    $row_stops = $stmt_stops->fetchAll();
    $row_snapped = $stmt_snapped->fetchAll();
    
    if (!empty($row_routes) || !empty($row_stops) || !empty($row_snapped)) {        
        // $response["success"] = 1;
        // $response["message"]   = array();
        $response["success"] = 1;
        $response["routes"] = array();
        foreach ($row_routes as $row) {
            $theroutes = array();
            $theroutes["ID"] = $row["ID"];
            $theroutes["name"] = $row["name"];
            $theroutes["school"] = $row["school"];
            $theroutes["routeStops"] = array();
            $theroutes["snappedPoints"] = array();
            // array_push($response["routes"], $theroutes);
            
            foreach ($row_stops as $rowstop) {
                if ($rowstop["routeID"] == $row["ID"]){
                    $thestops = array();
                    $thestops["nameOfStop"] = $rowstop["nameOfStop"];
                    $thestops["stopTime"] = $rowstop["stopTime"];
                    $thestops["lat"] = $rowstop["rsLat"];
                    $thestops["lng"] = $rowstop["rsLng"];
                    array_push($theroutes["routeStops"], $thestops);
                }
            }

            foreach ($row_snapped as $rowsnap) {
                if ($rowsnap["routeID"] == $row["ID"]){
                    $thesnaps = array();
                    $thesnaps["location"] = array();
                    $thesnaps["location"]["latitude"] = $rowsnap["lat"];
                    $thesnaps["location"]["longitude"] = $rowsnap["lng"];
                    $thesnaps["originalIndex"] = $rowsnap["originalIndex"];
                    $thesnaps["placeID"] = $rowsnap["placeID"];    
                    array_push($theroutes["snappedPoints"], $thesnaps);
                }
            }

            array_push($response["routes"], $theroutes);
        }

        echo json_encode($response);

    } else {
        // no coords found
        $response["success"] = 0;
        $response["message"] = "No coords found";
        
        // echo no coords JSON
        echo json_encode($response);
    }
    
?>