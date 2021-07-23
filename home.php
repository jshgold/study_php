<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1><a href="home.php">WEB</a></h1>
</head>
<body>
    <ol>
        <?php
        $list=scandir("./data");
        var_dump($list);
        $count=0;
        $len = count($list);
        while($count<$len){
            if($list[$count]!="." and $list[$count]!=".."){
                continue;echo "<li><a href='home.php?id=$list[$count]'>$list[$count]</a></li>\n";
            }
            
            $count+=1;
        }
        ?>
    </ol>
    <h2>
        <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
        else{
            echo "Home~!";
        }
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
        echo $file = file_get_contents("data/".$_GET['id'],true);
    }
    else
    {
        echo "Welcome To My Homepage~!";
    }
    ?>
</body>
<!--
    data 파일에서 불러와서 만들어야함 

    #title
    for $i in $data:
        "<li><a href=home.php?id="+$i;>$i</a></li>
        
        echo file_get_contents("data/".$_GET['id'],true)

    #content
    -->
    <?php
    $dir='data/';
    $file = scandir($dir);
    ?>
</html>





