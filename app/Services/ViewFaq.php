<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class ViewFaq extends Database
{
	
	public function fetchAllFaq()
	{
		$query_faq = "SELECT * FROM FAQ;";
		
		try {
			$db = $this->getDbConnection();
			$stmt_faq = $db->prepare($query_faq);
			$result_faq = $stmt_faq->execute();
		}
		catch (PDOException $ex) {
			// For testing, you could use a die and message.
			//die("Failed to run query: " . $ex->getMessage());
			
			//or just use this use this one to product JSON data:
			$response["success"] = 0;
			$response["message"] = "Database Error. Please Try Again!";
			echo json_encode($response);
		}
		
		//fetching all the rows from the query
		$row_faq = $stmt_faq->fetchAll();

		return $row_faq;

//		if ( !empty($row_faq) ) {
//			$response["success"] = 1;
//			$response["faq"] = array();
//			$response["message"] = "Here are All the FAQ";
//			
//			foreach ($row_faq as $faq) {
//				$thefaq = array();
//				$thefaq["ID"] = $faq["ID"];
//				$thefaq["questionENG"] = $faq["questionENG"];
//				$thefaq["answerENG"] = $faq["answerENG"];
//				array_push($response["faq"], $thefaq);
//			}
//			
//			return $response;
//		} else {
//			// no routes found
//			$response["success"] = 0;
//			$response["message"] = "No FAQ Found";
//			
//			return $response;
//		}
		
	}
}

