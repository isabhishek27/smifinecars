<?php

$routes->group(
    '', ['namespace' => '\Modules\Pages\Controllers'], function ($routes) {
        $routes->get('about-us', 'Pages::about');
        $routes->get('financing', 'Pages::financing');
        $routes->get('privacy-policy', 'Pages::cms');
        $routes->get('terms-and-conditions', 'Pages::cms');

        $routes->post('post-request-a-quote', 'Pages::post_request_a_quote');
        $routes->get('contact-us', 'Pages::contact_us');
        $routes->post('post-contact-us', 'Pages::post_contact_us');
        $routes->get('thanks', 'Pages::thank_you');

        $routes->get('port_test', 'Pages::port_test');

        
        $routes->get('sitemap\.xml', 'Pages::sitemap');
        




        

        
    }
);