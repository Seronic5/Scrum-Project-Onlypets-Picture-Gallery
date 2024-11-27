<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
</head>
<body>
<div class="outer_box"> <!-- rand -->
    <div class="top_line">  <!-- top line -->
        <div class="calc_img"><img src="img/calc.png" alt="Calculator" width="35" height="25"> <!-- img rechner -->

        </div>
        <div class="calculator_text"> Yoimiya<!-- calculator text -->

        </div>
        <div><img src="img/minimize.png" alt="min" width="40" height="25"> <!-- minimize img -->

        </div>
        <div><img src="img/maximize.png" alt="max" width="45" height="25"> <!-- maximize img -->

        </div>
        <div><img src="img/close.png" alt="close" width="45" height="25"> <!-- close x -->

        </div>
    </div>
    <div class="second_line"> <!-- second line -->
        <div class="second_img"><img src="img/burger.png" alt="burger" width="40" height="35"> <!-- burger -->

        </div>
        <div class ="calculator_text2"> Calculator <!-- Standard -->

        </div>
        <div class="second_img"><img src="img/swap.png" alt="swap" width="40" height="35"> <!-- change to smaller version -->

        </div>
        <div>

        </div>
        <div class="second_img"><img src="img/history.png" alt="History" width="45" height="35"> <!-- clock history-->
        </div>

    </div>
    <div class="third_line"> <!-- 3rd line calculation over input field -->

    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <div class="fourth_line"><input type="text" value="0" name="display" id="display" readonly> <!-- ausgabe  4th line -->



        </div>

        <div class="fifth_line"> <!-- 5th line -->
        </div>
        <div class="sixth_line"> <!-- 6th -->
            <div class ="sixth_button"><button type="button" id="button_M" name="button" value="<php>"> MC </button> <!-- Memory Clear set to 0 -->

            </div>
            <div class ="sixth_button"><button type="button" id="button_M" name="button" value="<php>"> MR </button><!-- Memory Recall the number in Memory to display -->

            </div>
            <div class ="sixth_button"><button type="button" id="button_M" name="button" value="<php>"> M+ </button><!-- The M+ key add the number in the display to or from the current number in the memory. -->

            </div>
            <div class ="sixth_button"><button type="button" id="button_M" name="button" value="<php>"> M- </button><!-- The M- key subtract the number in the display to or from the current number in the memory. -->

            </div>
            <div class ="sixth_button"><button type="button" id="button_M" name="button" value="<php>"> MS </button><!-- MS(Memory save) key will Store the current display in the memory, replacing what was already there -->

            </div>
            <div class ="sixth_button"><button type="button" id="button_M" name="button" value="<php>"> M </button><!-- memory popupp shows all saved memorys and puts them on screen on click replacing current number in -->

            </div>

        </div>
        <div class="seventh_line"> <!-- 7th line keys -->
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="<php>"> % </button> <!-- % prozent calculation -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> CE </button> <!-- CE cancel entry set inputfield set it to 0 -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> C </button> <!-- C clear current calculation also set inputfield it to 0 -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> <= </button> <!-- x rewind input  from a stack? -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> 1/x </button> <!-- reciprocal (1/x)  The reciprocal of a number can be determined by dividing the variable by 1. Similarly, the reciprocal of a function is determined by dividing 1 by the function's expression. Example: Given a function f(y) , its reciprocal function is 1/f(y). -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> x² </button> <!-- x² multiply the number with itself -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> ²√x </button> <!-- square root -->

            </div>

            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="<php>"> ÷ </button> <!-- divide -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="7"> 7 </button><!-- 7 -->

            </div>
            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="8"> 8 </button> <!-- 8 -->

            </div>

            <div class ="seventh_button"> <button type="button" id="button_field" name="button" value="9"> 9 </button> <!-- 9 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="<php>"> x </button> <!-- multiply -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="4"> 4 </button> <!-- 4 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="5"> 5 </button> <!-- 5 -->

            </div>
            <div class ="seventh_button"><button type="submit" id="button_field" name="button" value="6"> 6 </button> <!-- 6 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="<php>"> - </button> <!-- subtract -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="1"> 1</button> <!-- 1 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="2"> 2 </button> <!-- 2 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="3"> 3 </button> <!-- 3 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="<php>"> + </button> <!-- addition -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="<php>"> +/- </button> <!-- negate -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="0"> 0 </button> <!-- 0 -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value=","> , </button> <!-- , -->

            </div>
            <div class ="seventh_button"><button type="button" id="button_field" name="button" value="="> = </button>  <!-- = -->

            </div>
        </div>
    </form>
</div>
<?php

?>
</body>
</html>
