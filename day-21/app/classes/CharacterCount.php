<?php


namespace App\classes;


class CharacterCount
{
    public $sentence;
    public $result;

    public function __construct($data)
    {
        $this->sentence = $data['text'];
    }

    public function getSentence()
    {
        $this->result = strlen($this->sentence);
        return $this->result;
    }

}