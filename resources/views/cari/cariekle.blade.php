@extends('layouts.app')

@section('sayfa_baslik','Cari Ekle')

@section('title','Cari Ekle')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-5">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cari Ekle</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('cariEkle')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">

                            <div class="row">



                                    <input type="hidden" name="firma_kodu" value="123">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="txtUnvan">Ünvan</label>
                                            <input class="form-control" type="text" name="txtUnvan" id="txtUnvan"
                                                   placeholder="Ünvan" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="txtYetkili">Yetkili</label>
                                        <div class="input-group ">
                                            <!-- /btn-group -->
                                            <input type="text" class="form-control" id="txtYetkili" name="txtYetkili"
                                                   placeholder="Yetkili" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="txtTelefon">Telefon</label>
                                            <input class="form-control" type="tel" name="txtTelefon"
                                                   id="txtTelefon" placeholder="Telefon" maxlength="11" minlength="10" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="txtEposta">E-Posta</label>
                                            <input class="form-control" type="email" name="txtEposta"
                                                   id="txtEposta" placeholder="E-Posta" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtIl">İl</label>
                                            <select name="il" id="il" class="form-control select2">
                                                <option value="">Seçin...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtIlce">İlçe</label>
                                            <select name="ilce" id="ilce" class="form-control select2" disabled="disabled">
                                                <option value="">Seçin...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtAdres">Adres</label>
                                            <textarea name="adres" class="form-control" rows="5" placeholder="Adres."></textarea>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="txtVergiDairesi">Vergi Dairesi</label>
                                            <input class="form-control" type="text" name="txtVergiDairesi" id="txtVergiDairesi"
                                                   placeholder="Vergi Dairesi" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="txtVergiNo">Vergi No</label>
                                        <div class="input-group ">
                                            <!-- /btn-group -->
                                            <input type="text" class="form-control" id="txtVergiNo" name="txtVergiNo"
                                                   placeholder="Vergi No" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtAciklama">Açıklama</label>
                                            <textarea name="aciklama" class="form-control" rows="5" placeholder="Açıklama"></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-block btn-primary">Cari Kaydet</button>


                            </div>

                        </div>
                        <!-- /.card-body -->


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
                            <h3 class="card-title">Cari Listesi</h3>

                        </div>
                        <div class="card-body">
                            <table id="cariTablo" class="table table-striped projects">
                                <thead>
                                <tr>

                                    <th>
                                        Ünvan
                                    </th>
                                    <th>
                                        Yetkili
                                    </th>
                                    <th>
                                        Telefon
                                    </th>
                                    <th>
                                       Borç
                                    </th>
                                    <th>
                                        Alacak
                                    </th>
                                    <th>
                                        Bakiye
                                    </th>
                                    <th>
                                        İşlemler
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <td>
                                        <a>
                                            Test Ünvan
                                        </a>
                                    </td>

                                    <td>
                                        <a>
                                            Anıl Akyol
                                        </a>
                                    </td>
                                    <td>
                                        0552 239 66 85
                                    </td>

                                    <td>
                                        30.000 TL
                                    </td>

                                    <td>
                                        46.705 TL
                                    </td>

                                    <td>
                                        10.000 TL
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm toastrDefaultSuccess" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            İşlem
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/cari/duzenle/1">
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

                                <tr>

                                    <td>
                                        <a>
                                            Test Ünvan
                                        </a>
                                    </td>

                                    <td>
                                        <a>
                                            Anıl Akyol
                                        </a>
                                    </td>
                                    <td>
                                        0552 239 66 85
                                    </td>

                                    <td>
                                        30.000 TL
                                    </td>

                                    <td>
                                        46.705 TL
                                    </td>

                                    <td>
                                        10.000 TL
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            İşlem
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/cari/duzenle/2">
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


                                <tr>

                                    <td>
                                        <a>
                                            Test Ünvan
                                        </a>
                                    </td>

                                    <td>
                                        <a>
                                            Anıl Akyol
                                        </a>
                                    </td>
                                    <td>
                                        0552 239 66 85
                                    </td>

                                    <td>
                                        30.000 TL
                                    </td>

                                    <td>
                                        46.705 TL
                                    </td>

                                    <td>
                                        10.000 TL
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            İşlem
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/cari/duzenle/3">
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
                        <h4 class="modal-title">Cari Silme Uyarısı</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h1 class="info-box-icon bg-danger"><i class="fas fa-trash-alt"></i></h1>
                        <h3>Cari Silinecektir. Onaylıyormusunuz</h3>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-outline-light">Cari Sil</button>
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



        $.getJSON("{{URL::to('/js/plugins/provinceSelect/il-bolge.json')}}", function(sonuc){
            $.each(sonuc, function(index, value){
                var row="";
                row +='<option value="'+value.il+'">'+value.il+'</option>';
                $("#il").append(row);
            })
        });
        $("#il").on("change", function(){
            var il=$(this).val();
            $("#ilce").attr("disabled", false).html("<option value=''>Seçin..</option>");
            $.getJSON("{{URL::to('/js/plugins/provinceSelect/il-ilce.json')}}", function(sonuc){
                $.each(sonuc, function(index, value){
                    var row="";
                    if(value.il==il)
                    {
                        row +='<option value="'+value.ilce+'">'+value.ilce+'</option>';
                        $("#ilce").append(row);
                    }
                });
            });
        });

        $('.select2').select2()

    </script>

    <script>
        $(function () {
            $('#cariTablo').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                language: {
                    buttons: {
                        print: "Yazdır",
                        copy: "Kopyala",
                        colvis: "Göster / Gizle",
                        copyTitle: 'Başarıyla Kopyalandı',
                        copyKeys: 'Başarılı.',
                        copySuccess: {
                            _: '%d veri kopyalandı',
                            1: '1 ver kopyalandı'
                        }
                    }
                },
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#cariTablo_wrapper .col-md-6:eq(0)');

        });


        @if(session()->has('status'))
            toastr.success('Cari Kayıt Başarılı');
        @endif

    </script>



@endsection
