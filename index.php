<?php
require_once('auth/authenticate.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>Regal | Dashboard</title>
</head>

<style>
    /* Only the scroll bar */
    ::-webkit-scrollbar {
        width: .5rem;
        height: .5rem;
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, .15);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: rgba(0, 0, 0, .3);
    }
</style>

<body class="relative bg-yellow-50 overflow-hidden max-h-screen">


    <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-64 hidden lg:block">
        <div class="flex flex-col justify-between h-full">
            <div class="flex-grow overflow-y-scroll">
                <div class="px-4 py-6 text-center border-b">
                    <h1 class="text-2xl font-bold leading-none text-yellow-600"><span
                            class="text-gray-700">REGAL</span>&nbsp;Gold</h1>
                </div>
                <div class="p-4">
                    <ul class="space-y-1">
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center bg-yellow-200 rounded-xl font-bold text-lg text-yellow-900 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="text-lg mr-4" viewBox="0 0 16 16">
                                    <path
                                        d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                </svg>Categories
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="location.href='Shuffle/shufflePractice'"
                                class="flex items-center bg-white hover:bg-yellow-50 rounded-xl font-bold text-lg text-gray-900 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="text-lg mr-4" viewBox="0 0 16 16">
                                    <path
                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                                </svg>Practice
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center bg-white hover:bg-yellow-50 rounded-xl font-bold text-lg  text-gray-900 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="text-lg mr-4" viewBox="0 0 16 16">
                                    <path
                                        d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                </svg>Take Test
                            </a>
                        </li>
                        <br>
                        <h3 class="text-md font-semibold ml-2">Advertisement</h3>
                        <img onclick="window.open('https://www.embibe.com/');" class="rounded-xl" src="https://d2cyt36b7wnvt9.cloudfront.net/exams/wp-content/uploads/2022/07/06233726/Mobile-Banner-Copies-JEE-Ad-test-1-UG-2.gif" alt="www.embibe.com">
                        
                        <!-- <li>
              <a href="javascript:void(0)" class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>Profile
              </a>
            </li> -->
                    </ul>
                </div>
            </div>
            <div class="p-4" style="margin:auto;overflow-y:hidden;">
                <button type="button" onclick="location.href='logout.php'"
                    class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class=""
                        viewBox="0 0 16 16">
                        <path
                            d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <span class="font-bold text-sm ml-2">Logout</span>
                </button>
            </div>
        </div>
    </aside>

    <main class="lg:ml-60 max-h-screen overflow-auto ">
        <div class=" lg:px-6 px-0 md:px-2 py-8">
            <div class="max-w-4/5 mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5 backdrop-blur-sm">
                    <!-- <h1 class="text-3xl font-bold mb-5"><?php //echo $_COOKIE['firstname'].' '.$_COOKIE['lastname']; ?></h1> -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-stretch ">
                            <div class="text-gray-400 text-xs">Questions<br>Practiced</div>
                            <div class="h-100 border-l mx-2"></div>
                            <div class="flex flex-nowrap -space-x-3">
                                <h1 style="font-weight:bold; font-size:1.5rem !important;">149</h1>
                            </div>
                            &emsp;
                            <div class="text-gray-400 text-xs">Membership<br>Type</div>
                            <div class="h-100 border-l mx-2"></div>
                            <div class="flex flex-nowrap -space-x-3">
                                <h1 class="text-yellow-600" style="font-weight:bold; font-size:1.5rem !important;">Gold</h1>
                            </div>
                        </div>
                       
                        <div class="flex items-center gap-x-2">
                            <!-- <button type="button" class="inline-flex items-center justify-center h-9 px-3 rounded-xl border hover:border-gray-400 text-gray-800 hover:text-gray-900 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                  <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                </svg>
              </button> -->
                            <button type="button"
                                class="inline-flex items-center justify-center h-9 px-3 rounded-xl bg-gray-900 text-gray-100 hover:text-white text-sm font-semibold transition">
                                Results
                            </button>
                            <button type="button"
                                class="inline-flex items-center justify-center h-9 px-3 rounded-xl bg-white text-gray-900 hover:bg-yellow-100 border-2 text-sm font-semibold transition">
                                View Profile
                            </button>


                        </div>
                    </div>

                    <hr class="my-6">

                    <div class=" lg:grid sm:flex flex flex-col grid-cols-2 gap-x-5">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Categories</h2>

                <div class="grid grid-cols-2 gap-4">
<!-- <div class="w-60 h-2 border-2 rounded-md mx-auto mt-20">
  <div class="flex animate-pulse flex-row items-center h-full justify-center space-x-5">
    <div class="w-12 bg-gray-300 h-12 rounded-full ">
    </div>
        <div class="flex flex-col space-y-3">
        <div class="w-36 bg-gray-300 h-6 rounded-md ">
        </div>
        <div class="w-24 bg-gray-300 h-6 rounded-md ">
        </div>
    </div>
  </div>
</div> -->
                    <div class="col-span-2 flex">
                        <button type="button"
                            class="inline-flex relative items-center w-16 text-sm font-medium text-center text-black border-2 rounded-xl border-blue-100">
                            <span class="text-2xl font-bold text-blue-300 m-auto">R</span>
                        </button>&nbsp;
                        <div class="p-4 bg-blue-100 rounded-xl flex justify-between items-center w-full">
                            <div class="font-bold text-2xl text-gray-800 leading-none">Reasoning</div>
                            <div class="">
                                <button type="button"
                                    class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition" onclick="window.open('Practice/rules')" target="_blank">
                                    Start Practicing
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 flex">
                        <button type="button"
                            class="inline-flex relative items-center w-16 text-sm font-medium text-center text-black border-2 rounded-xl border-red-100">
                            <span class="text-2xl font-bold text-red-300 m-auto">E</span>
                        </button>&nbsp;
                        <div class="p-4 bg-red-100 rounded-xl flex justify-between items-center w-full">
                            <div class="font-bold text-2xl text-gray-800 leading-none">English</div>
                            <div class="">
                                <button type="button"
                                    class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                    Start Practicing
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 flex">
                        <button type="button"
                            class="inline-flex relative items-center w-16 text-sm font-medium text-center text-black border-2 rounded-xl border-green-100">
                            <span class="text-2xl font-bold text-green-300 m-auto">G</span>
                        </button>&nbsp;
                        <div class="p-4 bg-green-100 rounded-xl flex justify-between items-center w-full">
                            <div class="font-bold text-2xl text-gray-800 leading-none">General Knowledge</div>
                            <div class="">
                                <button type="button"
                                    class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                    Start Practicing
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 flex">
                        <button type="button"
                            class="inline-flex relative items-center w-16 text-sm font-medium text-center text-black border-2 rounded-xl border-violet-100">
                            <span class="text-2xl font-bold text-violet-300 m-auto">A</span>
                        </button>&nbsp;
                        <div class="p-4 bg-violet-100 rounded-xl flex justify-between items-center w-full">
                            <div class="font-bold text-2xl text-gray-800 leading-none">Aptitude</div>
                            <div class="">
                                <button type="button"
                                    class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                    Start Practicing
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 flex">
                        <button type="button"
                            class="inline-flex relative items-center w-16 text-sm font-medium text-center text-black border-2 rounded-xl border-yellow-100">
                            <span class="text-2xl font-bold text-yellow-300 m-auto">L</span>
                        </button>&nbsp;
                        <div class="p-4 bg-yellow-100 rounded-xl flex justify-between items-center w-full">
                            <div class="font-bold text-2xl text-gray-800 leading-none">Logical</div>
                            <div class="">
                                <button type="button"
                                    class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                    Start Practicing
                                </button>
                            </div>
                        </div>
                    </div>




                            </div>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold mb-4 mt-10">Your Progress</h2>

                            <div class="space-y-4">
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Number 10</div>
                                        <div class="text-gray-400 text-xs">4h</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">Blog and social
                                        posts</a>
                                    <div class="text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" class="text-gray-800 inline align-middle mr-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>Deadline is today
                                    </div>
                                </div>
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Grace Aroma</div>
                                        <div class="text-gray-400 text-xs">7d</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">New campaign review</a>
                                    <div class="text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" class="text-gray-800 inline align-middle mr-1"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>New feedback
                                    </div>
                                </div>
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-400 text-xs">Petz App</div>
                                        <div class="text-gray-400 text-xs">2h</div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and
                                        browser QA</a>
                                </div>
                                <div class="flex horizontal">
                                <img class=" w-3/5 " style="" src="https://static.semrush.com/blog/uploads/media/d0/f2/d0f2bce3463dd91de19f1e25c5dcf5c0/3xcyopENXPUAhbxhdcagnWQJ-gwd4HACWDpGv5qpq7ze3DREgLd9qf2VWKDOP20PM3lGGbiqkpWq6Bo4zO5j58FswvIxSkhjWbGA9Ri5ymcGVcyWIe8tXaK0oxBR19ZQ-zM-Vaw.gif" alt="">
                                &emsp;
                               
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    
    
</body>

</html>