<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container" style=" display: flex; justify-content: center; align-items: center;">
                        <form action="{{ route('category-store') }}" method="post">
                            @csrf
                            <div class="">
                                <div class="">
                                    <label for="" class="form-label">Adicionar Categoria</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="adicionar categoria" name="category_name">
                                    </div>
                                </div>
                               
                                <div class=" text-right">
                                    <div class="">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-dark btn-lg" type="button">
                                                Adicionar
                                            </button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
