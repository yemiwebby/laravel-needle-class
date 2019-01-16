@extends('layouts.app')

@section('content')

    <div style="width: 400px; margin: 0 auto;">

        @if(Session::has('success'))
            <div class="alert alert-success">
                <p> {{ Session::get('success') }} </p>
            </div>
        @endif

        <form method="post" action="{{ route('submitPost') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>

            <div class="form-group">
                <input type="text" name="body" class="form-control" placeholder="body">
            </div>

            <div class="form-group">
                <input type="text" name="authorName" value="{{ Auth::user()->name  }}" class="form-control" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <button type="submit" class="form-control btn btn-success"> Submit Post </button>
            </div>
        </form>
    </div>

@endsection