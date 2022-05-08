<x-lawyer-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 overflow-hidden shadow-xl sm:rounded-lg">



                <form method="POST" action="{{ route('lawyer.checklist_groups.store') }}" >
                    @csrf
                    <label for="helper-text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> {{ __('New CheckList Group')}}</label>
                    <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com">
                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never
                        share
                        your details. Read our <a href="#"
                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>

                </form>


            </div>
        </div>

    </div>
    </div>
</x-lawyer-layout>
