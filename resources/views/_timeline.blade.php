<div class="border border-blue-400 rounded-2xl mt-4 p-2 mb-4">
    @forelse ($tweets as $tweet)
        @include ('_tweet')
    @empty
        <p class="mt-4 p-2 mb-4">No tweets yet!</p>
    @endforelse

    <div class="my-1 p-2">
        {{ $tweets->links() }}
    </div>
</div>
