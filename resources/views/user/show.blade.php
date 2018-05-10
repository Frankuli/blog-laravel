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
                        <div class="col-12 ">
                            <h5>SEGUIDORES</h5>
                            <a href="#" class="text-lg-center">{{count($user->followers)}}</a>
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
                            <h5>SIGUIENDO</h5>
                            <a href="#" class="text-lg-center">{{count($user->follows)}}</a>
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