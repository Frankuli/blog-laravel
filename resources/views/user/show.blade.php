@extends('layouts.app')
@section('content')
    <div class="d-flex flex-row-reverse">
        <div class="row">
            <div class="col-11">
                <div class="row">
                    <div class="col-12">
                        <img class="img-thumbnail rounded-circle" src="{{$user->avatar}}" alt="">
                        <h1 class="text-lg-center">{{$user->name}}</h1>
                        <h6 class="text-muted text-lg-center">{{$user->username}}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="col-12">
                            @if(Auth::check())
                               {{-- @if(Auth::user()->isFollowing($user))--}}
                                @if ($user->follows->contains(Auth::user()))
                                    <form action="/{{$user->username}}/unfollow" method="post" class="form-group">
                                        {{csrf_field()}}
                                        <button class="btn btn-danger">DEJAR DE SEGUIR</button>
                                    </form>
                                @else
                                    <form action="/{{$user->username}}/follow" method="post" class="form-group">
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger">SEGUIR</button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#followers">
                                <h5>SEGUIDORES ({{$user->followers->count()}})</h5>
                            </button>
                            @include('user.userModal',['title'=>'SEGUIDORES', 'idModal'=>'followers','users'=>$user->followers]);
                            {{-- @forelse($user->followers as $follower)
                                 <div class="col-6">
                                     {{ $follower->name }}
                                 </div>
                             @empty
                                 <div class="div-12"><p>No hay post</p></div>
                             @endforelse--}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#follows">
                                <h5>SEGUIENDO ({{$user->follows->count()}})</h5>
                            </button>
                            @include('user.userModal',['title'=>'SEGUIENDO', 'idModal'=>'follows','users'=>$user->follows]);

                            {{-- @forelse($user->follows as $follow)
                                 <div class="col-6">
                                     {{ $follow->name }}
                                 </div>
                             @empty
                                 <div class="div-12"><p>No hay post</p></div>
                             @endforelse --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
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
        </div>
    </div>
@endsection