@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="d-flex justify-content-center pb-4">
        <div class="col-8 bg-white border rounded p-0">
            <div class="d-flex align-items-center pt-3 pb-3 pl-3">
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
            </div>
            <div class="pb-3">
                <a href="/p/{{ $post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>

            <div class="pl-3">    
                <p>
                    <a class="font-weight-bold pr-3" href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
