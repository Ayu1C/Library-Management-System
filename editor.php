<?php
// include the config.php file to establish a connection to the database
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Record Display</title>

	<style type="text/css">
     table {
     	border:3px solid black;
     	border-collapse: collapse;
     }
     
     td{
     	border:2px solid black;
     	padding: 15px;
     }
	</style>

</head>
<body>
<table>

<tr>

<?php
// get all the records from the database
$sql = "SELECT * FROM records";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

// display the records in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Enrollment Number</th><th>Name</th><th>Course</th><th>Year</th><th>Class</th><th>Section</th><th>Book Name</th><th>Author Name</th><th>Issue Date</th><th>Return Date</th><th colspan='2' align='center'>Actions</th></tr>";
    while($res=mysqli_fetch_assoc($result))
    {
        echo "
        <tr>
        <td>".$res['enrollment_number']."</td>
        <td>".$res['name']."</td>
        <td>".$res['course']."</td>
        <td>".$res['year']."</td>
        <td>".$res['class']."</td>
        <td>".$res['section']."</td>
        <td>".$res['book_name']."</td>
        <td>".$res['author_name']."</td>
        <td>".$res['issue_date']."</td>
        <td>".$res['return_date']."</td>
        
        <td><a href='edit.php?edit=$res[enrollment_number]' >Edit</a></td>
        <td><a href='delete.php?deleteid=$res[enrollment_number]'>Delete</a></td>
        </tr>
        ";
    }
}
else
{
    echo "No records found";
}
?>

</tr>
</table>
</body>
</html>













