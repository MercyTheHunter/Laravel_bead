<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pl-6 pt-6 text-gray-900">
                    {{ __('Válassza ki, mely tárgyon tanuló diákokat szeretné kilistázni') }}
                </div>
                <div class="p-6">
                    <form action="/teacher_students/list" method="POST">
                        @csrf
                        <div class="flex justify-left">
                            <div class="mb-3 xl:w-96">
                                <select
                                    class="form-select form-select-lg mb-3
                                            appearance-none
                                            block
                                            w-full
                                            px-4
                                            py-2
                                            font-normal
                                            text-gray-700
                                            bg-white bg-clip-padding bg-no-repeat
                                            border border-solid border-gray-300
                                            rounded
                                            transition
                                            ease-in-out
                                            m-0
                                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example"
                                    id="lesson" name="lesson">
                                    <option selected>Válasszon..</option>
                                    @foreach ($lessons as $i)
                                        <option value="{{ $i->ID }}">{{$i->LessonTime}}: {{ $i->Nev}}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kiválasztás</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
