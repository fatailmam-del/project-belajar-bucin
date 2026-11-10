<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto Spesial</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0d0d0d 50%, #ff4d94 150%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }
        .card {
            background: rgba(20, 20, 20, 0.9);
            border: 2px solid #ff4d94;
            box-shadow: 0 0 25px rgba(255, 77, 148, 0.5);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        h2 {
            color: #ff80b3;
            margin-bottom: 10px;
        }
        p {
            font-size: 14px;
            color: #ddd;
            margin-bottom: 25px;
        }
        input[type="file"] {
            display: block;
            margin: 0 auto 25px auto;
            padding: 10px;
            background: #1a1a1a;
            border: 1px dashed #ff4d94;
            border-radius: 10px;
            color: #ffb3d1;
            width: 100%;
            box-sizing: border-box;
            cursor: pointer;
        }
        button {
            background: linear-gradient(90deg, #ff1a75, #ff66a3);
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px #ff4d94;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>✨ Misi Rahasia ✨</h2>
        <p>Masukkan foto cewe tercantik di dunia di bawah ini:</p>
        <form action="hasil.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="foto" accept="image/*" required>
            <button type="submit">Lanjut ke Halaman Berikutnya 💖</button>
        </form>
    </div>
</body>
</html>