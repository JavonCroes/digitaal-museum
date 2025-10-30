<h1>{{ $exposition->title }}</h1>

<p><strong>Jaar:</strong> {{ $exposition->year }}</p>

<img src="{{ $exposition->image }}" alt="{{ $exposition->title }}" width="400">

<p>{{ $exposition->description }}</p>

<a href="/geschiedenis">← Terug naar Geschiedenis</a>
