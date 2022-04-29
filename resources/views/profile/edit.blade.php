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

</x-app-layout>