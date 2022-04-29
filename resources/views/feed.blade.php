<x-app-layout>
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                {{ __('Log Out') }}
            </button>
        </form>
        <a href="{{ route('add-crime-page') }}">Ajouter un crime </a>
    @else
        <a href="{{ route('login') }}">
            Login
        </a>
        <a href="{{ route('register') }}">
            Register
        </a>
    @endauth
    <h1>
        Feed
    </h1>

    @auth
        @if(count($crimes) > 0)
            @foreach($crimes as $crime)
                <article>
                    <h2>
                        {{ $crime->title }}
                    </h2>
                    <p>
                        Victime : {{ $crime->victim }}
                    </p>
                    <p>
                        {{ $crime->description }}
                    </p>
                    <a href="{{ route('edit-crime-page', ["id" => $crime->id]) }}">
                        Modifier
                    </a>
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
