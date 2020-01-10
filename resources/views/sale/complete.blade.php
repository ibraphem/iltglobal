@extends('layouts.admin')

@section('content')
<div class="content-wrapper sale-background" ng-app="tutapos">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <h1>{{__('Sales/Invoice')}}</h1>
      
    </section>
    <!-- Main content -->
    <section class="content panel" >
            <div class="container-fluid">
<div id="inventory-invoice">


    <div class="invoice overflow-auto">
       <!-- <div style="min-width: 600px">--><div >
            <header>
                <div class="row">
                    <div class="col">
                    <img src="{{asset('images/yareecee1.png')}}" alt="receipt-logo" style="height: 70px;  margin-top: -40px;">
                         <!--   <img src="asset/images/yareecee1.png" style="height: 150px;" /> -->
                    </div>
                    <div class="col company-details" style="margin-top: -100px;">
                    <sup style="color: red;"><b>REG: 887372</b></sup>
                        <h2 class="name" style="color: #0c0028;" >
                            
                            YAREECE VENTURES
                        </h2>
                        <div><span style="color: red;"><b>Head Office:</b></span><span style="color: #0c0028;"> 13B, Baale Animashaun Road, Dalemo, Alakuko, Lagos</span></div>
                        <div><span style="color: red;"><b>Annex Office:</b></span><span style="color: #0c0028;"> 48, Fakoya Street, Egbeda, Akowonjo, Lagos</span></div>
                       <div> <span style="color: red;"><b>Telephone No:</b></span><span style="color: #0c0028;"> 08033674382, 08025719488</span></div>
                      <div>  <span style="color: red;"><b>Email:</b></span><span style="color: #0c0028;"> yareeceventures@gmail.com</span></div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{ $sales->customer->name}}</h2>
                        <div class="address">@if(!empty($sales->customer->phone_number))
                            {{trans('sale.mobile')}} : {{$sales->customer->phone_number}}<br>
                            @endif</div>
                        <div class="email">{{trans('sale.payment_type')}}: {{$sales->payment_type}}</div>
                        
                    </div>
                    <div class="col invoice-details" style="margin-top: -100px">
                        <h2 class="invoice-id" style="color: #0c0028;">YAR00{{$saleItemsData->sale_id}}</h2>
                        <div class="date">Date: {{ Carbon\Carbon::now() }}</div>
                        <div class="date">Attendant: {{$sales->user->name}}</div>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ITEM - MODEL</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">QTY</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($saleItems as $value)
                            <tr>
                                <td scope="col" style="background:#0c0028; color:white">  <h5>{{$value->item->item_name}} - {{$value->item->size}}</h5></td>
                                <td scope="col"style="background:#0c0028;color:white;">   <h5>&#x20A6; &nbsp; {{$value->selling_price}}</h5></td>
                                <td scope="col"style="background:#0c0028;color:white">   <h5>{{$value->quantity}}</h5></td>
                                <td scope="col"style="background:#0c0028;color:white">   <h5>&#x20A6; &nbsp;{{$value->total_selling}}</h5></td>
                            </tr>
                        @endforeach
           
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td colspan="2" scope="col">SUBTOTAL</td>
                            <td>&#x20A6; {{ $sales->discount + $sales->grand_total - $sales->tax }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" scope="col">Discount</td>
                            <td> &#x20A6;  {{ $sales->discount }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" scope="col">PAYMENT</td>
                            <td>&#x20A6;  {{ $sales->payment }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" scope="col">TAX</td>
                            <td>&#x20A6;{{ $sales->tax }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" scope="col" style="color: red;">BALANCE</td>
                            <td style="color: red;">&#x20A6;  {{ $sales->dues }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        
        </div>
        <div></div>
    </div>
</div>

<!--<script>
 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>-->
<div class="toolbar hidden-print">
        <div class="text-right" style="margin-right: 40px; margin-top: -30px">
            <button id="printInvoice" onclick="printInvoice()" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <a href="{{ url('/sales') }}" type="button" class="btn btn-primary">{{trans('sale.new_sale')}}</a>
           <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
        </div>
    </div>

</div>
    </section>
</div>
<script>
function printInvoice() {
  window.print();
}
</script>
@endsection

