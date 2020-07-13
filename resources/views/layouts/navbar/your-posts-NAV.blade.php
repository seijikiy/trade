<div class="bg-gray-200 shadow nav1 fixed">
    <div class="flex">
        <div class="w-64 h-screen bg-white">
            <div class="flex items-center justify-center mt-10">
                <img class="h-12 w-auto" src="/images/logo.svg" alt="logo">
                <p class="pl-2 text-gray-800 text-4xl" alt="logo">Trade</p>
            </div>

            <nav class="mt-10">
                <a class="flex items-center mt-5 py-2 px-8 block text-gray-600 border-r-4 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700"
                   href="/home">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                    </svg>

                    <span class="mx-4 font-medium">Home</span>
                </a>

                <a class="flex items-center mt-5 py-2 px-8 block text-gray-600 border-r-4 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700"
                   href="/profile">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                    <span class="mx-4 font-medium">Profile</span>
                </a>





                <a class="flex items-center py-2 mt-5 px-8 block bg-gray-200 text-gray-700 border-r-4 border-gray-700"
                                           href="/your-posts">
                  <img src="/images/your.svg" alt="your posts icon" class="w-5">

                    <span class="mx-4 font-medium">Your Posts</span>
                </a>

                <div class="modal-open"> <a class="flex items-center mt-5 py-2 px-8 block text-gray-600 border-r-4 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700"
                    >
                        <img src="/images/plus.svg" class="w-5">

                        <span class="mx-4 font-medium">New Post</span>
                    </a>
                </div>
            </nav>

            <div class="absolute bottom-0 my-10">
                <a class="flex items-center py-2 px-8 block text-gray-900 hover:text-gray-600" href="#">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="rounded-full w-16 h-16">


                    <span class="mx-4 font-medium">{{ Auth::user()->name }}</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="fixed">
    <div class="topnav" id="myTopnav">
        <div class="w-screen h-16 shadow bg-white nav2 shadow">
            <div class="flex justify-between">
                <div class="p-5 flex justify-start">
                    <img src="/images/logo.svg" alt="logo" class="w-auto h-8">
                    <p class="mt-1 ml-2 text-gray-800 text-base">Trade</p>
                </div>

                <div class="p-5 ">
                    <button onclick="myFunction()">
                        <img alt="menu" class="" src="/images/menu.svg">
                    </button>
                </div>
            </div>
        </div>

        <hr>
        <a class="bg-white p-5 font-medium text-gray-700"
           style="background-color: white">
            <div class="flex justify-center">
                <div>
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pl-2">
                    <p>Home</p>
                </div>
            </div>
        </a>
        <hr>
        <a class="bg-white p-5  font-medium text-gray-700"
           style="background-color: white">
            <div class="flex justify-center">
                <div>
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pl-2">
                    <p>Profile</p>
                </div>
            </div>
        </a>
        <hr>
        <a class="bg-white p-5 font-medium text-gray-700"
           style="background-color: white">
            <div class="flex justify-center">
                <div>
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pl-2">
                    <p>New Post</p>
                </div>
            </div>
        </a>
        <hr>
        <a class="bg-white p-5  font-medium text-gray-700"
           style="background-color: white">
            <div class="flex justify-center">
                <div>
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pl-2">
                    <p>Profile</p>
                </div>
            </div>
        </a></div>
</div>


<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
