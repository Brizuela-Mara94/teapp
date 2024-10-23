<x-crud-layout>
    <x-slot name="title">
        {{ __('Nuevo Paciente') }}
    </x-slot>
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Registrar Nuevo Paciente</h2>
    <x-validation-errors class="mb-4"/>
    <form action="{{ route('patients.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="codigo" class="block text-sm font-medium text-gray-700">Código</label>
                <x-input id="codigo" class="block mt-1 w-full bg-white" type="text" name="codigo" :value="old('codigo')" required autofocus autocomplete="codigo" />
                <x-input-error for="codigo" class="mt-2"/>
            </div>

            <div>
                <label for="dni" class="block text-sm font-medium text-gray-700">DNI</label>
                <input type="text" name="dni" id="dni" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error for="dni" class="mt-2"/>
            </div>

            <div>
                <label for="apellidos" class="block text-sm font-medium text-gray-700">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error for="apellidos" class="mt-2"/>
            </div>

            <div>
                <label for="nombres" class="block text-sm font-medium text-gray-700">Nombres</label>
                <input type="text" name="nombres" id="nombres" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error for="nombres" class="mt-2"/>
            </div>

            <div>
                <label for="nacimiento" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                <input type="date" name="nacimiento" id="nacimiento" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error for="nacimiento" class="mt-2"/>
            </div>

            <div>
                <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>
                <select name="sexo" id="sexo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>

            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" name="telefono" id="telefono" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error for="telefono" class="mt-2"/>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <x-input-error for="email" class="mt-2"/>
            </div>
        </div>

        <div>
            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
            <input type="text" name="direccion" id="direccion" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <x-input-error for="direccion" class="mt-2"/>
        </div>

        <div>
            <label for="observaciones" class="block text-sm font-medium text-gray-700">Observaciones</label>
            <textarea name="observaciones" id="observaciones" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-celeste border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-azul active:bg-azul focus:outline-none focus:border-azul focus:ring ring-celeste disabled:opacity-25 transition ease-in-out duration-150">
                Guardar Paciente
            </button>
        </div>
    </form>
</x-crud-layout>
