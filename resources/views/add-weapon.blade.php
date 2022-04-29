<x-app-layout>
    <h1>WeApOnS</h1>
    <h2>Weapons available</h2>
    <div>
        @foreach ($weapons as $weapon)
            <span>
                {{ $weapon->name }} - <i>{{ $weapon->type }}</i>
            </span>
            <span style="margin-right: 16px; margin-left: 16px;">|</span>
        @endforeach
    </div>
    <h2>Add a weapon of ur choice</h2>
    <form method="POST" action="{{ route('custom-api.add-weapon') }}">
        @method('POST')
        @csrf
        Name <input type="text" placeholder="titre" name="name">
        <br>
        Type <input type="text" placeholder="type" name="type">
        <br>
        <button>add weapon</button>
    </form>
</x-app-layout>
