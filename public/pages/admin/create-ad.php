<?php

declare(strict_types=1);
loadPartials('header');
loadPartials('navbar');

/**
 * @var $branches
 */
?>

<div class="page-wrapper toggled">
    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <div class="top-header">
            <div class="header-bar flex justify-between">
                <div class="flex items-center space-x-1">
                    <!-- Logo -->
                    <a href="#" class="xl:hidden block me-2">
                        <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                        <span class="md:block hidden">
                            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                        </span>
                    </a>
                    <!-- Logo -->

                    <!-- show or close sidebar -->
                    <a id="close-sidebar" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" href="javascript:void(0)">
                        <i data-feather="menu" class="size-4"></i>
                    </a>
                    <!-- show or close sidebar -->

                    <!-- Searchbar -->
                    <div class="ps-1.5">
                        <div class="form-icon relative sm:block hidden">
                            <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                            <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </div>
                    <!-- Searchbar -->
                </div>

                <ul class="list-none mb-0 space-x-1">
                    <!-- Country Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <img src="assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="list-none py-2 text-start">
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <img src="assets/images/flags/germany.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> German
                                    </a>
                                </li>
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <img src="assets/images/flags/italy.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Italian
                                    </a>
                                </li>
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <img src="assets/images/flags/russia.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Russian
                                    </a>
                                </li>
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <img src="assets/images/flags/spain.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Spanish
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Country Dropdown -->

                    <!-- Notification Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <i data-feather="bell" class="size-4"></i>
                            <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <span class="px-4 py-4 flex justify-between">
                                <span class="font-semibold">Notifications</span>
                                <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                            </span>
                            <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="shopping-cart" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block">Order Complete</span>
                                                <small class="text-slate-400">15 min ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <img src="assets/images/client/04.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Message</span> from Luis</span>
                                                <small class="text-slate-400">1 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="dollar-sign" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">One Refund Request</span></span>
                                                <small class="text-slate-400">2 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="truck" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block">Delivered your Order</span>
                                                <small class="text-slate-400">5 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Notification Dropdown -->

                    <!-- User/Profile Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <img src="assets/images/client/01.jpg" class="size-6 rounded-md" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="list-none py-2 text-start">
                                <li class="my-1">
                                    <a href="profile.html" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <i data-feather="user" class="size-4 me-2"></i> Profile
                                    </a>
                                </li>
                                <li class="my-1">
                                    <a href="profile.html#settings" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <i data-feather="settings" class="size-4 me-2"></i> Settings
                                    </a>
                                </li>
                                <li class="my-1">
                                    <a href="auth-login.html" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                        <i data-feather="log-out" class="size-4 me-2"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- User/Profile Dropdown -->
                </ul>
            </div>
        </div>
        <!-- Top Header -->

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Start Content -->
                <div class="md:flex justify-between items-center">
                    <h5 class="text-lg font-semibold">Add Property</h5>
                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="index.html">Hously</a></li>
                        <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Add Property</li>
                    </ul>
                </div>

                <div class="container relative">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                            <div>
                                <p class="font-medium mb-4">Upload your property image here. Click the "Upload Image" Button.</p>
                                <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">Supports JPG, PNG, and MP4 videos. Max file size: 10MB.</div>
                                <input form="ads-create" type="file" id="input-file" name="image" accept="image/*" onchange="handleChange()" hidden>
                                <label class="btn-upload btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-6 cursor-pointer" for="input-file">Upload Image</label>
                            </div>
                        </div>

                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                            <form id="ads-create" action="/ads/create" method="post" enctype="multipart/form-data">
                                <div class="grid grid-cols-12 gap-5">
                                    <!-- Title -->
                                    <div class="col-span-12">
                                        <label for="title" class="font-medium">Title</label>
                                        <input name="title" id="title" type="text" class="form-input mt-2" placeholder="Ads Title :">
                                    </div>

                                    <!-- Description -->
                                    <div class="md:col-span-4 col-span-12">
                                        <label for="desc" class="font-medium">Description</label>
                                        <div class="form-icon relative mt-2">
                                            <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                            <textarea name="desc" id="desc" class="form-input ps-11" placeholder="Description of the ad..."></textarea>
                                        </div>
                                    </div>

                                    <!-- Branch -->
                                    <div class="md:col-span-4 col-span-12">
                                        <label for="branch_id" class="font-medium">Branch</label>
                                        <select name="branch_id" id="branch_id" class="form-input mt-2">
                                            <?php foreach ($branches as $branch): ?>
                                                <option value="<?php echo $branch->id; ?>">
                                                    <?php echo $branch->name; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Hidden User ID -->
                                    <div class="md:col-span-4 col-span-12 hidden">
                                        <div class="form-icon relative mt-2">
                                            <input name="user" value="5" type="number" class="form-input ps-11">
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="md:col-span-4 col-span-12">
                                        <label for="address" class="font-medium">Address</label>
                                        <input name="address" id="address" type="text" class="form-input mt-2" placeholder="Address:">
                                    </div>

                                    <!-- Price -->
                                    <div class="col-span-12">
                                        <label for="price" class="font-medium">Price:</label>
                                        <div class="form-icon relative mt-2">
                                            <i class="mdi mdi-currency-usd absolute top-2 start-4 text-green-600"></i>
                                            <input name="price" id="price" type="number" class="form-input ps-11" placeholder="Price($) :">
                                        </div>
                                    </div>

                                    <!-- Rooms -->
                                    <div class="col-span-12">
                                        <label for="rooms" class="font-medium">Rooms:</label>
                                        <div class="form-icon relative mt-2">
                                            <input name="rooms" id="rooms" type="number" class="form-input ps-11" placeholder="Rooms :">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Property</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
            <div class="container-fluid">
                <div class="grid grid-cols-1">
                    <div class="sm:text-start text-center mx-md-2">
                        <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Designed with <i class="mdi mdi-heart text-red-600"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </main>
    <!-- End Page Content -->
</div>
