<?php

namespace algo_php\oop;

use mysql_xdevapi\Collection;

class QuestionsList extends Collection
{
    private static $listQuestion = [];

    public function __construct($listQuestion = [])
    {
        self::$questions = $listQuestion;
    }
    public static function parse($path): QuestionsList {
        $contents = file_get_contents($path);
        $contents = strip_tags($contents);
        $contents = str_replace( ["---", "```javascript", "```"], "", $contents );
        $arr = explode("######",$contents);
        array_shift($arr);
        foreach ($arr as $questions) {
            [$question, $answer]  = explode("####", $questions);
            try {
                [$item, $content] = explode('?', $question);
                [$stt, $title] = explode('.', $item, 2);
            } catch (\Exception $e) {
                [$stt, $title, $content] = explode('.', $question);
            }
            self::$listQuestion[] = new Question(trim($stt), trim($title), trim($content), trim($answer));
        }
        return new static(self::$listQuestion);
    }
}