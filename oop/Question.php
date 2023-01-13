<?php

namespace AlgoPhp\Oop;

use JsonSerializable;

class Question implements JsonSerializable
{
    private $number;

    private $title;

    private $content;

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
    public function getTitle(): mixed
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
    public function getContent(): mixed
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
    public function getAnswer(): mixed
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
    public function jsonSerialize(): array
    {
        return [
            'number' => $this->number,
            'title' => $this->title,
            'content' => $this->content,
            'answers' => $this->answer,
        ];
    }
}