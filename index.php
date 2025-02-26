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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <script src="https://kit.fontawesome.com/da0693bfd0.js" ></script>
    
    <title>Genshin</title>
</head>
<body>

    <header>
    <a href="#" class="logo">
    <img src="logo.jpg"></a>
    <div class="wrapper">
         <div class="display">
            <div id="time"></div>
         </div>
         <span></span>
         <span></span>
      </div>

    <nav class="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="karakter_.php">Character</a>
    </nav>
    </header>
 
    
     

   <div class="konten">
       <h1>WELCOME</h1>
       <h1>GENSHIN IMPACT</h1>
       <P>Genshin Impact adalah permainan free-to-play action RPG dunia terbuka yang dikembangkan oleh miHoYo.
        Genshin Impact juga merupakan IP kedua yang disebut oleh miHoYo setelah Honkai Impact 3. Game ini dirilis pada tanggal 28 September 2020 di platform Android, iOS, Windows, 
        dan PlayStation 4, serta 28 April 2021 di platform PlayStation 5</P>
        <h2>Dunia</h2>
        <p>Di dunia yang bernama Teyvat ini, orang-orang yang terpilih oleh dewa pelindung Archon dikaruniai kendali akan kekuatan elemen dalam bentuk Vision. Pemain akan berperan sebagai seorang Traveler yang menjelajah dunia untuk mencari saudaranya yang hilang. Dalam perjalanan kamu akan bertemu dengan berbagai rekan dengan karakter dan kekuatan yang berbeda-beda, dan mengungkap kebenaran di balik Genshin Impact</p>
        <h2>Alur permainan</h2>
        <p>Di dalam game dunia terbuka ini, pemain dapat dengan bebas memanjat, berenang, terbang, dan meluncur untuk menjelajah berbagai jenis area di dunia. Dalam pertarungan, pemain dapat mengendalikan tim yang terdiri dari 4 karakter, dan seiring dengan jalannya kisah di dalam game, pemain dapat membuka sampai 30 karakter. Setiap karakter memiliki dua jenis skill, Basic Skill dan Ultimate, Basic Skill dapat terus digunakan selama skill tersebut tidak dalam cooldown, sedangkan skill Ultimate dapat digunakan setelah Elemental Energy terkumpul</p>
        <h2>Penghargaan</h2>
        <p>Pada tahun 2020, Genshin Impact berhasil meraih penghargaan Best Game dan User Choice Game di Google Play Award 2020. Genshin Impact juga berhasil meraih dua nominasi pada The Game Awards 2020 (TGA), yaitu kategori Best Mobile Game dan Best Role Playing</p>
        <h2>Sistem Elemen</h2>
        <p>Sistem Elemen adalah sistem utama dalam Genshin Impact, elemen terdiri dari Anemo, Geo, Pyro, Electro, Hydro, Cryo, Dendro.Reaksi di antara ketujuh elemen tersebut akan membantu pemain dalam mengalahkan musuh, atau menyelesaikan misi. Seperti elemen Pyro yang dapat membakar perisai musuh yang terbuat dari kayu, atau elemen Cryo yang dapat membekukan permukaan air.Memasak juga merupakan salah satu sistem khas di Genshin Impact, sambil menjelajah dunia yang luas, pemain dapat menemukan berbagai bahan masakan yang dapat diolah menjadi makanan yang memberikan beragam efek seperti pemulihan HP atau peningkatan ATK dan DEF.</p>
        <h2>Pengembangan</h2>
        <p>Setelah perilisan Honkai Impact 3, miHoYo terus meningkatkan kemampuan mereka dalam mengembangkan game, dan juga kualitas produk yang mereka hasilkan. Pada Januari 2017, mereka memulai pengembangan game baru mereka menggunakan engine Unity.Saat mengembangkan Genshin Impact, tim pengembang miHoYo mengambil inspirasi dari Zelda: Breath of the Wild, Grand Theft Auto series, dan game-game lainnya untuk membuat sistem misi, event, penjelajahan, dan pertarungan yang berbeda dari Honkai Impact 3.Selain pengisi suara Mandarin, miHoYo juga mengundang pengisi suara Jepang ternama seperti Tanaka Rie sebagai pengisi suara di dalam game ini.</p>

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
                    <li><a href="karakter_php">karakter</a></li>
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
</html>