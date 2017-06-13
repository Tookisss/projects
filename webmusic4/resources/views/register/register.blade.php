@extends('layout.master')

@section('content')
<div class="register-main">
    <div class="register-box">
        <div class="register-header">
          <h2>REGISTRATION</H2>
        </div>

        <div class="register-fields">
          <form method="post" action="/register">
              {{ csrf_field() }}

              <div class="register-field">
                  <label class="label-name" for="name">Name:</label><br />
                  <input class="contact-input" type="string" name="name" id="name" size="45" required>
              </div>

              <div class="register-field">
                  <label class="label-name" for="email">Email:</label><br />
                  <input class="contact-input" type="email" name="email" id="email" size="45" required>
              </div>

              <div class="register-field">
                  <label class="label-name" for="password">Password:</label><br />
                  <input class="contact-input" type="password" name="password" id="password" size="45" required>
              </div>

              <div class="register-field">
                  <label class="label-name" for="password_confirmation">Password-confimation:</label><br />
                  <input class="contact-input" type="password" name="password_confirmation" id="password_confirmation" size="45" required>
              </div>

              <div class="register-button-field">
                    <button type="submit" class="register-button">Register</button>
              </div>

          </form>

        </div>

      @include('layout.errors')

    </div>
</div>

@endsection
