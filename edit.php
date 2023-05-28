<?php
include("config.php");

$getid = $_GET['edit'];

$seledittwo = "SELECT * FROM records WHERE enrollment_number = '$getid'";


$qry = mysqli_query($conn, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$enrollment_number = $selassoc['enrollment_number'];
$name = $selassoc['name'];
$course = $selassoc['course'];
$year = $selassoc['year'];
$class = $selassoc['class'];
$section = $selassoc['section'];
$book_name = $selassoc['book_name'];
$author_name = $selassoc['author_name'];
$issue_date = $selassoc['issue_date'];
$return_date = $selassoc['return_date'];


if(isset($_POST['updateedit'])) {
	$upenrollment_number =  $_POST['upenrollment_number'];
	$upname =  $_POST['upname'];
	$upcourse =  $_POST['upcourse'];
	$upyear  =  $_POST['upyear'];
    $upclass =  $_POST['upclass'];
    $upsection =  $_POST['upsection'];
    $upbook_name =  $_POST['upbook_name'];
    $upauthor_name =  $_POST['upauthor_name'];
    $upissue_date =  $_POST['upissue_date'];
    $upreturn_date =  $_POST['upreturn_date'];


	$seleditt = "UPDATE records SET enrollment_number = '$upenrollment_number', name = '$upname', course ='$upcourse', year = '$upyear', class = '$upclass', section ='$upsection', book_name ='$upbook_name', author_name ='$upauthor_name', issue_date = '$upissue_date', return_date ='$upreturn_date'  WHERE enrollment_number = '$upenrollment_number'";
	$qry = mysqli_query($conn,$seleditt);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="POST" action="">
   <input type="text" name="upenrollment_number" value="<?php echo $enrollment_number; ?>"><br><br>
   <input type="text" name="upname" value="<?php echo $name; ?>"><br><br>
   <input type="text" name="upcourse" value="<?php echo $course; ?>"><br><br>
   <input type="text" name="upyear" value="<?php echo $year; ?>"><br><br>
   <input type="text" name="upclass" value="<?php echo $class; ?>"><br><br>
   <input type="text" name="upsection" value="<?php echo $section; ?>"><br><br>
   <input type="text" name="upbook_name" value="<?php echo $book_name; ?>"><br><br>
   <input type="text" name="upauthor_name" value="<?php echo $author_name; ?>"><br><br>
   <input type="date" name="upissue_date" value="<?php echo $issue_date; ?>"><br><br>
   <input type="date" name="upreturn_date" value="<?php echo $return_date; ?>"><br><br>
   <input type="submit" name="updateedit" value="Update">

</form>
</body>
</html>