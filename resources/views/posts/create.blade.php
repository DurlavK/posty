<x-app-layout>
  <div class="w-1/2 mx-auto mt-2">
    @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    <form action="{{route('posts.store')}}" method="POST">
      @csrf
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="title" class="block text-sm font-medium text-gray-700">
                Title
              </label>
              <div class="mt-1 flex flex-wrap rounded-md shadow-sm">
                <input type="text" name="title" id="title" value="{{ old('title') }}" 
                class="@error('title') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Title of your post">
                @error('title')
                  <div class="text-red-500">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>

          <div>
            <label for="body" class="block text-sm font-medium text-gray-700">
              Body
            </label>
            <div class="mt-1">
              <textarea id="body" name="body" rows="3" value="{{ old('body') }}" 
              class="@error('body') is-invalid @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Body of your post"></textarea>
              @error('body')
                <div class="text-red-500">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-center sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</x-app-layout>