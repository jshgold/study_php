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
    
    <form action="create_process.php" method="post">
        <p><input type="text" name="title" placeholder="Title"></p>
        <p><textarea name="description" placeholder="Description"></textarea></p>
        <p><input type="submit"></p>

    </form>

<?php
require('view/bottom.php');
?>