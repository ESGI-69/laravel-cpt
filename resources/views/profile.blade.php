<x-app-layout class="app">
    <h1>Profile</h1>
    <h2>Hello {{ $user->name }}</h2>
    {{-- @dd($crimes) --}}
    <h3>My infos</h3>
    <ul style="background-color: cornflowerblue; list-style-type: disclosure-closed;">
        <li> name : {{ $user->name }}</li>
        <li> email : {{ $user->email }}</li>
        <li> last edit : {{ $user->updated_at }}</li>
        <a href="{{ route('my.edit', ['user' => $user->id]) }}" class="">Edit profile</a>
    </ul>
    <br>

    <h3>My crimes</h3>
    @foreach ($crimes as $crime)
        <article>
            <h2>
                {{ $crime->title }}
            </h2>
            <p>
                {{ $crime->description }}
            </p>
            <p>
                Victime : {{ $crime->victim }}
            </p>
            <p>
                Weapon : {{ $crime->weapon->name }}
            </p>
            <p>
                City : {{ $crime->city->name }} ({{ $crime->city->country->name }})
            </p>
            <p>
                Criminal : {{ $crime->user->name }}
            </p>
            @if($crime->user->id === $currentAuthUserId)
                <form method="GET" action="{{ route('edit-crime-page', ['id' => $crime->id]) }}">
                    @csrf
                    <button type="submit">
                        Edit
                    </button>
                </form>
                <form method="POST" action="{{ route('custom-api.delete-crime', ['id' => $crime->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        Delete
                    </button>
                </form>
            @endif
        </article>
        <br>
    @endforeach

</x-app-layout>
