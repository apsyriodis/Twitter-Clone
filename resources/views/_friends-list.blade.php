@auth
    <h3 class="font-bold text-lg mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="mb-4">
                <a href="{{ route('profile', $user) }}">
                    <div class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >


                        {{ $user->name }}
                    </div>
                </a>
            </li>
        @empty
            <p class="mb-4">No friends yet!</p>
        @endforelse
    </ul>
    {{-- <div class="mt-4 mb-1">
        {{ $users->links() }}
    </div> --}}
@endauth
