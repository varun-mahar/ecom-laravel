 @extends('master') 
@section('content')
<div class="custom-product">
   <div class="col-sm-6">
         
  <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} INR </td>
        
      </tr>
      <tr>
        <td>TAX</td>
        <td>0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100 INR</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
        
      </tr>
    </tbody>
  </table>  
      <form method="POST" action="orderplace">
        @csrf
  <div class="form-group">
    <textarea placeholder="Enter Your Address" name="address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for=""> Payment Method</label>
    <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>EMI Payment</span></p>
    <p><input type="radio" value="cash" name="payment"> <span>Cash On Delivery (COD)</span></p>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
</div>
 @endsection