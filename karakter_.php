<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'genshin';

$db_connection = mysqli_connect($server, $user, $password, $database);

if(!$db_connection){
	die('Gagal Terhubung(Lost Connect): '.mysqli_connect_error() );
}else{
	//print('Berhasil terkoneksi dengan database. Silahkan memilih menu yang disediakan.');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/da0693bfd0.js" ></script>
    <script src="./script.js"></script>
    <title>Genshin</title>
</head>
<body>
<header>
    <a href="#" class="logo">
    <img src="logo.jpg"></a>
    <div class="display">
        <div id="time"></div>
        </div>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a class="active" href="karakter_.php">Character</a>
    </nav>
    <script type="text/javascript" src="script.js"></script>
    <div class="pencarian">
            <input type="text" id="cari" onkeyup="search()" placeholder="cari karakter">
        </div>
    </header>
    
    <div>
        <table class="table">
                <tr>
                    <th><a class="th" href="karakter_.php">Nama</a></th>
                    <th><a class="th" href="karakter_.php">tipe </a></th>
                    <th><a class="th" href="karakter_.php">gambar</a></th>
                </tr>
                <?php
                    $sql = "SELECT karakter.nama_karakter, karakter.tipe_karakter, karakter.link_img
                    FROM karakter WHERE 1";
                    $query = mysqli_query($db_connection ,$sql);
                    while($row = mysqli_fetch_array($query))
                    {
                        echo 
                        "<tr>
                            <td> 
                                ".$row["nama_karakter"]."
                            </td>
                            <td>
                                ".$row["tipe_karakter"]."
                            </td>
                            <td>
                                <a href=".$row ["link_img"].">
                                <img src=".$row ["link_img"]." alt='image'/>
                            </td>
                        </tr>";
                    }
                ?>
        </table>
    </div>

    <footer>
        <div class="row">
            <div class="kolom">
                <img src="logo.jpg" class="logo">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque voluptatum nisi quae error illo labore, eum officiis aliquid dignissimos magnam non dolores, in amet molestias quos commodi doloremque impedit quibusdam.</p>
            </div>
            <div class="kolom">
                <h3>Universitas</h3>
                <p>ITS</p>
                <p>SURABAYA</p>
                <p class="email-id">its.ac.id</p>
            </div>
            <div class="kolom">
                <h3>Link</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="karakter_.php">karakter</a></li>
                </ul>
            </div>
            <div class="kolom">
                <h3>kirim saran</h3>
                <form >
                    <i class="far fa-envelope"></i>
                    <input type="text" placeholder="saran singkat">
                    <button type="submit"><i class="fas fa-arrow-circle-right"></i></button>
                </form>
                <div class="sosmed">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="buatan">FP NCC 2021</p>
    </footer>
    
</body>
<script>
         setInterval(()=>{
           const time = document.querySelector(".display #time");
           let date = new Date();
           let hours = date.getHours();
           let minutes = date.getMinutes();
           let seconds = date.getSeconds();
           let day_night = "AM";
           if(hours > 12){
             day_night = "PM";
             hours = hours - 12;
           }
           if(seconds < 10){
             seconds = "0" + seconds;
           }
           if(minutes < 10){
             minutes = "0" + minutes;
           }
           if(hours < 10){
             hours = "0" + hours;
           }
           time.textContent = hours + ":" + minutes + ":" + seconds + " "+ day_night;
         });
      </script>

      

