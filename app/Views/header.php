<?php
$uri = current_url(true);
$seg1 = $uri->getSegment(1);
$curr_env = getenv('CI_ENVIRONMENT');

use App\Libraries\MyLibrary;
$mylib = new MyLibrary();
$siteinfo = $mylib->siteinfo();

$navActive = function($slug) use ($seg1) {
    if ($slug === '' && ($seg1 === '' || $seg1 === null)) return 'active';
    return ($seg1 === $slug) ? 'active' : '';
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php if($curr_env=='production'){ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FG80TP7QXQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-FG80TP7QXQ');
</script>
<?php } ?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo assets_url('images/favicon.png');?>">
<title><?php echo esc($meta_title);?></title>
<meta name="description" content="<?php echo esc($meta_desc);?>" />
<meta name="keywords" content="<?php echo esc($meta_keyword);?>" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo assets_url('css/sirius.css');?>" />
</head>
<body>

<header class="site-header">
  <div class="container nav-wrap">
    <a href="<?php echo site_url('/');?>" class="brand">
      <div class="brand-mark">S</div>
      <div class="brand-name">SIRIUS <span>MOTORSPORTS</span></div>
    </a>
    <nav>
      <ul class="nav-links">
        <li><a class="<?php echo $navActive('');?>" href="<?php echo site_url('/');?>">Home</a></li>
        <li><a class="<?php echo $navActive('about-us');?>" href="<?php echo site_url('about-us');?>">About Us</a></li>
        <li><a class="<?php echo $navActive('inventory');?>" href="<?php echo site_url('inventory');?>">Inventory</a></li>
        <li><a class="<?php echo $navActive('financing');?>" href="<?php echo site_url('financing');?>">Financing</a></li>
        <li><a class="<?php echo $navActive('contact-us');?>" href="<?php echo site_url('contact-us');?>">Contact Us</a></li>
      </ul>
    </nav>
    <div class="nav-cta">
      <a href="<?php echo site_url('contact-us');?>" class="btn btn-gold">Contact Us</a>
      <button class="nav-toggle" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>
