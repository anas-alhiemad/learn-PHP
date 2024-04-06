<?php
// البينات بتحدد نوع من سياق البينات نفسو 
/* Data Types 
 ===============
  Type juggling + automatic conversion 
 */


echo 1 + '2' ;
echo'<br>';
echo gettype(1 + '2');
echo'<br>';
echo gettype("5 lessons");
echo'<br>';
echo 5 + "5 lessons";
echo'<br>';
echo gettype( 5 + "5 lessons");
echo'<br>';
echo True;
echo'<br>';
echo True + True;
echo'<br>';
echo gettype(True + True);
echo'<br>';
echo 'sum ='. 0.0 + 1 ;
echo'<br>';
echo gettype(0.0 + 1);
echo'<br>';
echo 'sum ='. 2.2 + 1 ;
echo'<br>';
echo gettype(2.2 + 1);

?>