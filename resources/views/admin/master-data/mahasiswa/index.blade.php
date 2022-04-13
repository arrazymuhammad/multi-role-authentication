<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title"> Data Mahasiswa</div>
            <a href="{{ url('admin/master-data/mahasiswa/create') }}" class="btn btn-primary float-right"><i
                   class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>NIM</th>
                    <th>Nama</th>
                </thead>
                <tbody>
                    @foreach ($list_mahasiswa as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <x-template.button.info-button url="admin/master-data/mahasiswa"
                                                               id="{{ $mahasiswa->id }}" />
                                <x-template.button.edit-button url="admin/master-data/mahasiswa"
                                                               id="{{ $mahasiswa->id }}" />
                            </td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
