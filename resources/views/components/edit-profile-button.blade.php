@if (auth()->user()->is($user))
    <form method="POST" action="/profiles/{{ $user->username }}/edit">
        @csrf
        <button type="" class="rounded-full border border-gray-400 hover:bg-gray-300 py-2 lg:px-4 px-1 text-black text-xs mr-4">Edit Profile</button>
       
    </form>
@endif