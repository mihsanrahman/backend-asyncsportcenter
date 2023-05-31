<!DOCTYPE html>
<html>
<head>
    <title>Async Sport Center - Pembayaran Berhasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background: #82AAE3;
        }

        h1 {
            color: white;
            font-size: 24px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            color: rgb(0, 0, 0);
            font-size: 18px;
            margin-bottom: 10px;
        }

        .struk-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            backdrop-filter: blur(40px);
            /* Tambahkan prefix -webkit- untuk browser Safari */
            -webkit-backdrop-filter: blur(40px);
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .item-name {
            flex: 1;
            text-align: left;
        }

        .item-price {
            flex-basis: 80px;
            text-align: right;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <h1>Async Sport Center</h1>
    <div class="struk-container">
        <p>Pembayaran Berhasil</p>
        <p>Detail pemesanan:</p>
        <div class="item-row">
            <div class="item-name">Nama Lengkap:</div>
            <div class="item-price">{{ $booking->nama_lengkap }}</div>
        </div>
        <div class="item-row">
            <div class="item-name">Nomor Telepon:</div>
            <div class="item-price">{{ $booking->nomor_telepon }}</div>
        </div>
        <div class="item-row">
            <div class="item-name">Tanggal:</div>
            <div class="item-price">{{ $booking->tanggal }}</div>
        </div>
        <div class="item-row">
            <div class="item-name">Durasi:</div>
            <div class="item-price">{{ $booking->durasi }} jam</div>
        </div>
        <div class="item-row">
            <div class="item-name">Total Harga:</div>
            <div class="item-price">Rp {{ number_format($booking->harga) }}</div>
        </div>
        <div class="total-row">
            <div class="item-name">Total:</div>
            <div class="item-price">Rp {{ number_format($booking->harga) }}</div>
        </div>
    </div>
</body>
</html>
