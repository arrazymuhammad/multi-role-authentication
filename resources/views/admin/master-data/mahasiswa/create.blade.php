<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title"> Data Mahasiswa</div>
        </div>
        <div class="card-body">

            <form action="{{ url('admin/master-data/mahasiswa') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIM</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>
