@extends('master')
@section("content")

<div class="custom-product ">

   <div class="col-sm-6">
        <table class="table table-striped">
            <tbody>
                
                <tr>
                    <td>Price</td>
                    <td>{{$total}} dinara</td>
                    
                </tr>
                
                <tr>
                    <td>Tax</td>
                    <td>0 dinara</td>
                    
                </tr>
                
                <tr>
                    <td>Delivery</td>
                    <td>100</td>
                    
                </tr>
                
                <tr>
                    <td>Total amount</td>
                    <td>{{$total + 100}}</td>
                    
                </tr>
            
            </tbody>
        </table>

        <form method="POST" action="orderplace">
        @csrf
            <div class="form-group">
                <textarea placeholder="enter your address" name="address" class="form-control"> </textarea>
            </div>
            
            <div class="form-group">
                <label for="">Payment method</label>
                <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
                <p><input type="radio" value="cash" name="payment"> <span>EMI Payment</span></p>
                <p><input type="radio" value="cash" name="payment"> <span>Payment on delivery</span></p>
            </div>
            
            <button type="submit" class="btn btn-default">Order Now</button>
        
        </form> 
        
    </div>
  
  
</div>
@endsection