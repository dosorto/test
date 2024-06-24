<!-- resources/views/livewire/estudiante/create.blade.php -->

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal Panel -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">

                        <!-- Cuenta -->
                        <div class="mb-4">
                            <label for="cuenta" class="block text-gray-700 text-sm font-bold mb-2">Número de Cuenta:</label>
                            <input type="text" id="cuenta" wire:model="cuenta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ingresa el número de cuenta">
                            @error('cuenta') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" id="nombre" wire:model="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ingresa el nombre">
                            @error('nombre') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <!-- Apellido -->
                        <div class="mb-4">
                            <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                            <input type="text" id="apellido" wire:model="apellido" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ingresa el apellido">
                            @error('apellido') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <!-- Sexo -->
                        <div class="mb-4">
                            <label for="sexo" class="block text-gray-700 text-sm font-bold mb-2">Sexo:</label>
                            <select id="sexo" wire:model="sexo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Seleccione el sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                            @error('sexo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <!-- Carrera -->
                        <div class="mb-4">
                            <label for="carrera" class="block text-gray-700 text-sm font-bold mb-2">Carrera:</label>
                            <input type="text" id="carrera" wire:model="carrera" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Ingresa la carrera">
                            @error('carrera') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Guardar
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancelar
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>