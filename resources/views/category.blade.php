@include("layouts/navbar")
    <div class="bg-white">
      <div class="mx-auto max-w-2xl py-5 px-4 sm:py-5 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="p-5 text-lg dark:text-dark font-serif font-bold">
          <p class="text-4xl text-center">Our Cakes!</p>
	        <hr class="mx-auto w-48 h-1 rounded border-0" style="background-color: antiquewhite">
        </div>
        <div class="grid grid-cols-4 gap-4">
          @foreach ($categories as $cat)
          <div class="rounded-lg shadow-lg bg-white max-w-xs hover:scale-110 transition duration-300 ease-in-out">
            <a href="/category/{{$cat['id']}}" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg object-contain max-h-xs" src="/images/{{$cat['category_img']}}">

            <div class="p-6">
            <h5 class="text-xl font-bold mb-2" style="color: #AB9163">{{$cat['category_name']}}</h5>
            <p class="text-gray-700 mb-4">
              {{$cat['category_desc']}}
            </p>
            </div>
          </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  <br>
  <br>
  <br>
  <br>
  @include("layouts/footer")
</body>