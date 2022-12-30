<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Késés beírása') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pl-6 pt-6 text-gray-900">
                    {{ __('Késés beírása') }}
                </div>
                <div class="p-6">
                    <form action="/teacher_students/store_delay" method="POST" id="givedelay">
                        @csrf
                        <div class="form-group">
                            <label for="name">Késés:</label>
                            <input type="text"
                                class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="delay" placeholder="Érték" name="delay" />
                        </div>
                        <div class="pt-4">
                            <button type="submit"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Beírás</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
