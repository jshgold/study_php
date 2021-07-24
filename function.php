<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
        <?php
        $str = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Adipisci natus rem quos exercitationem dolorem ratione,
        et itaque facilis debitis distinctio, 
        delectus voluptatibus provident in ab. 
        Doloribus mollitia hic error consequatur.";
        echo $str;
        ?>
        <h2>strlen()</h2>
        <?php
        echo strlen($str);
        ?>
        <h2>nl2br</h2>
        <?php
        echo nl2br($str);
        print("<br/>");
        function basic(){
            print("babo<br>");
            print("mongcongyi<br>");
        }

        basic();
        ?>
        
        
        <h2>file Save</h2>
        <?php
        function sum($left,$right){
            return $left+$right;
        }
        file_put_contents("result.txt",sum(3,4));
        
        ?>
</body>
</html>
