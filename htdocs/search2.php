<?php
include("db_connect.php");
include("menu.php");

?>
<html>
<head>
    <link rel="stylesheet" href="player.css">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
<h1>Search</h1>
<form method="POST">
    <input type="text" placeholder="Search Player">
    <button name="submit">Search</button>
</form>
<table>
        <tr>
            <th> Player Id </th>
            <th>Full name</th>
            <th> Date of birth </th>
            <th> Email </th>
            <th>Contact Number</th>
            <th>Team id</th>
        </tr>
<?php

    if(isset($_POST['submit'])){
        $search=$_POST['submit'];

        $sql = "SELECT * FROM Players WHERE Team_id='$search'";
        $result = mysqli_query($conn,$sql);
        if($result){
            if(mysqli_num_rows($result) > 0);
            $row=mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>" . $result["Player_id"] . "</td>";
            echo "<td>" . $result["Last_name"] . $result["First_name"] . $result["Middle_name"] .  "</td>";
            echo "<td>" . date("F d, Y", strtotime($result["Date_of_birth"])) . "</td>";
            echo "<td>" . $result["Email"] . "</td>";
            echo "<td>" . $result["Contact_number"] . "</td>";
            echo "<td>" . $result["Team_id"] . "</td>";
            echo "<tr>";

           
        }
    
    }
?>
</table>
    </body>
    </html>