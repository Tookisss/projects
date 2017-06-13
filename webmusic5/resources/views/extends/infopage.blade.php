@extends('layout.master')

@section('content')
<!-- Header slides -->
<div>
    <h1 class="title">Music Library</h1>
    <img class="mySlides" src="/images/cover1.jpg" style="width:100%">
    <img class="mySlides" src="/images/cover2.jpg" style="width:100%">
    <img class="mySlides" src="/images/cover3.jpg" style="width:100%">
</div>


<!-- The info music section -->

    <div class="intro-section">
        <h2>THE MUSIC LIBRARY</h2>
        <p class="intro-after-header"><i>Enjoy every second</i></p>
        <p class="intro-align">Music provides pleasure to the listener and helps manage negative emotions such as stress and anxiety by providing an escape. Listeners can feel better if a song describes emotions similar to what they are feeling. Music can stimulate positive emotions by entertaining the listener, and it can be a personal and a social experience. When used in a group setting, music can give people something to discuss or bring them together through dancing. Certain songs, such as national anthems or school songs, can unite a group of people.</p>
    </div>

      @if (count($id) > 3)
        <div class="random-gallery">
            @foreach($random as $show)
            <div class="third">
                <p>{{$show->title}}</p>
                <div class="image-size" style="margin-bottom: 15px">
                    <a href="/data/{{$show->id}}"><img src="/storage/{{$show->image}}" alt="music" style="width: 80%"></a>
                </div>
            </div>
            @endforeach
          </div>

      @endif
<!-- CONTACT SECTION -->

    <div class="contact-main"> <br/>

        <div class="contact-title">
            <h2>CONTACT WITH US!</h2>
            <p><i>Missing something? Register or drop an email!</i></p>
        </div>

        <div class="contact-data">
            <div class="contact-address">
              <i class="fa fa-map-marker" aria-hidden="true"></i><p>Klaipeda, Lithuania</p><br />
              <i class="fa fa-phone" aria-hidden="true"></i><p>Tel.: +370 644 30007</p><br />
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i><p>Email: info.ml@gmail.com</p><br />
            </div>

            <div class="contact-send">
                <form method="post" action="/send">
                    {{ csrf_field() }}
                    <div class="contact-top">

                        <div class="contact-name-email contact-inputs">
                            <input class="contact-input" type="text" name="name" id="name" placeholder="Name">
                        </div>

                        <div class="contact-name-email contact-emails">
                            <input class="contact-input" type="email" name="email" id="email" placeholder="Email">
                        </div>

                    </div>

                    <br/>

                    <div class="contact-text">
                        <textarea class="contact-input" type="text" name="text" id="text" placeholder="Message" style="color: black;"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="contact-button">SEND</button>
                    </div>

                </form>
            </div>

            <section id="iferror">
                @include('layout.errors')
            </section>

            </div>
      </div>

@endsection
