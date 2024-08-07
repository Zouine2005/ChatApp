<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 dark:bg-gradient-to-r dark:from-blue-700 dark:to-purple-800 overflow-hidden shadow-sm sm:rounded-lg animate-bg-color">
                <div class="p-6 text-white dark:text-gray-100 animate-fade-in">
                    <h1 class="text-4xl font-extrabold mb-4 animate-bounce">
                        {{ __("Welcome to the Chat App!") }}
                    </h1>
                    <p class="text-xl">{{ __("We're glad to have you here. Start chatting and enjoy your experience!") }}</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bgColorChange {
            0% {
                background-color: #4299e1;
            }
            50% {
                background-color: #805ad5;
            }
            100% {
                background-color: #4299e1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        .animate-bg-color {
            animation: bgColorChange 5s infinite;
        }

        .animate-bounce {
            animation: bounce 2s infinite;
        }
    </style>
</x-app-layout>
