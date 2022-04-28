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
        <ul style="background-color: crimson">
            <li>title : {{ $crime->title }}</li>
            <li>description : {{ $crime->description }}</li>
            <li>weapon used : {{ $crime->weapon->name }}</li>
            <li>date : {{ $crime->created_at }}</li>
            <li>city : {{ $crime->city->name }}</li>
            <li>country : {{ $crime->city->country->name }}</li>
            <li>victim : {{ $crime->victim }}</li>
            @if ($crime->updated_at != $crime->created_at)
                <li>modified : {{ $crime->updated_at }}</li>
            @endif
        </ul>
        <br>
    @endforeach

</x-app-layout>
