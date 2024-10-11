<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
    <head>
        <!-- Other head elements -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    
</head>
<body class="bg-gray-100  ">
    <div class="container flex justify-center  items-stretch h-screen ">
        
            <div class="w-full self-center shadow-sm max-w-md mx-auto bg-white  rounded-lg px-8 py-12">
                <p class="text-[25px] bg-gradient-to-r from-purple-700 to-blue-400 bg-clip-text text-transparent  font-bold text-center -mt-4 mb-4">Selamat Datang</p>
                <p class="pt-2.5 py-3 flex text-gray-600 justify-center text-sm text-center">Senang bertemu anda kembali <br> Silahkan masuk ke akun anda di bawah</p>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    
                <form action="" method="POST" class="mt-2">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Masukkan Email" class="mt-1 block  bg-gray-50 w-full px-3 py-2 border border-gray-300 rounded-md  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" name="password" placeholder="Masukkan Password" id="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none bg-gray-50 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <button type="button" onclick="togglePassword()"  class="absolute inset-y-0 right-0 pr-5 flex items-center text-lg leading-5">
                                <i id="toggleIcon" class="bx bx-show text-gray-500"><i class=""></i></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex mb-8 justify-between text-sm text-gray-500">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" class="form-checkbox h-4 w-4 text-blue-600">
                            <label for="remember" class="ml-2">Remember me</label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="hover:underline hover:font-semibold font-medium text-blue-600">Forget Password?</a>
                        </div>
                    </div>
                    
    
                    <div class="mb-2">
                        <button name="submit" type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 drop-shadow-md px-4 rounded bg-gradient-to-r from-purple-600 to-blue-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 ">
                            Login
                        </button>
                    </div>
                </form>
                <script>
                    function togglePassword() {
                        var passwordInput = document.getElementById("password");
                        var toggleIcon = document.getElementById("toggleIcon");
                        
                        if (passwordInput.type === "password") {
                            passwordInput.type = "text";
                            toggleIcon.classList.remove('bx-show');
                            toggleIcon.classList.add('bx-hide');
                        } else {
                            passwordInput.type = "password";
                            toggleIcon.classList.remove('bx-hide');
                            toggleIcon.classList.add('bx-show');
                        }
                    }
                </script>
                
        </div>
       
    </div>
</body>
</html>
