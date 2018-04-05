@extends('layouts.master')

@section('mce')
    <script src="{{ URL::asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>tinymce.init({
            selector: 'textarea',
            height: 500,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
    });</script>
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">Create a post</h3>

        <form method="post" action="/lukas/public/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>

            @include ('layouts.error')

        </form>
    </div>
@endsection