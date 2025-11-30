<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Kintosh Laundry</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Page Style -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #00bcd4, #006064);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            overflow: hidden;
        }

        .container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            padding: 40px 50px;
            border-radius: 20px;
            text-align: center;
            max-width: 500px;
            animation: fadeIn 1s ease-in-out;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .container h1 {
            font-size: 40px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .container p {
            font-size: 18px;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .btn {
            text-decoration: none;
            background: #fff;
            color: #006064;
            padding: 14px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn:hover {
            background: #e0f7fa;
        }

        /* Floating bubbles */
        .bubble {
            position: absolute;
            bottom: -120px;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: rise 8s infinite ease-in;
        }

        @keyframes rise {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            100% {
                transform: translateY(-800px) scale(1.8);
                opacity: 0;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Floating Bubbles -->
    <div class="bubble" style="left: 10%; animation-delay: 0s;"></div>
    <div class="bubble" style="left: 25%; width: 25px; height: 25px; animation-delay: 1s;"></div>
    <div class="bubble" style="left: 40%; width: 60px; height: 60px; animation-delay: 2s;"></div>
    <div class="bubble" style="left: 60%; width: 20px; height: 20px; animation-delay: 3s;"></div>
    <div class="bubble" style="left: 75%; width: 50px; height: 50px; animation-delay: 4s;"></div>
    <div class="bubble" style="left: 90%; width: 30px; height: 30px; animation-delay: 5s;"></div>

    <div class="container">
        <h1>🎉 Thank You!</h1>
        <p>Your booking has been successfully submitted.<br>
           Our team will contact you shortly to confirm your laundry pickup.</p>

        <a href="/kintosh-laundry/index.html" class="btn">Return Home</a>
    </div>

</body>
</html>
