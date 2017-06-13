<!-- Navbar -->
<div class="nav-main">
    <i onclick="myFunction()" class="fa fa-bars dropinc dropbtn" aria-hidden="true" style="font-size: 25px; padding: 12px 30px;"></i>
    <div id="myDropdown" class="nav-links">
        <div class="nav-left">
            <a href="/">Home</a>
            <a href="/mtv">MTV</a>
            <a href="/vevo">VEVO</a>
            <a href="/grammy">GRAMMY</a>
        </div>

        <div class="nav-right">
            @if(! Auth::check())
                <a href="/login">Login</a>
            @endif
            @if(! Auth::check())
                <a href="/register">Register</a>
            @endif
            @if(Auth::check())
                <a style="font-style: italic; text-decoration: underline;">{{ auth()->user()->name }}</a>
            @endif
            @if(Auth::check())
                <a href="/upload">Upload</a>
            @endif
            @if(Auth::check())
            <a href="/logout">Logout</a>
            @endif
        </div>

    </div>
</div>
<br class="clearfix">

<script>
$( "i" ).click(function() {
  $( ".nav-links" ).slideToggle();
});
    $(window).resize(function() {
        if ( $(window).width() >600 ) {
            $( ".nav-links" ).removeAttr( "style" );
        }
});
</script>



<!-- <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("nav-links");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> -->
