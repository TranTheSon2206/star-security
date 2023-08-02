

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/employee-profile.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Employee Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">

            </div>

            <span class="logo_name">StarSecurity</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="employee.php">
                        <i class="uil uil-airplay"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>

                <li><a href="employee-profile.php">
                        <i class="uil uil-user-square"></i>
                        <span class="link-name">Profile</span>
                    </a></li>


                <li><a href="employee-view.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Employee</span>
                    </a></li>

                <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Clients</span>
                    </a></li>

                <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Message</span>
                    </a></li>

            </ul>

            <ul class="logout-mode">
                <li>
                    <form method="post" action="">
                        <button type="submit" name="logout" class="logout-button" style="font-size: 20px;font-weight: 400;color: gray;border: none;background-color: #fff; ">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Log out</span>
                        </button>
                    </form>
                </li>

                <div class="mode-toggle"></div>

            </ul>
        </div>
    </nav>



    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <h2>Employee Dashboard</h2>


            <img src="img/profile.jpeg" alt="">

        </div>

        <div class="dash-content">

            <div class="overview">
                <div class="title">
                    <i class="uil uil-user-square"></i>
                    <span class="text">Profile</span>
                </div>
            </div>


            <div class="dash-profile">

                <img src="img/profile.jpeg" alt="Employee Image">

                <?php if ($editMode) : ?>
                    <!-- Form để chỉnh sửa thông tin -->
                    <form method="post" action="">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>

                        <label for="sex">Sex:</label>
                        <input type="text" id="sex" name="sex" value="<?php echo $sex; ?>"><br>

                        <label for="contactNumber">Contact number:</label>
                        <input type="text" id="contactNumber" name="contactNumber" value="<?php echo $contactNumber; ?>"><br>

                        <label for="achievements">Achievements:</label>
                        <textarea id="achievements" name="achievements"><?php echo $achievements; ?></textarea><br>

                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="<?php echo $address; ?>"><br>

                        <label for="employeeCode">Employee Code:</label>
                        <input type="text" id="employeeCode" name="employeeCode" value="<?php echo $employeeCode; ?>"><br>

                        <label for="department">Department:</label>
                        <input type="text" id="department" name="department" value="<?php echo $department; ?>"><br>

                        <label for="role">Role:</label>
                        <input type="text" id="role" name="role" value="<?php echo $role; ?>"><br>

                        <label for="grade">Grade:</label>
                        <input type="text" id="grade" name="grade" value="<?php echo $grade; ?>"><br>

                        <label for="client">Client:</label>
                        <input type="text" id="client" name="client" value="<?php echo $client; ?>"><br>

                        <input type="submit" name="save" value="Save">
                    </form>
                <?php else : ?>
                    <!-- Hiển thị thông tin -->
                    <p>Name: <?php echo $name; ?></p>
                    <p>Sex: <?php echo $sex; ?></p>
                    <p>Contact number: <?php echo $contactNumber; ?></p>
                    <p>Achievements: <?php echo $achievements; ?></p>
                    <p>Address: <?php echo $address; ?></p>
                    <p>Employee Code: <?php echo $employeeCode; ?></p>
                    <p>Department: <?php echo $department; ?></p>
                    <p>Role: <?php echo $role; ?></p>
                    <p>Grade: <?php echo $grade; ?></p>
                    <p>Client: <?php echo $client; ?></p>

                    <!-- Nút để chỉnh sửa -->
                    <form method="post" action="">
                        <input type="submit" name="edit" value="Edit">
                    </form>
                <?php endif; ?>
            </div>
        </div>




        </div>
    </section>


    <script src="js/employee-profile.js"></script>
</body>

</html>