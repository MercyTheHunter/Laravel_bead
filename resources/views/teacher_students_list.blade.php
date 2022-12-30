<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Diáklista") }}
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden p-3">
                          <table class="min-w-full">
                            <thead class="bg-gray-200 border-b">
                              <tr>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                                  Név
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                                  Jegy beírása
                                </th>
                                <th scope="col" class="text-lg font-medium text-gray-900 px-6 py-4 text-left">
                                  Késés
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($students as $i)
                              <tr class="bg-white-100 border-b">
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$i->Vnev}} {{$i->Knev}}
                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <form action="/teacher_students/give_grade">
                                        
                                        <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">jegy beírása</button>
                                    </form>
                                </td>
                                <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <form action="/teacher_students/give_delay">
                                        <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">késés</button>
                                    </form>

                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
