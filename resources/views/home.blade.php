@extends('layouts.app')

@section('content')
    <div class="w-full flex md:flex-row justify-center items-center gap-14 mt-[80px]">
        @component('_components.card')
            @slot('img1', 'img1.jpg')
            @slot('span', 'BUSINESS')
            @slot('title', 'loT Market Worth $8.8 Billion In 2017')
            @slot('p',
                'Mobile app development is becoming increasingly competitive. Developers are under constant pressure to
                build mobile apps that are faster and...')
                @slot('img2', 'user-img.jpg')
                @slot('span2', 'Hello2')
                @slot('p2', 'lorem ipsum lorem2')
            @endcomponent
            @component('_components.card')
                @slot('img1', 'img1.jpg')
                @slot('span', 'BUSINESS')
                @slot('title', 'loT Market Worth $8.8 Billion In 2017')
                @slot('p',
                    'Mobile app development is becoming increasingly competitive. Developers are under constant pressure to
                    build mobile apps that are faster and...')
                    @slot('img2', 'user-img.jpg')
                    @slot('span2', 'Hello2')
                    @slot('p2', 'October 6, 2017')
                @endcomponent
                @component('_components.card')
                    @slot('img1', 'img1.jpg')
                    @slot('span', 'BUSINESS')
                    @slot('title', 'loT Market Worth $8.8 Billion In 2017')
                    @slot('p',
                        'Mobile app development is becoming increasingly competitive. Developers are under constant pressure to
                        build mobile apps that are faster and...')
                        @slot('img2', 'user-img.jpg')
                        @slot('span2', 'Hello2')
                        @slot('p2', 'lorem ipsum lorem2')
                    @endcomponent

                </div>

                <div class="w-full flex justify-center items-center gap-14 mt-[80px]">


                    @component('_components.card')
                        @slot('img1', 'img1.jpg')
                        @slot('span', 'BUSINESS')
                        @slot('title', 'loT Market Worth $8.8 Billion In 2017')
                        @slot('p',
                            'Mobile app development is becoming increasingly competitive. Developers are under constant pressure to
                            build mobile apps that are faster and...')
                            @slot('img2', 'user-img.jpg')
                            @slot('span2', 'Hello2')
                            @slot('p2', 'lorem ipsum lorem2')
                        @endcomponent

                        @component('_components.card')
                            @slot('img1', 'img1.jpg')
                            @slot('span', 'BUSINESS')
                            @slot('title', 'loT Market Worth $8.8 Billion In 2017')
                            @slot('p',
                                'Mobile app development is becoming increasingly competitive. Developers are under constant pressure to
                                build mobile apps that are faster and...')
                                @slot('img2', 'user-img.jpg')
                                @slot('span2', 'Hello2')
                                @slot('p2', 'lorem ipsum lorem2')
                            @endcomponent

                            @component('_components.card')
                                @slot('img1', 'img1.jpg')
                                @slot('span', 'BUSINESS')
                                @slot('title', 'loT Market Worth $8.8 Billion In 2017')
                                @slot('p',
                                    'Mobile app development is becoming increasingly competitive. Developers are under constant pressure to
                                    build mobile apps that are faster and...')
                                    @slot('img2', 'user-img.jpg')
                                    @slot('span2', 'Hello2')
                                    @slot('p2', 'lorem ipsum lorem2')
                                @endcomponent
                            </div>
                        @endsection
