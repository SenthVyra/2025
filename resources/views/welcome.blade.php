<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet with Livewire</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    @livewireStyles
</head>
<body>
    <div class="container">
        <h1 class="my-5">Map with Draggable Markers</h1>

        <!-- Livewire Map Component -->
        @livewire('map-component')

    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    @stack('scripts') <!-- Ensure that the Livewire component's JS is included here -->
</body>
</html>
