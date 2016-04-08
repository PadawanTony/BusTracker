<?php namespace CodeBurrow\Repositories\QuoteRepositories;
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 6/14/2015
 * Time: 7:50 PM
 */

class StaticQuoteRepository implements QuoteRepository
{
    private $quotes;

    public function __construct()
    {
        $this->quotes = require __DIR__ . '/../../storage/quotes.php';
    }

    public function getRandom()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}