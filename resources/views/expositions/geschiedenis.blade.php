<h1>Geschiedenis Pagina</h1>

@foreach ($expositions as $exposition)
    <div style="margin-bottom: 30px;">
        <h2>
            <a href="{{ route('expositie.show', $exposition->id) }}">
                {{ $exposition->title }}
            </a>
        </h2>
        <p>{{ Str::limit($exposition->description, 200) }}</p>
        <a href="{{ route('expositie.show', $exposition->id) }}">Lees meer →</a>
    </div>
@endforeach
