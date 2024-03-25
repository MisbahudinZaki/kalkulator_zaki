<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Zaki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Ujian Kopetensi Keahlian</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <div class="card-header">Peserta</div>
                <div class="card-body">
                    <table class="table table-striped" border="1">
                        <tbody>
                            <tr>
                                <td>NO PESERTA</td>
                                <td>:</td>
                                <td>-----------------</td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>:</td>
                                <td>MISBAHUDIN ZAKI</td>
                            </tr>
                            <tr>
                                <td>KELAS</td>
                                <td>:</td>
                                <td>XII PPLG 1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               </div>
            </div>

            <br>
            <h3>Pengembangan Perangkat Lunak dan Game</h3>
            <br>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Project</div>
                    <div class="card-body">
                        <table class="table table-striped" border="1">
                            <thead>
                                <tr>
                                    <th>Kalkulator v.1</th>
                                    <th>Kalkulator v.2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{route('kalkulator')}}" class="btn btn-primary">Kalkulator 1</a></td>
                                    <td><a href="{{route('kalkulatorjs')}}" class="btn btn-primary">Kalkulator 2</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
