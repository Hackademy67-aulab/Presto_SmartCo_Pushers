<form action="{{route('setLocale',$lang)}}" class="d-inline" method="post">
@csrf
<button type="submit" class="btn">
    <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="32" height="32" alt="">
    <span class="flag-icon flag-icon-{{$nation}} "></span>
</button>
</form>