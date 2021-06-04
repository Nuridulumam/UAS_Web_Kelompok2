@extends('Admin.layout.main')

@section('content')
    <div class="card shadow m-3 p-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="head">
                    <h2 class="h2 text-dark"><i class="fas fa-newspaper"></i> Konten Prestasi</h2>
                </div>
                <div class="table-responsive-md card p-2">
                    <div class="card-header">
                        <h6 class="h6 font-weight-bold text-dark"><i class="fa fa-list"></i> Daftar Konten Prestasi</h6>
                        <div class="card-tools">
                            <div class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Tambah Konten Prestasi</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul Prestasi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Upload By</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col" width="120px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Penerimaan Mahasiswa Baru Jalur Prestasi Jenjang Ahli Madya (D-III) Pendidikan Vokasi TA. 2021/2022</td>
                                <td>28 April 2021</td>
                                <td>Admin 1</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea adipisci incidunt libero, optio atque nihil enim sit molestiae aliquid nobis accusantium quia sequi, deleniti blanditiis quas odit quibusdam ratione voluptate aut voluptatum? Asperiores sunt magnam accusantium ut quod, unde odit placeat, minima veritatis, veniam provident perspiciatis beatae nobis quia facere neque vel quasi. Accusantium error, voluptas praesentium perspiciatis tenetur et mollitia aspernatur eius sint dignissimos nisi perferendis sequi asperiores assumenda soluta ex consequuntur nemo vitae libero voluptate porro quibusdam, pariatur cumque doloribus. Voluptatem doloribus ipsa iste debitis ipsam placeat, aliquid optio aliquam dignissimos a minus nesciunt, commodi veritatis cupiditate?</td>
                                <td>Nasional</td>
                                <td>
                                   <a href="#"><div class="badge badge-warning"><i class="fas fa-edit"></i> edit</div></a>
                                   <a href="#"><div class="badge badge-danger"><i class="fas fa-trash"></i> hapus</div></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jadwal Kuliah Daring Selama Bulan Ramadhan 1442 H</td>
                                <td>3 Mei 2021</td>
                                <td>Biro Vokasi</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea adipisci incidunt libero, optio atque nihil enim sit molestiae aliquid nobis accusantium quia sequi, deleniti blanditiis quas odit quibusdam ratione voluptate aut voluptatum? Asperiores sunt magnam accusantium ut quod, unde odit placeat, minima veritatis, veniam provident perspiciatis beatae nobis quia facere neque vel quasi. Accusantium error, voluptas praesentium perspiciatis tenetur et mollitia aspernatur eius sint dignissimos nisi perferendis sequi asperiores assumenda soluta ex consequuntur nemo vitae libero voluptate porro quibusdam, pariatur cumque doloribus. Voluptatem doloribus ipsa iste debitis ipsam placeat, aliquid optio aliquam dignissimos a minus nesciunt, commodi veritatis cupiditate?</td>
                                <td>Pengumuman</td>
                                <td>
                                   <a href="#"><div class="badge badge-warning"><i class="fas fa-edit"></i> edit</div></a>
                                   <a href="#"><div class="badge badge-danger"><i class="fas fa-trash"></i> hapus</div></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
