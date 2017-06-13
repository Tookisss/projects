@extends('layout.master')

@section('content')
<div class="upload-main">
    <div class="upload-box">
        <div class="upload-header">
          <h2>EDIT</H2>
        </div>

        <div class="upload-fields">
          <form method="post" enctype="multipart/form-data" action="/data/{{$item->id}}/update">
              {{ csrf_field() }}
              {{ method_field('put') }}
              <div class="upload-field">
                  <label for="image">Image:</label><br />
                  <input type="file" name="image" id="image" required>
                  <button type="reset" class="register-button" style="float:right; margin-right: 15%;">Reset</button>
              </div>

            <br class="clearfix">

              <div class="upload-field">
                  <label for="title">Title:</label><br />
                  <input type="string" name="title" id="title" size="45" value="{{$item->title}}" required>
              </div>

              <div class="upload-field">
                  <label for="artist">Artist:</label><br />
                  <input type="string" name="artist" id="artist" size="45" value="{{$item->artist}}" required>
              </div>

              <div class="upload-field">
                  <label for="length">Length:</label><br />
                  <input type="time" name="length" id="length" value="{{$item->length}}" required>
              </div>

              <div class="upload-field">
                  <label for="genre">Genre:</label><br />
                  <input type="string" name="genre" id="genre" size="45" value="{{$item->genre}}" required>
              </div>

              <div class="upload-field">
                  <label for="released">Released year:</label><br />
                  <input type="month" name="released" id="released" value="{{$item->released}}" required>
              </div>

              <div class="upload-field">
                  <label for="tags_id">Belongs to:</label><br />
                  <select name="tags_id">
                    <option value="0">MTV</option> <!-- su if jei tags_id x tai selected=""-->
                    <option value="1">VEVO</option>
                    <option value="2">Grammy</option>
                  </select>
              </div>

              <div class="upload-button-field">
                    <button type="submit" value="upload" class="register-button">Upload</button>
              </div>

          </form>

        </div>

      @include('layout.errors')

    </div>
</div>

@endsection
