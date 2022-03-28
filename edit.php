<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/function.php"); ?>
<?php include("includes/layouts/header.php") ?>
    <div class="container">
        <div class="student-info mt-1" style="background-color: #bfb951">
    <div>
        <span class="badge bg-success">Raw PHP</span>
        <h3 class="text-center">Student Information Update</h3>
    </div>
    <?php 
        $single_user = find_user_by_id($_GET["id"]);
        // print_r($single_user);
        // echo "<br>";
        // echo "<br>";
        $user = mysqli_fetch_assoc($single_user);
        // print_r($user);
    
    ?>
    <form action="edit_user.php?id=<?php echo $_GET["id"]; ?>" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Full Name" value="<?php echo $user["name"]?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" name="father_name" class="form-control form-control-sm" id="father_name" placeholder="Father Name" value="<?php echo $user["father_name"]?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="mother_name" class="form-label">Mother Name</label>
                    <input type="text" name="mother_name" class="form-control form-control-sm" id="mother_name" placeholder="Mother Name" value="<?php echo $user["mother_name"]?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <select name="class" class="form-select form-select-sm" aria-label="Default select class" id="class">
                        <option selected><?php echo $user["class"]?></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="student_id" class="form-label">Student Id</label>
                    <input type="number" name="student_id" class="form-control form-control-sm" id="student_id" placeholder="01" value="<?php echo $user["student_id"]?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="name@example.com" value="<?php echo $user["email"]?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="district" class="form-label">District</label>
                    <select name="district" class="form-select form-select-sm" aria-label="Default select district" id="district">
                        <option selected><?php echo $user["district"]?></option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Sylhet">Sylhet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control form-control-sm" id="phone_number" placeholder="+880" value="<?php echo $user["phone_number"]?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" class="form-control form-control-sm" id="address" rows="3" placeholder="23rd street, baltimore"><?php echo $user["address"]?></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <!-- <input type="submit" value="submit" /> -->
                <button type="submit" name="submit" class="btn btn-warning btn-sm">Submit</button>
            </div>
        </div>
    </form>
<!--     
    <div>
        <h3 class="mt-3 text-center">php block get and post</h3>
        Get: <?php print_r($_GET); ?><br>
        Post: <?php print_r($_POST); ?>
    </div> -->
<?php include("includes/layouts/footer.php") ?>