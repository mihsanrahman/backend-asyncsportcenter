<!DOCTYPE html>
<html>
<head>
    <title>Async Sport Center - Detail Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background: #82AAE3;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #666;
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

        .payment-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Detail Pembayaran</h1>
    <div class="struk-container">
        <p>Anda akan melakukan pembayaran untuk pemesanan lapangan futsal.</p>
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
            <div class="item-name">Harga per Jam:</div>
            <div class="item-price">Rp 50,000</div>
        </div>
        <div class="total-row">
            <div class="item-name">Total Harga:</div>
            <div class="item-price">Rp {{ number_format($booking->harga) }}</div>
        </div>
    </div>
    <form action="{{ route('payment.process', $booking) }}" method="POST">
        @csrf
        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
        <!-- Add payment form fields here -->
        <button type="submit" class="payment-button">Bayar dengan Gopay</button>
    </form>
</body>
</html>
