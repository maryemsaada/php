<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5eaff;
        }
        .navbar {
            background-color: #6c5ce7; /* Adjusted navbar color */
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
        .h-custom {
            height: calc(100vh - 72px); /* Adjust based on navbar height */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-label {
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

    <br><br><br>
  
    <div class="container-fluid h-custom">
        <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="card p-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <form action="adduser_action.php" method="post">
                    <h1 class="mb-4">Add New User</h1>

                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" tabindex="2" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" tabindex="3" class="form-control" value="">
                    </div>

                    <button type="submit" class="btn btn-success btn-block" name="addUser" style="background-color: #8e06ff; border-color: #8e06ff;">Add User</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
