@if(count($errors))
<br class="clearfix"/>
    <div class="error-main">
      <ul class="error-ul">
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
@endif
