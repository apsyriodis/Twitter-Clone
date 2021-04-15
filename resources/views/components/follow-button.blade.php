<form method="POST" action="/profiles/{{ $user->username }}/follow">
    @csrf
    @if (! (auth()->user()->id === $user->id) )
    <!-- if (auth()->user()->is($user)) -->
        <button type="sumbit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 lg:px-4 px-1 text-white text-xs mr-4">
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    @endif
</form>