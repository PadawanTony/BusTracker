<?php namespace CodeBurrow\Transformers;

/**
 * Abstract Class. Transforms collection array.
 *
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  10/03/16
 */
abstract class Transformer
{

	/**
	 * Transform a collection of items.
	 *
	 * @param array $items
	 *
	 * @return array
	 */
	public function transformCollection($items)
	{
		$transformedItems = [];

		foreach ($items as $item)
		{
			$transformedItems[] = $this->transform($item);
		}

		return $transformedItems;
	}

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public abstract function transform($item);
}