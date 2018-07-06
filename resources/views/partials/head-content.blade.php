<title>@yield('title') | Betviews </title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>      
<meta name="csrf-token" content="{{ csrf_token() }}">


<meta property="og:url"           content="@yield('url')" />
<meta property="og:type"          content="@yield('type')" />
<meta property="og:title"         content="@yield('title')" />
<meta property="og:description"   content="@yield('desc')" />
<meta property="og:image"         content="@yield('img')" />

<link rel="stylesheet" href="/css/stripe-form.css">
<link rel="stylesheet" href="{{ mix('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css">       
<!-- <script src="https://js.stripe.com/v3/"></script> 
<script src="https://www.paypalobjects.com/api/checkout.js"></script> -->