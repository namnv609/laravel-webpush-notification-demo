@extends("layouts.default")

@section("title")
    {{ $post->title }}
@endsection
@section("content")
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ $post->content }}
        </div>
    </div>
@endsection
