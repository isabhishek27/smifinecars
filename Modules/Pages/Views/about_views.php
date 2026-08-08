<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Who We Are</span>
    <h1><?php echo esc($page_title ?? 'About Sirius Motorsports Inc.');?></h1>
    <div class="crumbs"><a href="<?php echo site_url('/');?>">Home</a> / About</div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php echo $page_content ?? '';?>
  </div>
</section>

<section class="cta-strip">
  <div class="container">
    <h2>Ready to Find Your Next Vehicle?</h2>
    <p>Browse our showroom or speak with our team today.</p>
    <a href="<?php echo site_url('inventory');?>" class="btn btn-dark">View Inventory</a>
  </div>
</section>
