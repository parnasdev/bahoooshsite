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
    @auth
        <livewire:panel.section.sidebar-mobile-panel/>
        <main>
            <article class="article-controller">
                <section class="s-container">
                    <div class="container-fluid">
                        {{-- parent data --}}
                        <div class="p-container d-flex p-0">
                            {{-- right --}}
                            <livewire:panel.section.sidebar-panel/>
                            {{-- left --}}
                            <div class="left flex-79 m-right-auto m-mb-37">
                                {{-- row data --}}
                                <livewire:panel.section.header/>
                                {{-- row data --}}
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </main>
    @endauth
    @guest
        {{ $slot }}
    @endguest
    <script src="/assets/jquery/dist/jquery-3.3.1.min.js"></script>
    <script src="/assets/plugins/tinymce/jquery.tinymce.min.js"></script>
    <script src="/assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="/assets/chart/chart.js"></script>
    @stack('scripts')
    @livewire('wire-elements-modal')
    <x-utils.panel-alert />
    </body>
</html>
