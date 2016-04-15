<?php namespace CodeBurrow\Transformers;

/**
 * Abstract Class. Transforms collection array.
 *
 */
class FaqTransformer extends Transformer
{

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($item)
	{
		return [
			"ID"      => $item["ID"],
			"questionENG" => $item["questionENG"],
			"answerENG" => $item["answerENG"],
		];
	}
}