<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda Sayfası</title>
    <style>
        /* Sayfa çok sade olmasın diye basit stiller */
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; 
            line-height: 1.6;
            background-color: #f4f7f6;
            color: #333;
            padding: 20px; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        h1 { 
            color: #2c3e50; 
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        p { 
            color: #555; 
        }
        strong {
            color: #3498db;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Merhaba, <strong>{{ $isim }}</strong>!</h1>

        <p>
            Bu sayfaya hoş geldin. Burası senin dinamik hakkımda sayfan.
        </p>
        <p>
            İşte ben Laravel öğrenmekteyim ve bu da benim parametreli route kullanarak oluşturduğum
            ilk bilgilendirme sayfalarımdan biri! 
        </p>
        
    </div>

</body>
</html>