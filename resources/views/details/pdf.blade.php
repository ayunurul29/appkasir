<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Detail PDF</h4>
            <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/"></a>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Detail ID</th>
                <th>Penjualan ID</th>
                <th>Product Name</th>
                <th>Jumlah Produk</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
                <tr>
                    <td>{{ $detail->detail_id }}</td>
                    <td>{{ @$detail->penjualan->penjualan_id }}</td>
                    <td>{{ @$detail->product->nama_product }}</td>
                    <td>{{ $detail->jumlah_product }}</td>
                    <td>{{ $detail->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
