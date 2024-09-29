<?php
include("db_connect.php");
include("menu.php");

?>
<head>
    <link rel="stylesheet" href="insert.css">  </link>
</head>
<h1>Delete Team</h1>
<form method="get">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
            <tr>
                <td> Team id  </td>
                <td> <input type="text" name="team_id" required> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="DeleteT"> Delete</button>
                </td>
            </tr>
    
    </form>

    
    <?php
    

    if(isset($_GET['DeleteT'])) {
        $team_id = $_GET['team_id'];
       
        $sql = "DELETE FROM Team WHERE Team_id = $team_id";
        $conn ->query($sql);
       
            
    }



    ?>