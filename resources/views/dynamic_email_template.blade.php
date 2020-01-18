<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<style>


/* Use a wide full screen for small screens like tablets. */
@media (min-width: 768px) and (max-width:992px) {
    .container {
		width: initial;
        padding-left: 2em;
        padding-right: 2em;        
	}
}


@media (max-width: 768px) {
    .my_feature {
        text-align: center
    }
 }
  

/* --- Plan 3 --------------------------- */
.my_plan3 {
    background: rgb(254,235,212);
}

.my_planHeader.my_plan3 a {
    background: rgb(199, 127, 40);
    color:white;
}

.my_planHeader.my_plan3 {
    background: rgb(253, 161, 49);
    border-bottom: thick solid rgb(199, 127, 40);
}










</style>

</head>
<body style="background-color: #cccccc;">
        <div class="container" style="margin-top: 50px;">
        <div class="row" >
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color: white;">
           
                
                
                <div class="col-md-12 my_planHeader my_plan3">
                    <h1 style="color: white; text-align: center;"><b>ETS HAIR SALES UPDATE</b></h1>
                    <h3 style="color: #052d3d; text-align: center;"><b>New Sales Completed by {{$data['employee']}}</b></h3>
                    
                </div>
                
                <div>
                <h3 style="color: #052d3d; text-align: center; margin-top: 30px;">DETAILS:</h3>
                </div>

                  
  <table class="table table-borderless">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data['salesitems'] as $value)
      <tr>
        <td>{{$value->item->item_name}}</td>
        <td>{{$value->selling_price}}</td>
        <td>{{$value->quantity}}</td>
        <td>{{$value->total_selling}}</td>
       
      </tr>
      @endforeach
      
      <tr>
      <td></td>
      <td></td>
      <th>Subtotal</th>
      <td>{{$data['subtotal']}}</td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <th>Amount Paid</th>
      <td>{{$data['paid']}}</td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <th>Discount</th>
      <td>{{$data['discount']}}</td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <th>Balance</th>
      <td>{{$data['dues']}}</td>
      </tr>
    </tbody>
  </table>
    <div style="text-align: center; border-radius: 15px;"><a href="https://app.etsglobal.com.ng/"><button type="button" class="btn btn-warning"><p style="color: white;"><b>View Transactions</b></p></button></a></div><br />
  </div>
  <div class="col-md-2"></div>
  </div>
  </div>        
</body>
</html>
