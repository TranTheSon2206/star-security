

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/employee-edit.css">

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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Employee view</span>
                </div>

                

            </div>


            <div class="table-container">
                <table class="employee-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Education</th>
                            <th>Employee Code</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Grade</th>
                            <th>Client</th>
                            <th>Achievement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dòng dữ liệu sẽ được thêm vào đây -->
                        <tr>
                            <td>John Doe</td>
                            <td>123 Main St</td>
                            <td>555-1234</td>
                            <td>Bachelor's Degree</td>
                            <td>E12345</td>
                            <td>HR</td>
                            <td>Manager</td>
                            <td>Grade 10</td>
                            <td>ABC Corp</td>
                            <td>Employee of the Month</td>
                        </tr>

                        <tr>
                            <td>Jane Smith</td>
                            <td>456 Elm St</td>
                            <td>555-5678</td>
                            <td>Master's Degree</td>
                            <td>E67890</td>
                            <td>IT</td>
                            <td>Developer</td>
                            <td>Grade 8</td>
                            <td>XYZ Company</td>
                            <td>Project Completion Award</td>
                        </tr>

                        <tr>
                            <td>Sarah Williams</td>
                            <td>321 Pine Rd</td>
                            <td>555-3456</td>
                            <td>High School Diploma</td>
                            <td>E24680</td>
                            <td>Sales</td>
                            <td>Representative</td>
                            <td>Grade 7</td>
                            <td>Acme Corporation</td>
                            <td>Top Salesperson of the Year</td>
                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>


        </div>
    </section>


    <script src="js/employee-view.js"></script>
</body>

</html>