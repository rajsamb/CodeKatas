<?php

namespace test\LeetCode\Problems;

use CodeKatas\LeetCode\Problems\ReverseWords;
use Generator;
use PHPUnit\Framework\TestCase;

class ReverseWordsTest extends TestCase
{
    /**
     * @dataProvider stringDataProvider
     * @test
     */
    public function it_correctly_reverse_words_in_a_string_using_solution_one(
        string $stringToReverse,
        string $expectedResult
    ): void {
        $sut = new ReverseWords();
        $actualResult = $sut->solutionOne($stringToReverse);

        self::assertSame($expectedResult, $actualResult);
    }

    /**
     * @dataProvider stringDataProvider
     *
     */
    public function it_correctly_reverse_words_in_a_string_using_solution_two(
        string $stringToReverse,
        string $expectedResult
    ): void {
        $sut = new ReverseWords();
        $actualResult = $sut->solutionTwo($stringToReverse);

        self::assertSame($expectedResult, $actualResult);
    }

    /**
     * @return Generator
     */
    public function stringDataProvider(): Generator
    {
        yield [
            'My name is sambhu',
            'sambhu is name My',
        ];

        yield [
            'sambhu',
            'sambhu',
        ];

        yield [
            'sambhu ',
            'sambhu',
        ];

        yield [
            '    My name is sambhu    ',
            'sambhu is name My',
        ];

        yield [
            'a good   example',
            'example good a',
        ];
    }
}
