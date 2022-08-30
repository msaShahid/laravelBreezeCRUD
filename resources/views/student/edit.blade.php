<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <!-- Session Status -->
        <x-error-status class="mb-4" :status="session('message')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('update-student/'.$student->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="name" :value="__('Student Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$student->name"
                                 autofocus />
                        </div>
                        <div>
                            <x-label for="email" :value="__('Student Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="$student->email"  autofocus />
                        </div>
                        <div>
                            <x-label for="phone" :value="__('Student Phone')" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$student->phone"
                                 autofocus />
                        </div>

                        <x-button class="ml-4 mt-4">
                            {{ __('Update Student') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>