<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/logo.ico">

	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="UTF-8"/>
 	<title><?php bloginfo('name'); wp_title(); ?></title>

 	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-361916-9p72E"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-361916-9p72E" style="position:fixed; left:-999px;" alt=""/></noscript>

  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '588464091663034');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=588464091663034&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

  <?php wp_head(); ?>

</head>
<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53409517, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53409517" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138896188-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138896188-1');
</script>

<header class="header">
  <div class="container-header">

      <div class="box-logo">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" title=""/>
        </a>
        <p><a class="nolink" href="tel:+7(952)2622727">+7 952 262 2727</a></p>
    </div>


      <span class="button-mobile-menu" onclick="openMenu()">&#9776;</span>

    
    
    <nav class="header-menu ml-5" id="header-menu">
      <span class="close" onclick="openMenu()"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/close.png" alt=""></span>
      <?php 
        wp_nav_menu( array(
          'theme_location'=>'menu',
          'container' => false,
        ) );
      ?>
    </nav>
  </div>
</header>