<x-layout>
  <x-slot:data>{{ $title }}</x-slot:data>
  <div class="grid place-items-center mt-14">
<div class="border border-blue-200 shadow-md p-4 rounded-md bg-white w-[800px] h-[400]">
    <div class="w-full h-90 p-0 border border-gray-300 rounded resize-none focus:outline-none focus:ring-2 focus:ring-blue-400 overflow-y-auto">
 <form action="/delete" id="deleteForm" method="POST" onsubmit="return confirm('Yakin hapus semua yang dipilih?')">
    @csrf
     @method('DELETE')       
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
            <tr class>
                <th scope="col" class="px-6 py-3">
                    nomor
                </th>
                <th scope="col" class="px-6 py-3">
                   nama
                </th>
                <th scope="col" class="px-6 py-3">
                    harga
                </th>
                <th scope="col" class="px-6 py-3">
                    stok
                </th>
                <th class="border px-4 py-2">
                    <input type="checkbox" id="checkAll">
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $r)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $key+1 }}
                </th>
                <td class="px-6 py-4">
                    {{ $r->nama }}
                </td>
                <td class="px-6 py-4">
                    {{ $r->harga }}
                </td>
                <td class="px-6 py-4">
                    {{ $r->stok }}
                </td>
                <td class="border px-4 py-2 text-center">
                    <input type="checkbox" name="ids[]" value="{{ $r->id }}">
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>
    </form>
</div>

    <div class="flex justify-start gap-2 mt-4 bg-gray-100 p-2 rounded">
      <link href="/"><button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Load</button>
      <a href="/insert"><button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Insert</button></a>
      <a href="/update"><button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Update</button></a>
      <button onclick="document.getElementById('deleteForm').submit();" class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">delete</button>
      {{-- <button class="px-4 py-1 border border-gray-400 rounded hover:bg-blue-200">Delete</button> --}}
    </div>

  </div>
  </div>
  {{-- Optional: Select All Script --}}
<script>
    document.getElementById('checkAll').onclick = function() {
        let checkboxes = document.getElementsByName('ids[]');
        for (let checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
</script>
</x-layout>