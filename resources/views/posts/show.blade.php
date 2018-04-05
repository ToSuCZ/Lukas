@extends('layouts.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1 class="text-center">{{ $post->title }}</h1>

        {!! $post->body !!}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="post" action="/blog/public/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea placeholder="Your comment here" name="body" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                    @include('layouts.error')

                </form>
            </div>
        </div>
    </div>
@endsection