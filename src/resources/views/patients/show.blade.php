<x-event-layout>
    <x-slot name="title">
        {{ __('Detalle del Paciente') }}
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Detalle del Paciente</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Código</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->codigo }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">DNI</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->dni }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Apellidos</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->apellidos }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Nombres</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->nombres }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Fecha de nacimiento</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->nacimiento }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Sexo</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->sexo == 'M' ? 'Masculino' : 'Femenino' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Teléfono</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->telefono }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Email</p>
                            <p class="mt-1 text-sm text-gray-900">{{ $patient->email }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="text-sm font-medium text-gray-700">Dirección</p>
                        <p class="mt-1 text-sm text-gray-900">{{ $patient->direccion }}</p>
                    </div>

                    <div class="mt-6">
                        <p class="text-sm font-medium text-gray-700">Observaciones</p>
                        <p class="mt-1 text-sm text-gray-900">{{ $patient->observaciones }}</p>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('patients.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-500 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-event-layout>