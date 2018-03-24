@extends("layouts.default")
@section("content")
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $post)
            <div class="post-preview">
                <a href="/posts/{{ $post->id }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->description }}
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a>{{ $post->user->name }}</a>
                    on {{ $post->created_at }}
                </p>
            </div>
            <hr>
        @endforeach
        </div>
    </div>
@endsection
