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
                            <h3 class="card-title">Stok Hareketi Ekle</h3>

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


                            <form>
                                <div class="card-body">

                                    <div class="row">

                                        <form action="" method="post">
                                            <div class="col-5 pt-1 bg-blue">
                                                <div class="row">
                                                    <div class="col-9 ">
                                                        <div class="form-group">
                                                            <label for="txtAlisFiyati">Alış Fiyatı</label>
                                                            <input class="form-control" type="text" name="txtAlisFiyati"
                                                                   id="txtAlisFiyati"
                                                                   placeholder="Alış Fiyatı">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="cbbParaBirimiAlis">Para Birimi</label>
                                                            <select class="form-control" name="cbbParaBirimiAlis" id="cbbParaBirimiAlis">
                                                                <option value="TL">₺</option>
                                                                <option value="DOLAR">$</option>
                                                                <option value="EURO">€</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-5 pt-1 bg-success">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="form-group">
                                                            <label for="txtSatisFiyati">Satış Fiyatı</label>
                                                            <input class="form-control" type="text" name="txtSatisFiyati"
                                                                   id="txtSatisFiyati"
                                                                   placeholder="Satış Fiyatı">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="cbbParaBirimiSatis">Para Birimi</label>
                                                            <select class="form-control" name="cbbParaBirimiSatis" id="cbbParaBirimiSatis">
                                                                <option value="TL">₺</option>
                                                                <option value="DOLAR">$</option>
                                                                <option value="EURO">€</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 pt-1 bg-warning">
                                                        <div class="form-group">
                                                            <label for="txtAdet">STOK ADETİ</label>
                                                            <input class="form-control is-valid" type="text" name="txtAdet"
                                                                   id="txtAdet"
                                                                   placeholder="Stok Adeti">
                                                        </div>
                                            </div>
                                            <div class="col-4 mt-2">
                                                <div class="form-group">
                                                    <label for="txtAdet">Alış Kur Oranı</label>
                                                    <input class="form-control" type="text" name="txtAlisKurOrani"
                                                           id="txtAlisKurOrani"
                                                           placeholder="Alış Kur Oranı">
                                                </div>
                                            </div>
                                            <div class="col-4 mt-2">
                                                <div class="form-group">
                                                    <label for="txtAlindigiTarih">Alındığı Tarih</label>
                                                    <input class="form-control" type="date" name="txtAlindigiTarih"
                                                           id="txtAlindigiTarih">
                                                </div>
                                            </div>

                                            <div class="col-4 mt-2">
                                                <div class="form-group">
                                                    <label for="txtAlinanFirma">Alınan Firma</label>
                                                    <input class="form-control" type="text" name="txtAlinanFirma"
                                                           id="txtAlinanFirma"
                                                           placeholder="Alınan Tedarikçi Firma">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="txtAlinanFirma">Açıklama</label>
                                                    <textarea class="form-control" name="txtAciklama" id="txtAciklama" rows="3" placeholder="Açıklama ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="txtAlinanFirma">Seri Numaralar</label>
                                                    <textarea class="form-control" name="txtSeriNo" id="txtSeriNo" rows="3" placeholder="Ürün Seri Numaraları ..."></textarea>

                                                </div>
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

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


        });
    </script>
@endsection
