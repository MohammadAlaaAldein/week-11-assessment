<?PHP
    $salary1="700$";
    $salary2="800$";
    echo "<table> <tr> <td><b>Salary of Mohammad</b></td> <td>$salary1</td> </tr> <tr> <td><b>Salary of Ayham</b></td> <td>$salary2</td> </tr> </table>";
?>



<?php
$countries = array( "Italy"=>"Rome",
"Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki",
 "France" => "Paris",
 "Slovakia"=>"Bratislava" ) ;

    ksort($countries);
 
    foreach ($countries as $country => $capital) {
        echo "<ul><li>The Country is $country and the capital is $capital</li></ul>";
    }
?>

<?php
    $star="*";
    for ($i=0; $i<5; $i++){
        echo "$star <br>";
        $star = $star . "*";
    }

?>



<?php
    $datetime1 = new DateTime('1981-11-04');
    $datetime2 = new DateTime('2013-09-04');
    $interval = $datetime1->diff($datetime2);
    echo $interval->format('%y Year %m Month %d Day'  );
?>



    <form method="post" action="">
        <input type="text"  placeholder="write here" name="text"/>
        <input type="submit" onclick="write()" value="Submit" name="submit "/>
    </form>     

<?php 
    $text_inputed=$_POST["text"];
    function write(){
        echo $text_inputed;
    }
?>


<!-- /* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////



/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 0 days


/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */
?> -->