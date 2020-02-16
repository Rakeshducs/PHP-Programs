<?php
$num = 12345;
$n = $num;
$rev = 0;
$rem = 0;
while ($num >= 1) {
  $rem = $num % 10;
  $rev = $rev * 10 + $rem;
  $num = $num / 10;
}
echo "reverse of digits $n is $rev";
