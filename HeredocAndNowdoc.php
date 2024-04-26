<?php

/**
 * 
 * 
 * = String and escaping 
 * =====================
 * = Heredoc
 * = Nowdoc
 */
 $name = "anas";
echo<<<"here"
Hello PHP
special characters $$$$ \\\\
IS name : $name
here;

echo"<br>";
echo<<<'nowdoc'
Hello PHP
special characters $$$$ \\\\
IS name : $name
nowdoc;
echo '<br>';
echo '<ul>';
  echo'<li>'. $name .'</li>';
  echo'<li>'. $name .'</li>';
  echo'<li>'. $name .'</li>';
echo'</ul>';
echo '<br>';
echo<<<"navlinks"
<ul>
  <li> $name </li>
  <li> $name </li>
  <li> $name </li>
</ul>
navlinks;







?>