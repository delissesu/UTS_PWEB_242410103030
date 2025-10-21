<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'naver-saving-app')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f1419;
            color: #d1d5db;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        main {
            flex: 1;
            padding: 20px;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }
        
        h1 {
            color: #ffffff;
            margin-bottom: 20px;
            font-size: 28px;
        }
        
        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        a {
            color: #10b981;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        a:hover {
            color: #34d399;
            text-decoration: underline;
        }
        
        input[type="text"],
        input[type="password"] {
            background-color: #1a1f2e;
            border: 1px solid #2d3748;
            color: #d1d5db;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            max-width: 400px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        input:focus {
            outline: none;
            border-color: #10b981;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #9ca3af;
            font-size: 14px;
            font-weight: 600;
        }
        
        button {
            background-color: #10b981;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.2s;
        }
        
        button:hover {
            background-color: #059669;
        }
        
        button:active {
            background-color: #047857;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1a1f2e;
            border-radius: 8px;
            overflow: hidden;
        }
        
        th {
            background-color: #111827;
            color: #ffffff;
            padding: 12px;
            text-align: left;
            font-weight: 600;
        }
        
        td {
            padding: 12px;
            border-top: 1px solid #2d3748;
        }
        
        tr:hover {
            background-color: #1f2937;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>