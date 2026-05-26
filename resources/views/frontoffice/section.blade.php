<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $section->seo_title ?? $section->title }}</title>
    <meta name="description" content="{{ $section->seo_description }}">
</head>
<body>
    <!-- Header pub -->
    <header>
        @foreach($ads->where('location', 'header') as $ad)
            {!! $ad->content !!}
        @endforeach
    </header>

    <!-- Section principale -->
    <main>
        <h1>{{ $section->title }}</h1>
        <p>{{ $section->content }}</p>
    </main>

    <!-- Sidebar pub -->
    <aside>
        @foreach($ads->where('location', 'sidebar') as $ad)
            {!! $ad->content !!}
        @endforeach
    </aside>

    <!-- Footer pub -->
    <footer>
        @foreach($ads->where('location', 'footer') as $ad)
            {!! $ad->content !!}
        @endforeach
    </footer>
</body>
</html>
