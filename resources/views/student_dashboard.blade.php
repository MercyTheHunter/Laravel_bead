<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tanulói adatlap') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @foreach ($student as $i)
                    <p>E-Notesz kód: <b>{{$i->name}}</b></p>
                    <p>Vezetéknév: <b>{{$i->Vnev}}</b></p>
                    <p>Keresztnév: <b>{{$i->Knev}}</b></p>
                    <p>Születési dátum: <b>{{$i->Szulido}}</b></p>
                    <p>Születési hely: <b>{{$i->Szulhely}}</b></p>
                    <p>Osztály: <b>{{$i->Osztalynev}}</b></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
