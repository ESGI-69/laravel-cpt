<x-app-layout class="app">
  <h1>Edit profile</h1>
  <a href="{{ route('my') }}">⬅️ back</a>

  <form action="{{route('my.update', ['user' => $user]) }}" method="POST">
    @csrf
    @method('PATCH')
    
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    
  </form>

  {{-- 
     <form action="{{ route('messages.update', ['message' => $message]) }}" method="POST" class="flex-1">
                    @method('PATCH')
                    @csrf

                    <label class="block mb-4">
                      <span class="block">Modifier le message</span>
                      <input type="text" name="body" value="{{ $message->body }}">
                    </label>

                    <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-900 px-4 py-2 rounded">Enregistrer</button>
                  </form>
                  <form action="{{ route('messages.delete', ['message' => $message]) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="bg-red-200 hover:bg-red-300 text-red-900 px-4 py-2 rounded">Supprimer</button>
                  </form>
    --}}
</x-app-layout>