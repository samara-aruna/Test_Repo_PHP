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
        <?php
             $name = "";
             $age = "";
             $grade = "";
             $name = $_POST["name"];
             $age  = $POST["age"];
             $grade = $_POST["grade"];

             $f_number = $_POST["f_number"];
             $s_number = $_POST["s_number"];

             print "<h1>Your name is $name your age is $age and your grade is $grade</h1><br>";
             
             $Result = ($f_number + $s_number);
             print "<h1>$Result</h1>";

             if($Result>50)
             {
                echo "<h1>You are Passed</h1>";
             }
             else
             {
                print "<h1>You are Failed</h1>";
             }
        ?>
    </body>
</html>