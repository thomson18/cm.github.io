<?php
    require_once('dbcon.php');
    $query = "select * from users ";
    $result = mysqli_query($link,$query);
?>

<html>
	<head>
        <link rel="stylesheet"type="text/css"href="style.css">
        <title>Credit Management</title>
    </head>

   <body>
        <h1>Credits</h1>
             <table align="center" border="1px" styles="wodth:600px; line-height:40px;">
			     <tr>
                    <th>S.No.</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Credits</th>
                    <th>Action</th>
                 </tr>     
       
     <?php
        while($row = mysqli_fetch_array($result))
        {   
     ?>       
                 <tr>
                        <td><?php echo $row['SNo']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Credits']; ?></td>
                        <td><a href="transfer.php" name="$row['Name']">Transfer</a></td>
                    </tr>
     <?php
        }   
      ?>
            </table>  
    
    </body>
</html>