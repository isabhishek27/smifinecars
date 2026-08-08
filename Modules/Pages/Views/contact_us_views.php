<?php
use App\Libraries\MyLibrary;
$mylib = new MyLibrary();
$siteinfo = $mylib->siteinfo();
$comp = $siteinfo->comp_name ?: 'Sirius Motorsports Inc.';
$phone = $siteinfo->phone1 ?: '519-635-8872';
$fax = $siteinfo->phone2 ?: '888-894-2755';
$email = $siteinfo->user_email ?: 'harley@siriusconinc.com';
$address = $siteinfo->address ?: 'D-39 North St E, Tillsonburg, ON N4G1B4';
$phoneHref = preg_replace('/[^0-9+]/', '', $phone);
$addrLines = explode(',', $address);
?>
<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Get In Touch</span>
    <h1>Contact Us</h1>
    <div class="crumbs"><a href="<?php echo site_url('/');?>">Home</a> / Contact</div>
  </div>
</section>

<section class="section">
  <div class="container contact-grid">
    <div class="contact-info">
      <h3><?php echo esc($comp);?></h3>
      <div class="info-row">
        <div class="icon">📍</div>
        <div><strong>Address</strong><span><?php echo nl2br(esc(str_replace(', ', "\n", $address)));?><br/>Canada</span></div>
      </div>
      <div class="info-row">
        <div class="icon">📞</div>
        <div><strong>Telephone</strong><a href="tel:<?php echo esc($phoneHref);?>"><?php echo esc($phone);?></a></div>
      </div>
      <div class="info-row">
        <div class="icon">✉</div>
        <div><strong>Email</strong><a href="mailto:<?php echo esc($email);?>"><?php echo esc($email);?></a></div>
      </div>
      <div class="info-row">
        <div class="icon">🖨</div>
        <div><strong>Fax</strong><span><?php echo esc($fax);?></span></div>
      </div>
      <div class="info-row">
        <div class="icon">🕒</div>
        <div><strong>Business Hours</strong><span>
          Mon – Fri: 9:00 AM – 6:00 PM<br/>
          Saturday: 10:00 AM – 4:00 PM<br/>
          Sunday: By Appointment
        </span></div>
      </div>
    </div>

    <div class="form-card">
      <span class="eyebrow">Send a Message</span>
      <h2 style="font-size:1.8rem;margin-bottom:24px">We'd Love to Hear From You</h2>
      <div class="form-success" id="contactSuccess">Thank you — your message has been sent. We'll respond shortly.</div>
      <form id="contactForm" method="post" action="javascript:void(0);">
        <div class="form-row">
          <div class="form-group"><label>Name</label><input type="text" name="first_name" required/></div>
          <div class="form-group"><label>Phone</label><input type="tel" name="mobile_number" required/></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Email</label><input type="email" name="email" required/></div>
          <div class="form-group"><label>Vehicle Interested In</label><input type="text" name="address" placeholder="Optional"/></div>
        </div>
        <div class="form-group"><label>Message</label><textarea name="message" rows="5" required></textarea></div>
        <input type="hidden" name="last_name" value="" />
        <input type="hidden" name="enquiry_type" value="contact" />
        <button type="submit" class="btn btn-gold">Send Message</button>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="map-embed">
      <iframe loading="lazy" allowfullscreen
        src="https://www.google.com/maps?q=39+North+St+E,+Tillsonburg,+ON+N4G1B4&output=embed"
        title="Sirius Motorsports location"></iframe>
    </div>
  </div>
</section>
<script>
document.getElementById('contactForm')?.addEventListener('submit', function(e){
  e.preventDefault();
  var form = this;
  var fd = new FormData(form);
  fetch('<?php echo site_url('post-contact-us');?>', {
    method: 'POST',
    headers: {'X-Requested-With': 'XMLHttpRequest'},
    body: fd
  }).then(r => r.json()).then(function(res){
    var ok = document.getElementById('contactSuccess');
    if(ok){ ok.classList.add('show'); ok.scrollIntoView({behavior:'smooth',block:'center'}); }
    form.reset();
    setTimeout(function(){ ok && ok.classList.remove('show'); }, 6000);
  }).catch(function(){ alert('Unable to send message. Please try again.'); });
});
</script>
