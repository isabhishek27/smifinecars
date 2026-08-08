<?php
use App\Libraries\MyLibrary;
$mylib = new MyLibrary();
$siteinfo = $mylib->siteinfo();
$comp = $siteinfo->comp_name ?: 'Sirius Motorsports Inc.';
$phone = $siteinfo->phone1 ?: '519-635-8872';
$email = $siteinfo->user_email ?: 'harley@siriusconinc.com';
$address = $siteinfo->address ?: 'D-39 North St E, Tillsonburg, ON N4G1B4';
$phoneHref = preg_replace('/[^0-9+]/', '', $phone);
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="brand">
          <div class="brand-mark">S</div>
          <div class="brand-name">SIRIUS <span>MOTORSPORTS</span></div>
        </div>
        <p>Premium pre-owned luxury vehicles, hand-picked and certified for Ontario drivers who expect more.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="<?php echo site_url('/');?>">Home</a></li>
          <li><a href="<?php echo site_url('about-us');?>">About Us</a></li>
          <li><a href="<?php echo site_url('inventory');?>">Inventory</a></li>
          <li><a href="<?php echo site_url('financing');?>">Financing</a></li>
          <li><a href="<?php echo site_url('contact-us');?>">Contact Us</a></li>
        </ul>
      </div>
      <div>
        <h4>Legal</h4>
        <ul>
          <li><a href="<?php echo site_url('terms-and-conditions');?>">Terms &amp; Conditions</a></li>
          <li><a href="<?php echo site_url('privacy-policy');?>">Privacy Policy</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <ul>
          <li><?php echo esc($address);?></li>
          <li><a href="tel:<?php echo esc($phoneHref);?>"><?php echo esc($phone);?></a></li>
          <li><a href="mailto:<?php echo esc($email);?>"><?php echo esc($email);?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div>© <span data-year></span> <?php echo esc($comp);?>. All Rights Reserved.</div>
      <div><a href="<?php echo site_url('terms-and-conditions');?>">Terms</a> &nbsp;·&nbsp; <a href="<?php echo site_url('privacy-policy');?>">Privacy</a></div>
    </div>
  </div>
</footer>

<script src="<?php echo assets_url('js/sirius-main.js');?>"></script>
</body>
</html>
