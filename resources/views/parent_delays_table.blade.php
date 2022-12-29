<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Parent Delays') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Késések") }}
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden p-3">
                          <table class="min-w-full">
                            <thead class="bg-gray-200 border-b">
                              <tr>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                                  Tárgy
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                                  Mennyiség
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                                  Dátum
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($delay as $i)
                              <tr class="bg-white-100 border-b">
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$i->Nev}}
                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$i->Mennyiseg}} perc
                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$i->Datum}}
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="p-6">
                            @if ($sum < 45)
                            <p>Összes késés: {{$sum}} perc</p>
                            @else
                            <p>Összes késés: <span class="font-bold text-red-600">{{$sum}} perc</span> </p>
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
