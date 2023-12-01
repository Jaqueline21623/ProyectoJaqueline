<x-app-layout>
    <div class="Egresados w-[127px] h-6 text-black text-xl font-normal font-['Inter'] border-b-2 border-blue-500 mb-5 mt-5 ml-10">PRACTICANTES</div>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre y Apellidos
                </th>
                <th scope="col" class="px-6 py-3">
                    Empresa
                </th>
                <th scope="col" class="px-6 py-3">
                    Maps
                </th>
                <th scope="col" class="px-6 py-3">
                    Calendario
                </th>
                <th scope="col" class="px-6 py-3">
                    Evaluacion
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($practicantes as $practicante)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <td class="px-6 py-4">
                        {{$practicante->id}}
                    </td>
                    <td class="px-6 py-4">
                        {{$practicante->nombre}}
                    </td>
                    <td class="px-6 py-4">
                        {{$practicante->empresa}}
                    </td>
                    <td class="px-6 py-4">

                        <a href="{{$practicante->maps}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-map-location-dot"></i></a>

                    </td>



                    <td class="px-6 py-4 w-40">
                        <div class="flex items-center">
                            @if ($practicante->agenda === 'agendado')
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                {{ $practicante->agenda }}
                            @else
                                <a href="{{route('fullcalender')}}" class="text-red-500 hover:underline flex">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                                    {{ $practicante->agenda }}
                                </a>
                            @endif
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <a href="{{route('evaluar')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Evaluar</a>
                    </td>
                </tr>
            @endforeach


            </tr>
        </tbody>
    </table>
</div>

</x-app-layout>
