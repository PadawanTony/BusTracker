<?php namespace CodeBurrow\Requests;

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 10/03/16
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