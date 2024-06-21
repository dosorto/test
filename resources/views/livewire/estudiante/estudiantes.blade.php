<!-- resources/views/livewire/estudiante/estudiantes.blade.php -->

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Administración Estudiantes
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            
            <!-- Mensaje de éxito -->
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Botón para abrir el modal de creación -->
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">
                Nuevo Estudiante
            </button>

            <!-- Campo de búsqueda -->
            <div class="relative overflow-x-auto sm:rounded-lg">
                <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <label for="table-search" class="sr-only">Buscar</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input wire:model="search" type="text" id="table-search-users" class="block pl-10 pt-2 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar estudiantes...">
                    </div>
                </div>

                <!-- Tabla de Estudiantes -->
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cuenta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellido
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sexo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Carrera
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estudiantes as $estudiante)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $estudiante->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $estudiante->cuenta }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $estudiante->nombre }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $estudiante->apellido }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $estudiante->sexo }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $estudiante->carrera }}
                                </td>
                                <td class="px-6 py-4">
                                    <button wire:click="edit({{ $estudiante->id }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</button>
                                    <button wire:click="delete({{ $estudiante->id }})" class="font-medium text-red-600 dark:text-red-500 hover:underline">Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Paginación -->
                <br>
                {{ $estudiantes->links() }}
                <br>
            </div>

            <!-- Modal -->
            @if($isOpen)
                @include('livewire.estudiante.create')
            @endif
        </div>
    </div>
</div>








