<?php

//1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
//hyphen(-) at the starting and ending position.
//Expected Output: 1-2-3-4-5-6-7-8-9-10

$fullString = '';
$i = 1;
while ($i < 11){
    $fullString .= strval($i);
    $fullString .= '-';
    $i++;
}

$fullString = substr($fullString, 0 , strlen($fullString) -1);

echo $fullString."<br>";


//2. Create a script using a for loop to add all the integers between 0 and 30 and
//display the total.
//Expected Output = total as a number
$i = 0;
$total = 0;
while($i <= 30){
    $total += $i;
    $i++;
}

echo $total."<br>";

//3c. Create a script to construct the following pattern, using nested for loop.
//A A A A A
//A A A B B
//A A C C C
//A D D D D
//E E E E E


for ($count = 1 ; $count <=5 ; $count++ ){
    for($char = "A" ; $char <= "E" ; $char++ ){
        echo str_repeat("A" , 5-$count). str_repeat($char , $count)."<br>";
        if($count++ > $count){
            break;
        }
    }
}


//3b. Create a script to construct the following pattern, using nested for loop.
//                                                                         1 1 1 1 1
//1 1 1 2 2
//1 1 3 3 3
//1 4 4 4 4
//5 5 5 5 5



for ($count1 = 1 ; $count1 <=5 ; $count1++ ){
    for($num = 1 ; $num <= 5 ; $num++ ){
        echo str_repeat( 1 , 5-$count1). str_repeat($num , $count1)."<br>";
        if($count1++ > $count1){
            break;
        }
    }
}


//4. Create a script to construct the following pattern, using a nested for loop.
//1 0 0 0 0
//0 2 0 0 0
//0 0 3 0 0
//0 0 0 4 0
//0 0 0 0 5

for ($count = 1 ; $count <=5 ; $count++ ){
    for($num = 1 ; $num <= 5 ; $num++ ){
        $str = "0000";
        echo substr_replace($str ,$num ,$count-1 ,0)."<br>" ;
        if($count++ > $count){
            break;
        }
    }
}


//5. Write a program to calculate and print the factorial of a number using a for
//    loop. The factorial of a number is the product of all integers up to and including
//that number, so the factorial of 5 is 5*4*3*2*1= 120.

$factorialNumber = 10;
$total = 1;
$i = 0;
while (true){
    $total *= $factorialNumber;
    $factorialNumber--;
    if($factorialNumber == 0){
        break;
    }
}

echo $total."<br>";



//6. Write a program to calculate and print the Fibonacci sequence using a for loop.
//Fibonacci is a series of numbers where a number is the sum of previous two
//numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
//so on.

$num = 0;
$n1 = 0;
$n2 = 1;
echo $n1.' '.$n2.' '."<br>";
while ($num < 10 ) {
    $n3 = $n2 + $n1;
    echo $n3 . ' ';
    $n1 = $n2;
    $n2 = $n3;
    $num = $num + 1;
}


//7. Write a program which will count the "c" characters in the text
//"OrangeAcademy".


$text="OrangeAcademy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
{
    if(substr($text,$x,1)==$search_char)
    {
        $count=$count+1;
    }
}
echo $count."<br>";



//8. Write a PHP script that creates the following table using for loops. Add
//cellpadding="3px" and cellspacing="0px" to the table tag.
//1 * 1 = 11 * 2 = 2 1 * 3 = 3 1 * 4 = 4 1 * 5 = 5
//2 * 1 = 22 * 2 = 4 2 * 3 = 6 2 * 4 = 8 2 * 5 = 10
//3 * 1 = 33 * 2 = 6 3 * 3 = 9 3 * 4 = 123 * 5 = 15
//4 * 1 = 44 * 2 = 8 4 * 3 = 124 * 4 = 164 * 5 = 20
//5 * 1 = 55 * 2 = 105 * 3 = 155 * 4 = 205 * 5 = 25
//6 * 1 = 66 * 2 = 126 * 3 = 186 * 4 = 246 * 5 = 30



echo "<table  border='1' >";
for($i=1;$i<=6;$i++)
{
    echo "<tr>";
    for ($j=1;$j<=5;$j++)
    {
        echo "<td>$i * $j = ".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";

//9. Write a PHP script using nested for loop that creates a chess board as shown
//below.
//Use table width="270px" and take 30px as cell height and width.


echo"<table width='270px' cellspacing='0px' cellpadding='0px' border='1px'>";


      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
 echo "</table>";


//10. Write a PHP script that creates the following table (use for loops).
//1 2 3 4 5 6 7 8 9 10
//2 4 6 8 101214161820
//3 6 9 12151821242730
//4 8 1216202428323640
//5 101520253035404550
//6 121824303642485460
//7 142128354249566370
//8 162432404856647280
//9 182736455463728190
//102030405060708090100


echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> \n";
    }
    echo "</tr>";
}
echo "</table>";



//11. Write a PHP program which iterates the integers from 1 to 50. For multiples of
//three print "Fizz" instead of the number and for the multiples of five print "Buzz".
//For numbers which are multiples of both three and five print "FizzBuzz".


for($i=1 ; $i<=50 ; $i++ ){
    if ($i % 3 == 0 && $i % 5 == 0 ){
        echo "FizzBuzz" ."<br>";
    }
    elseif ($i % 3 == 0 ){
        echo "Fizz" ."<br>";
    }
    elseif ($i % 5 == 0 ){
        echo "Buzz" ."<br>";
    }
}



//    12. Write a PHP program to generate and display the first n lines of a Floyd
//triangle. (use n=5 and n=11 rows).
//According to Wikipedia Floyd's triangle is a right-angled triangular array of natural
//numbers, used in computer science education. It is named after Robert Floyd. It
//is defined by filling the rows of the triangle with consecutive numbers, starting
//with a 1 in the top left corner:
//Sample output for n = 5 :
//1
//2 3
//4 5 6
//7 8 9 10
//11 12 13 14 15


$n = 5;
$count = 1;
$n = 5;
$count = 1;
for ($i = $n; $i > 0; $i--)
{
    for ($j = $i; $j < $n + 1; $j++)
    {
        echo $count . " ";
        $count++;
    }
    echo "<br>";
}




//13. Write a PHP program to print alphabet pattern 'A'.
//Expected Output:
//__***___
//_*___*__
//_*___*__
//_*****__
//_*___*__
//_*___*__
//_*___*__
//_*___*__


for ($row=0; $row<=7; $row++)
{
    for ($column=0; $column<=7; $column++)
    {
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";
        else
            echo "_";
    }
    echo "<br>";
}

echo"<br>";

//14. Write a PHP program to print alphabet pattern 'B'.
//Expected Output:
//_ * * * * ___
//_ * ___ * __
//_ * ___ * __
//_ * * * * ___
//_ * ___ * __
//_ * ___ * __
//_ * * * * ___


for ($row=0; $row<7; $row++)
{
    for ($column=0; $column<=7; $column++)
    {
        if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1))
            or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo " * ";
        else
            echo "_";
    }
    echo "<br>";
}


echo"<br>";

//15. Write a PHP program to print alphabet pattern 'C'.
//Expected Output:

//__ * * * ___
//_ * ___ * __
//_ * ______
//_ * ______
//_ * ______
//_ * ___ * __
//__ * * * ___


for ($row=0; $row<7; $row++)
{
    for ($column=0; $column<=7; $column++)
    {
        if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo " * ";
        else
            echo "_";
    }
    echo "<br>";
}


echo"<br>";

//16.Write a PHP program to print alphabet pattern.
//Expected Output:
//      A
//     A B
//    A B C
//   A B C D
//  A B C D E
//   A B C D
//    A B C
//     A B
//      A

$RevCounter = 1;

for ($i = 1 ; $i !== 0 ; ){

    $letter = "A";
    $rowSpace = "";
    for ($j = 5 - $i; $j > 0; $j--) {
        $rowSpace .= "&nbsp;";
    }
    for ($j = $i; $j > 0; $j--) {
        $rowSpace .= $letter;
        $letter++;
    }
    echo $rowSpace . "<br>";
    if ($RevCounter > 4) {
        $i--;
    } else {
        $i++;
    }
    $RevCounter++;

}