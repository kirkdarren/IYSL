<head>
    <link rel="stylesheet" href="insert.css">  </link>
</head>

<h1> Create Players </h1>
<h1> Create Players </h1>


    <form method="post">
        <table border=1 align="center" cellspacing="0" cellpadding="10">
            <tr>
                <td> Player id  </td>
                <td> <input type="text" name="player_id" placeholder=">=12390" required> </td>
            </tr>
            <tr>
                <td> Date of Birth </td>
                <td> <input type="date" name="Birthday" required> </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> <input type="text" name="email" required> </td>
            </tr>
            <tr>
                <td> Contact Number </td>
                <td> <input type="text" name="Contact" required> </td>
            </tr>
            <tr>
                <td>Last Name </td>
                <td> <input type="text" name="Lname" required> </td>
            </tr>
            <tr>
                <td>First Name </td>
                <td> <input type="text" name="Fname" required> </td>
            </tr>
            <tr>
                <td>Middle Name </td>
                <td> <input type="text" name="Mname" > </td>
            </tr>
            <tr>
                <td>Team id </td>
                <td> <input type="text" name="Team" > </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" name="Insert7"> Create</button>
                </td>
            </tr>
            
    </form>

    <?php
    include("db_connect.php");
    include("menu.php");

    if(isset($_POST['Insert7'])) {
        $player_id = $_POST['player_id'];
        $Birthday = $_POST['Birthday'];
        $Email = $_POST['email'];
        $Contact_number = $_POST['Contact'];
        $Last_name = $_POST['Lname'];
        $First_name = $_POST['Fname'];
        $Middle_name = $_POST['Mname'];
        $Team_id = $_POST['Team'];
    

        $sql = "SELECT * FROM Players WHERE Player_id = '$player_id'";
        $query = mysqli_query($conn, $sql);
        
        
        if(mysqli_num_rows($query) > 0) {
            echo "<script> alert('Player already exists'); </script>";
        } 
    else {
            $sql = "INSERT INTO Players (Player_id, Date_of_birth, Email, Contact_number , Last_name , First_name , Middle_name , Team_id)
             VALUES ('$player_id', '$Birthday', '$Email', '$Contact_number', '$Last_name' , '$First_name' , '$Middle_name' , '$Team_id')";
            $query = mysqli_query($conn, $sql);
        if($query)  {
                echo "<script> alert('Player is added create 4 more'); window.location='InsPlaya7.php';</script>";
            } else {
                echo "<script> alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "'); </script>";
            }
        }
            
    }



    ?>