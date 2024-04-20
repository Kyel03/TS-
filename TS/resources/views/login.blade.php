<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body style="background-color:#C19A6B;">                                 

    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-6 m-auto bg-white bg-opacity-75 flex-md:w-1/2 py-10 shadow-md ring- ring-gray-800/50 lg:max-w-xl rounded px-10 bg-blur" >
            <form action="{{ route('login.action') }}" method="POST" class="space-y-4">
                @csrf
                @if ($errors->any())
                <div role="alert" class="alert alert-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
            
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               
                @endif
                <div>
                    <img src="{{asset("img/ts_logo.png")}}" class="h-21 w-21" class="margin-left:auto margin-right:auto">
                    <label class="label" class="block text-gray-700 text-sm font-bold mb-2">
                        <span class="text-base label-text">{{__('Username')}}</span>
                    </label>
                    <input name="email" type="email" placeholder="Email Address" class="w-full input input-bordered rounded border border-black-500 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"" />
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">{{__('Password')}}</span>
                    </label>
                    <input name="password" type="password" placeholder="Enter Password" class="w-full input rounded border border-black-500 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div>
                    <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">{{__('Sign in')}}</button>
                </div>
                <div>
                    <label class="label cursor-pointer">
                        <span class="label-text">{{__('Remember me')}}</span>
                        <input name="remember" type="checkbox" checked="checked" id="customCheck" class="checkbox checkbox-primary" />
                    </label>
                </div>
                <span>{{__("Don't have an account yet?")}}
                    <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 hover:underline">{{__('Register?')}}</a></span>
                    <br> <span class="label-text"> {{__('Forgot Password?')}} </span>
            </form>
        </div>
    </div>    
</body>
</html> 
