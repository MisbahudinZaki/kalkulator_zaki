<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Try Out</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap@5.3.3/npm/css/bootstrap.min.css">
    <style>
        .background{
            background-size: cover;
            background-repeat: no-repeat;
        }
        .table{
            background: linear-gradient(45deg, rgb(20, 20, 20), rgb(225, 225, 225), rgb(20,20,20));
        }
        input[type="text"]{
            padding: 20px 30px;
            font-size: 24px;
            font-weight: bold;
            border: 2px solid black;
            border-radius: 10px;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: #9b1717;
            color:white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 6px 6px 6px;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: #191097;
            color:white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 6px 6px 6px;
        }
        .bxheader{
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .bxfooter{
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @yield('kalkulator')
            </div>
        </div>
    </div>
</body>
</html>
