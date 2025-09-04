<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #3f3286;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-sm">
        <div class="flex flex-col items-center mb-6">
            <svg class="w-12 h-12 text-purple-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4.25a.75.75 0 001.5 0V7a.5.5 0 011-1z" clip-rule="evenodd" />
            </svg>
            <h2 class="mt-4 text-2xl font-bold text-gray-800">Register</h2>
            <p class="text-gray-500 text-sm mt-1">Enter your credentials to create your account</p>
        </div>

        <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input type="text" id="username" name="username" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-purple-200 focus:border-purple-500" placeholder="Masukkan Username">
                </div>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <input type="email" id="email" name="email" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-purple-200 focus:border-purple-500" placeholder="Masukkan Email">
                </div>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-4a2 2 0 00-2-2H6a2 2 0 00-2 2v4a2 2 0 002 2zm1-9V7a4 4 0 118 0v3"></path>
                        </svg>
                    </div>
                    <input type="password" id="password" name="password" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-purple-200 focus:border-purple-500" placeholder="Masukkan Password">
                </div>
            </div>
            <div class="mb-6">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-4a2 2 0 00-2-2H6a2 2 0 00-2 2v4a2 2 0 002 2zm1-9V7a4 4 0 118 0v3"></path>
                        </svg>
                    </div>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-purple-200 focus:border-purple-500" placeholder="Masukkan Password">
                </div>
            </div>
            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                Login
            </button>
        </form>
    </div>
</body>
</html>
