<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-client.navbar />
    {{ $slot }}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
