<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `specialform` WHERE CONCAT(`id`, `clgid`, `fname`, `mname`, `sname`, `rno`, `email`, `pno`, `doe`, `year`, `lokb`, `loe`, `loke`, `loc`, `fed`, `sug`, `rat`, `yn`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `specialform`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "specialguest");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <p>
            <a style="font-size:30px" href="index.html">Back</a>
        </p>
        
        <form action="record.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                <th>ID</th>
                <th>COLLEGE ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Surname</th>
                <th>Roll No</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Discipline of Egineering</th>
                <th>Year of Engineering</th>
                <th>Level of Knowledge at Begining</th>
                <th>Level of Efforts Taken</th>
                <th>Level of Knowledge at Ending</th>
                <th>Level of Communication</th>
                <th>Feedback</th>
                <th>Suggesstion For Improvement</th>
                <th>Ratings For Improvement</th>
                <th>Confirmation of Submission</th>
                <th colspan="2" align="center">Operation</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['clgid'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['mname'];?></td>
                    <td><?php echo $row['sname'];?></td>
                    <td><?php echo $row['rno'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['pno'];?></td>
                    <td><?php echo $row['doe'];?></td>
                    <td><?php echo $row['year'];?></td>
                    <td><?php echo $row['lokb'];?></td>
                    <td><?php echo $row['loe'];?></td>
                    <td><?php echo $row['loke'];?></td>
                    <td><?php echo $row['loc'];?></td>
                    <td><?php echo $row['fed'];?></td>
                    <td><?php echo $row['sug'];?></td>
                    <td><?php echo $row['rat'];?></td>
                    <td><?php echo $row['yn'];?></td>
                    <td><a href="upd.php?fname=<?php echo $row["fname"]; ?>&"<?php echo $row["mname"]; ?>&<?php echo $row["sname"]; ?>&<?php echo $row["rno"]; ?>&<?php echo $row["email"]; ?>&<?php echo $row["pno"]; ?>>Edit/Update</td>
                
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>