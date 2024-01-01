<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grosirku-Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-600 text-slate-500">
    <x-sidenav />
    {{-- isian --}}
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
       <div class="grid grid-cols-3 gap-4 mb-4">
          <div class="flex items-center justify-center h-24 rounded bg-blue-100 border-2 border-black">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
             </p>
          </div>
          
          <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center p-2 text-gray-50 text-xl">
            <span class="ms-3">Pesanan terbaru</span>
         </a>
       </div>
       
       <!-- component -->
<div class="flex bg-blue-200 items-center justify-center border-2 border-black rounded">
 <table class="w-full min-w-max table-auto text-left">
   <thead>
     <tr>
       <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
         <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">ID</p>
       </th>
       <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
         <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Pelanggan</p>
       </th>
       <!-- <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
         <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Date</p>
       </th> -->
       <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
         <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Status</p>
       </th>
       <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
         <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Total</p>
       </th>
       <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
         <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70"></p>
       </th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td class="p-4 border-b border-blue-gray-50">
         <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">1</p>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <div class="flex items-center gap-3">
           <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg" alt="Spotify" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
           <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Spotify</p>
         </div>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <div class="w-max">
           <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
             <span class="">selesai</span>
           </div>
         </div>
       </td>
        <td class="p-4 border-b border-blue-gray-50">
         <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$1</p>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
           <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
               <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
             </svg>
           </span>
         </button>
       </td>
     </tr>
     <tr>
       <td class="p-4 border-b border-blue-gray-50">
         <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">1</p>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <div class="flex items-center gap-3">
           <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg" alt="Spotify" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
           <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Spotify</p>
         </div>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <div class="w-max">
           <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-amber-500/20 text-amber-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
             <span class="">pending</span>
           </div>
         </div>
       </td>
        <td class="p-4 border-b border-blue-gray-50">
         <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$1</p>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
           <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
               <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
             </svg>
           </span>
         </button>
       </td>
     </tr>
     <tr>
       <td class="p-4 border-b border-blue-gray-50">
         <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">1</p>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <div class="flex items-center gap-3">
           <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg" alt="Spotify" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
           <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Spotify</p>
         </div>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <div class="w-max">
           <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
             <span class="">cancelled</span>
           </div>
         </div>
       </td>
        <td class="p-4 border-b border-blue-gray-50">
         <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$1</p>
       </td>
       <td class="p-4 border-b border-blue-gray-50">
         <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
           <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
               <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
             </svg>
           </span>
         </button>
       </td>
     </tr>
   </tbody>
 </table>
</div>

</div>
       </div>
    </div>
 </div>
 {{-- isian --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
