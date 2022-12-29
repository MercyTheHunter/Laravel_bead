<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Timetable') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Órarend") }}
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hétfő</th>
                            <th scope="col">Kedd</th>
                            <th scope="col">Szerda</th>
                            <th scope="col">Csütörtök</th>
                            <th scope="col">Péntek</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <th scope="row">8:00 - 8:45</th>
                        @foreach ($lesson as $i)
                            @if ($i->LessonTime == '8:00 - 8:45')
                                @if ($i->LessonDay == 'Hétfő')
                                    <td>{{$i->Nev}}</td>
                                @endif
                                @if ($i->LessonDay == 'Kedd')
                                    <td>{{$i->Nev}}</td>
                                @endif
                                @if ($i->LessonDay == 'Szerda')
                                    <td>{{$i->Nev}}</td>
                                @endif
                                @if ($i->LessonDay == 'Csütörtök')
                                    <td>{{$i->Nev}}</td>
                                @endif
                                @if ($i->LessonDay == 'Péntek')
                                    <td>{{$i->Nev}}</td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">9:00 - 9:45</th>
                        @foreach ( $lesson as $i)
                            @if ($i->LessonTime == '9:00 - 9:45')
                                <td>{{$i->Nev}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">10:00 - 10:45</th>
                        @foreach ( $lesson as $i)
                            @if ($i->LessonTime == '10:00 - 10:45')
                                <td>{{$i->Nev}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">11:00 - 11:45</th>
                        @foreach ( $lesson as $i)
                            @if ($i->LessonTime == '11:00 - 11:45')
                                <td>{{$i->Nev}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">12:00 - 12:45</th>
                        @foreach ( $lesson as $i)
                            @if ($i->LessonTime == '12:00 - 12:45')
                                <td>{{$i->Nev}}</td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
