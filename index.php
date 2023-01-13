<?php

require 'vendor/autoload.php';

use AlgoPhp\Oop\QuestionList;

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

$questionList = new QuestionList();
$json = $questionList::parse('question.md')->saveJson('question.json');

