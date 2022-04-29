<x-app-layout>
    <h1>WeApOnS</h1>
    <h2>Weapons available</h2>
    <div>
        @foreach ($weapons as $weapon)
            <span>
                {{ $weapon->name }} - <i>{{ $weapon->wtype->name}}</i>
            </span>
            <span style="margin-right: 16px; margin-left: 16px;">|</span>
        @endforeach
    </div>

    <h2>Add a weapon of ur choice</h2>
    <form method="POST" action="{{ route('custom-api.add-weapon') }}">
        @csrf
        Name <input type="text" placeholder="titre" name="name">
        <br>
        Type <select name="wtype_id">
          @foreach ($wtypes as $wtype)
            <option value={{ $wtype->id }}> {{ $wtype->name }} </option>
          @endforeach
        </select>
        <br>
        <button>add weapon</button>
    </form>

    <h2>No weapon's type fitting ? Add one !</h2>
    <form method="POST" action="{{ route('custom-api.add-wtype') }}">
      @csrf
      Name <input type="text" placeholder="type" name="name">
      <button>add type</button>
    </form>
</x-app-layout>
