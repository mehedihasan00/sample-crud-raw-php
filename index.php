<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/function.php"); ?>
<?php include("includes/layouts/header.php") ?>
    <form action="create_user.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Full Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" name="father_name" class="form-control form-control-sm" id="father_name" placeholder="Father Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="mother_name" class="form-label">Mother Name</label>
                    <input type="text" name="mother_name" class="form-control form-control-sm" id="mother_name" placeholder="Mother Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <select name="class" class="form-select form-select-sm" aria-label="Default select class" id="class">
                        <option selected>Class</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="student_id" class="form-label">Student Id</label>
                    <input type="number" name="student_id" class="form-control form-control-sm" id="student_id" placeholder="01">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="name@example.com">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="district" class="form-label">District</label>
                    <select name="district" class="form-select form-select-sm" aria-label="Default select district" id="district">
                        <option selected>District</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Sylhet">Sylhet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control form-control-sm" id="phone_number" placeholder="+880">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" class="form-control form-control-sm" id="address" rows="3" placeholder="23rd street, baltimore"></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <!-- <input type="submit" value="submit" /> -->
                <button type="submit" name="submit" value="create_user" class="btn btn-warning btn-sm">Submit</button>
            </div>
        </div>
    </form>
    </div>
        <?php 
            // I've called the all select user data function 
            $count = 1;
            $user_set = find_all_user();
            // $sql = "select * from user_infos";
            // $result = mysqli_query($connection, $sql);
                // while($row = mysqli_fetch_assoc($result)) {
                //     print_r($row);
                // }
        ?>
        <div class="student-list">
            <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Class</th>
                    <th>Student Id</th>
                    <th>District</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
                <?php while($user = mysqli_fetch_assoc($user_set)) { ?>
                    <!-- <?php print_r($user); ?> -->
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $user["name"] ?></td>
                    <td><?php echo $user["father_name"]?></td>
                    <td><?php echo $user["class"]?></td>
                    <td><?php echo $user["student_id"]?></td>
                    <td><?php echo $user["district"]?></td>
                    <td><?php echo $user["phone_number"]?></td>
                    <td>
                        <a href="user/edit.php?id=<?php echo $user["id"];?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="user/delete.php?id=<?php echo $user["id"]?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>

                <?php } ?>

            </tbody>
            <tfoot>
                <!-- <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Class</th>
                    <th>Student Id</th>
                    <th>District</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr> -->
            </tfoot>
            </table>
        </div>
    </div>
    <div>
        <h3 class="mt-3 text-center">php block</h3>
        <?php print_r($_POST); ?>
    </div>
<?php include("includes/layouts/footer.php") ?>