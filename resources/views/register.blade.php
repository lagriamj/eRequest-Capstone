<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
            <div class="lg:hidden flex ml-10 my-8 gap-4">
                <img class="w-28 h-28" src="{{ asset('assets/cityhalllogo.png') }}" alt="">
                <img class="w-28 h-28" src="{{ asset('assets/citc1.png') }}" alt="">
            </div>
            <form action="" class="h-3/4 w-3/4 bg-transparent lg:ml-24 lg:mb-16 flex flex-col items-center justify-start p-5 gap-5">
                <div class="flex flex-col gap-3 mb-5 w-3/4 justify-start">
                    <h1 class="font-sans font-semibold text-7xl">Register</h1>
                </div>
                <div class="flex items-start justify-center w-3/4">
                    <div class="flex flex-col w-1/2">
                        <label class="font-semibold" for="firstName">First Name</label>
                        <div class="relative">
                            <input class="w-full h-14 border-2 rounded-lg pl-14 pr-4 text-lg border-slate-400 focus:outline-none" type="text" name="firstName" id="firstName" placeholder="First Name">
                            <div class="absolute inset-y-0 left-0 flex items-center p-3 bg-main rounded-l-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <x-go-person-16 />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/2 ml-4">
                        <label class="font-semibold" for="lastName">Last Name</label>
                        <div class="relative">
                            <input class="w-full h-14 border-2 rounded-lg pl-14 pr-4 text-lg border-slate-400 focus:outline-none" type="text" name="lastName" id="lastName" placeholder="Last Name">
                            <div class="absolute inset-y-0 left-0 flex items-center p-3 bg-main rounded-l-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <x-go-person-16 />
                                </svg>
                            </div>
                        </div>
                    </div>
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
                    <label class="flex font-semibold" for="contactNumber">Contact Number</label>
                    <div class="relative w-full">
                        <input class="w-full h-14 border-2 rounded-lg pl-14 pr-4 text-lg border-slate-400 focus:outline-none" type="number" name="contactNumber" id="contactNumber" placeholder="Contact Number" minlength="11">
                        <div class="absolute inset-y-0 left-0 flex items-center p-3 bg-main rounded-l-lg">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <x-feathericon-phone />
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
                    <button class="w-full h-14 text-lg font-medium border-2 rounded-lg pl-2 bg-main text-white" type="submit">Next</button>
                </div>
                <div class="flex items-center justify-center flex-col w-3/4">
                    <p class="font-medium">Already have an account? <a href="/" class="text-red-600 font-semibold">Login here</a></p>
                </div>
        </div>
    </div>
</body>
</html>