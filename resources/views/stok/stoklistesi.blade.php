@extends('layouts.app')
@section('title','Stok Listesi')
@section('sayfa_baslik','Stok Listesi')




@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <section class="content">

                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Stok Kartları Listesi</h3>

                        </div>
                        <div class="card-body ">
                            <input class="form-control" id="stokFiltreleme" type="text"
                                   placeholder="Stok Kartı Filtreleme ..">
                            <hr>
                            <ul class="list-group wm-liste" id="stokListesi" name="stokListesi">

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
                            <h3 class="card-title">Stok Hareketleri</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Stok Adı</label>
                                        <input type="text" class="form-control form-control-sm " readonly
                                               id="txtStokAdi"
                                               value="Örnek Stok Adı">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Stok Grubu</label>
                                        <input type="text" class="form-control form-control-sm" readonly
                                               id="txtStokGrubu"
                                               value="Stok Grubu">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Barkod</label>
                                        <input type="text" class="form-control form-control-sm" readonly id="txtBarkod"
                                               value="9586586521030">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Miktar</label>
                                        <input type="text" class="form-control  form-control-sm is-warning" readonly
                                               id="txtStokMiktar"
                                               value="132 Adet">
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <table id="stokTablo" class="table table-striped projects table-sm">
                                <thead>
                                <tr>

                                    <th>
                                        Adet
                                    </th>
                                    <th>
                                        Alış Fiyatı
                                    </th>
                                    <th>
                                        Satış Fiyatı
                                    </th>
                                    <th>
                                        Alış Kur Oranı
                                    </th>
                                    <th>
                                        Alındığı Tarih
                                    </th>
                                    <th>
                                        Alınan Firma
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
                                            12 Adet
                                        </a>
                                    </td>

                                    <td>
                                        <a>
                                            35.00 $
                                        </a>
                                    </td>
                                    <td>
                                        45.00 $
                                    </td>
                                    <td>
                                        8.42 ₺
                                    </td>

                                    <td class="">
                                        01-06-2021
                                    </td>
                                    <td>
                                        Arena
                                    </td>
                                    <td class="project-actions">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#stokHareketModal" data-stokHareketId="2"
                                                data-stokAdi="Deneme Stok">
                                            <i class="fas fa-folder">
                                            </i>
                                            Detay
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#stokHareketDuzenleModal" data-stokHareketId="2"
                                                data-stokAdi="Deneme Stok">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Düzenle
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
    <div class="modal fade" id="stokHareketModal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="get" action="/stok/listele">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Large Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                     Stok Hareket Verileri
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
    <!-- HAREKET DETAY MODAL BİTİŞ-->

{{--STOK HAREKET DÜZENLE--}}
    <div class="modal fade" id="stokHareketDuzenleModal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="get" action="/stok/listele">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Stok Hareket Düzenle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Stok Adı</label>
                                        <input type="text" class="form-control form-control-sm " readonly
                                               id="txtStokAdi"
                                               value="Örnek Stok Adı">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Stok Grubu</label>
                                        <input type="text" class="form-control form-control-sm" readonly
                                               id="txtStokGrubu"
                                               value="Stok Grubu">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Barkod</label>
                                        <input type="text" class="form-control form-control-sm" readonly id="txtBarkod"
                                               value="9586586521030">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Miktar</label>
                                        <input type="text" class="form-control  form-control-sm is-warning" readonly
                                               id="txtStokMiktar"
                                               value="132 Adet">
                                    </div>
                                </div>
                            </div>
                            <hr/>

                            <div class="card-body">

                                <div class="row">

                                    <form action="" method="post">
                                        <div class="col-4 pt-1 bg-blue">
                                            <div class="row">
                                                <div class="col-8 ">
                                                    <div class="form-group">
                                                        <label for="txtAlisFiyati">Alış Fiyatı</label>
                                                        <input class="form-control form-control-sm " type="text"
                                                               name="txtAlisFiyati"
                                                               id="txtAlisFiyati"
                                                               placeholder="Alış Fiyatı">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cbbParaBirimiAlis form-control-sm ">PB</label>
                                                        <select class="form-control form-control-sm "
                                                                name="cbbParaBirimiAlis" id="cbbParaBirimiAlis">
                                                            <option value="TL">₺</option>
                                                            <option value="DOLAR">$</option>
                                                            <option value="EURO">€</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-4 pt-1 bg-success">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="txtSatisFiyati">Satış Fiyatı</label>
                                                        <input class="form-control form-control-sm " type="text"
                                                               name="txtSatisFiyati"
                                                               id="txtSatisFiyati"
                                                               placeholder="Satış Fiyatı">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cbbParaBirimiSatis">PB</label>
                                                        <select class="form-control form-control-sm "
                                                                name="cbbParaBirimiSatis" id="cbbParaBirimiSatis">
                                                            <option value="TL">₺</option>
                                                            <option value="DOLAR">$</option>
                                                            <option value="EURO">€</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 pt-1 bg-warning">
                                            <div class="form-group">
                                                <label for="txtAdet">STOK ADETİ</label>
                                                <input class="form-control form-control-sm  is-valid" type="text"
                                                       name="txtAdet"
                                                       id="txtAdet"
                                                       placeholder="Stok Adeti">
                                            </div>
                                        </div>
                                        <div class="col-4 mt-2">
                                            <div class="form-group">
                                                <label for="txtAdet">Alış Kur Oranı</label>
                                                <input class="form-control form-control-sm " type="text"
                                                       name="txtAlisKurOrani"
                                                       id="txtAlisKurOrani"
                                                       placeholder="Alış Kur Oranı">
                                            </div>
                                        </div>
                                        <div class="col-4 mt-2">
                                            <div class="form-group">
                                                <label for="txtAlindigiTarih ">Alındığı Tarih</label>
                                                <input class="form-control form-control-sm " type="date"
                                                       name="txtAlindigiTarih"
                                                       id="txtAlindigiTarih">
                                            </div>
                                        </div>

                                        <div class="col-4 mt-2">
                                            <div class="form-group">
                                                <label for="txtAlinanFirma">Alınan Firma</label>
                                                <input class="form-control form-control-sm " type="text"
                                                       name="txtAlinanFirma"
                                                       id="txtAlinanFirma"
                                                       placeholder="Alınan Tedarikçi Firma">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="txtAlinanFirma">Açıklama</label>
                                                <textarea class="form-control form-control-sm " name="txtAciklama"
                                                          id="txtAciklama" rows="3"
                                                          placeholder="Açıklama ..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="txtAlinanFirma">Seri Numaralar</label>
                                                <textarea class="form-control form-control-sm " name="txtSeriNo"
                                                          id="txtSeriNo" rows="3"
                                                          placeholder="Ürün Seri Numaraları ..."></textarea>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-primary">Düzenle</button>
                        </div>
                    </form>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

{{--    STOK HAREKET SİLME--}}
    <div class="modal fade" id="modal-danger" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <form>
                    <input type="hidden" id="silmeId" name="silmeId">
                    <div class="modal-header">
                        <h4 class="modal-title">Stok Hareketi Silme Uyarısı</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h1 class="info-box-icon bg-danger"><i class="fas fa-trash-alt"></i></h1>
                        <h3>Stok Harekeri Silinecektir. Onaylıyormusunuz</h3>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-outline-light">Stok Hareketini Sil</button>
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
                "responsive": true
            }).buttons().container().appendTo('#stokTablo_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#stokFiltreleme").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#stokListesi li").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $("#stokListesi li").on("click", function () {
                var value = $(this).val();
                alert('Stok kartı Id : ' + value);
            });


            // STOK LİSTESİ DETAYI MODAL DATA
            $('#stokHareketModal').on('show.bs.modal', function (event) {
                var stokHareketData = $(event.relatedTarget); //
                var stokAdiGelenData = stokHareketData.data('stokadi'); //
                var stokIdGelenData = stokHareketData.data('stokhareketid'); //

                // $.post('func.php', {'stokHareketId': stokIdGelenData}, function (response) {
                //     $('#ajaxGelen').html(response);
                //
                // });

                var modal = $(this);
                modal.find('.modal-title').text('Stok: ' + stokAdiGelenData + ' - Stok Id: ' + stokIdGelenData);
            });

            // STOK LİSTESİ DETAYI DÜZENLEME MODAL DATA
            $('#stokHareketDuzenleModal').on('show.bs.modal', function (event) {
                var stokHareketData = $(event.relatedTarget); //
                var stokAdiGelenData = stokHareketData.data('stokadi'); //
                var stokIdGelenData = stokHareketData.data('stokhareketid'); //

                // $.post('func.php', {'stokHareketId': stokIdGelenData}, function (response) {
                //     $('#ajaxGelen').html(response);
                //
                // });

                var modal = $(this);
                modal.find('.modal-title').text('Stok: ' + stokAdiGelenData + ' - Stok Id: ' + stokIdGelenData);
            });

        });
    </script>


@endsection
