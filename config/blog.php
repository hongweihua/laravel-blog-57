<?php
/**
 * Created by PhpStorm.
 * User: whhong
 * Date: 2019-12-03
 * Time: 10:18
 */
return [
    'name' => "喵咪论坛",
    'title' => "喵咪论坛",
    'subtitle' => 'https://www.huaziking.com',
    'description' => '分享宠物猫猫的日常生活',
    'author' => 'huaziking',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email'=>env('MAIL_FROM'),
];