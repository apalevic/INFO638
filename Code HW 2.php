<html>
 <head>
 </head>
  <title>Code HW 2</title>
 <body>




<title>Coin Toss</title>

<?php
$flip = rand(0,1);


print "Flipping a coin 1 time...";
echo "<br>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
echo "<br>";
echo "<br>";

print "Flipping a coin 3 times...";
echo "<br>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
echo "<br>";
echo "<br>";


print "Flipping a coin 5 times...";
echo "<br>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
echo "<br>";
echo "<br>";


print "Flipping a coin 7 times...";
echo "<br>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
echo "<br>";
echo "<br>";


print "Flipping a coin 9 times...";
echo "<br>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
if ($flip ==1) echo "<img src=localhost/xampp/htdocs/WebDevClass/PennyHeads.jpg' alt='Heads'/>";
else echo "<img src=xampp/htdocs/WebDevClass/PennyTails.jpg' alt='Tails'/>";
echo "<br>";
echo "<br>";

?>



<title>Challenge: ISBN Validation</title>
<?php 
$ISBN=5462875241;

function ISBNAuthenticity ($ISBN) {
	
$number=(((substr($ISBN, 1))*10)+((substr($ISBN, 2)*9)+((substr($ISBN, 3)*8)+((substr($ISBN, 4)*7)+((substr($ISBN, 5)*6)+((substr($ISBN, 6)*5)+((substr($ISBN, 7)*4)+((substr($ISBN, 8)*3)+((substr($ISBN, 9)*2)+((substr($ISBN, 10)*1))/11;
}

ISBNAuthenticity ($ISBN);

?>





 </body>
</html>