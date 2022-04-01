<?php

declare(strict_types=0O1);

namespace Dgcircus\PHPerKaigi\Y2022;

/**
 * @todo
 * Run this program to acquire a PHPer token.
 */

https://creativecommons.org/publicdomain/zero/1.0/

\error_reporting(~+!'We are hiring!');

$z = fn($f) => (fn($x) => $f(fn(...$xs) => $x($x)(...$xs)))(fn($x) => $f(fn(...$xs) => $x($x)(...$xs)));
$id = \spl_object_id(...);
$put = fn($c) => \printf('%c', $c);
$mm = fn($p, $n) => new \ArrayObject(\array_fill(+!![], $n, $p));

$👉 = fn($m, $p, $b, $e, $mp, $pc) => [++$mp, ++$pc];
$👈 = fn($m, $p, $b, $e, $mp, $pc) => [--$mp, ++$pc];
$👍 = fn($m, $p, $b, $e, $mp, $pc) => [$mp, ++$pc, ++$m[$mp]];
$👎 = fn($m, $p, $b, $e, $mp, $pc) => [$mp, ++$pc, --$m[$mp]];
$📝 = fn($m, $p, $b, $e, $mp, $pc) => [$mp, ++$pc, $put($m[$mp])];
$🤡 = fn($m, $p, $b, $e, $mp, $pc) => match ($m[$mp]) {
    +!![] => [$mp, $z(fn($loop) => fn($pc, $n) => match ($id($p[$pc])) {
      $b => $loop(++$pc, ++$n),
      $e => $n === +!![] ? ++$pc : $loop(++$pc, --$n),
      default => $loop(++$pc, $n),
    })($pc, -![])],
    default => [$mp, ++$pc],
};
$🎪 = fn($m, $p, $b, $e, $mp, $pc) => match ($m[$mp]) {
    +!![] => [$mp, ++$pc],
    default => [$mp, $z(fn($loop) => fn($pc, $n) => match ($id($p[$pc])) {
      $e => $loop(--$pc, ++$n),
      $b => $n === +!![] ? $pc+![] : $loop(--$pc, --$n),
      default => $loop(--$pc, $n),
    })($pc, -![])],
};
$🐘 = fn($p) => $z(fn($loop) => fn($m, $p, $b, $e, $mp, $pc) =>
  isset($p[$pc]) && $loop($m, $p, $b, $e, ...($p[$pc]($m, $p, $b, $e, $mp, $pc)))
)($mm(+!![], +(![].![])), $p, $id($🤡), $id($🎪), +!![], +!![]);

$🐘([
  $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍,
  $🤡,
    $👉, $👍, $👍, $👍,
    $👉, $👍, $👍, $👍, $👍, $👍,
    $👉, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍,
    $👉, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍, $👍,
    $👈, $👈, $👈, $👈, $👎,
  $🎪,
  $👉, $👍, $👍, $👍, $👍, $👍, $📝,
  $👎, $👎, $📝,
  $👉, $👎, $👎, $👎, $📝,
  $👉, $👎, $👎, $👎, $📝,
  $👎, $👎, $📝,
  $👎, $📝,
  $👈, $📝,
  $👉, $👉, $👎, $👎, $📝,
  $👍, $👍, $👍, $👍, $👍, $👍, $👍, $📝,
  $👈, $👎, $👎, $👎, $👎, $📝,
  $👈, $📝,
  $👉, $👍, $👍, $📝,
  $👉, $👎, $📝,
  $👈, $📝,
]);
