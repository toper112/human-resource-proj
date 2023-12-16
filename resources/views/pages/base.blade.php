
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <style>
    body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #fff;
            font-size: 1.5em;
        }

        .nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-list li {
            margin-right: 20px;
        }

        .nav-list a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-list a:hover {
            color: #ff8c00;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd">
        <h1>Human Resource</h1>

        <ul class="nav justify-content-end float-right nav-pills">

            <li class="nav-item">
                <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('employees') ? 'active' : ''}}" href="{{url('/employees')}}">Employee</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('tasks') ? 'active' : ''}}" href="{{url('/tasks')}}">Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('salaries') ? 'active' : ''}}" href="{{url('/salaries')}}">Salary</a>
            </li>

        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
