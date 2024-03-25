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

    input[type="button"]{
        width: 100%;
        background-color: #090088;
        color: white;
        padding: 20px 40px;
        font-size: 30px;
        font-weight: bold;
        border: none;
    }

    input[type="reset"]{
        width: 100%;
        background-color: #090088;
        color: white;
        padding: 20px 40px;
        font-size: 30px;
        font-weight: bold;
        border: none;
    }
    .back{
        background-color: red;
        color: white;
        padding: 10px 20px;
        font-size: 30px;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        text-decoration: none;
    }
    .operator{
        padding: 20px 30px;
        font-size: 25px;
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
    .equals{
        height:152px;
    }
    </style>
</head>
<body>
    <form action="" method="post" name="form1">
        @csrf
        <table border="0">
            <tr>
                <td colspan="4" class="header">Kalkulator</td>
            </tr>
            <tr>
                <td colspan="4"><input type="text" name="txt" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="reset" value="C"></td>
                <td><input type="button" value="X" onclick="form1.txt.value+='*'"></td>
                <td><input type="button" value=":" onclick="form1.txt.value+='/'"></td>
            </tr>
            <tr>
                <td><input type="button" value="9" onclick="form1.txt.value+='9'"></td>
                <td><input type="button" value="8" onclick="form1.txt.value+='8'"></td>
                <td><input type="button" value="7" onclick="form1.txt.value+='7'"></td>
                <td><input type="button" value="+" onclick="form1.txt.value+='+'"></td>
            </tr>
            <tr>
                <td><input type="button" value="6" onclick="form1.txt.value+='6'"></td>
                <td><input type="button" value="5" onclick="form1.txt.value+='5'"></td>
                <td><input type="button" value="4" onclick="form1.txt.value+='4'"></td>
                <td><input type="button" value="-" onclick="form1.txt.value+='-'"></td>
            </tr>
            <tr>
                <td><input type="button" value="3" onclick="form1.txt.value+='3'"></td>
                <td><input type="button" value="2" onclick="form1.txt.value+='2'"></td>
                <td><input type="button" value="1" onclick="form1.txt.value+='1'"></td>
                <td rowspan="2"><input type="button" class="equals" value="=" onclick="form1.txt1.value=eval(form1.txt1.value)"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="0" onclick="form1.txt1.value+='0'"></td>
                <td><input type="button" value="." onclick="form1.txt1.value+='.'"></td>
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
</html>
