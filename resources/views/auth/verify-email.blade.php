<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Спасибо, что зарегестрировались на нашем сайте. Пожалуйста, подтвердите ваш email-адрес, кликнув на ссылку, которую мы отправили на ваш email-адрес. Если вы не получили нашего письма, мы отправим его еще раз.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Новая ссылка подтверждения была отправлена на адрес, который вы указали при регистрации.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Отправить ссылку еще раз') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Выход') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
