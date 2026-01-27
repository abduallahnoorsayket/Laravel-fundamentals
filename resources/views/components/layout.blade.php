@props([
    'title' => 'laracasts',
])

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

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

<body class="">
    {{-- <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">contact us</a>
    </nav> --}}
    <x-nav />

    <main class="max-w-3xl mx-auto px-6 mt-8 text-white">
        {{ $slot }}
    </main>



</body>

</html>
