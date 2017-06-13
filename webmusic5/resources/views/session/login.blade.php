@extends('layout.master')

@section('content')
<div class="register-main">
    <div class="register-box">
        <div class="register-header">
          <h2>LOGIN</H2>
        </div>

        <div class="register-fields">
          <form method="post" action="/login">
              {{ csrf_field() }}

              <div class="register-field">
                  <label class="label-name" for="email">Email:</label><br />
                  <input class="contact-input" type="email" name="email" id="email" required>
              </div>

              <div class="register-field">
                  <label class="label-name" for="password">Password:</label><br />
                  <input class="contact-input" type="password" name="password" id="password" required>
              </div>

              <div class="register-button-field">
                    <button type="submit" class="register-button">Login</button>
              </div>

          </form>

        </div>

          @include('layout.errors')

    </div>
</div>

@endsection
