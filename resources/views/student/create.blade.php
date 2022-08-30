<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Session Status -->
        <x-success-status class="mb-4" :status="session('message')" />
        <!-- Session Status -->
        <x-error-status class="mb-4" :status="session('message')" />


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('add-student') }}" method="post">@csrf
                        <div>
                            <x-label for="name" :value="__('Student Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                 autofocus />
                        </div>
                        <div>
                            <x-label for="email" :value="__('Student Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')"  autofocus />
                        </div>
                        <div>
                            <x-label for="phone" :value="__('Student Phone')" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                                 autofocus />
                        </div>

                        <x-button class="ml-4 mt-4">
                            {{ __('Save Student') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>