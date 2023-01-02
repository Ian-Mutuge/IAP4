<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Student Dashboard') }}
        </h2>
    </x-slot>

    <x-dropdown-link :href="route('Studentprofile')">
                            {{ __('View Profile') }}
                        </x-dropdown-link>
                         
                        <x-dropdown-link :href="route('Attendance')">
                            {{ __('View Attendance') }}
                        </x-dropdown-link>
                          
                        <x-dropdown-link :href="progresschanger">
                            {{ __('Progress report') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="courses">
                            {{ __('Select Units') }}
                        </x-dropdown-link>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {{ Auth::user()->name }} , {{ __("Welcome to our school management system !") }}
                
              
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
