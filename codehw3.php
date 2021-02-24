<html>
 <head>
 </head>
  <title>Code HW 3</title>
 <body>




<title>Multi-Dimensional Arrays</title>

<?php
$books = array (
  array("PHP and MySQL Web Development", "Luke Welling",144,"Paperback", "$31.63"),
  array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett",135,"Paperback", "$41.23"),
  array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett",251,"Paperback", "$22.09"),
  array("Modern PHP: New Features and Good Practices", "Josh Lockhart",7,"Paperback", "$28.49"),
  array("Programming PHP", "Kevin Tatroe",7,"Paperback", "$28.96"),
);

/* TABLE HEADINGS */
echo "<table border=1><tr><th>Title</th><th>Author</th><th>Pages</th><th>Type</th><th>Price</th></tr>";

/* 6 ROWS */
for ($row = 0; $row < 5; $row++) {
	echo "<tr>";
	
/* 5 COLUMNS */
  for ($col = 0; $col < 5; $col++) {
	  
/* VALUES */
    echo "<td>".$books[$row][$col]."</td>";
  }
  echo "</tr>";
	
  }
 echo "</table>";


?>



<br>
<br>
<br>

<?php
echo '<p>Beginning the coin flipping, looking for 8 heads in a row...<br/>';
			$eight = $seven = $six = $five = $four = $three = $two = $one = FALSE; 
			$coinCt = 0;
			
			
	do {
		do {
			do {
				do {
					do {
						do {
							do {
								do {
									$one = coinToss();
									$coinCt++;
								} while (!$one);
								$two = coinToss();
								$coinCt++;
							} while (!$two);
							$three = coinToss();
							$coinCt++;
						} while (!$three);
						$four = coinToss();
						$coinCt++;
					} while (!$four);
					$five = coinToss();
					$coinCt++;
				} while (!$five);
				$six = coinToss();
				$coinCt++;
			} while (!$six);
			$seven = coinToss();
			$coinCt++;
		} while (!$seven);
		$eight = coinToss();
		$coinCt++;
	} while (!$eight);

			echo "<br/>Flipped 8 heads in a row after $coinCt flips!</p>";








function coinToss() {
				$heads = 'https://images-na.ssl-images-amazon.com/images/I/61%2Bpp5SZGbL._AC_.jpg';
				$tails = 'https://images-na.ssl-images-amazon.com/images/I/51NyMaKLydL._AC_.jpg';

				if (mt_rand(0,1)) { 
					echo "<img src='$heads' alt='HEADS' width=60>";
					return TRUE;
				}
				else {
					echo "<img src='$tails' alt='TAILS' width=60>";
					return FALSE;
				}
			}

?>





 </body>
</html>