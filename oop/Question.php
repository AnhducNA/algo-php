<?php

namespace algo_php\oop;

use JsonSerializable;

class Question implements JsonSerializable
{
    public $number;
    public $title;
    public $content;
    public $answer;

    /**
     * @param $number
     * @param $title
     * @param $content
     * @param $answer
     */
    public function __construct($number, $title, $content, $answer)
    {
        $this->number = $number;
        $this->title = $title;
        $this->content = $content;
        $this->answer = $answer;
    }


    public function jsonSerialize()
    {
        return [
            'number' => $this->number,
            'title' => $this->title,
            'content' => $this->content,
            'answers' => $this->answer,
        ];
    }
}