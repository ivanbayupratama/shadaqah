<x-Admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-center text-xl font-semibold mb-8">Pilih Salah Satu Metode Pembayaran</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="flex flex-col items-center bg-white border rounded-lg shadow-md p-4">
                    <img src="https://dashboard.laznasdewandakwah.or.id/storage/galleries/2022/3/1646109577va%20bca%20kotak..jpg" alt="BCA Virtual Account" class="h-auto max-w-full mb-4">
                    <p class="text-sm font-medium">BCA Virtual Account</p>
                    <button class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600">
                        Pilih
                    </button>
                </div>
                <div class="flex flex-col items-center bg-white border rounded-lg shadow-md p-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCkxyXF5_jCCT4TbVJGYi2S4ujD3MrMDyUaA&s" alt="GO-Pay" class="h-auto max-w-full mb-4">
                    <p class="text-sm font-medium">GO-Pay</p>
                    <button class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600">
                        Pilih
                    </button>
                </div>
                <div class="flex flex-col items-center bg-white border rounded-lg shadow-md p-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF8oAaV74uqw4x4nwemKsuinvizCydhfaBiA&s" alt="BNI Virtual Account" class="h-auto max-w-full mb-4">
                    <p class="text-sm font-medium">BNI Virtual Account</p>
                    <button class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600">
                        Pilih
                    </button>
                </div>
                <div class="flex flex-col items-center bg-white border rounded-lg shadow-md p-4">
                    <img src="https://static.vecteezy.com/system/resources/previews/007/165/323/non_2x/credit-cards-credit-card-icon-isolated-on-white-background-credit-card-icon-design-illustration-credit-card-simple-sign-free-vector.jpg" alt="Kartu Kredit" class="h-auto max-w-full mb-4">
                    <p class="text-sm font-medium">Kartu Kredit</p>
                    <button class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600">
                        Pilih
                    </button>
                </div>
                <div class="flex flex-col items-center bg-white border rounded-lg shadow-md p-4">
                    <img src="https://images.seeklogo.com/logo-png/33/1/indomaret-logo-png_seeklogo-339890.png?v=638687080320000000" alt="Indomaret" class="h-auto max-w-full mb-4">
                    <p class="text-sm font-medium">Indomaret</p>
                    <button class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Admin.layout>