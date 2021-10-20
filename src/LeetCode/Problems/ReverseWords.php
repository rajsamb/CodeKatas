<?php

namespace CodeKatas\LeetCode\Problems;

class ReverseWords
{
    public function solutionOne(string $stringToReverse): string
    {
        $stringParts = explode(' ', $stringToReverse);

        $sanitizedStringParts = [];
        foreach ($stringParts as $stringPart) {
            if ($stringPart === "") {
                continue;
            }
            $sanitizedStringParts[] = trim($stringPart);
        }

        $reversedStringParts = array_reverse($sanitizedStringParts);
        return implode(' ', $reversedStringParts);
    }

    /**
     * Not Complete
     * @param string $stringToReverse
     * @return string
     */
    public function solutionTwo(string $stringToReverse): string
    {
        $reversedString = '';
        $totalLengthOfString = strlen($stringToReverse);


        for ($i = $totalLengthOfString -1; $i > -1; $i--) {
            $reversedString .= $stringToReverse[$i];
        }

        return $reversedString;
    }
}
