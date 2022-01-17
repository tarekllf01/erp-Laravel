<x-app-layout>
    <x-slot name="title">Düzenle</x-slot>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Ürün Düzenleme') }}
        </h2>
    </x-slot>
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Düzenle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('product.update', $product) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün İsmi:</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Ad ve Soyadı giriniz" value="{{ $product->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birimi:</label>
                                    <input name="unit" type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Geçerili email adresi giriniz" value="{{ $product->unit }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birim Fiyatı:</label>
                                    <input name="unit_price" type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Geçerili email adresi giriniz"
                                        value="{{ $product->unit_price }}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
