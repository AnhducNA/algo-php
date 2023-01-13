<?php

namespace AlgoPhp\Oop\Interface;

use AlgoPhp\Oop\Question;
use AlgoPhp\Oop\QuestionList;

interface Collection
{
    /**
     * @param Question $question
     * @return array
     */
    function add(Question $question): array;

    /**
     * @return array
     */
    function all(): array;

    /**
     * @return Question|NULL
     */
    function first(): Question | NULL;

    /**
     * @return Question|NULL
     */
    function last(): Question | NULL;

    /**
     * @param $callback
     * @return QuestionList
     */
    function map($callback): QuestionList;

    /**
     * @param $callback
     * @return QuestionList
     */
    function filter($callback): QuestionList;

    /**
     * @param $key
     * @return array
     */
    function pluck($key = "index"): array;

    /**
     * @param Question $question
     * @return void
     */
    function push(Question $question):void;

    /**
     * @param $callback
     * @return QuestionList
     */
    function sortBy($callback): QuestionList;
}