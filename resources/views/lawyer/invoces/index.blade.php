<x-lawyer-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citas con los Abogados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 overflow-hidden shadow-xl sm:rounded-lg">
                Accessible only for Lawyer. Invoques

            </div>
            <div class="mt-4 bg-white p-5 overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('lawyer.invoces-list')

            </div>
        </div>

        </div>
    </div>
</x-lawyer-layout>