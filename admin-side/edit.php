<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="liste.css">
    <style>
        body {
            background-color: #f5eaff;
        }
        .navbar {
            background-color: #8e06ff;
        }
        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
            font-size: 1.8rem;
        }
        .navbar-nav .nav-link {
            color: #ffffff;
        }
        .container {
            margin-top: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease-in-out;
            margin-bottom: 20px;
        }
        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #8e06ff;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #8e06ff;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        button[type="submit"]:hover {
            background-color: #6c5ce7;
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
                            <li><a class="dropdown-item" href="addcat.php">Add Category</a></li>
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
                    <a class="nav-link" href="adduser.php">Contacts</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<br><br>

<?php
require_once('../controllers/coursesController.php');
require_once('../controllers/categoryController.php');

$coursesController = new coursesController();
$categoryController = new categoryController();

$course = [];
$categories = [];

if(isset($_GET['id'])) {
    $course = $coursesController->getCourse($_GET['id']);
    $categories = $categoryController->categoriesList();
}
?>

<form action="edit_action.php" method="post">
    <input type="hidden" name="id" value="<?php echo isset($course['idCourse']) ? $course['idCourse'] : ''; ?>">
    <div class="form-group">
        <label for="courseName">Course Name:</label>
        <input type="text" name="courseName" id="courseName" class="form-control" value="<?php echo isset($course['courseName']) ? $course['courseName'] : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" class="form-control" value="<?php echo isset($course['description']) ? $course['description'] : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="categoryName">Category:</label>
        <select name="categoryName" id="categoryName" class="form-control">
            <?php foreach ($categories as $row) : ?>
                <?php $selected = isset($course['categoryName']) && $row['categoryName'] == $course['categoryName'] ? 'selected' : ''; ?>
                <option value="<?php echo $row['categoryName']; ?>" <?php echo $selected; ?>><?php echo $row['categoryName']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="text" name="image" id="image" class="form-control" value="<?php echo isset($course['image']) ? $course['image'] : ''; ?>" required>
    </div>
    <button class="btn btn-success" type="submit" name="update">Update</button>
</form>

</body>
</html>
