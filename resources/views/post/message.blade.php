<img class="img-thumbnail" src="{{ $post->image }}">
<div class="text-muted">
    Escrito por: <a href="/{{$post->user->username}}">{{$post->user->name}}</a>  -
    <spam title="{{ date('d/m/Y H:i:s', strtotime($post->created_at)) }}">{{ date('d/m/Y', strtotime($post->created_at))}}</spam>
</div>
<p class="card-text">
    {{ $post->content }}
    <a href="/post/{{ $post->id }}/ver">LEER MAS</a>
</p>