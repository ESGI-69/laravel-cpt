<x-app-layout>
    <h1>Ajouter un crime</h1>
    <form method="POST" action="{{ route('custom-api.add-crime') }}">
        Titre    <input type="text" placeholder="titre" name="title">
        <br>
        description    <input type="text"  name="description">
        <br>
        Victime <input type="text"  name="victim">
        <br>
        Arme <select name="weapon">
            @foreach ($weapons as $weapon)
               <option value='{{ $weapon->id }}'> {{ $weapon->name }} </option>
            @endforeach
        </select>
            Ville <select name="weapon">
            @foreach ($cities as $city)
               <option value='{{ $city->id }}'> {{ $city->name }} </option>
            @endforeach
        </select>
        <button>Ajouter</button>
    </form>

</x-app-layout>