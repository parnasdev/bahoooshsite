<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}"/>
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/admin/admin.scss', 'resources/js/admin/admin.js'])
</head>
<body x-data>
{{ $slot }}
<x-utils.panel-alert/>
</body>
</html>
