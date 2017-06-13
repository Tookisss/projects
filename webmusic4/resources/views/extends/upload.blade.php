@extends('layout.master')

@section('content')
<div class="upload-main">
    <div class="upload-box">
        <div class="upload-header">
          <h2>UPLOAD</H2>
        </div>

        <div class="register-fields">
          <form method="post" enctype="multipart/form-data" action="/upload/data">
              {{ csrf_field() }}

              <div class="upload-field">
                  <label class="label-name" for="image">Image:</label><br />
                  <input class="contact-input" type="file" name="image" id="image" required>
                  <button type="reset" class="register-button">Reset</button>
              </div>

            <br class="clearfix">

              <div class="upload-field">
                  <label class="label-name" for="title">Title:</label><br />
                  <input class="contact-input" type="string" name="title" id="title" size="45" required>
              </div>

              <div class="upload-field">
                  <label class="label-name" for="artist">Artist:</label><br />
                  <input class="contact-input" type="string" name="artist" id="artist" size="45" required>
              </div>

              <div class="upload-field">
                  <label class="label-name" for="genre">Genre:</label><br />
                  <input class="contact-input" type="string" name="genre" id="genre" size="45" required>
              </div>

              <div class="upload-field">
                  <label class="label-name" for="length">Length:</label><br />
                  <input class="contact-input2" type="time" name="length" id="length" required>
              </div>

              <div class="upload-field">
                  <label class="label-name" for="released">Released year:</label><br />
                  <input class="contact-input2" type="month" name="released" id="released" required>
              </div>

              <div class="upload-field">
                  <label class="label-name" for="tags_id">Belongs to:</label><br />
                  <select class="contact-input2" name="tags_id">
                    <option value="0">MTV</option>
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
