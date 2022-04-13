<x-module.admin>
    <x-template.button.back-button url="admin/master-data/module" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>App</dt>
                        <dd>{{ $module->app }}</dd>
                        <dt>Nama</dt>
                        <dd>{{ $module->name }}</dd>
                        <dt>Tag</dt>
                        <dd>{{ $module->tag }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <x-template.module-box
                                           url="{{ $module->url }}"
                                           color="{{ $module->color }}"
                                           title="{{ $module->title }}"
                                           subtitle="{{ $module->subtitle }}" />

                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pegawai</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if (isset($message))
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endif
                    <form action="{{ url('admin/master-data/module/add-role') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_module" value="{{ $module->id }}">
                        <div class="form-group">
                            <label for="" class="control-label">
                                Pegawai
                            </label>
                            <select name="id_pegawai" class="form-control">
                                @foreach ($list_pegawai as $pegawai)
                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn float-right btn-info"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th width="100px">Aksi</th>
                            <th>NIP</th>
                            <th>Nama</th>
                        </thead>
                        <tbody>
                            @foreach ($module->role as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ url('admin/master-data/module/delete-role', $role->id) }}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                    <td>{{ $role->pegawai->nip }}</td>
                                    <td>{{ $role->pegawai->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
