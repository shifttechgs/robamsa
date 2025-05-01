<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <!-- Theme css -->
    <link rel="stylesheet" href="{{ asset('assets/css/invoice_css.css') }}">

</head>

<body class="bg-light">
<section class="theme-invoice-2">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 mx-auto my-3">
                <div class="invoice-wrapper">
                    <!-- Invoice Header -->
                    <div class="invoice-header">
                        <div class="header-contain">
                            <div class="header-left">
                                <img src="{{ asset('assets/images/logo/shifttech_logo.png' ) }}">
                            </div>
                            <div class="header-right">
                                <h3>INVOICE</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Invoice Body -->
                    <div class="invoice-body">
                        <div class="top-sec">
                            <div class="address-detail">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-box">
                                            <div class="address-box">
                                                <ul>
                                                    <li>1 Stepney Road,</li>
                                                    <li>Parklands, CapeTown</li>
                                                    <li>7441</li>
                                                </ul>
                                            </div>

                                            <div class="address-box">
                                                <ul>
                                                    <li class="theme-color">Issue Date : <span
                                                            class="text-content">{{ $order->created_at->format('d-F-Y')  }}</span></li>
                                                    <li class="theme-color">Invoice No : <span
                                                            class="text-content">{{ $order->order_number }}</span></li>
                                                    <li class="theme-color">Email : <span
                                                            class="text-content">{{ $order->user->email }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="body-date">
                            <ul>
                                <li class="text-content"><span class="theme-color">Issue Date :  </span>{{ $order->created_at->format('d-F-Y')  }}</li>
                                <li class="text-content"><span class="theme-color">Invoice No : </span> {{ $order->order_number }}</li>
                                <li class="text-content"><span class="theme-color">Email : </span> {{ $order->user->email }}</li>
                            </ul>
                        </div>

                        <!-- Table with Items -->
                        <div class="table-responsive table-borderless">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="text-start">Item detail</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->items as $item)
                                    <tr>
                                        <td class="text-content">{{ $item->id }}</td>
                                        <td>
                                            <ul class="table-details">
                                                <li class="text-title">{{ $item->product->product_name }}</li><br>

                                            </ul>
                                        </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->total_amount }}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="table-price">
                                            <li>GRAND TOTAL</li>
                                            <li class="theme-color">{{ $order->total_amount }}</li>
                                        </ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <!-- Invoice Footer with Print Button -->
                    <div class="invoice-footer pt-0">
                        <div class="button-group">
                            <ul>
                                <li>
                                    <button class="btn theme-bg-color text-white rounded" onclick="printInvoice();">Export As PDF</button>
                                </li>
                                <li>
                                    <button class="btn text-white print-button rounded ms-2" onclick="printInvoice();">Print</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function printInvoice() {
        var printContents = document.querySelector('.theme-invoice-2').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>
</body>

</html>
