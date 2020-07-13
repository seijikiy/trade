@extends('layouts.index')
@section('content')
    @include('layouts.navbar.home-NAV')


    <div class="pt-responsive ml-resposive">

        <div class=" flex-col">

            @foreach($posts as $post)
                <div class="flex justify-center">


                    <!-- component -->
                    <div
                        class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0 mt-3 mb-2">
                        <div class="w-full flex justify-between p-3">
                            <div class="flex">
                                <div
                                    class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                                    <img src="/uploads/avatars/{{$post->user->avatar}}" alt="profile pic">
                                </div>
                                <span class="pt-1 ml-2 font-bold text-sm">{{$post->user->name}}</span>
                            </div>
                            <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i
                                    class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
                        </div>
                        <img class="w-full bg-cover" src="/images/example1.jpg">
                        <div class="px-3 pb-2">

                            <div class="pt-3">
                                <div class="mb-2 text-sm">
                                    <strong>{{$post->title}}</strong>
                                </div>
                            </div>

                            <div class="pt-1">
                                <div class="mb-2 text-sm">
                                    {{$post->description}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>


    </div>









@endsection
