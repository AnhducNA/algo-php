<?php

namespace AlgoPhp\Oop;

use JsonSerializable;

class Question implements JsonSerializable
{
    /**
     * @var $number
     */
    private $number;

    /**
     * @var $title
     */
    private $title;

    /**
     * @var $content
     */
    private $content;

    /**
     * @var $answer
     */
    private $answer;

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

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer): void
    {
        $this->answer = $answer;
    }

    /**
     * @return array
     */
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