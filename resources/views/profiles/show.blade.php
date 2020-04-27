<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="Banner" class="mb-2">
            <img src="{{ $user->avatar }}" alt="Avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" style="left:50%">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">{{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a
                        class="rounded-full border border-gray-300 py-2 px-4 text-blue text-xs mr-2"
                        href="{{ $user->path('edit') }}"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad commodi culpa debitis distinctio, eligendi, excepturi laboriosam necessitatibus odio perspiciatis quidem quis? Distinctio ex, laborum nisi placeat saepe ullam voluptas.</p>



    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
