<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started - Amar Computer Point</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f5f5f5;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }
        .status {
            color: red;
        }
        .subtitle {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #666;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px;
            transition: background 0.3s;
        }
        .button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    @if(session('count') == 1)
        <div class="status">
        {{ session('status') }}
         </div>
   @endif
        <div class="title">Welcome to Amar Computer Point</div>
        <div class="subtitle">Let's get you started on your journey</div>
        <a href="{{ route('login') }}" class="button">Login</a>
        <a href="{{ route('register') }}" class="button">Register</a>
    </div>
</body>
</html>
