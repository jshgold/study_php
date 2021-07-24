<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
        else{
            echo "Home~!";
        }
    }
    function print_description(){
        if(isset($_GET['id'])){
            echo $file = file_get_contents("data/".$_GET['id'],true);
        }
        else
        {
            echo "Welcome To My Homepage~!";
        }
    }
    function load_to_file(){
        $list=scandir("./data");
        #var_dump($list);
        $count=0;
        $len = count($list);
        while($count<$len){
            if($list[$count]!="." and $list[$count]!=".."){
                echo "<li><a href='home.php?id=$list[$count]'>$list[$count]</a></li>\n";
            }
            
            $count+=1;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        print_title();
        ?>
    </title>
    <h1><a href="home.php">WEB</a></h1>
</head>
<body>
    <ol>
        <?php
        load_to_file();
        ?>
    </ol>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
</body>

</html>





