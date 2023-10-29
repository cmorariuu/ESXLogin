<!DOCTYPE html>
<html>
<head>
    <title>Cars</title>
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <label for="filter">Enter Car Model:</label>
                        <input type="text" id="filter" name="filter" placeholder="Filter criteria">
                        <button onclick="filterData()">Search</button>
                    </div>
                    <div id="grid" class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ asset('js/cars.js') }}"></script>

</body>
</html>
