<?php

// License: https://creativecommons.org/publicdomain/zero/1.0/
// This is a quine-like program to generate a PHPer token.
// Execute it like this: php toquine.php | php | php | php | ...

$s = <<<'EOS'
<?php

// License: https://creativecommons.org/publicdomain/zero/1.0/
// This is a quine-like program to generate a PHPer token.
// Execute it like this: php toquine.php | php | php | php | ...

%s$s = %s;
$xs = [
%s,
];
$t = null.false; for ($i = 0; $i <= intdiv(__LINE__-035,6); ++$i) if (!isset($xs[$i])) break; else
$t .= implode("\n", str_split(str_replace(['0','1'], ['  ','##'], sprintf(chr(37) . '025b', $xs[$i])), 012)) . "\n\n";
$ws = array_map(fn($w) => implode(', ', $w), array_chunk(array_map(fn($x) => sprintf('0x' . chr(37) . '07X', $x), $xs), 10));
printf($s, $t, "<<<'EOS'\n{$s}\nEOS", implode(",\n", $ws));

EOS;
$xs = [
0x0AFABEA, 0x1F294A7, 0x1F2109F, 0x1F294A7, 0x0002800, 0x1F2109F, 0x0117041, 0x1F294A7, 0x1FAD6B5, 0x1F295B7,
0x010FC21, 0x1FAD6B5, 0x1151151, 0x010FC21, 0x1F294A7, 0x1F295B7, 0x1FAD6B5, 0x1F294A7, 0x1F295B7, 0x1F8C63F,
0x1F8C631, 0x1FAD6B5, 0x17AD6BD, 0x17AD6BD, 0x1F8C63F, 0x1F295B7,
];
$t = null.false; for ($i = 0; $i <= intdiv(__LINE__-035,6); ++$i) if (!isset($xs[$i])) break; else
$t .= implode("\n", str_split(str_replace(['0','1'], ['  ','##'], sprintf(chr(37) . '025b', $xs[$i])), 012)) . "\n\n";
$ws = array_map(fn($w) => implode(', ', $w), array_chunk(array_map(fn($x) => sprintf('0x' . chr(37) . '07X', $x), $xs), 10));
printf($s, $t, "<<<'EOS'\n{$s}\nEOS", implode(",\n", $ws));
