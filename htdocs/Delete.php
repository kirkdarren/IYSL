<?php
include("db_connect.php");
include("menu.php");

?>
<head>
    <link rel="stylesheet" href="insert.css">  </link>
</head>
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

    
    <?php
    

    if(isset($_GET['Delete'])) {
        $player_id = $_GET['player_id'];
       
        $sql = "DELETE FROM Players WHERE Player_id = $player_id";
        $conn ->query($sql);
       
            
    }



    ?>