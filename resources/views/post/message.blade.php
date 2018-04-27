    <img class="img-thumbnail" src="{{ $post->image }}">
    <div class="text-muted">Escrito por: {{$post->user->name}}</div>
    <p class="card-text">
        {{ $post->content }}
        <a href="/post/{{ $post->id }}/ver">LEER MAS</a>
    </p>