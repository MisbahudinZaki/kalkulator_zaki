<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Zaki</title>
    <style type="text/css">
    body{
        background: linear-gradient(to right, rgba(0,0,120,0.90), rgba(241, 241, 241, 0.9), rgba(0,0,120,0.90));
    }
    table{
        border:1px solid black;
        margin-left: auto;
        margin-right: auto;
        background-color: #4a4a4a;
    }
    input[type="text"]{
        padding: 20px 30px;
        font-size: 30px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        border: 2px solid black;
    }

    input[type="submit"]{
        width: 100%;
        background-color: #8b1717;
        color: black;
        padding: 20px 40px;
        font-size: 30px;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.9);
    }
    .operator{
        padding: 20px 30px;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 5px;
        border: 2px solid black;
    }
    .header{
        padding: 20px 40px;
        font-family: 'Times New Roman';
        font-size: 30px;
        font-weight: bold;
        color:#ffffff;
        text-align: center;
    }
    .footer{

        font-family: 'Times New Roman';
        font-size: 20px;
        font-weight: bold;
        color:#ffffff;
    }
    .back{
        background-color: #880000;
        color: white;
        padding: 10px 20px;
        font-size: 30px;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        text-decoration: none;
    }
    </style>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('count')}}" method="post">
                @csrf
                <table height='350' width='450'>
                    <tr>
                        <td colspan="4" class="header">Kalkulator</td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" name="angka1" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" name="angka2" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <select name="operator" class="operator">

                            <option value="kali">X</option>
                            <option value="bagi">:</option>
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                        </select></td>
                        <td><input type="submit" value="Reset" name="operator"></td>
                        <td><input type="submit" value="Hitung"></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" name="hasil" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="footer">
                            <p>Misbahudin Zaki</p>
                            <p>XII PPLG 1</p>
                        </td>
                    </tr>
                </table>
            </form>
            <p><a class="back" href="{{route('home')}}">Kembali</a></p>
        </body>
        </div>
    </div>
   </div>
</html>
