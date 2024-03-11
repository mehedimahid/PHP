<?php
session_start();

?>
<div style="...">
    <div class="float-left">
        <p>
            <a href="../../index.php?task=report">All Students</a> |
            <a href="../../index.php?task=add">Add New Student</a> |
            <a href="../../index.php?task=seed">Seed</a>
        </p>
    </div>
    <div class="float-right">
        <?php
        if(!$_SESSION['loggedin']){
        ?>
            <a href="../../auth.php">Log in</a> 
        <?php
        }else{
        ?>
            <a href="../../auth.php?logout=true">Log Out(<?php echo( $_SESSION['role'])?>)</a> 
        <?php 
        } 
        ?>
    </div>
</div>
