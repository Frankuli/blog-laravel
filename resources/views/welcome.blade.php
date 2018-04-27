@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="title m-b-md">
            Blog
        </div>
        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
        <div class="row">
            @forelse($posts as $post)
                <div class="col-6">
                    @include('post.message')
                </div>
            @empty
                <div class="div-12"><p>No hay post</p></div>
            @endforelse
            @if (count($posts))
              <div class="mt-2 mx-auto">
                {{$posts->links()}}
              </div>
            @endif
        </div>
    </div>
@endsection
