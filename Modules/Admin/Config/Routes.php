<?php
//$routes->setAutoRoute(true);
$routes->group(
    'admin', ['namespace' => '\Modules\Admin\Controllers'], function ($routes) {
        
        $routes->get('/', 'Admin::login');

        $routes->get('login', 'Admin::login');
        $routes->post('login', 'Admin::login');        
        $routes->get('logout', 'Admin::logout');

        $routes->get('dashboard', 'Dashboard::index');

        #Editor image upload        
        $routes->get('cms/tmimageupload', 'Cms::tm_image_upload');
        $routes->post('cms/tmimageupload', 'Cms::tm_image_upload');

        #CMS Module
        $routes->get('cms', 'Cms::index');
        $routes->post('cms/page_details', 'Cms::page_details');
        $routes->get('cms/edit_page/(:num)', 'Cms::edit_page/$1');
        $routes->post('cms/edit_page/(:num)', 'Cms::edit_page/$1');

        $routes->get('cms/categories', 'Cms::categories');
        $routes->post('cms/categories', 'Cms::categories');
        $routes->get('cms/add_category', 'Cms::add_category');
        $routes->post('cms/add_category', 'Cms::add_category');

        $routes->get('cms/edit_category/(:num)', 'Cms::edit_category/$1');
        $routes->post('cms/edit_category/(:num)', 'Cms::edit_category/$1');
        $routes->get('cms/category_delete/(:num)', 'Cms::category_delete/$1');

        /** Portfolio */
        $routes->get('portfolio', 'Portfolio::index');
        $routes->post('portfolio', 'Portfolio::index');
        $routes->get('portfolio/add', 'Portfolio::add');
        $routes->post('portfolio/add', 'Portfolio::add');
        $routes->get('portfolio/edit/(:num)', 'Portfolio::edit/$1');
        $routes->post('portfolio/edit/(:num)', 'Portfolio::edit/$1');
        $routes->get('portfolio/delete/(:num)', 'Portfolio::delete/$1');

        /** Reveiws */
        $routes->get('reviews', 'Reviews::index');
        $routes->post('reviews', 'Reviews::index');
        $routes->get('reviews/add', 'Reviews::add');
        $routes->post('reviews/add', 'Reviews::add');
        $routes->get('reviews/edit/(:num)', 'Reviews::edit/$1');
        $routes->post('reviews/edit/(:num)', 'Reviews::edit/$1');
        $routes->get('reviews/delete/(:num)', 'Reviews::delete/$1');

        /** Photographar */
        $routes->get('photographar', 'Photographar::index');
        $routes->post('photographar', 'Photographar::index');
        $routes->get('photographar/add', 'Photographar::add');
        $routes->post('photographar/add', 'Photographar::add');
        $routes->get('photographar/edit/(:num)', 'Photographar::edit/$1');
        $routes->post('photographar/edit/(:num)', 'Photographar::edit/$1');
        $routes->get('photographar/delete/(:num)', 'Photographar::delete/$1');

        /** Photo Adventure */
        $routes->get('photoadventure', 'Photoadventure::index');
        $routes->post('photoadventure', 'Photoadventure::index');
        $routes->get('photoadventure/add', 'Photoadventure::add');
        $routes->post('photoadventure/add', 'Photoadventure::add');
        $routes->get('photoadventure/edit/(:num)', 'Photoadventure::edit/$1');
        $routes->post('photoadventure/edit/(:num)', 'Photoadventure::edit/$1');
        $routes->get('photoadventure/delete/(:num)', 'Photoadventure::delete/$1');

        /** Coupon */
        $routes->get('coupon', 'Coupon::index');
        $routes->post('coupon', 'Coupon::index');
        $routes->get('coupon/add', 'Coupon::add');
        $routes->post('coupon/add', 'Coupon::add');
        $routes->get('coupon/edit/(:num)', 'Coupon::edit/$1');
        $routes->post('coupon/edit/(:num)', 'Coupon::edit/$1');
        $routes->get('coupon/delete/(:num)', 'Coupon::delete/$1');

        /** Coupon */
        $routes->get('banners', 'Banners::index');
        $routes->post('banners', 'Banners::index');
        $routes->get('banners/add', 'Banners::add');
        $routes->post('banners/add', 'Banners::add');
        $routes->get('banners/edit/(:num)', 'Banners::edit/$1');
        $routes->post('banners/edit/(:num)', 'Banners::edit/$1');
        $routes->get('banners/delete/(:num)', 'Banners::delete/$1');

        /** Workshop */
        $routes->get('workshop', 'Workshop::index');
        $routes->post('workshop', 'Workshop::index');
        $routes->get('workshop/add', 'Workshop::add');
        $routes->post('workshop/add', 'Workshop::add');
        $routes->get('workshop/edit/(:num)', 'Workshop::edit/$1');
        $routes->post('workshop/edit/(:num)', 'Workshop::edit/$1');
        $routes->get('workshop/delete/(:num)', 'Workshop::delete/$1');

        /** Workshop Gallery */
        $routes->get('workshopgallery', 'Workshopgallery::index');
        $routes->post('workshopgallery', 'Workshopgallery::index');
        $routes->get('workshopgallery/add', 'Workshopgallery::add');
        $routes->post('workshopgallery/add', 'Workshopgallery::add');
        $routes->get('workshopgallery/edit/(:num)', 'Workshopgallery::edit/$1');
        $routes->post('workshopgallery/edit/(:num)', 'Workshopgallery::edit/$1');
        $routes->get('workshopgallery/delete/(:num)', 'Workshopgallery::delete/$1');

        /** Workshop Waiting List */
        $routes->get('workshop/waitinglist', 'Workshop::waitinglist');
        $routes->post('workshop/waitinglist', 'Workshop::waitinglist');        
        $routes->get('workshop/waitinglist_delete/(:num)', 'Workshop::waitinglist_delete/$1');

        /** Products / Inventory */
        $routes->get('product', 'Product::index');
        $routes->post('product', 'Product::index');
        $routes->get('product/add', 'Product::add');
        $routes->post('product/add', 'Product::add');
        $routes->get('product/edit/(:num)', 'Product::edit/$1');
        $routes->post('product/edit/(:num)', 'Product::edit/$1');
        $routes->get('product/delete/(:num)', 'Product::delete/$1');

        /** Product Gallery */
        $routes->get('productgallery', 'Productgallery::index');
        $routes->post('productgallery', 'Productgallery::index');
        $routes->get('productgallery/add', 'Productgallery::add');
        $routes->post('productgallery/add', 'Productgallery::add');
        $routes->get('productgallery/edit/(:num)', 'Productgallery::edit/$1');
        $routes->post('productgallery/edit/(:num)', 'Productgallery::edit/$1');
        $routes->get('productgallery/delete/(:num)', 'Productgallery::delete/$1');

        /** Faq */
        $routes->get('faq', 'Faq::index');
        $routes->post('faq', 'Faq::index');
        $routes->get('faq/add', 'Faq::add');
        $routes->post('faq/add', 'Faq::add');
        $routes->get('faq/edit/(:num)', 'Faq::edit/$1');
        $routes->post('faq/edit/(:num)', 'Faq::edit/$1');
        $routes->get('faq/delete/(:num)', 'Faq::delete/$1');

        /** Newsletter */

        $routes->get('newsletter', 'Newsletter::index');
        $routes->post('newsletter', 'Newsletter::index');
        $routes->get('newsletter/delete/(:num)', 'Newsletter::delete/$1');

        /** Settings */
        $routes->get('settings', 'Settings::index');
        $routes->post('settings', 'Settings::index');

         /** Orders */
        $routes->get('orders', 'Orders::index');
        $routes->post('orders', 'Orders::index');        
        $routes->post('orders/details', 'Orders::details');
        $routes->get('orders/order_delete/(:num)', 'Orders::order_delete/$1');
        $routes->get('orders/order_cancle/(:num)', 'Orders::order_cancle/$1');

        /** Enquiries */
        $routes->get('enquiries', 'Enquiries::index');
        $routes->post('enquiries', 'Enquiries::index');
        $routes->get('enquiries/interest', 'Enquiries::interest');
        $routes->post('enquiries/interest', 'Enquiries::interest');
        $routes->post('enquiries/enquiries_details', 'Enquiries::enquiries_details');
        $routes->get('enquiries/enquiries_delete/(:num)', 'Enquiries::enquiries_delete/$1');
       

        /** Request a quote */
        $routes->get('enquiries/requestquote', 'Enquiries::requestquote');
        $routes->post('enquiries/requestquote', 'Enquiries::requestquote');
        $routes->post('enquiries/requestquote_details', 'Enquiries::requestquote_details');
        $routes->get('enquiries/requestquote_delete/(:num)', 'Enquiries::requestquote_delete/$1');

        /** Blog Category */
        $routes->get('blog/category', 'Blog::category');
        $routes->post('blog/category', 'Blog::category');

        $routes->get('blog/category_add', 'Blog::category_add');
        $routes->post('blog/category_add', 'Blog::category_add');
        
        $routes->get('blog/category_edit/(:num)', 'Blog::category_edit/$1');
        $routes->post('blog/category_edit/(:num)', 'Blog::category_edit/$1');

        $routes->get('blog/category_delete/(:num)', 'Blog::category_delete/$1');

        /** Blog post */
        $routes->get('blog/post', 'Blog::post');
        $routes->post('blog/post', 'Blog::post');
        $routes->post('blog/post_details', 'Blog::post_details');

        $routes->get('blog/post_add', 'Blog::post_add');
        $routes->post('blog/post_add', 'Blog::post_add');
        
        $routes->get('blog/post_edit/(:num)', 'Blog::post_edit/$1');        
        $routes->post('blog/post_edit/(:num)', 'Blog::post_edit/$1');

        $routes->get('blog/post_delete/(:num)', 'Blog::post_delete/$1');


        /** SEO */
        $routes->get('seo', 'Seo::index');
        $routes->post('seo', 'Seo::index');
        $routes->get('seo/add', 'Seo::add');
        $routes->post('seo/add', 'Seo::add');
        $routes->get('seo/edit/(:num)', 'Seo::edit/$1');
        $routes->post('seo/edit/(:num)', 'Seo::edit/$1');
        $routes->get('seo/delete/(:num)', 'Seo::delete/$1');

        
    }
);