<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 ">
    <div class="container content-center h-screen mx-auto py-5 ">
        <div class="w-full   max-w-md mx-auto bg-white   rounded-lg px-8 py-16">
            <h1 class="text-2xl  font-bold text-center -mt-4 mb-6">Selamat Datang</h1>
            <p class="py-3 flex text-gray-600 justify-center text-sm text-center">Senang bertemu anda kembali <br> Silahkan masuk ke akun anda di bawah</p>
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
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" placeholder="Masukkan Email" class="mt-1 block drop-shadow-sm w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="mb-8">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" class="mt-1 drop-shadow-sm block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="mb-6">
                    <button name="submit" type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 drop-shadow-md px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Login
                    </button>
                </div>
            </form>
        </div> 
    </div>
</body>
</html>
