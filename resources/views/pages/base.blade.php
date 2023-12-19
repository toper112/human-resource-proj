<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('https://policyoptions.irpp.org/wp-content/uploads/sites/2/2018/11/Facebook-Quand-un-projet-pilote-heurte-des-valeurs-politiques.jpg');
        }

        .navbar {
            background-color: rgba(227, 242, 253, 0);
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-link {
            padding: 20px 25px; /* Adjust padding as needed */
            font-size: 18px; /* Adjust font size as needed */
            color: #ece3e3;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .nav-link:hover {
            color: #ff8c00;
        }

        .container {
            margin-top: 10px; /* Adjust margin-top as needed */
        }
        .table>:not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color)));
        background-color: rgba(255, 255, 255, 0); /* Adjust opacity here */
        border-bottom-width: var(--bs-border-width);
        box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg)));
        }
        .btn-primary {
        --bs-btn-color: #1a1919;
        --bs-btn-bg: #0dcaf0;
        --bs-btn-border-color: #0dcaf0;
        --bs-btn-hover-color: #0c0c0c;
        --bs-btn-hover-bg: #0dcaf0;
        --bs-btn-hover-border-color: #0dcaf0;
        --bs-btn-focus-shadow-rgb: 49,132,253;
        --bs-btn-active-color: #0dcaf0;
        --bs-btn-active-bg: #0dcaf0;
        --bs-btn-active-border-color: #0dcaf0;
        --bs-btn-active-shadow: inset 0 3px 5px rgb(14 13 13 / 13%);
        --bs-btn-disabled-color: #080808;
        --bs-btn-disabled-bg: #0dcaf0;
        --bs-btn-disabled-border-color: #0dcaf0;
}

        .h1, h1 {
            font-size: calc(1.375rem + 1.5vw);
            color: #ff8c00;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-light">
        <ul class="nav justify-content-center">
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

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
