<x-app-layout class="app">
  <h1>Profile</h1>
  <h2>Hello {{ $user['name'] }}</h2>
  {{-- @dd($crimes) --}}
    @foreach ($crimes as $crime)
    <br>
    <ul style="background-color: crimson">
      <li>title : {{ $crime->title }}</li>
      <li>description : {{ $crime->description }}</li>
      <li>weapon used : {{ $crime->weapon->name }}</li>
      <li>date : {{ $crime->created_at }}</li>
      <li>city : {{ $crime->city->name }}</li>
      <li>country : {{ $crime->city->country->name }}</li>
    </ul>
    <br>
    @endforeach
  
</x-app-layout>
