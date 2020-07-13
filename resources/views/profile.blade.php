@extends('layouts.index')
@section('content')
    @include('layouts.navbar.profile-NAV')


    <div class="pt-responsive ml-resposive">
        <div class="flex justify-center">

            <div class=" flex-col bg-white pb-10 lg:mt-5 xl:mt5">
                <div class=" flex justify-center mt-10">
                    <img src="/uploads/avatars/{{$user->avatar}}"
                         style="width: 150px; height: 150px; border-radius: 50%"
                         alt="profile photo">
                </div>

                <div class="flex justify-center">
                    <h1 class="text-teal-800 text-5xl">
                        {{$user->name}}
                    </h1>
                </div>

                <div class="mt-12">
                    <form class="font" encty`pe="multipart/form-data" action="{{ route('profile') }}" method="POST">
                        <div class="mt-4 flex justify-center"><label class="text-2xl text-teal-700">Change Profile Image</label></div>
                        <div class="mt-3 flex justify-center"><input type="file" name="avatar" class="w-8/12 "></div>
                        <div><input type="hidden" name="_token" value="{{ csrf_token() }}"></div>
                        <div class="mt-10 flex justify-center"><input type="submit" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-full"></div>
                    </form>
                </div>
            </div>

        </div>
        </div>









@endsection
