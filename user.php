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
                            </tr>     
       
     <?php
        while($row = myslqi_fetch_assoc($result)) {   
     ?>        
                    <tr>
                        <td><?php echo $row['SNo']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Credits']; ?></td>
                    </tr>
     <?php
        }   
      ?>
            </table>  
       <br><br>
       <form>
           <input class="MyButton" onclick="window.location.href='transfer.php'" type="button" value="Transfer" />
       </form>
    </body>
</html>
