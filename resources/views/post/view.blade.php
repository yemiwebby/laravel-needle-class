@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
                <p> {{ Session::get('success') }} </p>
            </div>
        @endif
        <div class="row">

            @foreach($posts as $post)
                <div class="col-md-4">
                    <p> {{ $post->title  }}</p>
                    <div>
                        <p> {{ $post->description  }}</p>
                    </div>
                    <div>
                        <p> {{ $post->body  }}</p>
                    </div>

                    <div>
                        <a href="{{ route('editPost', $post->id) }}" class="btn btn-primary">
                             Edit
                        </a>
                        <br>

                        <a href="{{ route('deletePost', $post->id) }}" class="btn btn-primary">
                            Delete
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection