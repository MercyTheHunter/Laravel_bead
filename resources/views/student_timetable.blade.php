<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tanulói órarend') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Órarend") }}
                </div>
                <div class="overflow-hidden p-6">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-white">
                            <tr class="bg-gray-200">
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">#</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Hétfő</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Kedd</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Szerda</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Csütörtök</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">Péntek</th>
                            </tr>
                        </thead class="border-b">
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row">8:00 - 8:45</th>
                            @foreach ( $lesson as $i)
                                @if ($i->LessonTime == '8:00 - 8:45')
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">{{$i->Nev}}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row">9:00 - 9:45</th>
                            @foreach ( $lesson as $i)
                                @if ($i->LessonTime == '9:00 - 9:45')
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">{{$i->Nev}}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row">10:00 - 10:45</th>
                            @foreach ( $lesson as $i)
                                @if ($i->LessonTime == '10:00 - 10:45')
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">{{$i->Nev}}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row">11:00 - 11:45</th>
                            @foreach ( $lesson as $i)
                                @if ($i->LessonTime == '11:00 - 11:45')
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">{{$i->Nev}}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row">12:00 - 12:45</th>
                            @foreach ( $lesson as $i)
                                @if ($i->LessonTime == '12:00 - 12:45')
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">{{$i->Nev}}</td>
                                @endif
                            @endforeach
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
