<div>
    <form class="p-4" wire:submit.prevent="save">
        <div class="mb-4">
            <input class="p-2 bg-gray-200 w-full" type="text" placeholder="Tarea..." wire:model='title'>
            @error('title')
                <div class="mt-1 text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-indigo-700 text-white font-bold w-full rounded shadow p-2">Guardar</button>
    </form>
    @if (session()->has('message'))
        <h3 class="bg-blue-400 font-bold mb-4 p-2 rounded text-center text-sm text-white">{{ session('message') }}</h3>
    @endif
    <table class="shadow-md ">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                <th class="py-3 px-6 text-left">Estado</th>
                <th class="py-3 px-6 text-left">Tarea</th>
                <th class="py-3 px-6 text-left">&nbsp;</th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
            @forelse ($tasks as $task)
                <tr class="border-b {{ $task->done ? 'bg-green-200' : '' }} border-gray-200">
                    <td class="px-4 py-2 w-24 flex justify-center"><input wire:click="done({{ $task->id }})"
                            {{ $task->done ? 'checked' : '' }} type="checkbox"></td>
                    <td class="px-4 py-2 {{ $task->done ? 'line-through' : '' }}">{{ $task->title }}</td>
                    <td class="px-4 py-2 flex flex-col sm:flex-row">
                        <button type="button" wire:click="edit({{ $task->id }})"
                            class="bg-indigo-400 mb-3 sm:mb-0 mx-auto sm:mr-3 px-2 py-1 text-white text-xs rounded">Editar</button>
                        <button type="button" wire:click="delete({{ $task->id }})"
                            class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                    </td>
                </tr>
            @empty
                <h3>No existen tareas para mostrar</h3>
            @endforelse
        </tbody>
    </table>
</div>
