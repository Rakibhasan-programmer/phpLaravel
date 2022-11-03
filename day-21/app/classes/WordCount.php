<?php


namespace App\classes;


class WordCount
{
    public $sentence;
    public $result;

    public function __construct($data)
    {
        $this->sentence = $data['text'];
    }

    public function getSentence()
    {
        $this->result = str_word_count($this->sentence);
        return $this->result;
    }

}