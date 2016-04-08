<?php namespace CodeBurrow\Requests;

/**
 */
interface Request
{
	/**
	 * Validate data of current request.
	 *
	 * @return mixed
	 */
	public function validate();
}