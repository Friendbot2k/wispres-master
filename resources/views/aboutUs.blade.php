@extends('layouts.app')

@section('content')
    <section class="about-page">
        <div class="row">
            <div class="back">
                <div class="all-content">
                    <div class="back-content">
                        <h1>MEET OUR TEAM
                            AND COMPANY</h1>
                    </div>
                </div>
            </div>

            <div class="content">


                <div class="first-text">
                    <div class="all-content">
                        <p>{{ $record->devider_text }} </p>
                    </div>
                </div>

                <div class="whatWeDo">
                    <h2>What We Do</h2>
                    <div class="we-content">
                        <div class="all-content">
                            <div class="we-block-left">
                                <div class="block-down">
                                    <h5>{{ $record->image_haed }} </h5>
                                    <p>{{ $record->image_text }}</p>
                                </div>
                            </div>

                            <div class="we-block-right">
<!--                                 <h3>{{ $record->about_hading }}</h3>
 -->                                <p>{{ $record->about_content }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="choose">
                    <h2>Why Choose Us?</h2>
                    <div class="all-content">
                        <div class="choose-content">
                            <div class="choose-blocks">
                                <div class="content-border">
                                    <img src="{{ url('images/inner-images/case.png') }}" alt="">
                                    <h4>4</h4>
                                    <p>Years experience</p>
                                </div>
                            </div>


                            <div class="choose-blocks">
                                <div class="content-border middle">
                                    <img src="{{ url('images/inner-images/user.png') }}" alt="">
                                    <h4>{{ $user_count }}</h4>
                                    <p>Happy clients</p>
                                </div>
                            </div>
                            <div  class="choose-blocks">

                                <div class="content-border">
                                    <img src="{{ url('images/inner-images/paper.png') }}" alt="">
                                    <h4>45</h4>
                                    <p>Completed projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 -->
                <div class="team">
                    <div class="team-title">
                        <div class="team-title-words"><h2>Our Team</h2></div></div>
                    <div class="all-content">
                        <div class="team-content">
                            <div class="team-block-top">
                                <div class="director">
                                    <img src="{{ url('images/inner-images/counsel1.png') }}" alt="photo">
                                    <div class="team-block-test">
                                        <h5>Frank J. Abella III</h5>
                                        <h6>President and Founder</h6>
                                        <p>While Wall Street has provided me with various life's lessons, as the founder and editor-in-chief of thewisdompreserve.com, it was my desire to create a colorful platform by which anyone could relay items related to their own journey.  While, the website is the culmination of my own personal search for "the meaning of life," more importantly it is the avenue by which anyone may impart and memorialize their own discoveries forever.  My intention is that Thewisdompreserve act as both a shared and aligned passion for writers and readers like.</p>
                                        <div class="team-links">
                                            <a href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="maneger">

                                    <img src="{{ url('images/inner-images/maneger.png') }}" alt="photo">
                                    <div class="team-block-test">

                                        <h5>Andrew Drash</h5>
                                        <h6>Technical Director</h6>
                                        <p>From a very early age, I was always involved in technology, forgoing the usual route into adulthood I set about to create my own business Keeping It Simple Solutions instead of going to college. I serve The Wisdom Preserve as a technical and creative consultant, overseeing all development aspects of the site.</p>

                                        <div class="team-links">
                                            <a href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-bottom">
<!--                                 <div class="counsel1">
                                    <img src="{{ url('images/inner-images/counsel1.png') }}" alt="photo">
                                    <div class="team-block-test">

                                        <h5>David Cameron</h5>
                                        <h6>Counsel</h6>
                                        <p>Lorem Ipsum is not simply random text</p>
                                        <div class="team-links">
                                            <a href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="counsel2">

                                    <img src="{{ url('images/inner-images/counsel2.png') }}" alt="photo">
                                    <div class="team-block-test">

                                        <h5>Teal Hagler</h5>
                                        <h6>The Voice of the Wisdom Preserve</h6>
                                        <p>Teal lends us her soothing voice for the video media available on the website.Z</p>

                                        <div class="team-links">
                                            <a href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    @endsection