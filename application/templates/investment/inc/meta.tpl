<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel='shortcut icon' href='/favicon.ico' />
        <meta name="viewport" content="width=device-width; initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <title>[{$seo->seo_social_title|default:$settting_data['title-of-website']}]</title>
        <meta name="description" content="[{$seo->seo_social_desc|default:$settting_data.description}]"/>
        <meta name="keywords" content="[{$seo->seo_social_keyword|default:$settting_data.keyword}]"/>
        <meta property="place:location:latitude" content="10.792048"/>
        <meta property="place:location:longitude" content="106.679982"/>
        <meta property="business:contact_data:street_address" content="Lê Quý Đôn"/>
        <meta property="business:contact_data:locality" content="Hồ Chí Minh"/>
        <meta property="business:contact_data:postal_code" content="70000 "/>
        <meta property="business:contact_data:country_name" content="TP. Hồ Chí Minh"/>
        <meta property="business:contact_data:email" content="[{$settting_data.email|default:''}]"/>
        <meta property="business:contact_data:phone_number" content="[{$settting_data.phone|default:''}]"/>
        <meta property="business:contact_data:website" content="[{''|base_url}]"/>
        <meta itemprop="name" content="[{$seo->seo_social_title|default:$settting_data['title-of-website']}]"/>
        <meta itemprop="description" content="[{$seo->seo_social_desc|default:$settting_data.description}]"/>
        <meta itemprop="image" content="[{$seo->seo_social_image|default:$settting_data['image-250x250']}]"/>

        <meta name="twitter:card" content="summary"/>  <!-- Card type -->
        <meta name="twitter:site" content="[{''|base_url}]"/>
        <meta name="twitter:title" content="[{$seo->seo_social_title|default:$settting_data['title-of-website']}]">
        <meta name="twitter:description" content="[{$seo->seo_social_desc|default:$settting_data.description}]"/>
        <meta name="twitter:creator" content="[{''|base_url}]"/>
        <meta name="twitter:image:src" content="[{$seo->seo_social_image|default:$settting_data['image-250x250']}]"/>
        <meta name="twitter:domain" content="[{''|base_url}]"/>

        <meta property="og:url" content="[{''|base_url}]">
        <meta property="og:type" content="article">
        <meta property="og:title" content="[{$seo->seo_social_title|default:$settting_data['title-of-website']}]">
        <meta property="og:image" content="[{$seo->seo_social_image|default:$settting_data['image-250x250']}]"/>
        <meta property="og:description" content="[{$seo->seo_social_desc|default:$settting_data.description}]">
        <meta property="og:site_name" content="[{''|base_url}]">
        <meta property="article:author" content="[{$settting_data['fakebook-fanpage']|default:''}]">
        <meta property="article:publisher" content="[{$settting_data['fakebook-fanpage']|default:''}]">

        <meta name="p:domain_verify" content="611142a2af6e2ee6d83075699bf8e6f9"/>
        <meta name="geo.region" content="VN" />
        <meta name="geo.placename" content="HCM" />
        <meta name="geo.position" content="10.792166;106.679810" />
        <meta name="ICBM" content="10.792166,106.679810"/>

        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/hover.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/bootstrap-select.min.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/font-awesome.min.css?t=1">
        <link rel="stylesheet" type="text/css" href="/assets/investment/plugin/countdown/countdown.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/plugin/owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/plugin/swipebox/swipebox-dark-1.3.css" >
        <link rel="stylesheet" type="text/css" href="/assets/investment/css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/libraries/metronic/theme/assets/global/plugins/bootstrap-toastr/toastr.min.css"/>


        <script type="text/javascript" src="/assets/investment/bootstrap/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/assets/investment/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="/assets/investment/plugin/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="/assets/investment/plugin/jquery.nailthumb.1.1.js"></script>
        <script type="text/javascript" src="/assets/investment/plugin/jquery.lazyload.min.js"></script>
        <script type="text/javascript" src="/assets/investment/js/main.js"></script>
        <script src="/libraries/metronic/theme/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
        <script type="text/javascript" src="/libraries/plugin/serializeObject.js"></script>
        <script type="text/javascript" src="/libraries/plugin/validation-engine/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="/libraries/plugin/validation-engine/jquery.validationEngine-en.js"></script>
        <!--[if IE]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

        <!--[if IE]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
