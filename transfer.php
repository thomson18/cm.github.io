<?php
    require_once('dbcon.php'); 
    $name = ' ';
    if( isset( $_GET['users'])) {
    $name = $_GET['Name']; 
} 
    $query = "select * from users where name='" . $name . "'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    
    $query = "select name from users where name='" . $row['Name'] . "'";
    $result = mysqli_query($link,$query);
    if(isset($_POST['transfers'])) {
        if($_POST['credits'] > $row['Credits']) {
            echo "Credits transferred cannot be more than " . $row['Credits'] . "<br>";
        }
        else {
            $query = "update users set Credits=Credits-" . $_POST['credits'] . " where name='" . $row['Name'] . "'";
            mysqli_query($link,$query);
            $query = "update users set Credits=Credits+" . $_POST['credits'] . " where name='" . $_POST['to'] . "'";
            mysqli_query($link,$query);
            $query = "insert into transfers values('" . $row['Name'] . "','" . $_POST['to'] . "'," . $_POST['credits'] . ")";
            mysqli_query($link,$query);
            header("Location: user.php");
        }
    }
?>

<html>
	<head>
        <title>Transfer Credits</title>
    </head>

    <body>
        <a href="user.php">&lt; Back</a>
        <br><br>
        Hello <?php echo $row['Name'] ?>,
        <br>
        Your credits are: <?php echo $row['Credits'] ?>
        <br><br>

        <form action="#" method="post">
            <fieldset>
                <legend>Transfer details</legend>
                Credits: <input type="number" name="credits" min =0 value=10 required>
                <br><br>
                Transfer to: <select name="to" required>
                    <option value =" "></option>

                <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['Name'] . "'>" . $name['Name'] . "</option>";
                        }
                ?>

                </select>
                <br>
            </fieldset>
            <br>
            <input type="submit" name="transfer" value="Transfer">
        </form>
    </body>
</html>