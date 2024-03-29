<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>

<body class="font-sans text-base">
    <div id="app">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full">
                <div>
                    <a href="/">

                        <img class="mx-auto h-12 w-auto" src="{{ asset('logo_gray.svg') }}" alt=" Workflow" />
                    </a>
                    <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>

                </div>
                <form class="mt-8" action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="hidden" name="remember" value="true" />
                    <div class="rounded-md shadow-sm">
                        <div>
                            <input aria-label="Email address" name="email" type="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" value="{{ old('email') }}" placeholder="Email address" autofocus />
                        </div>
                        <div class="-mt-px">
                            <input aria-label="Password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Password" autocomplete="current-password" />
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                                Remember me
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="text-sm leading-5">
                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Forgot your password?
                            </a>
                        </div>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <!-- @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror -->









    </div>
</body>

</html>