<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Poppins:ital,wght@0,400;0,500;0,600;1,500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex">
        <div class="lg:w-9/12 h-screen box-border relative bg-main hidden lg:block md:w-1/6 flex flex-col gap-40">
            <div class="flex ml-10 my-8 gap-4">
                <img class="w-28 h-28" src="{{ asset('assets/cityhalllogo.png') }}" alt="">
                <img class="w-28 h-28" src="{{ asset('assets/citclogo.png') }}" alt="">
            </div>
            <div class="absolute left-5 top-[40%] w-1/2 flex align-middle justify-center flex-col text-center">
                <img src="{{ asset('assets/davaologo.png') }}" alt="">
                <p class=" text-4xl tracking-mostWidest text-white font-bold">LIFE IS HERE</p>
            </div>
            <div></div>
        </div>
        <div class="w-full lg:w-7/12 h-screen lg:absolute lg:right-0 z-10 bg-white rounded-bl-custom-bl flex flex-col items-center justify-center">
            <div class=" flex items-center justify-center h-3/4 w-3/4 flex-col ">
                <div class="lg:hidden flex ml-10 my-8 gap-4">
                    <img class="w-28 h-28" src="{{ asset('assets/cityhalllogo.png') }}" alt="">
                    <img class="w-28 h-28" src="{{ asset('assets/citc1.png') }}" alt="">
                </div>
                <form action="" class="h-3/4 w-3/4 bg-transparent flex flex-col items-center justify-start p-5 gap-5">
                    <div class="flex flex-col gap-3 mb-5 w-3/4 justify-start">
                        <h1 class="font-sans font-semibold text-7xl">Welcome</h1>
                        <p class="font-medium text-lg">Login to your account</p>
                    </div>
                    <div class="flex items-start justify-center flex-col w-3/4">
                        <label class="flex font-semibold" for="govID">Government ID</label>
                        <div class="relative w-full">
                            <input class="w-full h-14 border-2 rounded-lg pl-14 pr-4 text-lg border-slate-400 focus:outline-none" type="text" name="govID" id="govID" placeholder="Government ID">
                            <div class="absolute inset-y-0 left-0 flex items-center p-3 bg-main rounded-l-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                  <x-heroicon-o-identification />
                                </svg>
                              </div>
                        </div>
                    </div>
                    <div class="flex items-start justify-center flex-col w-3/4">
                        <label class="flex font-semibold" for="password">Password</label>
                        <div class="relative w-full">
                            <input class="w-full h-14 border-2 rounded-lg pl-14 pr-4 text-lg border-slate-400 focus:outline-none" type="password" name="password" id="password" placeholder="Password">
                            <div class="absolute inset-y-0 left-0 flex items-center p-3 bg-main rounded-l-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <x-ri-lock-password-line />
                                </svg>
                              </div>
                        </div>
                    </div>
                    <div class="flex items-start justify-center flex-col w-3/4">
                        <a class="flex self-end justify-center underline text-main" href="/register">Forgot Pasword?</a>
                    </div>
                    <div class="flex items-start justify-center flex-col w-3/4">
                        <button class="w-full h-14 text-lg font-medium border-2 rounded-lg pl-2 bg-main text-white" type="submit">Login</button>
                    </div>
                    <div class="flex items-center justify-center flex-col w-3/4">
                        <p class="font-medium">Don't have an account? <a href="/register" class="text-red-600 font-semibold">Register here</a></p>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>