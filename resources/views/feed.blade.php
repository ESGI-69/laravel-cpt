<x-app-layout>
    <h1>
        Feed
    </h1>
    @auth
    <a href="{{ route('add-crime-page') }}">Ajouter un crime </a>
        @if(count($crimes) > 0)
            @foreach($crimes as $crime)
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
            @endforeach
            {{ $crimes->links() }}
        @else
            <p><b>There is no crime on record.</b></p>
            <a href="{{ route('add-crime-page') }}" >Add your crime to the record now for free !!!</a>
        @endif
    @else
        <p>You need to login to view posts</p>
    @endauth
</x-app-layout>
