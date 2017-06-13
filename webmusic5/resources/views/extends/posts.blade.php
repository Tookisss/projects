@extends('layout.master')

@section('content')
<div class="post_main">
<!-- DATA INFO -->
    <div class="post_info">
        <div class="post_info_left">
            <h3>{{$chart->title}}</h3>
            <img src="/storage/{{$chart->image}}" alt="music" style="max-width: 200px;">
        </div>
        <div class="post_info_right">
            <ul>
                <li>Artist: {{ $chart->artist }}</li>
                <li>Length: {{ $chart->length}}</li>
                <li>Genre: {{ $chart->genre }}</li>
                <li>Released: {{ $chart->released }}</li>
            </ul>
        </div>
    </div>
<br class="clearfix">
<!-- SHOW POSTS -->

<div class="post_comment_main">
    @foreach($forums as $forum)
      @if($forum->data_id == $chart->id)
          <div class="post_comment">
              <div>
                  <h4>{{ $forum->post_title }}</h4>
                  <p style="font-style: italic; padding-bottom: 15px;">{{ $forum->user->name . " on " . $forum->created_at->diffForHumans() }}</p>
              </div>
              <div>
                  <p>{{ $forum->post_message }}</p>
              </div>
          </div>
      @endif
    @endforeach
</div>


<!-- CREATE POST -->

    <div class="post_create">
        <h3>Comment:</h3>
        <form method="post" action="/post/{{$chart->id}}/store">
            {{ csrf_field() }}
            <div class="post_title">
                <label for="post_title">Post-title:</label>
                <input type="string" id="post_title" name="post_title" required>
            </div>
            <div class="post_message">
                <label for="post_message">Your comment:</label>
                <textarea id="post_message" name="post_message"></textarea>
            </div>
            <div>
                <button type="submit" value="upload" class="comment-button">Comment</button>
            </div>
    </div>
</div>
@endsection
