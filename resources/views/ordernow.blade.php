@extends('mastar')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
        <tbody>
        <tr>
            <td>Amount</td>
            <td>$ {{$total}}</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>$ 0</td>
        </tr>
        <tr>
            <td>Delivery</td>
            <td>$ 10</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>$ {{$total+10}}</td>
        </tr>
        </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group"> <br>
                <label for="pwd" style="color: black; font-weight: bold;">ُEnter Your Address</label>
                    <textarea name="address" type="email" placholder="enter your address" class="form-control"></textarea> <br> <br>
                </div>
                <div class="form-group">
                    <label for="pwd" style="color: black; font-weight: bold;">Payment Method</label><br> <br>
                    <input type="radio" value="cash" name="payment"> <span >online payment</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br>

                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div> 
@endsection
