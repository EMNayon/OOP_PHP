<?php
include_once "functionOOP/02.php";
?>
<!-- Work with Method and Object-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

    <style>
        body{
            margin-top:30px;
        }
        td {
            padding-left:0px;
            border-bottom:0;
        }
        .column{
            background: rgb(225,225,225);
        }
        #input{
            background:white;
        }
    </style>

</head>
<body>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form action="" method = "post">
                <table>
                    <tr>
                        <td>Enter the First Number : </td>
                        <td><input type="number" name="num1" id="input"></td>
                    </tr>
                    <tr>
                        <td>Enter the Second Number : </td>
                        <td><input type="number" name="num2" id="input"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value = "calulate" name = "Calculation"></td>
                    </tr>
                </table>
            </form>
            
            <?php
                if(isset($_POST['Calculation'])){
                    $numOne = $_POST['num1'];
                    $numTwo = $_POST['num2'];

                    if(empty($numOne) or empty($numTwo)){
                        echo "<span style='color:red'>Field must not be empty!</span>";
                    }
                    else
                    {
                        echo "First number is :".$numOne." Second number is :".$numTwo."<br>";

                        //Object
                        $Ob = new Calculation;
                    
                        $Ob->add($numOne, $numTwo);
                        $Ob->sub($numOne, $numTwo);
                        $Ob->mul($numOne, $numTwo);
                        $Ob->div($numOne, $numTwo);
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>