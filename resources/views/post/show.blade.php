@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                </div>
                <div class="pl-3 pr-3">
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </div>
                </div>
                |
                <a class="pl-3" href="#">Follow</a>
            </div>

            <hr>

            <p>
                <a class="font-weight-bold pr-3" href="/profile/{{ $post->user->id }}">
                    <span class="text-dark">{{ $post->user->username }}</span>
                </a>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
