@extends('layouts.app')


@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>

                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                    <a href="{{ route('showPost') }}">Create Post</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="slider"></div>

            <section class="blog-area section">
                <div class="container">

                    <div class="row">

                        @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100">
                                <div class="single-post post-style-1">

                                    <div class="blog-image"><img src="{{ asset('images/marion-michele-330691.jpg') }}" alt="Blog Image"></div>

                                    <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

                                    <div class="blog-info">

                                        <h4 class="title"><a href="#"><b>
                                                    {{ $post->body }}
                                                </b></a></h4>

                                        <ul class="post-footer">
                                            <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                            <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                            <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                        </ul>

                                    </div><!-- blog-info -->
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div>
                        @endforeach
                            <!-- col-lg-4 col-md-6 -->
                    </div>
                    <!-- row -->

                    <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

                </div><!-- container -->
            </section><!-- section -->
        </div>
@endsection