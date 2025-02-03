<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
            .footer p{
        position: absolute;
        bottom: 0;
        background-color: blue;
        color: black;
        text-align: center;
        width: 100%;
        padding: 10px;
        font-size: 24px;
        color: white;
}

    .main{
        text-align: center;
        margin: 100px;
    }
    </style>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Login</a>
                <a href="">Contact</a>
            </li>
        </ul>
    </div>

    <div>
        @section('main')

        <h4>This is Common Data that Come From main page</h4>

        @show
    </div>

    <div class="footer">
        <p>This is a Footer</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
