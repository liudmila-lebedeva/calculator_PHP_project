<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <script>
            function clearData()
            {
                document.getElementsByClassName('result').innerHTML = "";
            }
        </script>
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <input type="text" name="num1" value="" class="num" placeholder="enter your number"><br>
                <input type="text" name="num2" value="" class="num" placeholder="enter your number"><br>
                <input type="submit" name="add" class="btn" value="+">
                <input type="submit" name="sub" class="btn" value="—">
                <input type="submit" name="mult" class="btn" value="*">
                <input type="submit" name="div" class="btn" value="/">
                <input type="button" value="refresh" class="refresh" onclick="clearData();"/>


            </form>
        </div>

        <?php
        if (isset($_POST['add'])) { // add button
            $num1 = $_POST['num1'];  //textbox 1
            $num2 = $_POST['num2'];  //textbox 2
            $add = $num1 + $num2;  //addition
            ?>
            <div class="result"><?php echo 'Addition is ' . $add ?></div><?php
        }

        if (isset($_POST['sub'])) { // subtraction button
            $num1 = $_POST['num1'];  //textbox 1
            $num2 = $_POST['num2'];  //textbox 2
            $sub = $num1 - $num2;
            ?>
            <div class="result"><?php echo 'subtraction is ' . $sub ?></div><?php
        }


        if (isset($_POST['mult'])) { // mult button
            $num1 = $_POST['num1'];  //textbox 1
            $num2 = $_POST['num2'];  //textbox 2
            $mult = $num1 * $num2;
            ?>
            <div class="result"><?php echo 'Multiplication is ' . $mult ?></div><?php
        }

        if (isset($_POST['div'])) { // division button
            $num1 = $_POST['num1'];  //textbox 1
            $num2 = $_POST['num2'];  //textbox 2
            $div = $num1 / $num2;
            ?>
            <div class="result"><?php echo 'Division is ' . $div ?></div><?php
        }
        ?>
    </body>
</html>
