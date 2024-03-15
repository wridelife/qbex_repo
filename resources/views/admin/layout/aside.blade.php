<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="fixed py-4 text-gray-500 dark:text-gray-400 overflow-hidden h-screen" style="width: inherit">
        <div class="flex flex-row pl-4">
            <img class="h-8" src="{{ url('storage/'.config('constants.site_logo')) }}" alt="" width="">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('admin.home') }}">
                {{ config('constants.site_title') }}
            </a>
        </div>
        <ul id="navSide" class="mt-6 overflow-scroll h-full pb-6">
            @include('admin.layout.nav_content')
        </ul>
    </div>
</aside>
<script>
    $(document).ready(function() {

var $scroll = $('#navSide');
console.log($scroll);
if ($('li.active').length)
   $scroll.scrollTop($(this).position().top + $scroll.scrollTop())

});
</script>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
</div>

<!-- Mobile Navigation  -->
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <div class="flex flex-wrap justify-center py-5">
            <img class="h-8" src="{{ url('storage/'.config('constants.site_logo')) }}" alt="" width="">
            <a class="ml-1 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('admin.home') }}">
                {{ config('constants.site_title') }} 
            </a>
        </div>
        <ul class="mt-2">
            @include('admin.layout.nav_content')
        </ul>
    </div>
</aside>