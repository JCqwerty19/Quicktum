<?php

namespace App\Models;

class Task2
{
    // Constructor
    public function __construct(
        public string $string,
    ) {
        $this->string = $string;
    }

    // Check code function
    public function check(): string
    {
        $string = ($this->string);

        $answer = $this->checkText($string);

        return $this->returnText($answer);
    }

    // Check text function
    private function checkText(string $string): bool
    {
        // create array
        $array = [];

        for ($i = 0; $i < strlen($string); $i++) {

            // giving actual char
            $x = $string[$i];

            // if it's opening bracket, save it
            if ($x === "{") {
                array_push($array, $x);
            }

            // if it's closing bracket, but there is no opening, then return false cuz it's fasle code
            elseif ($x === '}') {
                if (empty($array)) {
                    return false;
                }

                // else delete opening bracket
                array_pop($array);
            }
        }

        return empty($array);
    }

    // Return text function
    private function returnText(bool $answer): string
    {
        // return message if incorrect
        if (!$answer) {
            return 'некорректный код';
        }

        // return messae if correct
        return 'корректный код';
    }
}