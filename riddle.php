<?php

/*********************************************************
 * This program displays a PHPer token.                  *
 * Guess 'N'.                                            *
 *                                                       *
 * Hints:                                                *
 * - N itself has no special meaning, e.g., 42, 8128,    *
 *   it is selected at random.                           *
 * - Each element of $token represents a single letter.  *
 * - One letter consists of 5x5 cells.                   *
 * - Remember, the output is a complete PHPer token.     *
 *                                                       *
 * License:                                              *
 *   https://creativecommons.org/publicdomain/zero/1.0/  *
 *********************************************************/
const N = 0 /* Change it to your answer. */;
assert(0 <= N && N <= 0b11111_11111_11111_11111_11111);

$token = [
  0x14B499C,
  0x0BE34CC, 0x01C9C69,
  0x0ECA069, 0x01C2449, 0x0FDB166, 0x01C9C69,
  0x01C1C66, 0x0FC1C47, 0x01C1C66,
  0x10C5858, 0x1E4E3B8, 0x1A2F2F8,
];
foreach ($token as $x) {
  $x = $x ^ N;

  $x = sprintf('%025b', $x);
  $x = str_replace(search: ['0', '1'], replace: [' ', '#'], subject: $x);
  $x = implode("\n", str_split($x, length: 5));
  echo "{$x}\n\n";
}
