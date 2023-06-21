  <!-- start sidebar -->
  {{-- <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster ">


    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="./index.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>
        Analytics dashboard
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="./index-1.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xs mr-2"></i>
        ecommerce dashboard
      </a>
      <!-- end link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

      <!-- link -->
      <a href="./email.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-envelope-open-text text-xs mr-2"></i>
        email
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-xs mr-2"></i>
        chat
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-xs mr-2"></i>
        todo
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-calendar-edit text-xs mr-2"></i>
        calendar
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-file-invoice-dollar text-xs mr-2"></i>
        invoice
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-xs mr-2"></i>
        file manager
      </a>
      <!-- end link -->


      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">UI Elements</p>

      <!-- link -->
      <a href="./typography.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-text text-xs mr-2"></i>
        typography
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="./alert.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-whistle text-xs mr-2"></i>
        alerts
      </a>
      <!-- end link -->


      <!-- link -->
      <a href="./buttons.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cricket text-xs mr-2"></i>
        buttons
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-box-open text-xs mr-2"></i>
        Content
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-swatchbook text-xs mr-2"></i>
        colors
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-atom-alt text-xs mr-2"></i>
        icons
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-club text-xs mr-2"></i>
        card
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cheese-swiss text-xs mr-2"></i>
        Widgets
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-computer-classic text-xs mr-2"></i>
        Components
      </a>
      <!-- end link -->



    </div>
    <!-- end sidebar content -->

  </div> --}}
  <!-- end sidbar -->




    <!-- Sidebar -->
    <div class=" flex flex-col-1  bg-[#F6F1F1] h-screen border-r border-black fixed">
        <ul class="py-4 mt-16 px-5 mx-12 ">
            <li class="my-8 mx-6">
                <a href="{{ route('mahasiswa') }}" class=" inline-flex flex items-center">
                    <x-assets.user-group class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">Mahasiswa</span>
                </a>
            </li>
            <li class="my-8 mx-6">
                <a href="{{ route('matakuliah') }}" class=" inline-flex flex items-center">
                    <x-assets.book-open class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">Mata Kuliah</span>
                </a>
            </li>
            <li class="my-8 mx-6">
                <a href="{{ route('cpl') }}" class=" inline-flex flex items-center">
                    <x-assets.document-text class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">CPL</span>
                </a>
            </li>
            <li class="my-8 mx-6">
                <a href="{{ route('cpmk') }}" class=" inline-flex flex items-center">
                    <x-assets.document class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">CPMK</span>
                </a>

            </li>

            <li class="my-8 mx-6">
                    <a href="{{ route('dosen') }}" class=" inline-flex flex items-center">
                        <x-assets.user class="w-4 h-4 mr-1" />
                        <span class="ml-2 text-1xl">Data Dosen</span>
                    </a>
            </li>

            <li class="my-8 mx-6">
                  <a href="{{ route('nilai') }}" class=" inline-flex flex items-center">
                    <x-assets.clipboard-check class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">Nilai Matakuliah</span>
                </a>
            </li>

            <li class="my-8 mx-6">
                <a href="{{ route('rekap') }}" class=" inline-flex flex items-center">
                    <x-assets.document-duplicate class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">Rekap CPL</span>
                </a>

            </li>
            <li class="my-8 mx-6">
                <a href="{{ route('rapor') }}" class=" inline-flex flex items-center">
                    <x-assets.document-report class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">Rapor Jurusan</span>
                </a>
            </li>
            <li class="my-36 mx-6">
                <a href="{{ route('bukupanduan') }}" class=" inline-flex flex items-center">
                    <x-assets.briefcase class="w-4 h-4 mr-1" />
                    <span class="ml-2 text-1xl">Buku Panduan</span>
                </a>
            </li>

        </ul>



    </div>
