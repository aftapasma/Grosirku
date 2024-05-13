<x-admin-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <form action="/customers/" class="p-4">
                <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
                <div class="relative">
                  <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                  </div>
                  <input type="search" id="default-search" name="search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Cari  nama pelanggan" required />
                  <button type="submit" class="absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                </div>
              </form>
            <div class="overflow-x-auto bg-white shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                  <table class="w-full min-w-max table-auto text-left">
                    <thead>
                      <tr>
                        <th class="border-blue-gray-100 bg-blue-gray-50/50 border-y p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">Nama</p>
                        </th>
                        <th class="border-blue-gray-100 bg-blue-gray-50/50 border-y p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">Email</p>
                        </th>
                        <th class="border-blue-gray-100 bg-blue-gray-50/50 border-y p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">No Telepon</p>
                        </th>
                        <th class="border-blue-gray-100 bg-blue-gray-50/50 border-y p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">Alamat</p>
                        </th>
                        <th class="border-blue-gray-100 bg-blue-gray-50/50 border-y p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70"></p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($customers as $customer)
                        <td class="border-blue-gray-50 border-b p-4">
                          <div class="flex items-center gap-3">
                            <p class="text-blue-gray-900 block font-sans text-sm font-bold leading-normal antialiased">{{$customer->name}}</p>
                          </div>
                        </td>
                        <td class="border-blue-gray-50 border-b p-4">
                          <div class="w-max">
                            <div class="relative grid select-none items-center whitespace-nowrap rounded-md bg-blue-400 px-2 py-1 font-sans text-xs font-bold text-white" style="opacity: 1;">
                              <span class="">{{$customer->email}}</span>
                            </div>
                          </div>
                        </td>
                        <td class="border-blue-gray-50 border-b p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-semibold leading-normal antialiased">{{$customer->telp}}</p>
                        </td>
                        <td class="border-blue-gray-50 border-b p-4">
                          <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-normal antialiased">{{$customer->address}}</p>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </x-admin-layout>