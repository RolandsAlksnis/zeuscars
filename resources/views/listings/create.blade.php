<x-layout>
<x-card class="p-10 max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create an advertisement
    </h2>
    <p class="mb-4">Post a car advertisement</p>
</header>

<form method="POST" action="/listings">
    @csrf
    <div class="mb-6">
        <label
            for="company"
            class="inline-block text-lg mb-2"
            >Car Make</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
        />

        @error('company')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"
            >Car Model</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"
            placeholder="Example: S-class, 840, A6, etc"
        />
        @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="location"
            class="inline-block text-lg mb-2"
            >Car Location</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="location"
            placeholder="Example: Riga, Jurmala, etc"
        />
        @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Contact Email</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
        />
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="tags"
            placeholder="Example: wagon, coupe, suv, etc"
        />
        @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Car Pictures
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
        />
        @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="description"
            class="inline-block text-lg mb-2"
        >
            Car Description
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="10"
            placeholder="Include details, specifications, mileage, etc"
        ></textarea>
        @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create a Post
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>
</x-layout>