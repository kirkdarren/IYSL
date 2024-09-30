
 <html>
    <head><link rel="stylesheet" href="team.css"></head>
    <body>
    <div class="bg">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <table><h1>Teams</h1>
        <tr>
            <th> Team Id </th>
            <th> Team Name </th>
            <th> City </th>
            <th>Manager Last name</th>
            <th>Manager First name</th>
            <th>Manager Middle Name</th>
        </tr>
        <?php 
        
        include('db_connect.php');
        include("menu.php");

        $sql = "SELECT * FROM Team ORDER BY Team_Name ASC";
        $query = mysqli_query($conn, $sql);
        if(!$query) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            while($result = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . $result["Team_id"] . "</td>";
                echo "<td>" . $result["Team_name"] . "</td>";
                echo "<td>" . $result["City"] . "</td>";
                echo "<td>" . $result["Manager_Lastname"] . "</td>";
                echo "<td>" . $result["Manager_Firstname"] . "</td>";
                echo "<td>" . $result["Manager_Middlename"] . "</td>";
            }
        }
    ?>
    </body>
    </html>