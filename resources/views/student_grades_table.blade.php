<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Delays') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Jegyek") }}
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full text-center">
                            <thead class="border-b bg-white">
                              <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                  Értékelés
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                                  Dátum
                                </th>
                              </tr>
                            </thead class="border-b">
                            <tbody>
                              <tr class="bg-white border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                  asd
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                  das
                                </td>
                              </tr class="bg-white border-b">
                              <tr class="bg-white border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                  Jacob
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                  Thornton
                                </td>
                              </tr>
                              <tr class="bg-white border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                    Jacob
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                  @twitter
                                </td>
                              </tr>
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
