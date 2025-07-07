<x-layout>
    <x-slot:data>{{ $title }}</x-slot:data>
  <div class="grid place-items-center mt-14">
<div class="border border-blue-200 shadow-md p-4 rounded-md bg-white w-[800px] h-[400]">
  {{-- Menampilkan semua error --}}
@if ($errors->any())
        <ul class="list-disc pl-5 text-red-500">
            @foreach ($errors->all() as $error)
                <li><p>nama produk sudah ada</p></li> {{-- Termasuk error "The name has already been taken." --}}
            @endforeach
        </ul>
@endif
    <div class="w-full h-90 p-2 border border-gray-300 rounded resize-none focus:outline-none focus:ring-2 focus:ring-blue-400">
        <form action="/updated/{{ $product->id }}" method="post" >
          @csrf
          @method('PUT')
  <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="nama" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('nama', $product->nama) }}" required />
      <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">nama</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="number" name="harga" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('harga', $product->harga) }}" required />
      <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">harga</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="number" name="stok" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('stok', $product->stok) }}" required />
      <label for="stok" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">stok</label>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
  
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </div>
</form>
</div>

    <div class="flex justify-start gap-2 mt-4 bg-gray-100 p-2 rounded">
      <a href="/"><button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Load</button></a>
      <a href="/insert"><button class="{{ request()->is('insert') ? 'px-4 py-1 border border-gray-400 bg-blue-500 rounded' : 'x-4 py-1 border border-gray-400 rounded'}} px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Insert</button></a>
      <a href="/update"><button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Update</button></a>
      <button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Delete</button>
    </div>
  </div>

</x-layout>