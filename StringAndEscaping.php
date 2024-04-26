
<?php
/**
 * Data Type
 * ========
 * String and escaping 
 * nl2br
*/

echo "Welcome PHP";
echo "<br>";
echo 'Welcome PHP';
echo "<br>";
echo 'Welcome "PHP" '; // ==>single
echo "<br>";
echo "Welcome 'PHP' ";
echo "<br>";
echo "Welcome \"PHP\" ";
echo "<br>";
echo "Welcome PHP\\ ";
echo "<br>";
echo nl2br('Welcome PHP 
on multimple
 line ');
echo "<br>";
?>