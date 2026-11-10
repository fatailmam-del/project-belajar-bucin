<?php
$fotoPath = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])) {
    // Buat folder uploads otomatis jika belum ada
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }
    $namaFile = time() . '_' . basename($_FILES['foto']['name']);
    $targetFile = 'uploads/' . $namaFile;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
        $fotoPath = $targetFile;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI CEWE TERCANTIK</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle, #33001a 0%, #0d0d0d 80%);
            font-family: 'Comic Sans MS', 'Segoe UI', cursive, sans-serif;
            color: #fff;
            text-align: center;
            position: relative;
        }
        .content {
            z-index: 10;
            padding: 20px;
        }
        /* Animasi Foto Melayang */
        .foto-cantik {
            width: 240px;
            height: 240px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #ff4d94;
            box-shadow: 0 0 30px #ff4d94;
            animation: melayang 3s ease-in-out infinite;
        }
        @keyframes melayang {
            0%, 100% { transform: translateY(0) rotate(-2deg); }
            50% { transform: translateY(-18px) rotate(2deg); }
        }
        /* Animasi Tulisan Bergerak & Berpendar */
        h1 {
            margin-top: 25px;
            font-size: 2.2rem;
            color: #ff80b3;
            text-shadow: 0 0 10px #ff1a75, 0 0 20px #ff4d94;
            animation: goyangTeks 2s ease-in-out infinite;
        }
        @keyframes goyangTeks {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.07); }
        }
        /* Stiker / Gambar Lucu Bergerak */
        .stiker-lucu {
            font-size: 40px;
            margin-top: 10px;
            display: inline-block;
            animation: lompat 1s infinite alternate;
        }
        @keyframes lompat {
            from { transform: translateY(0); }
            to { transform: translateY(-12px); }
        }
        /* Hujan Emoticon Love */
        .love-rain {
            position: fixed;
            top: -50px;
            font-size: 24px;
            user-select: none;
            pointer-events: none;
            z-index: 1;
            animation: jatuh linear forwards;
        }
        @keyframes jatuh {
            to {
                transform: translateY(110vh) rotate(360deg);
            }
        }
        .btn-kembali {
            margin-top: 25px;
            display: inline-block;
            padding: 10px 20px;
            background: rgba(255, 77, 148, 0.2);
            border: 1px solid #ff4d94;
            color: #ffb3d1;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
        }
        .btn-kembali:hover {
            background: #ff4d94;
            color: white;
        }
    </style>
</head>
<body>

    <div class="content">
        <?php if ($fotoPath): ?>
            <img src="<?= htmlspecialchars($fotoPath) ?>" alt="Cewe Tercantik" class="foto-cantik">
        <?php else: ?>
            <p>Belum ada foto yang diupload nih!</p>
        <?php endif; ?>

        <h1>HI CEWE TERCANTIK DI HIDUP FATA 💖</h1>
        
        <div class="stiker-lucu">🧸✨🌸🐱💕</div>
        <br>
        <a href="index.php" class="btn-kembali">Ganti Foto</a>
    </div>

    <script>
        // Script untuk membuat hujan emoticon love
        const emoticons = ['💖', '💕', '💗', '💓', '❤️', '🌸'];

        function buatHujanLove() {
            const love = document.createElement('div');
            love.classList.add('love-rain');
            love.innerText = emoticons[Math.floor(Math.random() * emoticons.length)];
            
            // Posisi horizontal & ukuran acak
            love.style.left = Math.random() * 100 + 'vw';
            love.style.fontSize = (Math.random() * 20 + 15) + 'px';
            love.style.animationDuration = (Math.random() * 3 + 2) + 's'; // 2 - 5 detik

            document.body.appendChild(love);

            // Hapus elemen setelah selesai jatuh agar browser tidak berat
            setTimeout(() => {
                love.remove();
            }, 5000);
        }

        // Munculkan love setiap 150 milidetik
        setInterval(buatHujanLove, 150);
    </script>
</body>
</html>