<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code For Social</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            /* height: 100vh; */
            margin: 0;
        }

        .flex-center {
            align-items: center;
            /* display: flex; */
            justify-content: center;
        }

        li {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .position-ref {
            position: relative;
            margin-bottom: 65px;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            /* position: absolute; */
        }

        .title {
            font-size: 84px;
        }


        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="content">
            <div class="title m-b-md">
                Code For Social
            </div>

            <div>
                <h2>FORMULIR GAMBARAN ANAK DARI SUDUT PANDANG ORANG TUA</h2>
            </div>

        </div>
    </div>
    <div class="container">
        <form action="/pdf" method="post">
            @csrf
            <table>
                <tr>
                    <td>
                        <h3>Nama : </h3>
                    </td>
                    <td>
                        <input type="text" name="name" size="50">
                    </td>
                </tr>
            </table>

            <div id="accordion">
                <!--@yield('partA')-->
                <div class="card">
                    <div class="card-header  rgba-stylish-strong z-depth-1 mb-1">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Part A <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <!-- <form action=""> -->
                            <h3>Instrumen Identifikasi Keagamaan</h3>
                            <ol>
                                <!-- 1 -->
                                <li>Sholat 5 waktu di rumah</li>

                                <input type="radio" id="a11" name="a1" value="1">
                                <label for='a11'>Sangat Kurang</label>

                                <input type="radio" id="a12" name="a1" value="2">
                                <label for='a12'>Kurang</label>

                                <input type="radio" id="a13" name="a1" value="3">
                                <label for='a13'>Cukup</label>

                                <input type="radio" id="a14" name="a1" value="4">
                                <label for='a14'>Baik</label>

                                <input type="radio" id="a15" name="a1" value="5">
                                <label for='a15'>Sangat Baik</label>

                                <!-- 2 -->
                                <li>Kegiatan Mengaji di rumah (Membaca Al-Quran, doa, hadits, atau lainnya)</li>

                                <input type="radio" id="a21" name="a2" value="1">
                                <label for='a21'>Sangat Kurang</label>

                                <input type="radio" id="a22" name="a2" value="2">
                                <label for='a22'>Kurang</label>

                                <input type="radio" id="a23" name="a2" value="3">
                                <label for='a23'>Cukup</label>

                                <input type="radio" id="a24" name="a2" value="4">
                                <label for='a24'>Baik</label>

                                <input type="radio" id="a25" name="a2" value="5">
                                <label for='a25'>Sangat Baik</label>

                                <!-- 3 -->
                                <li>Kegiatan Keagamaan di lingkungan rumah</li>
                                <textarea id="a3" name="a3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                                <!-- 4 -->
                                <li>Kegiatan Keagamaan di lingkungan luar rumah</li>
                                <textarea id="a4" name="a4" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>
                            </ol>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!--@yield('partB')-->
                <div class="card">
                    <div class="card-header  rgba-stylish-strong z-depth-1 mb-1">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Part B <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <!-- <form action=""> -->
                            <h3>Instrumen identifikasi Sosial dan Emosional</h3>
                            <ol>
                                <!-- 1 -->
                                <li>Mengikuti aturan yang ditetapkan di rumah</li>
                                <input type="radio" id="b11" name="b1" value="1">
                                <label for='b11'>Sangat Kurang</label>

                                <input type="radio" id="b12" name="b1" value="2">
                                <label for='b12'>Kurang</label>

                                <input type="radio" id="b13" name="b1" value="3">
                                <label for='b13'>Cukup</label>

                                <input type="radio" id="b14" name="b1" value="4">
                                <label for='b14'>Baik</label>

                                <input type="radio" id="b15" name="b1" value="5">
                                <label for='b15'>Sangat Baik</label>

                                <!-- 2 -->
                                <li>Perilaku sopan di rumah dan lingkungan sekitar rumah</li>
                                <input type="radio" id="b21" name="b2" value="1">
                                <label for='b21'>Sangat Kurang</label>

                                <input type="radio" id="b22" name="b2" value="2">
                                <label for='b22'>Kurang</label>

                                <input type="radio" id="b23" name="b2" value="3">
                                <label for='b23'>Cukup</label>

                                <input type="radio" id="b24" name="b2" value="4">
                                <label for='b24'>Baik</label>

                                <input type="radio" id="b25" name="b2" value="5">
                                <label for='b25'>Sangat Baik</label>

                                <!-- 3 -->
                                <li>Sering mengeluarkan kata-kata yang kasar</li>
                                <input type="radio" id="b31" name="b3" value="1">
                                <label for='b31'>Sangat Kurang</label>

                                <input type="radio" id="b32" name="b3" value="2">
                                <label for='b32'>Kurang</label>

                                <input type="radio" id="b33" name="b3" value="3">
                                <label for='b33'>Cukup</label>

                                <input type="radio" id="b34" name="b3" value="4">
                                <label for='b34'>Baik</label>

                                <input type="radio" id="b35" name="b3" value="5">
                                <label for='b35'>Sangat Baik</label>

                                <!-- 4 -->
                                <li>Sering marah tanpa sebab</li>
                                <input type="radio" id="b41" name="b4" value="1">
                                <label for='b41'>Sangat Kurang</label>

                                <input type="radio" id="b42" name="b4" value="2">
                                <label for='b42'>Kurang</label>

                                <input type="radio" id="b43" name="b4" value="3">
                                <label for='b43'>Cukup</label>

                                <input type="radio" id="b44" name="b4" value="4">
                                <label for='b44'>Baik</label>

                                <input type="radio" id="b45" name="b4" value="5">
                                <label for='b45'>Sangat Baik</label>

                                <!-- 5 -->
                                <li>Sering bertindak ceroboh</li>
                                <input type="radio" id="b51" name="b5" value="1">
                                <label for='b51'>Sangat Kurang</label>

                                <input type="radio" id="b52" name="b5" value="2">
                                <label for='b52'>Kurang</label>

                                <input type="radio" id="b53" name="b5" value="3">
                                <label for='b53'>Cukup</label>

                                <input type="radio" id="b54" name="b5" value="4">
                                <label for='b54'>Baik</label>

                                <input type="radio" id="b55" name="b5" value="5">
                                <label for='b55'>Sangat Baik</label>

                                <!-- 6 -->
                                <li>Sering menyalahkan orang lain</li>
                                <input type="radio" id="b61" name="b6" value="1">
                                <label for='b61'>Sangat Kurang</label>

                                <input type="radio" id="b62" name="b6" value="2">
                                <label for='b62'>Kurang</label>

                                <input type="radio" id="b63" name="b6" value="3">
                                <label for='b63'>Cukup</label>

                                <input type="radio" id="b64" name="b6" value="4">
                                <label for='b64'>Baik</label>

                                <input type="radio" id="b65" name="b6" value="5">
                                <label for='b65'>Sangat Baik</label>

                                <!-- 7 -->
                                <li>Tidak mengakui kesalahannya</li>
                                <input type="radio" id="b71" name="b7" value="1">
                                <label for='b71'>Sangat Kurang</label>

                                <input type="radio" id="b72" name="b7" value="2">
                                <label for='b72'>Kurang</label>

                                <input type="radio" id="b73" name="b7" value="3">
                                <label for='b73'>Cukup</label>

                                <input type="radio" id="b74" name="b7" value="4">
                                <label for='b74'>Baik</label>

                                <input type="radio" id="b75" name="b7" value="5">
                                <label for='b75'>Sangat Baik</label>

                                <!-- 8 -->
                                <li>Sering berbohong</li>
                                <input type="radio" id="b81" name="b8" value="1">
                                <label for='b81'>Sangat Kurang</label>

                                <input type="radio" id="b82" name="b8" value="2">
                                <label for='b82'>Kurang</label>

                                <input type="radio" id="b83" name="b8" value="3">
                                <label for='b83'>Cukup</label>

                                <input type="radio" id="b84" name="b8" value="4">
                                <label for='b84'>Baik</label>

                                <input type="radio" id="b85" name="b8" value="5">
                                <label for='b85'>Sangat Baik</label>

                                <!-- 9 -->
                                <li>Sering berkelahi, memukul dan menyerang orang lain tanpa sebab</li>
                                <input type="radio" id="b91" name="b9" value="1">
                                <label for='b91'>Sangat Kurang</label>

                                <input type="radio" id="b92" name="b9" value="2">
                                <label for='b92'>Kurang</label>

                                <input type="radio" id="b93" name="b9" value="3">
                                <label for='b93'>Cukup</label>

                                <input type="radio" id="b94" name="b9" value="4">
                                <label for='b94'>Baik</label>

                                <input type="radio" id="b95" name="b9" value="5">
                                <label for='b95'>Sangat Baik</label>

                                <!-- 10 -->
                                <li>Tidak dapat menjalin kerjasama dengan orang lain</li>
                                <input type="radio" id="b101" name="b10" value="1">
                                <label for='b101'>Sangat Kurang</label>

                                <input type="radio" id="b102" name="b10" value="2">
                                <label for='b102'>Kurang</label>

                                <input type="radio" id="b103" name="b10" value="3">
                                <label for='b103'>Cukup</label>

                                <input type="radio" id="b104" name="b10" value="4">
                                <label for='b104'>Baik</label>

                                <input type="radio" id="b105" name="b10" value="5">
                                <label for='b105'>Sangat Baik</label>

                                <!-- 11 -->
                                <li>Sering menyakiti diri sendiri</li>
                                <input type="radio" id="b111" name="b11" value="1">
                                <label for='b111'>Sangat Kurang</label>

                                <input type="radio" id="b112" name="b11" value="2">
                                <label for='b112'>Kurang</label>

                                <input type="radio" id="b113" name="b11" value="3">
                                <label for='b113'>Cukup</label>

                                <input type="radio" id="b114" name="b11" value="4">
                                <label for='b114'>Baik</label>

                                <input type="radio" id="b115" name="b11" value="5">
                                <label for='b115'>Sangat Baik</label>

                                <!-- 12 -->
                                <li>Sering menyendiri, melamun, dan mudah menangis</li>
                                <input type="radio" id="b121" name="b12" value="1">
                                <label for='b121'>Sangat Kurang</label>

                                <input type="radio" id="b122" name="b12" value="2">
                                <label for='b122'>Kurang</label>

                                <input type="radio" id="b123" name="b12" value="3">
                                <label for='b123'>Cukup</label>

                                <input type="radio" id="b124" name="b12" value="4">
                                <label for='b124'>Baik</label>

                                <input type="radio" id="b125" name="b12" value="5">
                                <label for='b125'>Sangat Baik</label>

                                <!-- 13 -->
                                <li>Peka terhadap lingkungan</li>
                                <input type="radio" id="b131" name="b13" value="1">
                                <label for='b131'>Sangat Kurang</label>

                                <input type="radio" id="b132" name="b13" value="2">
                                <label for='b132'>Kurang</label>

                                <input type="radio" id="b133" name="b13" value="3">
                                <label for='b133'>Cukup</label>

                                <input type="radio" id="b134" name="b13" value="4">
                                <label for='b134'>Baik</label>

                                <input type="radio" id="b135" name="b13" value="5">
                                <label for='b135'>Sangat Baik</label>

                                <!-- 14 -->
                                <li>Egois dan ingin menang sendiri</li>
                                <input type="radio" id="b141" name="b14" value="1">
                                <label for='b141'>Sangat Kurang</label>

                                <input type="radio" id="b142" name="b14" value="2">
                                <label for='b142'>Kurang</label>

                                <input type="radio" id="b143" name="b14" value="3">
                                <label for='b143'>Cukup</label>

                                <input type="radio" id="b144" name="b14" value="4">
                                <label for='b144'>Baik</label>

                                <input type="radio" id="b145" name="b14" value="5">
                                <label for='b145'>Sangat Baik</label>

                                <!-- 15 -->
                                <li>Perilaku dengan keluarga dan teman di lingkungan sekitar rumah</li>
                                <textarea id="b15" name="b15" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>
                            </ol>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!--@yield('partC')-->
                <div class="card">
                    <div class="card-header  rgba-stylish-strong z-depth-1 mb-1">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Part C <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <!-- <form action=""> -->
                            <h3>Instrumen identifikasi Kegiatan Belajar di Rumah</h3>
                            <ol>
                                <!-- 1 -->
                                <li>Membaca buku</li>
                                <input type="radio" id="c11" name="c1" value="1">
                                <label for='c11'>Sangat Kurang</label>

                                <input type="radio" id="c12" name="c1" value="2">
                                <label for='c12'>Kurang</label>

                                <input type="radio" id="c13" name="c1" value="3">
                                <label for='c13'>Cukup</label>

                                <input type="radio" id="c14" name="c1" value="4">
                                <label for='c14'>Baik</label>

                                <input type="radio" id="c15" name="c1" value="5">
                                <label for='c15'>Sangat Baik</label>

                                <!-- 2 -->
                                <li>Memperagakan kegiatan yang tertulis dalam bacaan</li>
                                <input type="radio" id="c21" name="c2" value="1">
                                <label for='c21'>Sangat Kurang</label>

                                <input type="radio" id="c22" name="c2" value="2">
                                <label for='c22'>Kurang</label>

                                <input type="radio" id="c23" name="c2" value="3">
                                <label for='c23'>Cukup</label>

                                <input type="radio" id="c24" name="c2" value="4">
                                <label for='c24'>Baik</label>

                                <input type="radio" id="c25" name="c2" value="5">
                                <label for='c25'>Sangat Baik</label>

                                <!-- 3 -->
                                <li>Menceritakan kembali bacaan dengan kalimat yang berbeda dengan kalimat pada bacaan</li>
                                <input type="radio" id="c31" name="c3" value="1">
                                <label for='c31'>Sangat Kurang</label>

                                <input type="radio" id="c32" name="c3" value="2">
                                <label for='c32'>Kurang</label>

                                <input type="radio" id="c33" name="c3" value="3">
                                <label for='c33'>Cukup</label>

                                <input type="radio" id="c34" name="c3" value="4">
                                <label for='c34'>Baik</label>

                                <input type="radio" id="c35" name="c3" value="5">
                                <label for='c35'>Sangat Baik</label>

                                <!-- 4 -->
                                <li>Menulis</li>
                                <input type="radio" id="c41" name="c4" value="1">
                                <label for='c41'>Sangat Kurang</label>

                                <input type="radio" id="c42" name="c4" value="2">
                                <label for='c42'>Kurang</label>

                                <input type="radio" id="c43" name="c4" value="3">
                                <label for='c43'>Cukup</label>

                                <input type="radio" id="c44" name="c4" value="4">
                                <label for='c44'>Baik</label>

                                <input type="radio" id="c45" name="c4" value="5">
                                <label for='c45'>Sangat Baik</label>

                                <!-- 5 -->
                                <li>Tulisan yang dihasilkan dapat dibaca</li>
                                <input type="radio" id="c51" name="c5" value="1">
                                <label for='c51'>Sangat Kurang</label>

                                <input type="radio" id="c52" name="c5" value="2">
                                <label for='c52'>Kurang</label>

                                <input type="radio" id="c53" name="c5" value="3">
                                <label for='c53'>Cukup</label>

                                <input type="radio" id="c54" name="c5" value="4">
                                <label for='c54'>Baik</label>

                                <input type="radio" id="c55" name="c5" value="5">
                                <label for='c55'>Sangat Baik</label>

                                <!-- 6 -->
                                <li>Dapat menulis cerita</li>
                                <input type="radio" id="c61" name="c6" value="1">
                                <label for='c61'>Sangat Kurang</label>

                                <input type="radio" id="c62" name="c6" value="2">
                                <label for='c62'>Kurang</label>

                                <input type="radio" id="c63" name="c6" value="3">
                                <label for='c63'>Cukup</label>

                                <input type="radio" id="c64" name="c6" value="4">
                                <label for='c64'>Baik</label>

                                <input type="radio" id="c65" name="c6" value="5">
                                <label for='c65'>Sangat Baik</label>

                                <!-- 7 -->
                                <li>Senangkah belajar Matematika</li>
                                <input type="radio" id="c71" name="c7" value="1">
                                <label for='c71'>Sangat Kurang</label>

                                <input type="radio" id="c72" name="c7" value="2">
                                <label for='c72'>Kurang</label>

                                <input type="radio" id="c73" name="c7" value="3">
                                <label for='c73'>Cukup</label>

                                <input type="radio" id="c74" name="c7" value="4">
                                <label for='c74'>Baik</label>

                                <input type="radio" id="c75" name="c7" value="5">
                                <label for='c75'>Sangat Baik</label>

                                <!-- 8 -->
                                <li>Membantu orang tua belanja</li>
                                <input type="radio" id="c81" name="c8" value="1">
                                <label for='c81'>Sangat Kurang</label>

                                <input type="radio" id="c82" name="c8" value="2">
                                <label for='c82'>Kurang</label>

                                <input type="radio" id="c83" name="c8" value="3">
                                <label for='c83'>Cukup</label>

                                <input type="radio" id="c84" name="c8" value="4">
                                <label for='c84'>Baik</label>

                                <input type="radio" id="c85" name="c8" value="5">
                                <label for='c85'>Sangat Baik</label>

                                <!-- 9 -->
                                <li>Bercerita tentang kegiatan Matematika</li>
                                <input type="radio" id="c91" name="c9" value="1">
                                <label for='c91'>Sangat Kurang</label>

                                <input type="radio" id="c92" name="c9" value="2">
                                <label for='c92'>Kurang</label>

                                <input type="radio" id="c93" name="c9" value="3">
                                <label for='c93'>Cukup</label>

                                <input type="radio" id="c94" name="c9" value="4">
                                <label for='c94'>Baik</label>

                                <input type="radio" id="c95" name="c9" value="5">
                                <label for='c95'>Sangat Baik</label>

                                <!-- 10 -->
                                <li>Merapikan kembali semua perlengkapan setelah belajar</li>
                                <input type="radio" id="c101" name="c10" value="1">
                                <label for='c101'>Sangat Kurang</label>

                                <input type="radio" id="c102" name="c10" value="2">
                                <label for='c102'>Kurang</label>

                                <input type="radio" id="c103" name="c10" value="3">
                                <label for='c103'>Cukup</label>

                                <input type="radio" id="c104" name="c10" value="4">
                                <label for='c104'>Baik</label>

                                <input type="radio" id="c105" name="c10" value="5">
                                <label for='c105'>Sangat Baik</label>

                                <!-- 11 --> R dan T
                                <li>Kegiatan menonton televisi</li>
                                <input type="radio" id="c111" name="c11" value="1">
                                <label for='c111'>Sangat Kurang</label>

                                <input type="radio" id="c112" name="c11" value="2">
                                <label for='c112'>Kurang</label>

                                <input type="radio" id="c113" name="c11" value="3">
                                <label for='c113'>Cukup</label>

                                <input type="radio" id="c114" name="c11" value="4">
                                <label for='c114'>Baik</label>

                                <input type="radio" id="c115" name="c11" value="5">
                                <label for='c115'>Sangat Baik</label>

                                <br>
                                <textarea id="c11" name="c11_1" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                                <!-- 12 -->
                                <li>Mencatat hasil dari televisi</li>
                                <input type="radio" id="c121" name="c12" value="1">
                                <label for='c121'>Sangat Kurang</label>

                                <input type="radio" id="c122" name="c12" value="2">
                                <label for='c122'>Kurang</label>

                                <input type="radio" id="c123" name="c12" value="3">
                                <label for='c123'>Cukup</label>

                                <input type="radio" id="c124" name="c12" value="4">
                                <label for='c124'>Baik</label>

                                <input type="radio" id="c125" name="c12" value="5">
                                <label for='c125'>Sangat Baik</label>

                                <!-- 13 -->
                                <li>Menceritakan kesulitan saat belajar dari televisi</li>
                                <input type="radio" id="c131" name="c13" value="1">
                                <label for='c131'>Sangat Kurang</label>

                                <input type="radio" id="c132" name="c13" value="2">
                                <label for='c132'>Kurang</label>

                                <input type="radio" id="c133" name="c13" value="3">
                                <label for='c133'>Cukup</label>

                                <input type="radio" id="c134" name="c13" value="4">
                                <label for='c134'>Baik</label>

                                <input type="radio" id="c135" name="c13" value="5">
                                <label for='c135'>Sangat Baik</label>

                                <!-- 14 -->
                                <li>Menyatakan perasaannya saat harus belajar dari televisi</li>
                                <input type="radio" id="c141" name="c14" value="1">
                                <label for='c141'>Sangat Kurang</label>

                                <input type="radio" id="c142" name="c14" value="2">
                                <label for='c142'>Kurang</label>

                                <input type="radio" id="c143" name="c14" value="3">
                                <label for='c143'>Cukup</label>

                                <input type="radio" id="c144" name="c14" value="4">
                                <label for='c144'>Baik</label>

                                <input type="radio" id="c145" name="c14" value="5">
                                <label for='c145'>Sangat Baik</label>

                                <!-- 15 -->
                                <li>Berkomunikasi/meminta bantuan saat ada kesulitan belajar di rumah</li>
                                <input type="radio" id="c151" name="c15" value="1">
                                <label for='c151'>Sangat Kurang</label>

                                <input type="radio" id="c152" name="c15" value="2">
                                <label for='c152'>Kurang</label>

                                <input type="radio" id="c153" name="c15" value="3">
                                <label for='c153'>Cukup</label>

                                <input type="radio" id="c154" name="c15" value="4">
                                <label for='c154'>Baik</label>

                                <input type="radio" id="c155" name="c15" value="5">
                                <label for='c155'>Sangat Baik</label>
                            </ol>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!--@yield('partD')-->
                <div class="card">
                    <div class="card-header rgba-stylish-strong z-depth-1 mb-1">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Part D <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <!-- <form action=""> -->
                            <h3>Instrumen identifikasi Area Bahasa dan Komunikasi</h3>
                            <ol>
                                <!-- 1 -->
                                <li>Dapat menggunakan bahasa secara oral (sedikit menggunakan isyarat)</li>
                                <input type="radio" id="d11" name="d1" value="1">
                                <label for='d11'>Sangat Kurang</label>

                                <input type="radio" id="d12" name="d1" value="2">
                                <label for='d12'>Kurang</label>

                                <input type="radio" id="d13" name="d1" value="3">
                                <label for='d13'>Cukup</label>

                                <input type="radio" id="d14" name="d1" value="4">
                                <label for='d14'>Baik</label>

                                <input type="radio" id="d15" name="d1" value="5">
                                <label for='d15'>Sangat Baik</label>

                                <!-- 2 -->
                                <li>Senang bersosialisasi dengan orang di dekat rumah</li>
                                <input type="radio" id="d21" name="d2" value="1">
                                <label for='d21'>Sangat Kurang</label>

                                <input type="radio" id="d22" name="d2" value="2">
                                <label for='d22'>Kurang</label>

                                <input type="radio" id="d23" name="d2" value="3">
                                <label for='d23'>Cukup</label>

                                <input type="radio" id="d24" name="d2" value="4">
                                <label for='d24'>Baik</label>

                                <input type="radio" id="d25" name="d2" value="5">
                                <label for='d25'>Sangat Baik</label>

                                <!-- 3 -->
                                <li>Dapat mengungkapkan apa yang dialami/dirasakan/diinginkan secara sederhana, misalnya; “saya sedang sedih, mau bercerita... “</li>
                                <input type="radio" id="d31" name="d3" value="1">
                                <label for='d31'>Sangat Kurang</label>

                                <input type="radio" id="d32" name="d3" value="2">
                                <label for='d32'>Kurang</label>

                                <input type="radio" id="d33" name="d3" value="3">
                                <label for='d33'>Cukup</label>

                                <input type="radio" id="d34" name="d3" value="4">
                                <label for='d34'>Baik</label>

                                <input type="radio" id="d35" name="d3" value="5">
                                <label for='d35'>Sangat Baik</label>

                                <!-- 4 -->
                                <li>Dapat bertanya/menjawab pertanyaan sederhana tentang dirinya/teman, misalnya; Apa kesukaan temanmu?</li>
                                <input type="radio" id="d41" name="d4" value="1">
                                <label for='d41'>Sangat Kurang</label>

                                <input type="radio" id="d42" name="d4" value="2">
                                <label for='d42'>Kurang</label>

                                <input type="radio" id="d43" name="d4" value="3">
                                <label for='d43'>Cukup</label>

                                <input type="radio" id="d44" name="d4" value="4">
                                <label for='d44'>Baik</label>

                                <input type="radio" id="d45" name="d4" value="5">
                                <label for='d45'>Sangat Baik</label>

                                <!-- 5 -->
                                <li>Dapat memberikan respon terhadap suatu kondisi, misalnya mengucapkan terima kasih jika diberi sesuatu atau meminta maaf jika melakukan kesalahan</li>
                                <input type="radio" id="d51" name="d5" value="1">
                                <label for='d51'>Sangat Kurang</label>

                                <input type="radio" id="d52" name="d5" value="2">
                                <label for='d52'>Kurang</label>

                                <input type="radio" id="d53" name="d5" value="3">
                                <label for='d53'>Cukup</label>

                                <input type="radio" id="d54" name="d5" value="4">
                                <label for='d54'>Baik</label>

                                <input type="radio" id="d55" name="d5" value="5">
                                <label for='d55'>Sangat Baik</label>

                                <!-- 6 -->
                                <li>Memiliki kualitas suara yang aneh/biasanya tinggi melengking</li>
                                <input type="radio" id="d61" name="d6" value="1">
                                <label for='d61'>Sangat Kurang</label>

                                <input type="radio" id="d62" name="d6" value="2">
                                <label for='d62'>Kurang</label>

                                <input type="radio" id="d63" name="d6" value="3">
                                <label for='d63'>Cukup</label>

                                <input type="radio" id="d64" name="d6" value="4">
                                <label for='d64'>Baik</label>

                                <input type="radio" id="d65" name="d6" value="5">
                                <label for='d65'>Sangat Baik</label>

                                <!-- 7 -->
                                <li>Memiliki kosakata yang terbatas</li>
                                <input type="radio" id="d71" name="d7" value="1">
                                <label for='d71'>Sangat Kurang</label>

                                <input type="radio" id="d72" name="d7" value="2">
                                <label for='d72'>Kurang</label>

                                <input type="radio" id="d73" name="d7" value="3">
                                <label for='d73'>Cukup</label>

                                <input type="radio" id="d74" name="d7" value="4">
                                <label for='d74'>Baik</label>

                                <input type="radio" id="d75" name="d7" value="5">
                                <label for='d75'>Sangat Baik</label>

                                <!-- 8 -->
                                <li>Kurang memahami konsep yang bersifat abstrak</li>
                                <input type="radio" id="d81" name="d8" value="1">
                                <label for='d81'>Sangat Kurang</label>

                                <input type="radio" id="d82" name="d8" value="2">
                                <label for='d82'>Kurang</label>

                                <input type="radio" id="d83" name="d8" value="3">
                                <label for='d83'>Cukup</label>

                                <input type="radio" id="d84" name="d8" value="4">
                                <label for='d84'>Baik</label>

                                <input type="radio" id="d85" name="d8" value="5">
                                <label for='d85'>Sangat Baik</label>

                                <!-- 9 -->
                                <li>Menunjukkan rasa ingin tahu</li>
                                <input type="radio" id="d91" name="d9" value="1">
                                <label for='d91'>Sangat Kurang</label>

                                <input type="radio" id="d92" name="d9" value="2">
                                <label for='d92'>Kurang</label>

                                <input type="radio" id="d93" name="d9" value="3">
                                <label for='d93'>Cukup</label>

                                <input type="radio" id="d94" name="d9" value="4">
                                <label for='d94'>Baik</label>

                                <input type="radio" id="d95" name="d9" value="5">
                                <label for='d95'>Sangat Baik</label>

                                <!-- 10 -->
                                <li>Meniru/mengikuti tingkah laku orang lain dalam pergaulan</li>
                                <input type="radio" id="d101" name="d10" value="1">
                                <label for='d101'>Sangat Kurang</label>

                                <input type="radio" id="d102" name="d10" value="2">
                                <label for='d102'>Kurang</label>

                                <input type="radio" id="d103" name="d10" value="3">
                                <label for='d103'>Cukup</label>

                                <input type="radio" id="d104" name="d10" value="4">
                                <label for='d104'>Baik</label>

                                <input type="radio" id="d105" name="d10" value="5">
                                <label for='d105'>Sangat Baik</label>
                            </ol>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!--@yield('partE')-->
                <div class="card">
                    <div class="card-header  rgba-stylish-strong z-depth-1 mb-1">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                            <h5 class="mb-0 white-text text-uppercase font-thin">
                                Part E <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <!-- <form action=""> -->
                            <h3>Instrumen identifikasi Pengembangan Keterampilan Diri</h3>
                            <ol>
                                <!-- 1 -->
                                <li>Kegiatan keterampilan yang paling disukai</li>
                                <textarea id="e1" name="e1" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                                <!-- 2 -->
                                <li>Kegiatan keterampilan yang paling tidak disukai</li>
                                <textarea id="e2" name="e2" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                                <!-- 3 -->
                                <li>Hobi yang sering dilakukan di rumah</li>
                                <textarea id="e3" name="e3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                                <!-- 4 -->
                                <li>Kegiatan memasak</li>
                                <textarea id="e4" name="e4" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                                <!-- 5 -->
                                <li>Kegiatan keterampilan tangan</li>
                                <textarea id="e5" name="e5" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>
                            </ol>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="text-right">
                <!--<button id='btn_print' type="button" class="btn btn-primary"><a href="http://pdfcrowd.com/url_to_pdf/">Save this page to a PDF</a></button>-->
                <input type="submit" value="Save this page to a PDF" name="Print" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>