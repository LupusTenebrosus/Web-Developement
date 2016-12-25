<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LUPUS TENEBROSUS HOMEPAGE</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">
  <script src="javascript/javascript.js"></script>

</head>

<body>



 <div id="gallery_viewing_fone">
     <button class="gallery_left" onclick="">P</button>
  <div id="gallery_image_zone">
    <div id="gallery_image_border">
  </div>
  </div>
    <button class="gallery_right" onclick="">N</button> 
  </div>
</div>




  <header>
   <section class="top_slide">  
    <div class="logo"></div>
    <nav class="menu">
      <a href="http://github.com/"><div id="github_header_icon"></div></a>
      <a href="http://demiart.ru/"><div id="demiart_header_icon"></div></a>
      <a href="http://sololearn.com/"><div id="sololearn_header_icon"></div></a>
      <a href="http://slack.com/"><div id="slack_header_icon"></div></a>
      <a href="http://codeschool.com/"><div id="codeschool_header_icon"></div></a>
      <a href="http://codecademy.com/"><div id="codecademy_header_icon"></div></a>
    </nav>
   </section>
  </header>

<div id="content">
  <aside id="aside_left">
    <section id="main_menu">
      <ul class="navigation">
        <a class="main" href="#url">NAVIGATION</a>
        <li class="n1"><a href="/">MAIN</a></li>
        <li class="n2"><a href="index.php?page=chat">CHAT</a></li>
        <li class="n3"><a href="http://lupus-tenebrosus.com/forum/phpBB3/index.php">FORUM</a></li>
        <li class="n4"><a href="index.php?page=gallery">GALLERY</a></li>
        <li class="n5"><a href="index.php?page=portfolio">PORTFOLIO</a></li>
        <li class="n6"><a href="index.php?page=certificates">CERTIFICATES</a></li>
        <li class="n7"><a href="index.php?page=contacts">CONTACTS</a></li>
        <li class="n8"><a href="index.php?page=aboutme">ABOUT ME</a></li>
      </ul>
    </section>

    <div class="sidebar_fixed">
      <div class="sidebar_punkt_wrap">
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>One One qwerty1</span></a></div>
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Two two qwerty2</span></a></div>
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Threee qwerty3</span></a></div>     
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Fo Fo qwerty4</span></a></div>
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Fif fif qwerty5</span></a></div>
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Six Six qwerty6</span></a></div>
         <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Sept qwerty7</span></a></div>
          <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Eighhh qwerty8</span></a></div>
           <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Nine qwerty9</span></a></div>
            <div class="slidebar_fixed_punkt"><a class="slidebar_fixed_href_insides" href="http://github.com/"><div class="slidebar_fixed_logo" ></div><span>Tennn qwerty10</span></a></div>
         </div>
         <div class="sidebar_push_btn"><img class="sidebar_push_btn_img" src="images/raven.png">    
      </div>
    </div>  
  </aside>
  
  <main> 

<?php
$page = $_GET['page'];
if (!isset($page))   /* если нихуя не написано в адресной строке -подключить мэйн, а если нет то елс иф до победного */
{
  require('templates/main/main.php');
}
elseif ($page == 'gallery')
{
require('templates/gallery/gallery.php');
}
elseif ($page == 'aboutme')
{
require('templates/aboutme/aboutme.php');
}
elseif ($page == 'chat')
{
require('templates/chat/chat.php');
}
elseif ($page == 'portfolio')
{
require('templates/portfolio/portfolio.php');
}
elseif ($page == 'certificates')
{
require('templates/certificates/certificates.php');
}
elseif ($page == 'contacts')
{
require('templates/contacts/contacts.php');
}
?>

</main>

  <aside id="aside_right">
    <section id="global_menu">
      <ul class="navigation">
        <a class="main" href="#url">NAV. GLOBAL</a>
      </ul>
    </section>
  </aside>


   


    <section class="brands">
          <a href="#"><img class="brand_img" src="images/main/brands/brand1.jpg"></a>  
          <a href="#"><img class="brand_img" src="images/main/brands/brand2.jpg"></a>
          <a href="#"><img class="brand_img" src="images/main/brands/brand3.jpg"></a>
          <a href="#"><img class="brand_img" src="images/main/brands/brand4.jpg"></a>
          <a href="#"><img class="brand_img" src="images/main/brands/brand5.png"></a>
    </section>
  
    <section class="social">
      <div class="instagramm">
        <div id="quick_friends_link_logo">
          <img src="images/main/social/quick_friends_link.png">
          <div id="quick_friends_link_text">&nbsp quick links to friends homepages... </div>
        </div>
        <div id="livello">
          <img class="friends_link_img" src="images/main/social/1.jpg">
          <img class="friends_link_img" src="images/main/social/2.jpg">
          <img class="friends_link_img" src="images/main/social/3.jpg">
          <img class="friends_link_img" src="images/main/social/4.jpeg">
          <img class="friends_link_img" src="images/main/social/5.jpg">
          <img class="friends_link_img" src="images/main/social/6.jpg">
        </div> 
      </div>
      <div id="network">
        <a href="http://emerald-dream.3dn.ru/">
          <div id="guild1">
            <div id="guild1_img"></div>
          </div>
        </a>
        <a href="http://eu.battle.net/wow/ru/guild/%D1%81%D1%82%D1%80%D0%B0%D0%B6-%D1%81%D0%BC%D0%B5%D1%80%D1%82%D0%B8/%D0%A8%D0%BE%D1%83_%D0%A2%D0%B0%D0%B9%D0%BC/">
          <div id="guild2">
            <div id="guild2_img"></div>
          </div>
        </a>
        <a href="/">
          <div id="guild3">
            <div id="guild3_img"></div>
          </div>
        </a>
      </div>
    <section>
</div>

  

  <footer>
    <div id="block"> 
      <div id="footer_contact_block">
        <div id="telephone"></div><div class="text_in_footer_div">&nbspPHONE:&nbsp 8-999-854-82-51</div>
        <a href="mailto:lupus.tenebrosus@gmail.com"><div id="email"></div><div class="text_in_footer_div">&nbspE_MAIL:&nbsplupus.tenebrosus@gmail.com</div></a>
        <a href="https://www.google.ru/maps/place/%D0%9F%D0%B0%D1%80%D0%BA+%D0%9E%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B5+%D0%BF%D1%80%D1%83%D0%B4%D1%8B/@55.6779631,37.4781134,21z/data=!4m5!3m4!1s0x0:0x8f670ef9fc3ca676!8m2!3d55.6779757!4d37.4780613?hl=ru"><div id="placeholder"></div><div class="text_in_footer_div">&nbspMAP</div></a>
      </div>
    </div>
    <div id="copyright">
      <div id="copyright_text"> &copy By Lupus Tenebrosus. All rights reserved. 
      </div>   
    </div>
  </footer>
</body>
</html>

