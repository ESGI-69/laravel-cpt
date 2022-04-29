<x-app-layout>
    <h1>Mes stats</h1>
    
    <h2>Ladder</h2>
    <ul>
        @foreach($bestPlayers as $bestPlayer)
        <li> {{ $bestPlayer->name }} :{{ $bestPlayer->crime() }} </li>
        @endforeach
    </ul>

    <h2>Total Crime</h2>
    <p> {{ $totalCrime }}</p>

    <h2>Nombre de meurtres dans une ville</h2>
    <ul>
        @foreach ($cities as $city)
            <li> {{ $city->name }} : {{ $killedInCity[$city->id - 1] }} </li>
        @endforeach
    </ul>
    
    <h2>Nombre de meurtres avec une arme</h2>
        <ul>
        
        @foreach ($weapons as $weapon)
            <li> {{ $weapon->name }} : {{ $killedWeapon[$weapon->id - 1] }} </li>
        @endforeach
    </ul>
</x-app-layout>