@extends('layouts.main')

<!-- Page metadata -->
<!-- Correponds to FB js SDK. Check closing body tag -->
@section('url', $url)
@section('title', $tip->intro)
@section('type', 'article')
@section('title',  $tip->intro )
@section('desc', 'So here is the thing')
@section('img', 'http://192.241.139.145/images/uploads/tips/cover_images/' . $tip->cover_image)

<!-- Page content -->
@section('content')

<show-tip :tip="{{ json_encode($tip) }}"  inline-template>
<div>
    
<div class="tip_header">
        <div class="margin-down has-text-centered subject">
            <small>World Cup 2018</small>                 
        </div>

        <p class="header_logo">{{ $tip->intro }}</p>

        <div class="has-text-centered trademark">
            <b style="color: #A0A0A0">Betviews</b>               
        </div>  
        <!-- reading progress indicator -->
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <section class="section is-narrow offset offset-content">
        <div class="level is-mobile">
            <div class="level-left">
                <div class="level-item">
                    <small>WORLD CUP 2018</small>                             
                </div>

                <div class="level-item">
                    |                            
                </div>

                <div class="level-item">
                    <b style="color: #A0A0A0">BETVIEWS</b>
                </div>
                <div class="level-item">
                    {{ strtoupper($tip->created_at->format('M d, Y')) }}
                </div>
            </div>
            <div class="level-right">
                <div class="level-item">
                    
                    <!-- fb share button code -->
                    <i class="fa fa-facebook-square fa-2x" id="fbShareBtn"></i>             
                </div>
                <div class="level-item">   
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-hashtags="betviews" data-lang="en" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                          
                </div>                
                <div class="level-item">
                    <b>10 Shares</b>
                </div>
            </div>
        </div>         
        <p class="subtitle is-6" v-html="tip.tip_body"></p>           
    </section> 

<!-- Example of article page design: https://designmodo.com/gradients/ -->
<!-- Example of trending tips: https://sujipthapa.co/blog/how-to-create-a-trending-articles-list-using-google-analytics-with-laravel -->
</div>

</show-tip>
@endsection