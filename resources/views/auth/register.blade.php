<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-500 to-orange-500 p-4">
            <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
                <h2 class="text-2xl font-bold mb-2">Create an account</h2>
                <p class="text-zinc-600 mb-6">Welcome! Please enter your details to create an account.</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-label for="name" class="block text-zinc-700 mb-2" value="{{ __('Name') }}" />
                        <x-input id="name" class="w-full px-3 py-2 border rounded-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" class="block text-zinc-700 mb-2" value="{{ __('Email') }}" />
                        <x-input id="email" class="w-full px-3 py-2 border rounded-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" class="block text-zinc-700 mb-2" value="{{ __('Password') }}" />
                        <x-input id="password" class="w-full px-3 py-2 border rounded-lg" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" class="block text-zinc-700 mb-2" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="w-full px-3 py-2 border rounded-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button type="submit"
                            class="w-full bg-orange-500 text-white py-2 rounded-lg mb-4 hover:shadow-lg transition duration-300">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
                <p class="text-center text-zinc-600">Already have an account? <a href="#"
                        class="text-red-500">Sign
                        in</a></p>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
