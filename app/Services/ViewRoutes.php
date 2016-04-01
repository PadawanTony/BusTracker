<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;
use PDOException;

class ViewRoutes extends Database
{

    public function fetchAllRoutes()
    {
        $query_routes = "SELECT * FROM Routes;";

        try {
            $db = $this->getDbConnection();
            $stmt_routes = $db->prepare($query_routes);
            $result_routes = $stmt_routes->execute();
        } catch (PDOException $ex) {
            // For testing, you could use a die and message.
            //die("Failed to run query: " . $ex->getMessage());

            //or just use this use this one to product JSON data:
            $response[ "success" ] = 0;
            $response[ "message" ] = "Database Error. Please Try Again!";
            echo json_encode($response);
        }

        //fetching all the rows from the query
        $row_routes = $stmt_routes->fetchAll();

        if (! empty($row_routes)) {
            $response[ "success" ] = 1;
            $response[ "routes" ] = [];
            $response[ "message" ] = "Here are All the Routes";

            foreach ($row_routes as $row) {
                $theroutes = [];
                $theroutes[ "ID" ] = $row[ "ID" ];
                $theroutes[ "nameGR" ] = $row[ "nameGR" ];
                $theroutes[ "nameENG" ] = $row[ "nameENG" ];
                $theroutes[ "school" ] = $row[ "school" ];
                $theroutes[ "nickName" ] = $row[ "nickName" ];
                array_push($response[ "routes" ], $theroutes);
            }

            return $response;
        } else {
            // no routes found
            $response[ "success" ] = 0;
            $response[ "message" ] = "No Routes Found";

            return $response;
        }
    }
}

