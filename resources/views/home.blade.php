@extends('layouts.app')

@section('content')
    <section class="home-page">
        <div class="row">
            <div class="back">
                <div class="back-content">
                    <div id="homepagetextbox">
                        <h1>{{ $header->value }}</h1>
                        <h2>{{ $content->value }}</h2>
                    </div>
                    <ul style="list-style-type:none">
                        <li>
                        <a href="{{ url('/register') }}">
                        <img id="treeimg-impartwis" src="/public/images/inner-images/front-page-tree1.png"></a>

                        <a href="{{ url('search') }}">
                        <img id="treeimg-searchwis" src="/public/images/inner-images/front-page-tree2.png"></a>
                        </li>
                        
                        <li>
                        <a href="{{ url('partnerWithUS') }}">
                        <img id="treeimg-discovwis" src="/public/images/inner-images/front-page-tree3.png"></a>
                        </li>
                        <li><a href="#openModal1"><img id="medialiblink" src="/public/images/inner-images/medialibrarylink.png"></a></li>

                    </ul>


                </div>
                <div id="openModal1" class="modalDialog">
                    <div id="player">
                       <video controls="controls" width="640" height="360" preload="auto">
                          <source src="/public/videos/video/whatiswp.mp4" type="video/mp4" />
                          <source src="video1.webm" type="video/webm" />
                          <source src="video1.ogv" type="video/ogg" />
                          <!--optional line for subtitles-->
                          <track src="video/video1.srt" kind="subtitle" srclang="en-US" label="English" />
                       </video>
                       <div class="playlist">
                          <h1>Videos</h1>
                          <a href="/public/videos/video/whatiswp.mp4">What is the Wisdom Preserve</a>
                          <a href="/public/videos/video/howitworks.mp4">How the Wisdom Preserve Works</a>
                          <button class="close" onclick="document.getElementById('openModal1').style.display='none'" >Close</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
