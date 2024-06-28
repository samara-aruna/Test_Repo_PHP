<html>
    <head>
        <link rel = "stylesheet" href="index.css">
    </head>
    <body>
        <h1><u> This is my first PHP Testing web</u> </h1>
      <pre>
        <form action ="index.php" method ="post">
            Name : <input type="text" name ="name"><br>
            Age  : <input type= "number" name="age"><br>
            Grade: <input type= "text" name="grade"><br>
            <input type="submit" value="Sybmit">
            <br>
            <br>
            Enter your First Number : <input type="number" name="f_number"><br>
            Enter your Second Number : <input type="number" name="s_number"><br>
            <input type="submit" value="Add Numbers">
      </pre>
      </form>
      <form action='index.php' method='post'>
           Enter your Marks for Maths : <input type="number" name="maths"><br>
           Enter your Science Marks : <input type="number" name="science"><br>
           Enter your ICT Marks : <input type="number" name ="ict"><br>
           <input type="submit" value="result">
      </form>

        <?php
             $name = "";
             $age = "";
             $grade = "";
             $name = $_POST["name"];
             $age  = $POST["age"];
             $grade = $_POST["grade"];

             $f_number = $_POST["f_number"];
             $s_number = $_POST["s_number"];

             print "<h2>Your name is $name your age is $age and your grade is $grade</h2><br>";
             
             $Result = ($f_number + $s_number);
             $Resulr_min = ($f_number - $s_number);

             print "<h2>$Result</h2>";
             print "<h2> $Resulr_min</h2>";
             
             if($Result>50)
             {
                echo "<h2>You are Passed</h2>";
             }
             else
             {
                print "<h2>You are Failed</h2>";
             }
        ?>
        <?php
           $Maths = $_POST["maths"];
           $Science = $_POST["science"];
           $Ict = $_POST["ict"];

           $Total = ($Maths + $Science + $Ict);

           $Percentage = ($Total / 300) * 100;
           print "<h2> Total Marks :$Total</h2>";
           print "<h2>Percentage : $Percentage</h2>";
        ?>

    </body>
</html>
