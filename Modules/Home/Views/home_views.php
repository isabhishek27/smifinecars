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

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Why Choose Us</span>
      <h2>The Sirius Standard</h2>
      <div class="divider"></div>
      <p>We curate only the finest pre-owned luxury vehicles and pair them with service that lasts well beyond the showroom.</p>
    </div>
    <div class="features">
      <div class="feature">
        <div class="icon">✓</div>
        <h3>Certified Vehicles</h3>
        <p>Every vehicle is carefully inspected by experienced technicians for quality and reliability.</p>
      </div>
      <div class="feature">
        <div class="icon">$</div>
        <h3>Competitive Pricing</h3>
        <p>Quality vehicles at fair, transparent prices — no hidden fees, just honest value.</p>
      </div>
      <div class="feature">
        <div class="icon">%</div>
        <h3>Financing Available</h3>
        <p>Flexible financing solutions with rates starting at 5% through our trusted lending partners.</p>
      </div>
      <div class="feature">
        <div class="icon">★</div>
        <h3>Trusted Service</h3>
        <p>Dedicated customer support before, during and long after your purchase.</p>
      </div>
    </div>
  </div>
</section>

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

<section class="section">
  <div class="container split">
    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&w=1200&q=80" alt="Luxury vehicle showroom" loading="lazy" />
    <div>
      <span class="eyebrow">About Sirius</span>
      <h2>A Relationship<br/>That Goes The Distance</h2>
      <p>Our knowledgeable sales staff has years of experience and will be glad to walk you through our selection of quality used cars.</p>
      <p>Choosing and purchasing a vehicle with us is only the first step in an ongoing relationship that we maintain with our customers.</p>
      <ul>
        <li>Curated luxury and premium pre-owned inventory</li>
        <li>Transparent pricing with full vehicle history</li>
        <li>Financing partnerships for every credit profile</li>
        <li>Personalised after-sales support</li>
      </ul>
      <div style="margin-top:30px"><a href="<?php echo site_url('about-us');?>" class="btn btn-gold">More About Us</a></div>
    </div>
  </div>
</section>

<section class="cta-strip">
  <div class="container">
    <span class="eyebrow" style="color:#1a1a1a">Financing</span>
    <h2>Drive Today, Pay Your Way</h2>
    <p>Rates starting at 5% with fast approvals through Trillium Financial.</p>
    <a href="<?php echo site_url('financing');?>" class="btn btn-dark">Explore Financing</a>
  </div>
</section>
