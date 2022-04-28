<x-app-layout>
  <h1>Profile</h1>
  <h2>Hello {{ $user['name'] }}</h2>

    @foreach ($crimes as $crime)
    <ul>
      <li>{{ $crime['title'] }}</li>
      <li>{{ $crime['description'] }}</li>
      <li>{{ $crime['weapon_id'] }}</li>
      <li>{{ $crime['created_at'] }}</li>
    </ul>
    @endforeach
  
</x-app-layout>
