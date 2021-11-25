<html>

<head>
    <title>Fairy</title>

<body>

    <img src="Girl.jpg" alt="" width="100%" height="130%"><br>
    <br><img src="Boy.jpg" alt="" width="30%" height="45%">

    <body style="background-color:#3e404a;">
        <h2>Divergent</h2>
        <?php
        $sm = "Divergent"; //variables Types;
        $uz = "86";
        $fl = "86.6";
        $sum = $uz + $fl; //Addition of two var;
        echo "Addition of two var$sum <br>"; //Addition of two var;
        echo "  Tri";
        print "<br> Samrat";
        print " <br> hello <br/>";
        echo $sm . $uz;     //two var concate;
        echo $sm .= $uz;       //two var concate;

        print " <br> Integer:$uz";
        print "<br> Float: $fl <br/><br/>";

        ?>
        <?php       //else if example
        $t = ("15");
        if ($t < "10") {
            echo "<br> Have A Good Morning! <br/>";
        } elseif ($t < "20") {
            echo "<br> Have A good Day <br/><br/><br/>";
        } else {
            echo "<br> Night Night <br/><br/><br/>";
        }
        ?>

        <?php               // Nested if - else //page-25 //2 assignment; 
        $nested = '#';
        if (
            $nested >= "97" && $nested <= "122"
            ||
            $nested >= "65" && $nested <= "90"
        ) {
            if ($nested >= "97" && $nested <= "122")
                echo "<br>Given input is: Lower case $nested <br/>";
        } else {
            if ($nested >= "65" && $nested <= "90")
                echo "Given input is: Upper case $nested <br/>";
        }
        if ($nested >= "48" && $nested <= "57") {
            echo "Given input is digit $nested <br/>"; # code...
        } else {
            echo "Given input is special symbol $nested <br/><br/><br/>"; # code...
        }
        ?>


        <?php   //Simple if example;
        $num = "-20";
        if ($num > "0") {
            echo "<br> Number is positive $num <br/>";
        }
        if ($num < "0") {
            echo "<br> Number is Negative $num <br/><br/><br/>";
        }
        ?>

        <?php  //else-if lader // page-25 // 1 assignment;
        $lader = 'A';
        if ($lader >= "97" && $nested <= "122") {
            echo "Given input is: Lower case $lader <br/>"; # code...
        } elseif ($nested >= "65" && $nested <= "90")
            echo "Given input is: upper case $lader <br/>"; # code...
        elseif ($nested >= "48" && $nested <= "57")
            echo "Given input is: Digit $lader <br/>"; # code...
        else {
            echo "Given input is special symbol $lader <br/><br/><br/>";
        }
        ?>

        <?php   // switch case // page- 25 // 2 assignment; 
        $switch = 'B';
        switch ($switch) {
            case 'a';
            case 'e';
            case 'i';
            case 'o';
            case 'u';
            case 'A';
            case 'E';
            case 'I';
            case 'O';
            case 'U';

                echo "Given input is vowel $switch <br/>";
                break;
            default:
                echo "Given input is not vowel <br/><br/><br/>";
        }



        ?>

        <?php   //switch case // page-25 // 3 assignment // arithmatic operator;
        $op = '+';
        $a = "10";
        $b = "20";
        switch ($op) {
            case '+':
                $c = $a + $b;
                echo "Addition=$c <br/>";
                break;

            case '-':
                $c = $a - $b;
                echo "Subtraction=$c <br/>";
                break;

            case '*':
                $c = $a * $b;
                echo "Multiplication=$c <br/>";
                break;


            case '/':
                $c = $a / $b;
                echo "Division=$c <br/>";
                break;


            case '%':
                $c = $a % $b;
                echo "Modulas=$c <br/>";
                break;



            default:
                echo "Enter a valid operator";
        }
        ?>
        <?php   //conditional operatopr // largest among two // page-25 // 1 assignment;
        $a = "20";
        $b = "30";

        $big = ($a > $b) ? $a : $b;
        echo "<br><br><br> Largest no is $big";

        ?>

        <?php    //conditional operatopr // largest among three // page-25 // 2 assignment;
        $a = "20";
        $b = "30";
        $c = "60";

        $large = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
        echo "<br><br><br> Largest no is $large <br/>";

        ?>
        
    </body>
    </head>

</html>