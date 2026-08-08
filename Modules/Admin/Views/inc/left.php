<?php
$uri = current_url(true); 
$seg1 = ($uri->getSegment(1)!=NULL)?$uri->getSegment(1):'';
$seg2 = ($uri->getSegment(2)!=NULL)?$uri->getSegment(2):'';
$seg3 = ($uri->getSegment(3)!=NULL)?$uri->getSegment(3):'';

?>
<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo site_url('admin/dashboard');?>">
				<span style="color:#1276BD;"><?php echo config('MyApplication')->site_logo_text;?></span>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">

					<li>
						<a href="<?php echo site_url('admin/dashboard');?>" class="dropdown-toggle no-arrow <?php echo ($seg2=='dashboard')?'active':'';?>">
							<span class="micon bi bi-calendar4-week"></span><span class="mtext">Dashbaord</span>
						</a>
					</li>

					<li class="dropdown <?php echo ($seg2=='enquiries')?'show':'';?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-basket"></span><span class="mtext">Manage Leads</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='enquiries')?'style="display:block;"':'';?>>
							<li><a href="<?php echo site_url('admin/enquiries');?>">Contact Us Enquiry</a></li>
							<li><a href="<?php echo site_url('admin/enquiries/interest');?>">Interested Enquire</a></li>
						</ul>
					</li>

					<!-- Manage Orders (hidden)
					<li class="dropdown <?php echo ($seg2=='orders')?'show':'';?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-basket"></span><span class="mtext">Manage Orders</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='orders')?'style="display:block;"':'';?>>
							<li><a href="<?php echo site_url('admin/orders');?>">All Orders</a></li>
						</ul>
					</li>
					-->

					<li class="dropdown <?php echo ($seg2=='cms')?'show':'';?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">CMS Pages</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='cms')?'style="display:block;"':'';?>>
							<li><a href="<?php echo site_url('admin/cms');?>">CMS Pages</a></li>
						</ul>
					</li>

					<!-- Blogs (hidden)
					<li class="dropdown <?php echo ($seg2=='blog')?'show':'';?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Blogs</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='blog')?'style="display:block"':'';?>>
							<li><a href="<?php echo site_url('admin/blog/post');?>">Post</a></li>
						</ul>
					</li>
					-->

					<li class="dropdown <?php echo ($seg2=='product' || $seg2=='productgallery')?'show':'';?>" >
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Inventory</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='product' || $seg2=='productgallery')?'style="display:block"':'';?>>
							<li><a href="<?php echo site_url('admin/product');?>">Vehicles</a></li>
							<li><a href="<?php echo site_url('admin/product/add');?>">Add Vehicle</a></li>
							<!-- <li><a href="<?php echo site_url('admin/productgallery');?>">Gallery</a></li>
							<li><a href="<?php echo site_url('admin/productgallery/add');?>">Add Gallery</a></li> -->
						</ul>
					</li>

					<!-- Coupons (hidden)
					<li class="dropdown <?php echo ($seg2=='coupon')?'show':'';?>" >
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Coupons</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='coupon')?'style="display:block"':'';?>>
							<li><a href="<?php echo site_url('admin/coupon');?>">Coupons</a></li>
							<li><a href="<?php echo site_url('admin/coupon/add');?>">Add Coupon</a></li>
						</ul>
					</li>
					-->

					<!-- Banners (hidden)
					<li class="dropdown <?php echo ($seg2=='banners')?'show':'';?>" >
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Banners</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='banners')?'style="display:block"':'';?>>
							<li><a href="<?php echo site_url('admin/banners');?>">Banners</a></li>
							<li><a href="<?php echo site_url('admin/banners/add');?>">Add Banner</a></li>
						</ul>
					</li>
					-->

					<li class="dropdown <?php echo ($seg2=='settings')?'show':'';?>">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Miscellaneous</span>
						</a>
						<ul class="submenu" <?php echo ($seg2=='settings' || $seg2=='seo')?'style="display:block;"':'';?>>
							<li><a href="<?php echo site_url('admin/seo');?>">Manage Meta</a></li>
							<li><a href="<?php echo site_url('admin/settings');?>">Admin Settings</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
