<section class="hero">
  <div class="container hero-inner">
    <span class="eyebrow">Sirius Motorsports Inc.</span>
    <h1>Premium <em>Pre-Owned</em><br/>Luxury Vehicles</h1>
    <p>Browse our carefully selected inventory of quality certified vehicles at competitive prices — backed by service you can trust.</p>
    <div class="hero-actions">
      <a href="<?php echo site_url('inventory');?>" class="btn btn-gold">View Inventory</a>
      <a href="<?php echo site_url('contact-us');?>" class="btn btn-outline">Contact Us</a>
    </div>
  </div>
  <div class="hero-stats">
    <div class="container">
      <div class="row">
        <div class="stat"><div class="num">15+</div><div class="lbl">Years Experience</div></div>
        <div class="stat"><div class="num">1,200+</div><div class="lbl">Happy Customers</div></div>
        <div class="stat"><div class="num">100%</div><div class="lbl">Certified Inventory</div></div>
        <div class="stat"><div class="num">5%</div><div class="lbl">Financing From</div></div>
      </div>
    </div>
  </div>
</section>

<?php echo $page_content ?? ''; ?>

<section class="section section-dark">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Featured Inventory</span>
      <h2>Hand-Picked Vehicles</h2>
      <div class="divider"></div>
      <p>A selection from our current showroom — explore the full inventory for more luxury options.</p>
    </div>
    <div class="inventory-grid" id="featuredGrid">
      <?php
      if (!empty($products) && is_array($products)) {
          foreach ($products as $v) {
              echo view('Modules\Products\Views\vehicle_card', ['v' => $v]);
          }
      }
      ?>
    </div>
    <div style="text-align:center;margin-top:48px">
      <a href="<?php echo site_url('inventory');?>" class="btn btn-outline">View Full Inventory</a>
    </div>
  </div>
</section>

<?php echo $home_bottom_content ?? ''; ?>
