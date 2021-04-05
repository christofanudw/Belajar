@extends('layouts/app')

@section('content')
<body class="text-green-600 font-subtext">
    <div class="">
        <div class="">
            <nav class="flex items-center justify-start">
                <div class="">
                    <h1 class="text-7xl font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/" class="text-green-500 text-sm sm:text-xl sm:text-red-500 lg:text-blue-500">Food Ninja</a>
                    </h1>
                </div>
                <ul class="text-green-700 flex">
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    
        <main class="px-16 py-6">
            <div class="flex justify-center md:justify-end">
                <a class="text-primary" href="#">Log In</a>
                <a class="text-primary ml-2" href="#">Sign Up</a>
            </div>

            {{-- <div class="flex items-center justify-end">
                <div class="bg-red-500 h-4 w-6"></div>
                <div class="bg-blue-500 h-8 w-6"></div>
                <div class="bg-green-500 h-12 w-6"></div>
            </div> --}}
    
            <header class="text-green-700">
                <h2 class="text-6xl font-semibold">Recipes</h2>
                <h3 class=" text-2xl font-semibold">For Ninjas</h3>
            </header>
    
            <div>
                <h4 class="font-bold mt-12 pb-2 border-b border-gray-100">Latest Recipes</h4>

                <div class="mt-8">
                    {{-- cards go here --}}
                    <div>
                        <img width="500px" src="{{url('frontend\img\dubai-atlantis@2x.jpg')}}" alt="">
                        <div>
                            <span>5 Bean Chilli Stew</span>
                            <span>Recipe by Christofanu</span>
                        </div>
                    </div>
                </div>
    
                <h4 class="font-bold mt-12 pb-2">Most Popular</h4>
    
                <div class="mt-8">
                    {{-- cards go here --}}
                </div>
    
                <div class="flex justify-center">
                    <div class="bg-secondary-100 text-secondary-200" >Load More</div>
                </div>
            </div>
    
        </main>
    </div>
</body>
@endsection