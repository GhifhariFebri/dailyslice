@include('layouts/navbar')

{{-- Hero Section --}}
<section class="font-serif" style="background-color: antiquewhite">
	<div class="flex flex-col justify-center p-12 sm:py-12 lg:py-12 lg:flex-row lg:justify-between items-center">
		<div class="flex items-center justify-center pl-10 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
			<img src="/images/banners.jpg" alt="" class="object-contain h- sm:h-80 lg:h-96 xl:h-112 2xl:h-128 rounded-lg">
		</div>
		<div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
			<div class="flex items-center">
				<h1 class="text-5xl font-bold leading-none sm:text-6xl">
					Love at First Slice!
				</h1>
				<svg class="w-40 h-40 fill-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
				</svg>
			</div>
			<p class="mt-6 mb-8 text-lg sm:mb-12">
				Toko kami adalah sebuah toko yang memproduksi kue spesial dengan kualitas yang terbaik. Kelebihan kami adalah kue yang kami produksi terkenal cepat laris dan enak dimakan. Kue kami juga dipandang sebagai salah satu yang terbaik di Nusantara.
			</p>
			<div class="flex flex-col sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a href="/category" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50 transition duration-300 ease-in-out" style="background-color: #D7C096; color: #7e6b4b">
					Our Cakes!
				</a>
			</div>
		</div>
	</div>
</section>

{{-- Hero Bottom Bar --}}
<section class="font-serif">
	<div class="grid grid-cols-6">
		<div class="text-transparent select-none" style="background-color: #455662">
			SSSSSSSSSSSSSSSSS
		</div>

		<div class="text-transparent select-none col-span-2" style="background-color: #556d7d">
			SSSSSSSSSSSSSSSSS
		</div>

		<div class="text-transparent select-none col-span-3" style="background-color: #7a97ab">
			SSSSSSSSSSSSSSSSS
		</div>
	</div>
</section>

{{-- Our Cakes Homepage --}}
<div class="container pt-14 font-serif font-bold grid grid-cols-1">
	<p class="text-4xl text-center">Our Cakes!</p>
	<hr class="mx-auto w-48 h-1 rounded border-0" style="background-color: antiquewhite">

	<div class="lg:flex lg:justify-center lg:gap-10 ml-10 mt-16 text-center mx-auto pb-3 items-center">
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

{{-- Qualities List --}}
<section class="font-serif mt-40">
	<div class="lg:grid lg:grid-cols-3">
		<div class="py-10 text-center" style="background-color: #AB9163">
			<p class="font-bold text-white text-3xl" style="">Custom Cake</p>
			<p class="font-semibold pt-5 mb-5 text-amber-200">Bisa pesan sesuka hati!</p>
			<a href="/category" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50 transition duration-300 ease-in-out" style="background-color: #D7C096; color: #7e6b4b">
				Our Cakes!
			</a>
		</div>
		<div class="py-10 text-center" style="background-color: #D7C096">
			<p class="font-bold text-white text-3xl" style="">Custom Cake</p>
			<p class="font-semibold pt-5 mb-5 text-amber-200">Bisa pesan sesuka hati!</p>
			<a href="/category" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50 transition duration-300 ease-in-out" style="background-color: #D7C096; color: #7e6b4b">
				Our Cakes!
			</a>
		</div>
		<div class="py-10 text-center" style="background-color: #AB9163">
			<p class="font-bold text-white text-3xl" style="">Custom Cake</p>
			<p class="font-semibold pt-5 mb-5 text-amber-200">Bisa pesan sesuka hati!</p>
			<a href="/category" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50 transition duration-300 ease-in-out" style="background-color: #D7C096; color: #7e6b4b">
				Our Cakes!
			</a>
		</div>
	</div>
</section>

{{-- Call to Action Btm --}}
<section class="font-serif">
	<div class="flex flex-col justify-center lg:flex-row lg:justify-between items-center">
		<div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left lg:pl-20">
			<div class="flex items-center">
				<h1 class="text-5xl font-bold leading-none sm:text-6xl">
					Love at First Slice!
				</h1>
			</div>
			<p class="mt-6 mb-8 text-lg sm:mb-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quibusdam, maxime ad voluptatum aliquid, explicabo atque dicta commodi incidunt pariatur omnis nesciunt culpa sunt sapiente dignissimos expedita saepe eaque ducimus?
			</p>
			<div class="flex flex-col sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a href="/category" class="transform text-lg font-semibold rounded px-5 py-2 motion-safe:hover:scale-110 focus:opacity-50" style="background-color: #D7C096; color: #7e6b4b">
					Our Cakes!
				</a>
			</div>
		</div>

		<div class="flex flex-col w-1/2">
			<img src="/images/homeimage.jpg">
		</div>
	</div>
</section>

{{-- CTA Bottom Bar --}}
<section class="font-serif">
	<div class="grid grid-cols-6">
		<div class="text-transparent select-none" style="background-color: #455662">
			SSSSSSSSSSSSSSSSS
		</div>

		<div class="text-transparent select-none col-span-2" style="background-color: #556d7d">
			SSSSSSSSSSSSSSSSS
		</div>

		<div class="text-transparent select-none col-span-3" style="background-color: #7a97ab">
			SSSSSSSSSSSSSSSSS
		</div>
	</div>
</section>

{{-- Testimonies --}}
<section class="font-bold font-serif pt-10">
	<p class="text-4xl text-center">Testimonies</p>
	<hr class="mx-auto w-48 h-1 rounded border-0" style="background-color: antiquewhite">
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

					@foreach($testimony as $ts)
					<div class="flex flex-shrink-0 relative max-w-xs">
						<img src="/images/{{$ts['testimony_image']}}" class="object-cover object-center w-full" />
						<div class="absolute w-full h-full p-6">
							<div class="flex h-full items-end pb-6">
							</div>
						</div>
					</div>
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

@include('layouts/footer')