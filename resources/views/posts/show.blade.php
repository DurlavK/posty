<x-app-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-1/2 mx-auto">
            <div class="p-6 bg-white border-b border-gray-200">
              <p class="text-xl my-3">{{$post->title}}</p>
              <p class="">{{$post->body}}</p>
              
              <a href="{{route('posts.edit', $post->id)}}"><span class="fas fa-edit"></span></a>
              
              <span class="fas fa-times cursor-pointer" 
              onclick="event.preventDefault(); 
              if(confirm('Are you sure?')){
              document.getElementById('form-delete-{{$post->id}}').submit()}"></span>
              <form style="display:none" 
              method="post"
              id="{{'form-delete-'.$post->id}}"
              action="{{route('posts.destroy',$post->id)}}">
              @csrf
              @method('delete')
              </form>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>