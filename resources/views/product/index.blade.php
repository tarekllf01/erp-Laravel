<x-app-layout>
    <x-slot name="title">Toplam Günlük Giren Mallar</x-slot>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            <p align="right"><a href="{{ route('product.create') }}" class="btn btn-success btn btn-lg" role="button"
                    aria-pressed="true">Oluştur
                    &nbsp;
                    <i class="fas fa-plus"></i>
                </a></p>
            {{ __('Toplam Giren Mallar') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card">
                                <div class="form-row">
                                    <div class="">
                                        <p align="right"><a href="{{ route('product.index') }}"
                                                class="btn btn-success btn btn-lg" role="button"
                                                aria-pressed="true">Toplam Maliyet
                                                &nbsp;
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ürün İsmi</th>
                                            <th>Birim/Kilo</th>
                                            <th>Birim Fiyatı</th>
                                            @if (auth()->user()->type == 'admin')<th>Toplam Fiyat</th>@endif
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->unit }}</td>
                                                <td>{{ $product->unit_price }}</td>
                                                @if (auth()->user()->type == 'admin')<td>{{ $product->price }}  ₺</td>@endif
                                                <td>
                                                    <a href="{{ route('product.edit', $product) }}"
                                                        class="btn btn-sm btn-primary"><i
                                                            class="fas fa-edit"></i></a>
                                                    <form action="{{ route('product.destroy', $product) }}"
                                                        method="post" class="d-inline-block">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                            <span class="d-none d-md-inline"></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $products->withQueryString()->links() }}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
