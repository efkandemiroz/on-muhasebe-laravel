@extends('layouts.app')
@section('title','Cari Listesi')
@section('sayfa_baslik','Cari Listesi')




@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cari Listesi</h3>

                        </div>
                        <div class="card-body ">
                            <input class="form-control" id="cariFiltreleme" type="text" placeholder="Cari Liste Filtreleme ..">
                            <hr>
                            <ul class="list-group wm-liste" id="cariListesi" name="cariListesi">

                                <li class="list-group-item" value="1">Deneme Stok</li>


                                <li class="list-group-item" value="2">Test Stok</li>


                                <li class="list-group-item" value="3">Örnek Stok</li>


                                <li class="list-group-item" value="4">Stok</li>



                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>


            </div>
            <div class="col-md-9">


                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cari Bilgileri</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Cari Ünvan</label>
                                        <input type="text" readonly class="form-control" id="txtCariUnvan"
                                               value="Test Ünvan">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Cari Yetkili</label>
                                        <input type="text" readonly class="form-control"  id="txtCariYetkili"
                                               value="Test Yetkili">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Cari Telefon</label>
                                        <input type="text" readonly class="form-control" id="cariTelefon"
                                               value="0552 552 52 52">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Cari E-Posta</label>
                                        <input type="text" readonly class="form-control" id="cariEposta"
                                               value="info@testmail.com">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Cari Açıklama</label>
                                        <textarea rows="3" readonly class="form-control" id="txtCariAciklama">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
                                        </textarea>

                                </div>


                            </div>
                            <hr/>
                            <table id="cariTablo" class="table table-striped projects table-sm">
                                <thead>
                                <tr>

                                    <th>
                                        Tarih - Saat
                                    </th>

                                    <th>
                                        Açıklama
                                    </th>

                                    <th>
                                        KDV Oranı
                                    </th>

                                    <th>
                                        Ara Toplam
                                    </th>

                                    <th>
                                        KDV'li Tutar
                                    </th>

                                    <th>
                                        Borç
                                    </th>

                                    <th>
                                        Alacak
                                    </th>

                                    <th>
                                        Adet
                                    </th>

                                    <th>
                                        İşlem
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>

                                    <td>
                                        18.06.2021
                                    </td>

                                    <td>
                                        Buraya açıklama gelecek
                                    </td>

                                    <td>
                                        18%
                                    </td>

                                    <td>
                                        1000 TL
                                    </td>

                                    <td>
                                        1180 TL
                                    </td>

                                    <td class="bg-danger">
                                        118.000 TL
                                    </td>

                                    <td>

                                    </td>

                                    <td>
                                        100
                                    </td>


                                    <td class="project-actions">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#cariHareketModal" data-cariHareketId="2"
                                                data-cariAdi="Deneme Cari">
                                            <i class="fas fa-folder">
                                            </i>
                                            Detay
                                        </button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#modal-danger" onclick="silIdAl(<?=5?>)">
                                            <i class="fas fa-trash">
                                            </i>
                                            Sil
                                        </button>
                                    </td>


                                </tr>


                                <tr>

                                    <td>
                                        18.06.2021
                                    </td>

                                    <td>
                                        Buraya açıklama gelecek
                                    </td>

                                    <td>
                                        18%
                                    </td>

                                    <td>
                                        1000 TL
                                    </td>

                                    <td>
                                        1180 TL
                                    </td>

                                    <td>

                                    </td>

                                    <td class="bg-info">
                                        118.000 TL
                                    </td>

                                    <td>
                                        100
                                    </td>


                                    <td class="project-actions">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#cariHareketModal" data-cariHareketId="2"
                                                data-cariAdi="Deneme Cari">
                                            <i class="fas fa-folder">
                                            </i>
                                            Detay
                                        </button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#modal-danger" onclick="silIdAl(<?=5?>)">
                                            <i class="fas fa-trash">
                                            </i>
                                            Sil
                                        </button>
                                    </td>


                                </tr>


                                <tr>

                                    <td>
                                        18.06.2021
                                    </td>

                                    <td>
                                        Buraya açıklama gelecek
                                    </td>

                                    <td>
                                        18%
                                    </td>

                                    <td>
                                        1000 TL
                                    </td>

                                    <td>
                                        1180 TL
                                    </td>

                                    <td>

                                    </td>

                                    <td class="bg-info">
                                        118.000 TL
                                    </td>

                                    <td>
                                        100
                                    </td>


                                    <td class="project-actions">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#cariHareketModal" data-cariHareketId="2"
                                                data-cariAdi="Deneme Cari">
                                            <i class="fas fa-folder">
                                            </i>
                                            Detay
                                        </button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#modal-danger" onclick="silIdAl(<?=5?>)">
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





    <!-- HAREKET DETAY MODAL -->
        <div class="modal fade" id="cariHareketModal" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Large Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <section class="content">

                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Cari Hareket Detayları</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="txtCariHareketTarih">Tarih:</label>
                                                <input class="form-control" type="date" name="txtCariHareketTarih" id="txtCariHareketTarih">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="txtCariHareketTur">İşlem Türü</label>
                                                <select class="custom-select" name="cbbCariHareketTur" id="cbbCariHareketTur">
                                                    <option value="Borçlandırma">Borçlandırma</option>
                                                    <option value="Alacaklandırma">Alacaklandırma</option>
                                                    <option value="Tahsilat">Tahsilat</option>
                                                    <option value="Ödeme">Ödeme</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtCariHareketBirimAdet">Adet</label>
                                                <input type="text"  class="form-control" name="txtCariHareketBirimAdet"  id="txtCariHareketBirimAdet"
                                                       value="100">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtCariHareketBirimTutar">Tutar</label>
                                                <input type="text"  class="form-control" name="txtCariHareketBirimTutar" id="txtCariHareketBirimTutar"
                                                       value="1000TL">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtCariHareketToplam">Toplam</label>
                                                <input type="text"  class="form-control" name="txtCariHareketToplam" id="txtCariHareketToplam"
                                                       value="10.000TL">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtCariHareketKdvHaric">KDV Hariç</label>
                                                <input type="text"  class="form-control is-warning" name="txtCariHareketKdvHaric" id="txtCariHareketKdvHaric"
                                                       value="10.000 TL">
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtCariHareketKdvOran">KDV Oran (%)</label>
                                                <select class="custom-select" name="cbbCariHareketKdvOran" id="cbbCariHareketKdvOran">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="8">8</option>
                                                    <option value="18">18</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="txtCariHareketKdvTutar">KDV Tutar</label>
                                                <input type="text"  class="form-control is-warning" name="txtCariHareketKdvTutar" id="txtCariHareketKdvTutar"
                                                       value="118.000 TL">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="txtCariHareketAciklama">Cari Hareket Açıklama</label>
                                                <textarea rows="3"  class="form-control" name="txtCariHareketAciklama" id="txtCariHareketAciklama">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
                                            </textarea>

                                            </div>


                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                        </section>



                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>
        <!-- /.modal-dialog -->
    <!-- HAREKET DETAY MODAL BİTİŞ-->


        <!-- CARİ HAREKET SİLME MODAL BİTİŞ-->
        <div class="modal fade" id="modal-danger" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <form>
                        <input type="hidden" id="silmeId" name="silmeId">
                        <div class="modal-header">
                            <h4 class="modal-title">Cari Hareket Silme Uyarısı</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <h1 class="info-box-icon bg-danger"><i class="fas fa-trash-alt"></i></h1>
                            <h3>Cari Hareketi Silinecektir. Onaylıyor Musunuz?</h3>
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
        <!-- CARİ HAREKET SİLME MODAL BİTİŞ-->

@endsection

@section('jsscript')
    <script>

        $(function () {
            $('#cariTablo').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": true
            }).buttons().container().appendTo('#cariTablo_wrapper .col-md-6:eq(0)');
        });


        // CARİ HAREKET LİSTESİ DETAYI MODAL DATA
        $('#cariHareketModal').on('show.bs.modal', function (event) {
            var cariHareketData = $(event.relatedTarget); //
            var cariAdiGelenData = cariHareketData.data('cariadi'); //
            var cariIdGelenData = cariHareketData.data('carihareketid'); //

            var modal = $(this);
            modal.find('.modal-title').text('Cari: ' + cariAdiGelenData + ' - Cari Id: ' + cariIdGelenData);
        });


        // CARİ HAREKET LİSTESİ DETAYI MODAL DATA
        $('#cariHareketDuzenleModal').on('show.bs.modal', function (event) {
            var cariHareketData = $(event.relatedTarget); //
            var cariAdiGelenData = cariHareketData.data('cariadi'); //
            var cariIdGelenData = cariHareketData.data('carihareketid'); //

            var modal = $(this);
            modal.find('.modal-title').text('Cari: ' + cariAdiGelenData + ' - Cari Id: ' + cariIdGelenData);
        });

    </script>




    <script>
        $(document).ready(function () {
            $("#cariFiltreleme").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#cariListesi li").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $("#cariListesi li").on("click", function () {
                var value = $(this).val();
                alert('Cari Listesi Id : '+value);
            });


        });
    </script>
@endsection
