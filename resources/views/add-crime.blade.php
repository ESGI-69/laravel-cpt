<x-app-layout>
    <h1>Ajouter un crime</h1>
    <form action="{{ route('api.add-crime') }}" method="POST">
        Titre    <input type="text" placeholder="titre" name="title">
        <br>
        description    <input type="text"  name="description">
        <br>
        Victime <input type="text"  name="victim">
        <br>
        Arme <select name="weapon">
            @foreach ($weapons as $weapon)
               <option> {{ $weapon }} </option>
            @endforeach
        </select>
        <button>Ajouter</button>
    </form>

</x-app-layout>