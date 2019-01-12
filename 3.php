<?php 
// php program to print hollow
  
// Function for hollow square 
function hollowSquare($rows) 
{ 
    for ($i = 1; $i <= $rows; $i++) 
    { 
          
        // Print stars for each solid rows 
        if ($i == 1 || $i == $rows || $i==$rows*0.5+0.5) 
            for ($j = 1; $j <= $rows; $j++)
                echo "&nbsp*&nbsp"; 

  
        // stars for hollow rows 
        else
            for ($j = 1; $j <= $rows; $j++) 
                if ($j == 1 || $j == $rows || $j==$rows*0.5+0.5) 
                    echo "&nbsp*";

                else
                    echo "&nbsp&nbsp&nbsp&nbsp"; 
  
        // Move to the next line/row 
        echo "<br>"; 
    } 
} 
  
// Utility program to 
// print all patterns 
function printPattern($rows) 
{ 

    hollowSquare($rows); 
} 
  
    // Driver code 
    $rows = 15; 
    printPattern ($rows); 
  
// This code is contributed by mits  
?>
