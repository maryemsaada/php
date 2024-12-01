<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Course</title>
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
        form {
            margin: 0 auto;
            max-width: 500px;
        }
        label {
            font-weight: bold;
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
            <h1 class="card-title">Add New Course</h1>
        </div>
        <div class="card-body">
            <form action="addcourse_action.php" method="post">
                <div class="mb-3">
                    <label for="courseName" class="form-label">Course Name</label>
                    <input type="text" name="courseName" id="courseName" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Category</label>
                    <select name="categoryName" id="categoryName" class="form-control">
                    <?php
                        require_once('../controllers/categoryController.php');
                        $categoryController = new categoryController();
                        $res = $categoryController->categoriesList();
                        foreach($res as $row) {
                            echo "<option value='" . $row['categoryName'] . "'>" . $row['categoryName'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" id="image" class="form-control" value="">
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
