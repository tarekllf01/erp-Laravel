<x-app-layout>
    <x-slot name="title">Kullanıcı Bilgileri</x-slot>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            <p align="right"><a href="{{ route('user.create') }}" class="btn btn-success btn btn-lg" role="button"
                    aria-pressed="true">Oluştur
                    &nbsp;
                    <i class="fas fa-plus"></i>
                </a></p>
            {{ __('Kullanıcı Bilgileri') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kullanıcı Listeleri</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>İsim</th>
                                        <th>Email</th>
                                        <th>Yetki</th>
                                        <th>Eylem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @switch($user->type)
                                                    @case('admin')
                                                        <span class="badge badge-success">Admin</span>
                                                    @break
                                                    @case('employee')
                                                        <span class="badge badge-warning">İşçi</span>
                                                    @break
                                                @endswitch
                                            </td>
                                            <td>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                </li>
                                                <form>
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->withQueryString()->links() }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
