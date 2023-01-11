<?php

namespace algo_php\oop\Interface;

use algo_php\oop\Question;
use algo_php\oop\QuestionsList;

interface Collection
{
    public function all(): array;

    public function filter($callback): QuestionsList;

    public function first(): Question|null;

    public function last(): Question|null;

    public function map($callback): QuestionsList;

    public function push($value): void;

    public function add($value): array;

    public function sortBy($type = "DESC"): void;

    public function saveJson($path): string;
}