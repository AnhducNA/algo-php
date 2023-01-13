<?php

require 'vendor/autoload.php';

use AlgoPhp\Oop\QuestionList;

$questionList = new QuestionList();
$json = $questionList::parse('question.md');
