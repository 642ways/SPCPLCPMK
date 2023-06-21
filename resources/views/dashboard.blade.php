<x-app-layout>
    <div class="flex flex-col-1 md:flex-row">
        <!-- Sidebar -->
        <x-sidebar/>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto bg-white static ">
            <main class="w-full bg-white">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg mt-24">
                        <h1 class="p-6 text-3xl text-black font-bold">Welcome to Dashboard</h1>
                        <div class="p-6 text-black">
                            <p class="text-lg">{{ __("Selamat datang di sistem penilaian CPL & CPMK Teknik Komputer") }}</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
