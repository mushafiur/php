<!doctype html>
<html lang="en">
  <head>


    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta tag -->


    <title>php exercises</title>
    <link rel="icon" href="images/favicon.png">
    
    <!-- css links -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/jquery-ui.min.css">
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/media.css">
    <!-- css links -->
  </head>

  <!-- body start -->
  <body>
     <div class="container">
       <div class="row">
         <div class="col-lg-5">
           
           <!-- php start -->
           <?php





           echo '<h2>My first PHP page</h2>';

          
            echo "<h2>" . "This is my first php script" . "</h2>";

            
            phpinfo();

            
            echo "hello world!";

            
            $txt = "PHP";

            echo "<br>" . "<b>I LOVE $txt!</b>" . "<br>";

            echo phpversion();

            // variables are case sensetive

            $Txt = "php";

            echo "<br>" . "<b>I LOVE $Txt!</b>" . "<br>";

            $o = 5 /* + 15 */ + 5;

            echo $o;

            echo "<br>";

            echo var_dump($o);

            $name = "karim";
            $age = 12;
            $height = 5.7;

            echo "<br>";

            echo "He is $name <br>";
            echo "$name is $age years old <br>";
            echo "he is $height feet tall.<br>";

            var_dump($name);
            var_dump($age);
            var_dump($height);

            $k = $l = $m = "Bangladesh#";

            echo "I love our $k <br>";
            echo "<h2>" . "We love our $l" . "</h2>";
            echo "<h2>" . "Everybody love our $m" . "</h2>";

            $outside = "global";

            function myTest(){
              echo "calling $outside variables in local function!!";
            }

            myTest();

            function myTestOne(){
              $inside = "local";

              echo "<br> calling $inside variables in local function <br>";
            }

            myTestOne();

            $a = 5;
            $b = 10;

            echo $b;

            function myTestTwo(){
              global $a, $b;
              $c = $a + $b;
              $b = $a + $b;

              echo "<br>" . $c . "<br>";
            }
            myTestTwo();

            echo $b;

            $d = 90;
            $e = 19;

            function myTestThree(){
              $GLOBALS['d'] = $GLOBALS['d'] * $GLOBALS['e'];
            }
            myTestThree();

            echo "<br>" . $d . "<br>";

            function myTestFour(){
              static $w = 0;
              echo $w;
              $w++;
            }
            myTestFour();
            echo "<br>";
            myTestFour();
            echo "<br>";
            myTestFour();

            echo "<h1> PHP is fun! </h1>";
            echo "Hello World! <br>";
            echo "I'm about to learn php <br>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters. (echo)";

            print "<h1> PHP is fun! </h1>";
            print "Hello World! <br>";
            print "I'm about to learn php <br>";
            print "this string was made with single parameter. (print)";


            $txtone = "star";
            $txttwo = "galaxy";

            echo "sun is a $txtone <br>";
            echo 'milkyway is the ' . $txttwo . ' we live in <br>';

            var_dump($txtone);

            $integerone = 5878;

            var_dump($integerone);

            $floatone = 59.99;

            var_dump($floatone);

            $boleanone = true;

            var_dump($boleanone);

            $cars = array("volvo","bmw","suzuki","alto");

            var_dump($cars);

            echo strlen("hello brother");
            echo "<br>";

            echo str_word_count("by the by we will vanish");

            echo "<br>";

            echo strpos("Hello world!", "world");

            echo "<br>";

            $a = 5;
            $b = 5.34;
            $c = "25";

            var_dump($a);
            echo "<br>";
            var_dump($b);
            echo "<br>";
            var_dump($c);
            echo "<br>";

           // Check if the type of a variable is integer   
            $chkint = 5985;
            var_dump(is_int($chkint));

            echo "<br>";

            // Check again... 
            $chkint = 59.85;
            var_dump(is_int($chkint));

            $chkfloat = 68.9;
            var_dump(is_float($chkfloat));

            $infinite = 14e983;
            var_dump($infinite);

            echo "<br>";

                $changevalue = 23465.768;
                $int_cast = (int)$changevalue;
                echo $int_cast;

                echo "<br>";
            $t = "true";

            $t = (float) $t;

            var_dump($t);


            echo "<br>";
            $min9 = 19.8;

            $min9 = (bool) $min9;

            var_dump($min9);

            echo "<br>";

            $win10 = 19.87;

            $win10 = (array) $win10;

            var_dump($win10);

            echo "<br>";

            // matematical terms of php

            echo(pi());

            echo ("<br>" . min(9, 45, 59, 155, -2, -300) . "<br>");

            echo (max(9, 45, 59, 155, -2, -300) . "<br>");

            echo (abs(-6.7) . "<br>");

            echo (sqrt(81) . "<br>");

            echo (round(sqrt(7)) . "<br>");

            echo "<br>";

            echo (rand());

            echo "<br>";

            echo (rand(10, 100));

            echo "<br>";

            define("GREETING", "Welcome to my page!");
            echo GREETING;

            echo "<br>";

            const car = "volvo";

            echo car;

            echo "<br>";

            echo __DIR__;

            // PHP Operators

            echo "<br>";

            $A = 2;
            $B = 3;

            echo $A + $B;


            echo "<br>";

            echo $A - $B;


            echo "<br>";

            echo $A * $B;


            echo "<br>";

            echo $A / $B;


            echo "<br>";

            echo $A % $B;


            echo "<br>";

            echo $A ** $B;


            echo "<br>";

            $C = $D = 4;

            echo $D * $D;

            echo "<br>";

            echo $C += $D;
            echo "<br>";
            echo $C -= $D;

            echo "<br>";
            echo $C *= $D;

            echo "<br>";
            echo $C /= $D;

            echo "<br>";
            echo $C %= $D;

            $E = 100;
            $F = "100";
            echo "<br>";

            var_dump($E == $F);
            echo "<br>";

            var_dump($E === $F);
            echo "<br>";

            var_dump($E != $F);
            echo "<br>";

            var_dump($E <> $F);
            echo "<br>";

            $x = 100;  
            $y = 50;

            if ($x == 100 and $y == 50) {
                echo "Hello world!";
            }

            echo "<br>";

            if ($x == 100 or $y == 80) {
                echo "Hello php";
            }

            echo "<br>";

            if (5 > 3) {
              echo "Have a good day!";
            }

            echo "<br>";

            if (5 < 4) {
              echo "Hello";
            }
            echo ", my name is Linus";

            echo "<br>";










            











           ?>
           <!-- php end -->

         </div>
       </div>
     </div>

  <!-- js start -->
   <script  src="js/jquery-3.7.1.min.js"></script>
   <script  src="js/external/jquery/jquery.js"></script>
   <script  src="js/jquery-ui.min.js"></script>
   <script  src="js/bootstrap.bundle.min.js"></script>
   <script  src="js/script.js"></script>
  <!-- js end  -->

  </body>
  <!-- body end -->

</html>