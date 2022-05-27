<x-guest-layout class="col-12 w-100">
    <div class="col-12 vh-100">
        <div class=" bg-warning h-50 w-100"></div>
        <div class="d-flex flex-column col-12 bd-highlight align-items-center position-absolute w-100 bottom-0 bg-white rounded-top-3 border p-3">


            <x-jet-validation-errors class="mb-4" />
            <h3 class="text-center text-xl font-bold mt-3">
                Welcome Back
            </h3>
            <p class="text-center text-green-500 mb-5">
                Login to your account
            </p>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <form autocomplete="off" method="POST" class="w-100 w-full" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3 col-12">
                    <x-jet-input name="email" type="email" class="form-control" :value="old('email')" id="floatingInput" placeholder="name@example.com" required />
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating col-12">
                    <x-jet-input name='password' type="password" class="form-control" id="floatingPassword" placeholder="Password" required />
                    <label for="floatingPassword">Password</label>
                </div>
                <!-- <a href="#" class="link-primary align-self-end">Forgot Password</a>
                <button type="button" class="btn btn-primary col-8 my-3">Log In</button>
                <p>Don't have account? <a href="{{ route('register') }}" class="link-primary align-self-end">Register</a></p> -->

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                </div>
                <x-jet-button class="btn btn-primary col-12 my-3 flex justify-center">
                    {{ __('Login') }}
                </x-jet-button>
            </form>

            @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream-providers />
            @endif
        </div>
    </div>
</x-guest-layout>