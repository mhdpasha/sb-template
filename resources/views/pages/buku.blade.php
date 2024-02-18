@extends('layouts.main')

@section('content')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add">+ Tambah Buku</button>

                <!-- Modal -->
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col">
                                    <label>Judul</label>
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Judul buku" autocomplete="off" name="judul">
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Pengarang</label>
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Nama pengarang" autocomplete="off" name="pengarang">
                                    </div>
                                </div>
                              </div>  
                              <label>Penerbit</label>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nama penerbit" autocomplete="off" name="penerbit">
                              </div>
                              <label>Kategori Genre</label>
                                <select class="form-control" name="kategori_id">
                                    <option value="1">Kategori</option>
                                </select>
                              <label>Deskripsi</label>
                              <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" autocomplete="off" name="deskripsi"></textarea>
                              </div>
                              <label>Cover Buku (opsional)</label>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="CDN atau Link" autocomplete="off" name="image">
                              </div>
                              <label>Stok Tersedia (default 5)</label>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="5" autocomplete="off" name="stok">
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<style>
    .dt-button {
    border: none;
    margin-top: 20px;
    border-radius: 20px;
    padding: 10px 20px; 
}

.dt-button-collection button {
    transition: 0.3s ease;
    position: absolute;
    color: white;
    background: #adb5bd;
    top: 88px;
}

.dt-button-collection button:hover {
    background: #6c757d;
}

.dt-button-collection button:nth-child(1) {
    left: 400px
}
.dt-button-collection button:nth-child(2) {
    left: 505px
}
.dt-button-collection button:nth-child(3) {
    left: 610px
}
.dt-button-collection button:nth-child(4) {
    left: 715px
}
</style>

@endsection