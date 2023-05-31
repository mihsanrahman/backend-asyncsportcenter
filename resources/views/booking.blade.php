<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('cssfile/booking.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background: #82AAE3;
        }

        .header h1 {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .card {
            display: none;
            max-width: 400px;
            margin: 0 auto;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .card-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card-button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function showCardDialog() {
            var cardDialog = document.getElementById('card-dialog');
            cardDialog.style.display = 'block';
            setTimeout(redirect, 20000); // Redirect after 20 seconds
        }

        function redirect() {
            window.location.href = "{{ route('booking.store') }}";
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Async Sport Center</h1>
    </div>
    <form action="{{ route('booking.store') }}" method="post" onsubmit="showCardDialog()">
        @csrf
        <div>
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required>
        </div>
        <div>
            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" required>
        </div>
        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" required>
        </div>
        <div>
            <label for="durasi">Durasi (jam):</label>
            <input type="number" name="durasi" id="durasi" min="1" required>
        </div>
        <div>
            <button type="submit">Booking</button>
        </div>
    </form>

    <div id="card-dialog" class="card">
        <h2 class="card-title">Tunggu sebentar!</h2>
        <p class="card-content">Admin kami akan mengecek ketersediaan lapangan untukmu.</p>
        <button class="card-button" onclick="redirect()">OK</button>
    </div>

    <script>
        var countdownElement = document.getElementById('countdown');
        var countdown = 20;

        function startCountdown() {
            var countdownInterval = setInterval(function() {
                countdown--;
                countdownElement.innerText = countdown;

                if (countdown <= 0) {
                    clearInterval(countdownInterval);
                    redirect();
                }
            }, 1000);
        }

        startCountdown();
    </script>
</body>
</html>
