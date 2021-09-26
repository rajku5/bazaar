<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand">bazaar.com</a>
            <form action="" class="d-flex">
                <div class="input-group">
                    <input type="search" size="60"  class="rounded-0 border-0 form-control shadow-none">
                    <button class="btn btn-success rounded-0">search</button>
                </div>
            </form>
            <ul class="navbar-item">
                <li class="nav-item"><a href="#" class="nav-link">card</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>