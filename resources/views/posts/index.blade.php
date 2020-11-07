@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            

            <div class="container">
                <div class="card mb-3" style="width: 70%;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h5>
                          <p class="card-text"><small class="text-muted">Written on {{ $post->created_at }}</small></p>
                          <p class="card-text"><small class="text-muted">Posted by {{ $post->user->name}}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        @endforeach
       {{ $posts->links() }}
    @else
        <p>No posts Available</p>
    @endif
@endsection
