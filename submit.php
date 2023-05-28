<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", 'abcd', "java_final");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $enrollment_number = $_REQUEST['enrollment_number'];
        $name = $_REQUEST['name'];
        $course = $_REQUEST['course'];
        $year = $_REQUEST['year'];
        $class = $_REQUEST['class'];
        $section = $_REQUEST['section'];
        $book_name = $_REQUEST['book_name'];
        $author_name = $_REQUEST['author_name'];
        $issue_date = $_REQUEST['issue_date'];
        $return_date = $_REQUEST['return_date'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO records VALUES ('$enrollment_number', '$name', '$course', '$year', '$class', '$section', '$book_name', '$author_name', '$issue_date', '$return_date')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>