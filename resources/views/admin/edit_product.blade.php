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
                    <div class="container">

                        <form action="{{ route('product_update', $products->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <label for="" class="form-label">Produto</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control"
                                                 name="title_product" value="{{ $products->title_product }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <div class="">
                                        <label for="" class="form-label">Adicionar imagem do produto</label>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" 
                                                name="image_product" value="{{ $products->image_product }}">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-3">
                                    <div class="">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Preço do produto</label>
                                            <input type="text" class="form-control"
                                                 name="price_production" value="{{ $products->price_production }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-3">
                                    <div class="">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Categoria do produto</label>
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example" name="category_product">
                                                 <option selected>Selecionar categoria</option>
                                                @foreach ($categories as $category)
                                                    <option value="1">{{ $category->category_name }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Adicionar
                                                descrição</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_product"
                                            value="" placeholder="{{$products->description_product }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8"></div>
                                <div class="col-lg-4">
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
                            </div>
                            <div class="">




                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>