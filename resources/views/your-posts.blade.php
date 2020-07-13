@extends('layouts.index')
@section('content')
    @include('layouts.navbar.your-posts-NAV')










    <!-- <div class="dropdown">
        <button onclick="test()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </div>-->
    <div class="pt-responsive lg:ml-64 xl:ml-64">

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

                            <div class="dropdown mt-1 mr-2">
                                <button onclick="test()" class="ml-2"><img src="/images/more.svg" class="dropbtn w-6 mx-2 mr-3"></button>
                                <div id="myDropdown" class="dropdown-content p-1 border rounded border-gray-900 bg-gray-100" style="">
                                    <div>
                                        <div class="flex justify-center">
                                            <a href="#home" class="text-gray-700">Edit</a>
                                        </div>
                                        <div class="flex justify-center">
                                            <a href="#about" class="text-gray-700">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


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



    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function test() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

@endsection
