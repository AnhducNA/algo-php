<?php

namespace AlgoPhp\Oop;

use AlgoPhp\Oop\Interface\Collection;
use Exception;
use Throwable;

class QuestionList
{
    /**
     * @var array|mixed
     */
    protected static $listQuestion = [];

    /**
     * @param $listQuestion
     */
    public function __construct($listQuestion = [])
    {
        self::$listQuestion = $listQuestion;
    }

    /**
     * @param $path
     * @return QuestionList
     */
    public static function parse($path): QuestionList
    {
        $contents = file_get_contents($path);
//        strip_tags() => ngắt thẻ từ chuỗi
        $questionsList = explode('######', strip_tags($contents));
//      Lấy phần tử đầu tiên trong mảng .
        array_shift($questionsList);
        foreach ($questionsList as $item) {
            [$question, $answer] = explode('####', $item);
            try {
                [$title, $content] = explode('?', $question);
                [$stt, $title] = explode('.', $title, 2);
            } catch (Throwable $th) {
                [$stt, $title, $content] = explode('.', $question);
            }
            echo "<pre>";
            var_dump($content);
            self::$listQuestion[] = new Question($stt, trim($title), trim($content), str_replace('---', '', $answer));
        }
        return new static(self::$listQuestion);
    }

    /**
     * @param $path
     * @return int
     */
    public function saveJson($path): int
    {
        $json = json_encode($this->all(), JSON_UNESCAPED_UNICODE);
        return file_put_contents($path, $json) ? 1 : 0;
    }

    /**
     * @param Question $question
     * @return array
     */
    public function add(Question $question): array
    {
        self::$listQuestion[] = $question;
        return $this->$question;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return self::$listQuestion;
    }

    /**
     * @return Question|NULL
     */
    public function first(): Question|null
    {
        return self::$listQuestion[0] ?? NULL;
    }

    /**
     * @return Question|NULL
     */
    public function last(): Question|null
    {
        return self::$listQuestion[count(self::$listQuestion) - 1] ?? NULL;
    }

    /**
     * @param $callback
     * @return $this
     */
    public function map($callback): QuestionList
    {
        self::$listQuestion = array_map($callback, self::$listQuestion);
        return $this;
    }

    /**
     * @param $callback
     * @return $this
     */
    public function filter($callback): QuestionList
    {
        self::$listQuestion = array_filter(self::$listQuestion, $callback);
        return $this;
    }

    /**
     * @param $key
     * @return array
     */
    public function pluck($key = "index"): array
    {
        $tempArray = [];
        foreach (self::$listQuestion as $question) {
            $tempArray[] = $question->$key;
        }
        return $tempArray;
    }

    /**
     * @param Question $question
     * @return void
     */
    public function push(Question $question): void
    {
        array_push(self::$listQuestion, $question);
    }

    /**
     * @param $callback
     * @return $this
     */
    public function sortBy($callback): QuestionList
    {
        usort(self::$listQuestion, $callback);
        return $this;
    }
}
