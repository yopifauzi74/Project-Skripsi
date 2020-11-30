@extends('layouts.admin')
@section('content')
<!-- Main content -->
<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas"></i> Tabel Diagnosa
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <br>
              <br>
              <div class="row invoice-info">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Usia</th>
                      <th>Berat Badan</th>
                      <th>Tinggi Badan</th>
                      <th>Status Gizi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($item)
                  @foreach($item as $data)
                    
                    <tr>
                      <td>{{$data->FirstName}}&nbsp;{{$data->LastName}}</td>
                      <td>{{$data->Umur}}</td>
                      <td>{{$data->BeratBadan}}</td>
                      <td>{{$data->TinggiBadan}}</td>
                      <td>{{$data->Remark}}</td>
                    </tr>
                    @endforeach
                @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
                </div>
              <!-- /.row -->
             
             <br>
             <br>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Diagnosa</th>
                      <th>Solusi</th>
                      <th>Status</th>
                      <!-- <th>Usia</th>
                      <th>Tinggi Badan</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    @if($item)
                  @foreach($item as $data)
                    
                    <tr>
                    <td>{{$data->Diagnosa}}</td>
                    <td>{{$data->Penanganan}}</td>
                    <td>{{$data->Status}}</td>
                    </tr>
                    @endforeach
                @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- <div class="row"> -->
                <!-- accepted payments column -->
                <!-- <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div> -->
                <!-- /.col -->
                <!-- <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div> -->
                <!-- /.col -->
              <!-- </div> -->
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <!-- <div class="row no-print"> -->
                <!-- <div class="col-12"> -->
                  <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                <!-- </div> -->
              <!-- </div> -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection