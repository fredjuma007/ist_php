<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>
<body>
<?php
//main function: I loop over the number range (1 to 50)and pass each as a parameter to the function to check whether a number is prime or not
function checkPrime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++) //incrementing i
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
//output
echo '<h2>Prime Numbers between 1 and 50</h2> ';
for($num = 1; $num <= 50; $num++) {
	$flag = checkPrime($num);
	if ($flag == 1) {
		echo $num." ";
	}	
}
?>
</body>
</html>
<!--Fred Juma-->