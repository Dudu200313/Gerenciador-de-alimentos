<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <h1>Gerencaidor de alimentodos<h1></h1>
                   @foreach (Auth::user()->myAlimento as $alimento)
                   <div class="flex justify-between flex-grow">
                        <div>{{$alimento->nome da refeicao}}</div>
                        <div>{{$alimento->descricao}}</div>
                        <div>{{$alimento->horario}}</div>
                        <div>{{$alimento->caloria}}</div>
                   </div>
                   <div class="flex gap-2">
                    <div>
                        <span class="cursor-pointer px-2 bg-red-500 texte-white" @click="showDelete = true">Delete</span>
                    </div>
                   <div>
                       <span class="cursor-pointer px-2 bg-red-500 texte-white" @click="showEdit = true">Edit</span>
                   </div>
                   </div>
                   <template x-if="showDelete">
                 
                   <div class="absolute top-0 bottom-0 left-0 right-0 bg-gray-800 bg-opacity-20 z-0">
                    <div clas="w-96 bg-white p-4 absolute left-1/4 right-1/4 top-1/4 z-10">
                        <h2 class="text-xl font-bold text-center">Are you sure?</h2>
                        <div class="flex justify-between mt-4">
                            <form action="">
                                
                            </form>
                        </div>
                    </div>
                   </div>
                   </template>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
