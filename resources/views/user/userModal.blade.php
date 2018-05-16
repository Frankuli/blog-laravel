<div class="modal fade" id="{{$idModal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    @forelse($users as $user)
                        <li>
                            <img src="{{$user->image}}" alt="">
                            <a href="/{{$user->username}}">{{$user->name}}</a>
                        </li>
                    @empty
                        <div class="div-12"><p>No hay post</p></div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>