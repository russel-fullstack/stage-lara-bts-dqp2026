<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GestAcad — Gestion de la structure académique">
    <title>@yield('title', 'GestAcad') — GestAcad</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 antialiased">

    <div class="flex h-screen overflow-hidden">

        {{-- ═══════════════════════════════════════
             SIDEBAR
        ═══════════════════════════════════════ --}}
        <aside class="w-64 shrink-0 bg-white border-r border-gray-200 flex flex-col overflow-y-auto">
     </aside>

      {{-- ═══════════════════════════════════════
             CONTENU PRINCIPAL
        ═══════════════════════════════════════ --}}
        <div class="flex-1 flex flex-col overflow-hidden">

            {{-- Topbar --}}
            <header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between shrink-0">
                {{-- <x-breadcrumb :items="$breadcrumbs ?? []" /> --}}
                <div class="flex items-center gap-2">
                    @yield('actions')
                </div>
            </header>

 {{-- Flash messages --}}
    {{-- Contenu --}}
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>
