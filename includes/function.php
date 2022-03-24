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
        $query = "select * from user_infos";
        $user_set = mysqli_query($connection, $query);
        if(!$user_set) {
            die("Database query failed!");
        }
        return $user_set;

    }
?>
