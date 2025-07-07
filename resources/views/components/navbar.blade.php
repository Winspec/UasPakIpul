 <nav class="bg-gray-800 sticky top-0">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY40bN7OvdXjwEoLwlK_9RnD3Iy4rE6H0meg&s" alt="Your Company" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white">Dashboard</a>
              <a href="/team" class="{{ request()->is('team') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white">Team</a>
            </div>
          </div>
        </div>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-hidden focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="https://yt3.googleusercontent.com/ytc/AIdro_kUEklB8HVKDkyUXSIffNFYFhIRrF7qeHg1atfd4xuMLg=s900-c-k-c0x00ffffff-no-rj" alt="" />
                </button>
              </div>
        </div>
      </div>
    </div>
  </nav>