<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        }
        else{
            echo "Home~!";
        }
    }
    function print_description(){
        $basename=basename($_GET['id']);
        if(isset($_GET['id'])){
            echo htmlspecialchars(file_get_contents("data/".$basename,true));
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
            $title= htmlspecialchars($list[$count]);
            if($list[$count]!="." and $list[$count]!=".."){
                echo "<li><a href='home.php?id=$title'>$title</a></li>\n";
            }
            
            $count+=1;
        }
    


    }
?>