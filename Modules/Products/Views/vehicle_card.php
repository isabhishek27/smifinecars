<?php
/**
 * Render a vehicle card (shared by home featured + inventory).
 * @var object $v product row
 */
if (!isset($v) || !is_object($v)) {
    return;
}
$img = '';
if (!empty($v->photo) && is_file(FCPATH . 'uploads/products/' . $v->photo)) {
    $img = site_url('public/uploads/products/' . $v->photo);
} else {
    $img = 'https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=900&q=80';
}
$isSold = ($v->stock_status === 'sold');
$badge = $isSold
    ? '<span class="badge badge-sold">Sold</span>'
    : '<span class="badge badge-available">Available</span>';
$btnClass = $isSold ? 'btn btn-outline' : 'btn btn-gold';
$price = '$' . number_format((float)$v->price, 0);
$sub = $v->subtitle;
if (empty($sub)) {
    $sub = $isSold ? 'Sold' : 'Available';
    if (!empty($v->is_certified)) {
        $sub .= ' • Certified';
    }
}
?>
<article class="vehicle-card" data-vehicle="<?php echo esc($v->name);?>" data-status="<?php echo esc($v->stock_status);?>">
  <div class="vehicle-img">
    <img src="<?php echo esc($img);?>" alt="<?php echo esc($v->name);?>" loading="lazy"/>
    <?php echo $badge;?>
  </div>
  <div class="vehicle-body">
    <div class="vehicle-sub"><?php echo esc($sub);?></div>
    <h3 class="vehicle-title"><?php echo esc($v->name);?></h3>
    <div class="vehicle-price"><?php echo $price;?> <?php if(!empty($v->price_note)){ ?><small><?php echo esc($v->price_note);?></small><?php } ?></div>
    <div class="spec-grid">
      <div><span class="k">Mileage</span><span class="v"><?php echo esc($v->mileage ?: '—');?></span></div>
      <div><span class="k">Transmission</span><span class="v"><?php echo esc($v->transmission ?: '—');?></span></div>
      <div><span class="k">Exterior</span><span class="v"><?php echo esc($v->exterior_color ?: '—');?></span></div>
      <div><span class="k">Interior</span><span class="v"><?php echo esc($v->interior_color ?: '—');?></span></div>
    </div>
    <a href="<?php echo site_url('inventory');?>#enquiry" class="<?php echo $btnClass;?>" data-enquire="<?php echo esc($v->name);?>">Enquire Now</a>
  </div>
</article>
