<h1>Welcome to home page</h1>

<p>Ola {{ $name }}</p>
<p>Tus habitos son:</p>
<ul>
    @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
    @endforeach
</ul>
