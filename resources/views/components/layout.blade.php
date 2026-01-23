@props([
    'title' => 'laracasts',
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* nav>a {
            color: blue;
        }

        .card {
            background: #e3e3e3;
            padding: 1rem;
            text-align: center;
        }

        .max-w-400 {
            max-width: 400px;
            margin: auto;
        } */
    </style>
</head>

<body class="bg-gray-700">
    <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">contact us</a>
    </nav>
    <main>
        {{ $slot }}
    </main>



</body>

</html>
