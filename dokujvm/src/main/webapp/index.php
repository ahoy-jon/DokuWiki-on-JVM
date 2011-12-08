

<!DOCTYPE html>
<html>
 <meta charset="utf-8" />
 <head>
   <title>Page HTML5 en PHP5</title>
  </head>
  <body>

<h1>Coucou, je suis une page HTML5 en PHP5 !</h1>

<h2>Quelques tests</h2>

<h3>Conversions de fous (atoi mon ami)</h3>

<pre>
<?php $a = 0; $b = 'x';  ?>
$a = 0; $b = 'x';
<?php if(FALSE == $a) : ?>
OK - FALSE == $a 
<?php else: ?>
KO - FALSE != $a
<?php endif ?>
<?php if($a == $b) : ?>
OK - $a == $b
<?php else: ?>
KO - $a != $b
<?php endif ?>
<?php if($b == TRUE) : ?>
OK - $b == TRUE
<?php else: ?>
KO - $b != TRUE
<?php endif ?>
</pre>

Encore un peu : 
<?php $a = "00002" ; $b = "2" ?>
<pre>$a = "00002" ; $b = "2"
<?php if($a == $b): ?>
OK - $a == $b
<?php else: ?>
KO - $a != $b
<?php endif ?>
</pre>



<h3>php_uname() ?</h3>
<pre>
<?php echo php_uname() ?>
</pre>

<h3>Quelques noms de variables</h3>
<pre>
$a = 1;
$$a = 'foo';
print ${1};
------
<?php 
$a = 1;
$$a = 'foo';
print ${1};
?></pre>


<h3>Incrémentation</h3>
<pre>
for ($i = 'a'; $i  <= 'z'; ++$i) echo "$i ";
----------------
</pre><p><?php
for ($i = 'a'; $i <= 'z'; ++$i) echo "$i ";
?></p>

<h3>Incrémentation  - 2</h3>
<pre>
$a = array_fill(0, 4, NULL);
$a[0]++;
++$a[1];
$a[2]--;
--$a[3];
$a[4]-=1;
var_dump($a);
-----------------
<?php
$a = array_fill(0, 5, NULL);
 $a[0]++;
 ++$a[1];
 $a[2]--;
 --$a[3];
 $a[4]-=1;
 var_dump($a);?>
</pre>


<h3>De temps en temps, == est mieux que ===</h3>
<pre>
$array1 = array(
  'foo' => 'foo',
  'bar' => 'bar',
);

$array2 = array(
  'bar' => 'bar',
  'foo' => 'foo',
);

var_dump(array_diff($array1, $array2)); 
var_dump($array1 == $array2);
var_dump($array1 === $array2);
-----------------------------
<?php
$array1 = array(
  'foo' => 'foo',
  'bar' => 'bar',
);

$array2 = array(
  'bar' => 'bar',
  'foo' => 'foo',
);

var_dump(array_diff($array1, $array2)); 
var_dump($array1 == $array2); 
var_dump($array1 === $array2);
?></pre>
</body>
</html>
