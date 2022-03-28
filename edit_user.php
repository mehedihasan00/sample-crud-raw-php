<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/function.php"); ?>

<?php 
    if(isset($_POST["submit"]) && $_POST["submit"] =! null) {
        $id = $_GET["id"];
        $name = $_POST["name"];
        $father_name = $_POST["father_name"];
        $mother_name = $_POST["mother_name"];
        $class = (int)$_POST["class"];
        $student_id = (int)$_POST["student_id"];
        $email = $_POST["email"];
        $district = $_POST["district"];
        $phone_number = $_POST["phone_number"];
        $address = $_POST["address"];
        $date = date('Y-m-d H:i:s');

        // escap the string
        $name = mysql_prep($name);
        $father_name = mysql_prep($father_name);
        $mother_name = mysql_prep($mother_name);
        $email = mysql_prep($email);
        $district = mysql_prep($district);
        $phone_number = mysql_prep($phone_number);
        $address = mysql_prep($address);


        // Perform update student
        $query = "UPDATE user_infos ";
        $query .= "SET name = '$name', father_name = '$father_name', mother_name = '$mother_name', class = $class, student_id = $student_id, email = '$email', district = '$district', phone_number = '$phone_number', address = '$address', updated_at = '$date' ";
        $query .= "WHERE id = $id";
        // $query .= "SET name = '$name' where id = $id";
        $result = mysqli_query($connection, $query);

        if($result) {
            redirect_to("index.php");
            // echo "User id: {$id} updated!";
        } else {
            echo "Update query is failed!";
        }
    }
?>
<?php 
    echo "<br>"."get_id: ";
    echo $_GET["id"];
?>

<?php
    // Close the database connection
    if(isset($connection)) {
        mysqli_close($connection);
    }
?>