<?php 
    function redirect_to($new_location) {
        header("Location: " . $new_location);
        exit;
    }
    function mysql_prep($string) {
        global $connection;
        $escap_string = mysqli_real_escape_string($connection, $string);
        return $escap_string;
    }
    function find_all_user() {
        global $connection;
        $query = "select * from user_infos order by id desc";
        $user_set = mysqli_query($connection, $query);
        if(!$user_set) {
            die("Database query failed!");
        }
        return $user_set;

    }
    function find_user_by_id($id) {
        global $connection;
        $query = "select * from user_infos ";
        $query .= "where id={$id}";
        $single_user = mysqli_query($connection, $query);
        if(!$single_user) {
            die("Database query failed!");
        }
        return $single_user;
    }
    function del_user_by_id($id) {
        global $connection;
        $query = "delete from user_infos ";
        $query .= "where id={$id}";

        $delete_user = mysqli_query($connection, $query);

        if(!$delete_user) {
            die("Database query failed!");
        }
        return $delete_user;
    }
    function insert_user($name, $father_name, $mother_name, $class, $student_id, $email, $district, $phone_number, $address, $date) {
        global $connection;
        $query = "INSERT INTO ";
        $query .= "user_infos ( ";
        $query .= "name, father_name, mother_name, class, student_id, email, district, phone_number, address, created_at ";
        $query .= ") values ( ";
        $query .= "'{$name}', '{$father_name}', '{$mother_name}', {$class}, {$student_id}, '{$email}', '{$district}', '{$phone_number}', '{$address}', '{$date}'";
        $query .= " )";

        $result = mysqli_query($connection, $query);
        return $result;
    }
?>
