<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5eaff;
        }
        .navbar {
            background-color: #8e06ff; /* Purple */
        }
        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
            font-size: 1.8rem; /* Larger font size */
        }
        .navbar-nav .nav-link {
            color: #ffffff;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        .card-header {
            background-color: #6c5ce7;
            color: #ffffff;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            padding: 20px;
        }
        table {
            width: 100%;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #6c5ce7;
            color: #000000;
        }
        .btn-danger, .btn-warning {
            border-radius: 5px;
        }
        /* Centering Navbar Items */
        .navbar-nav {
            margin-left: auto;
        }
        /* Larger logo */
        .logo img {
            max-height: 60px; /* Adjust the height as needed */
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <div class="logo">
                <a href="listecourses.php"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCourses" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCourses">
                            <li><a class="dropdown-item" href="addcourse.php">Add Course</a></li>
                            <li><a class="dropdown-item" href="listecourses.php">Courses List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategories" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategories">
                            <li><a class="dropdown-item" href="addcat.html">Add Category</a></li>
                            <li><a class="dropdown-item" href="categorylist.php">Categories list</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUsers" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Users
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownUsers">
                            <li><a class="dropdown-item" href="adduser.php">Add User</a></li>
                            <li><a class="dropdown-item" href="userslist.php">Users List</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="listecontact.php">Contacts</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="card shadow">
        <div class="card-header">
            <h3 class="card-title">Users List</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('../models/user.php');
                    require_once('../controllers/userController.php');

                    $uController = new UserController();
                    $users = $uController->userList();

                    if ($users) {
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>{$user['userid']}</td>";
                            echo "<td>{$user['username']}</td>";
                            echo "<td>{$user['email']}</td>";
                            echo "<td>{$user['password']}</td>";
                            echo "<td><button class='btn btn-danger' onclick='confirmDelete({$user['userid']})'>Delete</button></td>";
                            echo "<td><a href='edituser.php?id={$user['userid']}' class='btn btn-warning'>Edit</a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        var result = confirm("Are you sure you want to delete this user?");
        if (result) {
            window.location.href = 'deleteuser.php?userid=' + id + '&confirm=true';
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
