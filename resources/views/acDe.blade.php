@extends ('layout.app')
@section('title','Acerca | Blog')
@section('content')
    <div class="title m-b-md">
        Acerca de
        @if (isset($sitio))
            <a href="{{$sitio}}">Mi sitio</a>
        @endif
    </div>
    <div class="links">
        @foreach ($links as $text => $link)
            <a href="{{$link}}">{{$text}}</a>
        @endforeach

    </div>
@endsection
