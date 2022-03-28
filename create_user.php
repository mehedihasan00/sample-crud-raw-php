<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/function.php"); ?>
<?php
    if(isset($_POST["submit"]) && $_POST["submit"] =! null) {
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

        // perform insert query
        // Perform insertation query

        // $query = "INSERT INTO ";
        // $query .= "user_infos ( ";
        // $query .= "name, father_name, mother_name, class, student_id, email, district, phone_number, address, created_at ";
        // $query .= ") values ( ";
        // $query .= "'{$name}', '{$father_name}', '{$mother_name}', {$class}, {$student_id}, '{$email}', '{$district}', '{$phone_number}', '{$address}', '{$date}'";
        // $query .= " )";

        // $result = mysqli_query($connection, $query);

        // if($result) {
        //     $_SESSION["message"] = "User Created";
        //     //redirect_to("index.php");
        // } else {
        //     echo "Query is failed!";
        // }
        
        $result = insert_user($name, $father_name, $mother_name, $class, $student_id, $email, $district, $phone_number, $address, $date);
        if($result) {
            // $_SESSION["message"] = "User Created";
            redirect_to("index.php");
        } else {
            echo "Query is failed!";
        }
    } else {
        echo "Query didn't happened cause isset function doesn't match the requirement or $-POST array is less than 3";
    }

    // var_dump($_POST);

    // echo "<br>print_r option<br>";
    // print_r($_POST);
    // echo "<br/>";
    // echo sizeof($_POST);
    // echo "<br>";
?>
<?php 
    // Close the database connection
    if(isset($connection)) {
        mysqli_close($connection);
    }
?>