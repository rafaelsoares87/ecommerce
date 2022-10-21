<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Dashboard</h2>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-body mb-3">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('create-product') }}" class="btn btn-success"
                                            type="button">CADASTRAR PRODUTOS</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body mb-3">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('category_create') }}" class="btn btn-success"
                                            type="button">CADASTRAR CATEGORIAS</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body mb-3">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true">PRODUTOS CADASTRADOS
                                        </li>
                                        @foreach ($products as $product)
                                            <li class="list-group-item">
                                                <div class="row">

                                                    <div class="col-lg-8" style="font-weight: bold">
                                                        <h4>{{ $product->title_product }}</h4>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <a href="{{ route('product_edit', [$product->id]) }}"
                                                            class="btn  ">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-2">

                                                        <form
                                                            action="{{ route('product_show', ['id' => $product->id]) }}"
                                                            class="btn  " method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit"><i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body mb-3">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true">CATEGORIAS CADASTRADAS
                                        </li>

                                        @foreach ($categories as $category)
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-lg-8" style="font-weight: bold">
                                                        <h4>{{ $category->category_name }}</h4>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <a href="{{ route('category-edit', [$category->id]) }}"
                                                            class="btn  ">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-2">

                                                        <form
                                                            action="{{ route('dashboard-show', ['id' => $category->id]) }}"
                                                            class="btn  " method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit"><i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
