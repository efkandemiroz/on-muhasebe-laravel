@extends('layouts.app')
@section('title','Yeni Satış Faturası')
@section('sayfa_baslik','Yeni Satış Faturası')




@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Fatura Bilgileri</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">

                            <div class="row">

                                <form action="" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtIl">Cari Hesap</label>
                                            <select name="cbbCariHesap" id="cbbCariHesap" class="form-control select2">
                                                <option value="">Seçin...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="txtFaturaNo">Fatura No</label>
                                            <input class="form-control" type="text" name="txtFaturaNo" id="txtFaturaNo"
                                                   placeholder="Fatura Numarası" required>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="txtYetkili">Fatura Tarihi</label>
                                        <div class="input-group ">
                                            <!-- /btn-group -->
                                            <input class="form-control" type="date" name="dateFaturaTarihi" id="dateFaturaTarihi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtIl">Ödeme Türü</label>
                                            <select name="cbbOdemeTuru" id="cbbOdemeTuru" class="form-control select2">
                                                <option value="Nakit">Nakit</option>
                                                <option value="Havale/EFT">Havale/EFT</option>
                                                <option value="Açık Hesap">Açık Hesap</option>
                                                <option value="Çek Senet">Çek Senet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="txtFaturaNo">Ara Toplam</label>
                                            <input class="form-control" type="text" name="txtAraToplam" id="txtAraToplam"
                                                   placeholder="Ara Toplam" >
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="txtKDVTutari">KDV Tutarı</label>
                                            <input class="form-control" type="text" name="txtKDVTutari" id="txtKDVTutari"
                                                   placeholder="KDV Tutarı">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="txtGenelToplam">Genel Toplam</label>
                                            <input class="form-control" type="text" name="txtGenelToplam" id="txtGenelToplam"
                                                   placeholder="Genel Toplam" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtAciklama">Açıklama</label>
                                            <textarea class="form-control" rows="5" placeholder="Açıklama"></textarea>
                                        </div>
                                    </div>



                                </form>

                            </div>

                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-12">


                <section class="content">



                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Fatura Stok Listesi</h3>

                        </div>
                        <div class="card-body">

                        </div>
                        <button type="submit" name="btnSatisFaturaKaydet" id="btnSatisFaturaKaydet" class="btn btn-block btn-primary">Satış Faturası Kaydet</button>
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

    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="/plugins/select2/js/select2.full.min.js"></script>

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



@endsection
