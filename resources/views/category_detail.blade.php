@include("layouts/navbar")

<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="/images/{{$category['category_img']}}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">DAILYSLICE</h2>
        <h1 class="text-gray-900 text-3xl title-font font-bold mb-1 font-serif">{{$category['category_name']}}</h1>
        
          
        <p class="leading-relaxed font-serif">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
        </div>
        <div class="flex">
          <p class="font-serif font-medium text-2xl">Price Start at : {{$category['category_price']}}</p>
          <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded font-serif" type="button" data-modal-toggle="static-modal">Order This!</button>
        </div>

  <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
      <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              Data Customer
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="static-modal">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-5">
            <form action="{{route('order_data.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
              </div>
              <div class="mb-6">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon (Yang Aktif Whatsapp)</label>
                <input type="number" name="nomor_telp" class="block w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              </div>
              <div class="mb-6">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Pengiriman</label>
                <input type="text" name="alamat" class="block w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              </div>
              <div class="mb-6">
                <input type="hidden" name="categories_id" value="{{$category['id']}}" class="block p-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <div class="mt-3 flex justify-end">
                  <button type="submit" class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">Order Now</button>
                </div>
              </div>
              <div class="font-serif font-semibold text-red-500">
                Untuk Konfirmasi Order dan Konsultasi Design Cake Dilakukan Via Whatsapp
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</section>

{{-- Gallery/Pricelist --}}
<section class="font-bold font-serif pt-10">
	<div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
		<div class="w-full relative flex items-center justify-center">

			{{-- Left Arrow --}}
			<button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
				<svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>

			{{-- Testimony Content --}}
			<div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
				<div id="slider" class="flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
					
					@foreach($catimg as $img) 
          @if ($img['categories_id'] === $category['id'])
					<div class="flex flex-shrink-0 relative max-w-xs">
						<img src="/images/{{$img['category_images_img']}}" class="object-cover object-center w-full" />
						<div class="absolute w-full h-full p-6">
							<div class="flex h-full items-end pb-6">
							</div>
						</div>
					</div>
          @endif
					@endforeach

				</div>
			</div>
			{{-- Right Arrow --}}
			<button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
				<svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
		</div>
	</div>
</section>

<script>
function alert() {
  alert("Order Berhasil! Untuk Konfirmasi Order dan Konsultasi Design Melalui WhatsApp");
}

let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

</script>
  @include("layouts/footer")