<?php
include("db_connect.php");
include("menu.php");

?>
<html>
<head>
    <link rel="stylesheet" href="delete.css"></link>
</head>
<body>
<div class="bg">
    <br>
    <br>
    <br>
<h1>Delete Player</h1>
<form method="get">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
            <tr>
                <td> Player id  </td>
                <td> <input type="text" name="player_id" required> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="Delete"> Delete</button>
                </td>
            </tr>
    
    </form>
</body>
    </html>

    
    <?php
    

    if(isset($_GET['Delete'])) {
        $player_id = $_GET['player_id'];
       
        $sql = "DELETE FROM Players WHERE Player_id = $player_id";
        $conn ->query($sql);
       
            
    }



    ?>