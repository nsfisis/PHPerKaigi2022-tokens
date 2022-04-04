<?php

// License: https://creativecommons.org/publicdomain/zero/1.0/
// This is a quine-like program to generate a PHPer token.
// Execute it like this: php toquine.php | php | php | php | ...







$s = <<<'EOS'
<?php

// License: https://creativecommons.org/publicdomain/zero/1.0/
// This is a quine-like program to generate a PHPer token.
// Execute it like this: php toquine.php | php | php | php | ...

%s

$s = %s;
$xs = [
%s,
];
const N = %s; $zs = ['','','','','']; for ($i = 0; $i < N; ++$i) foreach ($zs as $j => &$z)
$z .= ' ' . substr(str_replace(['0','1'], [' ','#'], sprintf(chr(37) . '025b', $xs[$i])), 5*$j, 5);
$ws = array_map(fn($w) => implode(', ', $w),array_chunk(array_map(fn($x) => sprintf('0x' . chr(37) . '07X', $x), $xs), 10));
printf($s, implode("\n", $zs), "<<<'EOS'\n{$s}\nEOS", implode(",\n", $ws), [1,N+1][N<26]);

EOS;
$xs = [
0x0AFABEA, 0x1F8FE10, 0x118FE31, 0x1F8FE10, 0x0020080, 0x118FE31, 0x1151084, 0x1F8FE10, 0x1F87E1F, 0x1F8FE51,
0x1F21084, 0x1F87E1F, 0x1151151, 0x1F21084, 0x1F8FE10, 0x1F8FE51, 0x1F87E1F, 0x1F8FE10, 0x1F8FE51, 0x1F8C63F,
0x1F8421F, 0x1F87E1F, 0x1F87C3F, 0x1F87C3F, 0x1F8C63F, 0x1F8FE51,
];
const N = 1; $zs = ['','','','','']; for ($i = 0; $i < N; ++$i) foreach ($zs as $j => &$z)
$z .= ' ' . substr(str_replace(['0','1'], [' ','#'], sprintf(chr(37) . '025b', $xs[$i])), 5*$j, 5);
$ws = array_map(fn($w) => implode(', ', $w),array_chunk(array_map(fn($x) => sprintf('0x' . chr(37) . '07X', $x), $xs), 10));
printf($s, implode("\n", $zs), "<<<'EOS'\n{$s}\nEOS", implode(",\n", $ws), [1,N+1][N<26]);
