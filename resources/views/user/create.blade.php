<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
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
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ad ve Soyad:</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Ad ve Soyadı giriniz" {{ old('name') }}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email addresi</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Geçerili email adresi giriniz" {{ old('email') }}>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Şifre</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current_password" {{ old('password') }}>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Şifre Tekrarı</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                                        required autocomplete="current_password">

                                </div>
                                <div class="form-group">
                                    <label>{{ __('Rolü') }}</label>
                                    <select name="type"class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="employee">İşçi</option>
                                    </select>
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
