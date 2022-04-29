<x-app-layout>
    <h1>EdiTer un cRimE</h1>
    <form method="POST" action="{{ route('custom-api.edit-crime') }}">
        @csrf
        Titre    <input type="text" placeholder="titre" name="title" value={{ $crime->title }}>
        <br>
        description   <input type="text"  name="description" value={{ $crime->description }}>
        <br>
        Victime <input type="text"  name="victim" value="{{ $crime->victim }}">
        <br>
        Arme <select name="weapon_id" value="{{ $crime->weapon_id }}">
            @foreach ($weapons as $weapon)
               <option value="{{ $weapon->id }}" > {{ $weapon->name }} </option>
            @endforeach
        </select>
            Ville <select name="city_id">
            @foreach ($cities as $city)
               <option value={{ $city->id }}> {{ $city->name }} </option>
            @endforeach
        </select>
        <button>Modifier</button>
    </form>

</x-app-layout>