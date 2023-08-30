@extends('layouts.app')

@section('content')
    <div class="w-full border flex justify-center items-center gap-14 mt-[80px]">
        @component('_components.card')
            @slot('img1', 'img1.jpg')
            @slot('span', 'BUSINESS')
            @slot('title', 'my card')
            @slot('p', 'lorem ipsum lorem')
            @slot('img2', 'user-img.jpg')
            @slot('span2', 'Hello2')
            @slot('p2', 'lorem ipsum lorem2')
        @endcomponent
        @component('_components.card')
            @slot('img1', 'img1.jpg')
            @slot('span', 'BUSINESS')
            @slot('title', 'my card')
            @slot('p', 'lorem ipsum lorem')
            @slot('img2', 'user-img.jpg')
            @slot('span2', 'Hello2')
            @slot('p2', 'lorem ipsum lorem2')
        @endcomponent
        @component('_components.card')
            @slot('img1', 'img1.jpg')
            @slot('span', 'BUSINESS')
            @slot('title', 'my card')
            @slot('p', 'lorem ipsum lorem')
            @slot('img2', 'user-img.jpg')
            @slot('span2', 'Hello2')
            @slot('p2', 'lorem ipsum lorem2')
        @endcomponent
    </div>
@endsection
