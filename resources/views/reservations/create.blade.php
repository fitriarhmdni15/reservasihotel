<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi Hotel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="form-container">
    <h2>Form Reservasi Hotel</h2>

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <label for="name">Nama</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Telepon</label>
        <input type="text" id="phone" name="phone" required>

        <label for="check_in">Tanggal Check-In</label>
        <input type="date" id="check_in" name="check_in" required>

        <label for="check_out">Tanggal Check-Out</label>
        <input type="date" id="check_out" name="check_out" required>

        <label for="room_type">Jenis Kamar</label>
        <select id="room_type" name="room_type" required>
            <option value="1">Kamar Standard</option>
            <option value="2">Kamar Deluxe</option>
            <option value="3">Kamar Suite</option>
        </select>

        <label for="number_of_guests">Jumlah Tamu</label>
        <input type="number" id="number_of_guests" name="number_of_guests" required>

        <button type="submit">Reservasi</button>
    </form>
</div>

</body>
</html>
