<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Payment Gateway</h1>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                        Payment Gateway
                    </div>
                    <div class="card-body">
                        <table id="cart" class="table table-hover table-condansed">
                            <thead>
                                <tr>
                                    <th style="width:50%">Product</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:8%">Quantity</th>
                                    <th style="width:22%" class="text-center">Subtotal</th>
                                    <th style="width:10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('img1.jpg') }}" width="100" height="100" class="img-responsive">
                                                <div class="col-sm-9">
                                                    <h4 class="nomargin">Monster Hunter World Iceborne PS5</h4>
                                                </div>
                                            </div>
                                            <td data-th="Price">$60</td>
                                            <td data-th="Quantity">
                                                <input type="number" value="1" class="form-control quantity cart_update" min="1" />
                                            </td>
                                            <td data-th="Subtotal" class="text-center">$60</td>
                                            <td class="action" data-th="">
                                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align:right;"><h3><strong>Total $60</strong></h3></td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align:right;">
                                        <form action="/session" method="POST">
                                            <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="total" value="60">
                                            <input type="hidden" name="productname" value="Monster Hunter World Iceborne PS5">
                                            <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-monet"></i>Checkout</button>
                                        </form>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>