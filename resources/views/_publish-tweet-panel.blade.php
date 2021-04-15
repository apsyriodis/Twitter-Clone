@auth
    <div class="border border-blue-400 rounded-2xl py-6 px-8">
        <form method="POST" action="/tweets">
            @csrf

            <textarea 
                name="body"
                class="w-full bg-indigo-50 bg-opacity-0"
                placeholder="What's happening?"     
                required            
            ></textarea>

            <hr class="my-4">

            <footer class="flex justify-between">
                <a href="{{ route('profile', auth()->user()) }}">
                    <img
                    src="{{ auth()->user()->avatar }}"
                    alt="my_avatar"
                    class="rounded-full mr-2"
                    width="40"
                    height="40"
                    >
                </a>
                    <button type="sumbit" class="shadow py-3 px-4 text-white rounded-3xl bg-blue-500 hover:bg-blue-600">Tweet</button>
            </footer>

        </form>

            @error('body') <!-- δηλαδή αν γίνει έρρορ στο textarea  --> 
                <p class="text-red-500 text-sm text-center">{{ $message }}</p>
            @enderror
    </div>
@endauth
