@extends('layouts.app')
@section('title','Cari Ödeme')
@section('sayfa_baslik','Cari Ödeme')




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
                                        <label for="txtCariHareketTarih">Tarih:</label>
                                        <input class="form-control" type="date" name="txtCariHareketTarih" id="txtCariHareketTarih" value="<?=date("Y-m-d")?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="txtCariHareketTur">İşlem Türü</label>
                                        <input type="text"  class="form-control" name="cbbCariHareketTur"  id="cbbCariHareketTur"
                                               value="Ödeme" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="txtCariHareketBirimAdet">Birim Adet</label>
                                        <input type="number" min="1" class="form-control"  name="txtCariHareketBirimAdet" onkeyup="birimToplam()" onclick="birimToplam()"  id="txtCariHareketBirimAdet"
                                               value="1">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txtCariHareketBirimTutar">Birim Tutar</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="####.##0000.00" data-reverse="true" name="txtCariHareketBirimTutar" onkeyup="birimToplam()" id="txtCariHareketBirimTutar"
                                        >
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="cbbParaBirimiSatis">Para Birimi</label>
                                        <select class="form-control" name="cbbaraBirimi" id="cbbaraBirimi">
                                            <option value="TL">₺</option>
                                            <option value="DOLAR">$</option>
                                            <option value="EURO">€</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txtCariHareketKdvOran">KDV Oran (%)</label>
                                        <select class="custom-select" name="cbbCariHareketKdvOran" onclick="kdvTutar()" id="cbbCariHareketKdvOran">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="8" >8</option>
                                            <option value="18" selected>18</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txtCariHareketToplam">Ara Toplam</label>
                                        <input type="text"  class="form-control" name="txtCariHareketToplam" id="txtCariHareketToplam"
                                               value="" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txtCariHareketKdvHaric">KDV Tutari</label>
                                        <input type="text"  class="form-control is-warning" name="txtCariHareketKdvHaric" id="txtCariHareketKdvHaric"
                                               value="" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txtCariHareketKdvTutar">Toplam Tutar</label>
                                        <input type="text"  class="form-control is-warning" name="txtCariHareketKdvTutar" id="txtCariHareketKdvTutar"
                                               value="" onkeyup="kdvDahilTutar()">
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
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->





@endsection

@section('jsscript')

    <script>


        function birimToplam() {
            var birimAdet = document.getElementById("txtCariHareketBirimAdet").value;
            var birimTutar = document.getElementById("txtCariHareketBirimTutar").value;
            var birimToplam = birimAdet * birimTutar;
            document.getElementById("txtCariHareketToplam").value = birimToplam;
            document.getElementById("txtCariHareketKdvHaric").value = birimToplam;

            kdvTutar();
            kdvHaricTutar();
        }

        function kdvTutar() {
            var kdvHaricTutar = document.getElementById("txtCariHareketToplam").value;
            var kdvOran = document.getElementById("cbbCariHareketKdvOran").value;
            var kdvToplam =  kdvHaricTutar * (1 + (kdvOran / 100));
            document.getElementById("txtCariHareketKdvTutar").value = kdvToplam.toFixed(2) ;
            document.getElementById("txtCariHareketKdvHaric").value = (kdvToplam - kdvHaricTutar).toFixed(2) ;
        }


        function kdvDahilTutar(){
            var birimAdet = document.getElementById("txtCariHareketBirimAdet").value;
            var kdvDahilTutar = document.getElementById("txtCariHareketKdvTutar").value;
            var kdvOran = document.getElementById("cbbCariHareketKdvOran").value;
            var kdvTutari = kdvDahilTutar / (1 + (kdvOran / 100));
            var kdvHaricTutar = kdvDahilTutar - kdvTutari;
            var birimTutar = (kdvDahilTutar - kdvHaricTutar) / birimAdet
            var araToplam = birimAdet * birimTutar;

            document.getElementById("txtCariHareketKdvHaric").value = kdvHaricTutar.toFixed(2);
            document.getElementById("txtCariHareketBirimTutar").value = birimTutar.toFixed(2);
            document.getElementById("txtCariHareketToplam").value = araToplam.toFixed(2);


        }


        /*
            txtCariHareketToplam
            #txtCariHareketKdvHaric
            #txtCariHareketKdvOran
            #txtCariHareketKdvTutar
         */


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
