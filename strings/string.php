<?php
// Strings

/*heredoc and nowdoc used to print
 multiple line strings and commplex
 expression including qoutes and other symbols*/

 $x = 1;
 $y = 1;
 $z = 1;
 // heredoc => prints variable value
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 $z
<br/>
TEXT;

echo nl2br($text); // used to print heredoc and nowdoc

//nowdoc => doesn't print variable value
$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 $z
TEXT;

echo nl2br($text);