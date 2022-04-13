<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url('admin/master-data/module/create') }}" class="float-right btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Tag</th>
                    <th>Jumlah Pegawai</th>
                </thead>
                <tbody>
                    @foreach ($list_module as $module)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/master-data/module"
                                                                   id="{{ $module->id }}" />
                                    <x-template.button.edit-button url="admin/master-data/module"
                                                                   id="{{ $module->id }}" />
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td>{{ $module->name }}</td>
                            <td>{{ $module->tag }}</td>
                            <td>{{ 0 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
