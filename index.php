<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/function.php"); ?>
<?php include("includes/layouts/header.php") ?>
    <div class="container">
        <div class="student-info mt-1">
            <div>
                <span class="badge bg-success">Raw PHP</span>
                <h3 class="text-center">Student Registration</h3>
            </div>
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
                        <option value="1" selected>One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
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
                        <option value="Dhaka" selected>Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
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
                <button type="submit" name="submit" class="btn btn-warning btn-sm">Submit</button>
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
                    <th>Mother's Name</th>
                    <th>Class</th>
                    <th>Student Id</th>
                    <th>Email</th>
                    <th>District</th>
                    <th>Phone Number</th>
                    <th>Address</th>
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
                    <td><?php echo $user["mother_name"]?></td>
                    <td><?php echo $user["class"]?></td>
                    <td><?php echo $user["student_id"]?></td>
                    <td><?php echo $user["email"]?></td>
                    <td><?php echo $user["district"]?></td>
                    <td><?php echo $user["phone_number"]?></td>
                    <td><?php echo $user["address"]?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $user["id"];?>" class="btn btn-info btn-sm">Edit</a>
                        <input type="button" class="btn btn-danger btn-sm" name="delete" value="Delete" onClick="confirmDelete('user_del.php?id=<?php echo $user["id"];?>')">
                       <!-- <form action="#" method="post" onSubmit="return confirm('Are You Sure')">
                            <input class="btn btn-danger btn-sm" type="text" value="<?php echo $user["id"];?>" name="txtId" hidden>
                            <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                        </form> -->
                        <!-- <a class="btn btn-danger btn-sm" id="del_btn">Delete</a> -->
                    </td>
                </tr>
                <!-- <tr class="data">
                    
                </tr> -->
                <!-- <div style="height: 50px; background-color: #fff; border: 1px solid gray">2</div> -->

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
    <!-- <div>
        <h3 class="mt-3 text-center">php block</h3>
        <?php print_r($_POST); ?>
    </div> -->

    <script>
        function confirmDelete(url, name) {
            if (confirm("Are you sure you want to delete this?")) {
                window.open(url);
            } else {
                false;
            }       
        }
    </script>
<?php include("includes/layouts/footer.php") ?>