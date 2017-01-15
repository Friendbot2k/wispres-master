@extends('layouts.app')

@section('content')
<div class="container">

    <div class="choose">
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

</div>
@endsection