<?php
/**
3 * DWA15 - Project 1
4 *
5 * PHP version  5
6 *
7 * @author    Roman Orlov, <riorlov@gmail.com>
9 */

/**
21   * returns a string for the random element of the array
22   *
23   * @param array $quoteArray array of quotes
25   *
26   * @return string
27   */

function getRandomQuote(array $quoteArray) {
    return $quoteArray[array_rand($quoteArray,1)];
}
$quoteArray = [
    0 => 'I love you the more in that I believe you had liked me for my own sake and for nothing else. -John Keats',
    1 => 'But man is not made for defeat. A man can be destroyed but not defeated. -Ernest Hemingway',
    2 => 'When you reach the end of your rope, tie a knot in it and hang on. -Franklin D. Roosevelt'
];

