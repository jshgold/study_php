<?php
require_once("lib/print.php");
require('view/top.php');
?>
<body>
    <ol>
        <?php
        load_to_file();
        ?>
    </ol>
    <a href="create.php">Create</a>
    <?php
    if(isset($_GET['id'])){?>
        <a href="update.php?id=<?=$_GET['id'];?>">Update</a>
    <?php
    }
    ?>

    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id'];?>">
        <p><input type="text" name="title" placeholder="Title" value="<?php print_title();?>"></p>
        <p><textarea name="description" placeholder="Description"><?php print_description();?></textarea></p>
        <p><input type="submit"></p>
    </form>
<?php
require('view/bottom.php');
?>




