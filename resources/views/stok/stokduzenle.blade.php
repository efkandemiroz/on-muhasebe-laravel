@extends('layouts.app')
@section('title','Stok Kartı Düzenle')
@section('sayfa_baslik','Stok Düzenle')




@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-5">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Stok Kartı Düzenle - ID {{$stokid}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">

                            <div class="row">

                                <form action="" method="post">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="txtStokAdi">Stok Adı</label>
                                            <input class="form-control" type="text" name="txtStokAdi" id="txtStokAdi"
                                                   placeholder="Stok Adı" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="txtBarkodNo">Barkod No</label>
                                        <div class="input-group ">
                                            <!-- /btn-group -->
                                            <input type="text" class="form-control" id="txtBarkodNo" name="txtBarkodNo"
                                                   placeholder="Barkod Numarası">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-success"><i
                                                        class="fas fa-barcode"></i> Rastgele Barkod
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="txtStokGrubu">Stok Grubu</label>
                                            <input class="form-control" type="text" name="txtStokGrubu"
                                                   id="txtStokGrubu" placeholder="Stok Grubu">
                                            *Autocomplate olarak ajax ile dbden veri gelecek. Geri dönen veri Yoksa
                                            girilen veri kaydedilecek
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="txtKDVOrani">KDV Oranı</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="number" name="txtKDVOrani"
                                                       id="txtKDVOrani" placeholder="KDV Oranı">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cbbKDVDurumu">KDV Durumu</label>
                                            <select class="form-control" name="cbbKDVDurumu" id="cbbKDVDurumu">
                                                <option value="KDV Dahil">KDV Dahil</option>
                                                <option value="KDV Hariç">KDV Hariç</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="fileStokGorseli">Stok Görseli</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="fileStokGorseli"
                                                           id="fileStokGorseli">
                                                    <label class="custom-file-label" for="fileStokGorseli">Dosya
                                                        Seçiniz</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=Oksijen" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/150/001230?text=Oksijen" class="img-fluid mb-2" alt="black sample">
                                        </a>
                                    </div>

                                </form>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-block btn-primary">Stok Kartı Kaydet</button>
                        </div>

                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-7">


                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Stok Kartları Listesi</h3>

                        </div>
                        <div class="card-body">
                            <table id="stokTablo" class="table table-striped projects table-sm">
                                <thead>
                                <tr>

                                    <th>
                                        Stok Adı
                                    </th>
                                    <th>
                                        Stok Grubu
                                    </th>
                                    <th>
                                        Barkod
                                    </th>
                                    <th>
                                        KDV
                                    </th>
                                    <th>
                                        Görsel
                                    </th>
                                    <th>
                                        Miktar
                                    </th>
                                    <th>
                                        İşlem
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>
                                        <a>
                                            Deneme Stok
                                        </a>
                                    </td>

                                    <td>
                                        <a>
                                            Deneme Stok Grubu
                                        </a>
                                    </td>
                                    <td>
                                        8695485652152
                                    </td>
                                    <td>
                                        %18 (Dahil)
                                    </td>

                                    <td class="">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=Oksijen" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/50/001230?text=Oksijen" class="img-fluid mb-2" alt="black sample">
                                        </a>
                                    </td>
                                    <td>
                                        16
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            İşlem
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/stok/duzenle/5">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Düzenle
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-danger"  onclick="silIdAl(<?=5?>)">
                                            <i class="fas fa-trash">
                                            </i>
                                            Sil
                                        </button>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="modal fade" id="modal-danger" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <form>
                    <input type="hidden" id="silmeId" name="silmeId">
                    <div class="modal-header">
                        <h4 class="modal-title">Stok Silme Uyarısı</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h1 class="info-box-icon bg-danger"><i class="fas fa-trash-alt"></i></h1>
                        <h3>Stok Kartı Silinecektir. Onaylıyormusunuz</h3>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-outline-light">Stok Kartını Sil</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection


@section('jsscript')
    <script>
        $(function () {
            $('#stokTablo').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#stokTablo_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
