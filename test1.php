<?php
$f=1;
$r=0;
$s=0;
echo "$r $f";
for ($a=0; $a<63; $a++){
$s=$r+$f;
$r=$f;
$f=$s;
echo " $s";
}