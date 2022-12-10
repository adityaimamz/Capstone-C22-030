<?php $no = 1;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="https://kit.fontawesome.com/c133b2d014.js" crossorigin="anonymous"></script>
    <style>
        th{
            text-align: center;
        }
        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 1px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        }
        .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
        }

        .button1:hover {
        background-color: #4CAF50;
        color: white;
        }
    </style>
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl" style="background-color:#022452">
            <div class="container h-100">
                <a class="navbar-brand" href="/admin">
                    <h1 class="tm-site-title mb-0">Dashboard Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                           <a  class="nav-link d-block" href="/logout" style="margin-left: 1000px">
                            <i class="fa-solid fa-right-from-bracket"></i> <b>LOGOUT</b>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-black mt-5 mb-5">Welcome back, <b><?php echo Auth::user()->nama; ?></b>   <img src="img/waving-hand.png" style="width: 35px"/></p>
                </div>
            </div>
            <!-- row -->
            @if(session('success'))
            <div class="alert alert-success">
              <strong>Success!</strong> Berhasil menyetujui <i>request</i> konsultasi!
            </div>
            @endif
            <table>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jadwal Konsultasi</th>
                    <th scope="col">Deskripsi Singkat Masalah</th>
                    <th scope="col">Jenis Kategori</th>
                    <th scope="col">Jenis Konstultasi</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Konfirmasi </th>
                    <th scope="col">Aksi</th>
                </tr>
                @foreach($dt as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        @if ( $item['status'] == 1 )
                        <td style="color: #4CAF50"><b>Accept</b></td>
                        @else
                        <td style="color:crimson"><b>Pending</b></td>
                        @endif
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['jadwal'] }}</td>
                        <td>{{ $item['keluhan'] }}</td>
                        <td>{{ $kat }}</td>
                        <td>{{ $konsul }}</td>
                        @if (isset($item['bukti'])) 
                        <td>
                            <a href="{{ $item['bukti'] }}" download="w3logo" style="text-decoration: none"><i class="ace-icon fa fa-download"></i> Bukti {{ $item['nama'] }}</a>
                        </td>
                        @endif
                        @if ( $item['status'] != 1 )
                            <td> <a href="{{ url('acc/'. strrev(base64_encode(strrev(base64_encode($item['id']))))) }}"><center><button class="button button1" target="_blank" alt="setujui"><i class="fa-solid fa-check"></i></button></center></a></td>
                        @else <td></td>
                        @endif
                        <th scope="col">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=' . {{ $item['nomor'] }} . '&text=[MOMONG] Halo, saya <?php echo Auth::user()->nama; ?>. Bagaimana kabarmu apakah bisa dimulai hari ini? :)"><img width="20" src="img/ico_wa.png"></a> <strong> {{ $item['nama_singkat'] }} </strong>
                        </th>
                    </tr>
                @endforeach
              </table>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
    
</body>

</html>