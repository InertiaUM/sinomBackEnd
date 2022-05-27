<x-guest-layout>
    <x-jet-validation-errors class="mb-4" />
    <div class="col-12">
        <div class="bg-warning w-100 h-50 d-inline-block d-flex justify-content-center align-items-center">
            <span class="material-icons text-secondary" style="font-size: 100px">
                image
            </span>
        </div>
        <div class="d-flex flex-column p-2 bd-highlight align-items-center px-5 w-100 bg-white rounded-top-3">
            <h3>
                Register
            </h3>
            <p class="text-success">
                Create Your Account
            </p>

            <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- <div class="form-floating col-12">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
                    <label for="floatingPassword">Conirm Password</label>
                </div> -->
                <div>
                    <x-jet-label for="name" value="{{ __('Nama Perusahaan') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="address" value="{{ __('Alamat') }}" />
                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="loa" value="{{ __('Berkas Kerjasama Penggunaan SINOM (Maksimal 1 mb berbentuk pdf)') }}" />
                    <x-jet-input id="loa" class="block mt-1 w-full" type="file" name="loa" required accept="application/pdf" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif

                <div class="flex flex-col justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="btn btn-primary col-12 my-3">{{__('Register') }}</x-jet-button>
                </div>
            </form>
            @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream-providers />
            @endif
        </div>
    </div>
</x-guest-layout>