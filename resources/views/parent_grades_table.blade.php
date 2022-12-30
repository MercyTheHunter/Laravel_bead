<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tanuló jegyei') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden p-6">
                          <table class="min-w-full text-center">
                            <thead class="border-b bg-white">
                              <tr class="bg-gray-200">
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                  Értékelés
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                  Dátum
                                </th>
                              </tr>
                            </thead class="border-b">
                            <tbody>
                              @foreach ($grades as $i)
                              <tr class="bg-white border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                  {{$i->Jegy}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                    {{$i->Idopont}}
                                </td>
                            </tr class="bg-white border-b">
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="p-6">
                            <p>Átlag: {{$avg}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
