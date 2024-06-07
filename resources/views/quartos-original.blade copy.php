<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Quartos List</h1>
        @foreach ($quartos as $quarto)
        <h2><a href="{{ url('quarto/' . $quarto->id) }}">{{ $quarto->title }}</a></h2>

            <p>{{ $quarto->title }}: {{ $quarto->email }}</p> <!-- Adjust to your actual field names -->
        @endforeach
    </body>
</html>
