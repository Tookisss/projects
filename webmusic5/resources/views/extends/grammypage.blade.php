@extends('layout.master')

@section('content')
<div class="content-field">
    <div class="random-gallery">
      <h1 style="text-align: center;">Click on the photo and comment!</h1>
        @foreach($grammys as $datas)
        <div class="third">
            <p>{{ $datas->title }}</p>
            <div class="image-size">
                <a href="/data/{{$datas->id}}"><img src="/storage/{{$datas->image}}" alt="music" style="width: 80%"></a>
            </div>
            <ul>
              <li>Artist: {{ $datas->artist }}</li>
              <li>Length: {{ $datas->length}}</li>
              <li>Genre: {{ $datas->genre }}</li>
              <li>Released: {{ $datas->released }}</li>
            </ul>

            @if(Auth::check())
                <div class="fonts-row">

                    <div class="fonts-row-edit">
                        <a href="{{'/data/' .$datas->id. '/edit'}}">
                          <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color: #00004d"></i>
                        </a>
                    </div>

                    <div class="fonts-row-trash">
                        <form action="{{'/delete/' .$datas->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <button type="submit" class="neutral-button">
                                  <i  class="fa fa-trash fa-2x trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                </div>
            @endif
        </div>

        @endforeach

      </div>
  </div>

@endsection
