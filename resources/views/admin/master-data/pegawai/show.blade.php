<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama</dt>
                <dd>{{ $pegawai->nama }}</dd>
                <dt>NIP</dt>
                <dd>{{ $pegawai->nip }}</dd>
                <dt>Email</dt>
                <dd>{{ $pegawai->email }}</dd>
                <dt>Username</dt>
                <dd>{{ $pegawai->username }}</dd>
            </dl>
        </div>
    </div>
    </x-module.adm>
