<aside
    class="font-sans max-w-62.5 md:max-w-62.5 xl:max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-8 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between rounded-3xl  bg-white p-0 antialiased shadow-2xl transition-transform duration-200 xl:translate-x-0 xl:bg-transparent max-h-none md:max-h-none xl:max-h-none 2xl:max-h-none overflow-y-auto">
    <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
        sidenav-close></i>
    <a class="block p-4 text-2xl text-slate-700" href="{{ route('dashboard') }}">
        <div class="text-center mx-auto">
            <img class="text-center mx-auto h-fit w-10" src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
        <div>
            <h1 class="font-bold text-center text-base">Sivinaries</h1>
            <h1 class="font-bold text-center text-base">Projects Management System</h1>
        </div>
    </a>
    <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black to-transparent" />
    <div class="items-center md:items-center xl:items-center 2xl:items-center block grow basis-full">
        <ul class="flex flex-col xl:flex-col md:flex-col 2xl:flex-col">
            <li class="mt-5">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="{{ route('dashboard') }}">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.18753 11.3788C4.03002 11.759 4 11.9533 4 12V20.0018C4 20.5529 4.44652 21 5 21H8V15C8 13.8954 8.89543 13 10 13H14C15.1046 13 16 13.8954 16 15V21H19C19.5535 21 20 20.5529 20 20.0018V12C20 11.9533 19.97 11.759 19.8125 11.3788C19.6662 11.0256 19.4443 10.5926 19.1547 10.1025C18.5764 9.1238 17.765 7.97999 16.8568 6.89018C15.9465 5.79788 14.9639 4.78969 14.0502 4.06454C13.5935 3.70204 13.1736 3.42608 12.8055 3.2444C12.429 3.05862 12.1641 3 12 3C11.8359 3 11.571 3.05862 11.1945 3.2444C10.8264 3.42608 10.4065 3.70204 9.94978 4.06454C9.03609 4.78969 8.05348 5.79788 7.14322 6.89018C6.23505 7.97999 5.42361 9.1238 4.8453 10.1025C4.55568 10.5926 4.33385 11.0256 4.18753 11.3788ZM10.3094 1.45091C10.8353 1.19138 11.4141 1 12 1C12.5859 1 13.1647 1.19138 13.6906 1.45091C14.2248 1.71454 14.7659 2.07921 15.2935 2.49796C16.3486 3.33531 17.4285 4.45212 18.3932 5.60982C19.3601 6.77001 20.2361 8.0012 20.8766 9.08502C21.1963 9.62614 21.4667 10.1462 21.6602 10.6134C21.8425 11.0535 22 11.5467 22 12V20.0018C22 21.6599 20.6557 23 19 23H16C14.8954 23 14 22.1046 14 21V15H10V21C10 22.1046 9.10457 23 8 23H5C3.34434 23 2 21.6599 2 20.0018V12C2 11.5467 2.15748 11.0535 2.33982 10.6134C2.53334 10.1462 2.80369 9.62614 3.12345 9.08502C3.76389 8.0012 4.63995 6.77001 5.60678 5.60982C6.57152 4.45212 7.65141 3.33531 8.70647 2.49796C9.2341 2.07921 9.77521 1.71454 10.3094 1.45091Z"
                                fill="#0F0F0F" />
                        </svg>
                    </div>
                    <span class="ml-1 font-semibold">Dashboard</span>
                </a>
            </li>
            <li class="mt-2 mb-2">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="{{ route('project') }}">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="20" height="20" viewBox="0 0 512 512" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>project-new</title>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Combined-Shape" fill="#000000" transform="translate(64.000000, 34.346667)">
                                    <path
                                        d="M192,-7.10542736e-15 L384,110.851252 L384,242.986 L341.333,242.986 L341.333,157.655 L213.333,231.555 L213.333,431.088 L192,443.405007 L0,332.553755 L0,110.851252 L192,-7.10542736e-15 Z M341.333333,264.32 L341.333,328.32 L405.333333,328.32 L405.333333,370.986667 L341.333,370.986 L341.333333,434.986667 L298.666667,434.986667 L298.666,370.986 L234.666667,370.986667 L234.666667,328.32 L298.666,328.32 L298.666667,264.32 L341.333333,264.32 Z M42.666,157.654 L42.6666667,307.920144 L170.666,381.82 L170.666,231.555 L42.666,157.654 Z M192,49.267223 L66.1333333,121.936377 L192,194.605531 L317.866667,121.936377 L192,49.267223 Z">

                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <span class="ml-1 font-semibold">Project</span>
                    </div>
                </a>
            </li>
            <li class="mt-2 mb-2">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="20" height="20" viewBox="0 0 512 512" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>project-new</title>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Combined-Shape" fill="#000000" transform="translate(64.000000, 34.346667)">
                                    <path
                                        d="M192,-7.10542736e-15 L384,110.851252 L384,242.986 L341.333,242.986 L341.333,157.655 L213.333,231.555 L213.333,431.088 L192,443.405007 L0,332.553755 L0,110.851252 L192,-7.10542736e-15 Z M341.333333,264.32 L341.333,328.32 L405.333333,328.32 L405.333333,370.986667 L341.333,370.986 L341.333333,434.986667 L298.666667,434.986667 L298.666,370.986 L234.666667,370.986667 L234.666667,328.32 L298.666,328.32 L298.666667,264.32 L341.333333,264.32 Z M42.666,157.654 L42.6666667,307.920144 L170.666,381.82 L170.666,231.555 L42.666,157.654 Z M192,49.267223 L66.1333333,121.936377 L192,194.605531 L317.866667,121.936377 L192,49.267223 Z">

                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <span class="ml-1 font-semibold">Price</span>
                    </div>
                </a>
            </li>
            <li class="mt-2 mb-2">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="20" height="20" viewBox="0 0 512 512" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>project-new</title>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Combined-Shape" fill="#000000" transform="translate(64.000000, 34.346667)">
                                    <path
                                        d="M192,-7.10542736e-15 L384,110.851252 L384,242.986 L341.333,242.986 L341.333,157.655 L213.333,231.555 L213.333,431.088 L192,443.405007 L0,332.553755 L0,110.851252 L192,-7.10542736e-15 Z M341.333333,264.32 L341.333,328.32 L405.333333,328.32 L405.333333,370.986667 L341.333,370.986 L341.333333,434.986667 L298.666667,434.986667 L298.666,370.986 L234.666667,370.986667 L234.666667,328.32 L298.666,328.32 L298.666667,264.32 L341.333333,264.32 Z M42.666,157.654 L42.6666667,307.920144 L170.666,381.82 L170.666,231.555 L42.666,157.654 Z M192,49.267223 L66.1333333,121.936377 L192,194.605531 L317.866667,121.936377 L192,49.267223 Z">

                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <span class="ml-1 font-semibold">Task</span>
                    </div>
                </a>
            </li>
            <li class="mt-2 mb-2">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                            <defs>

                                <style>
                                    .cls-1 {
                                        fill: none;
                                        stroke: #020202;
                                        stroke-miterlimit: 10;
                                        stroke-width: 1.92px;
                                    }
                                </style>

                            </defs>

                            <g id="roll_brush" data-name="roll brush">

                                <line class="cls-1" x1="5.24" y1="11.08" x2="18.66" y2="11.08" />

                                <line class="cls-1" x1="5.24" y1="18.76" x2="18.66" y2="18.76" />

                                <line class="cls-1" x1="5.24" y1="14.92" x2="18.66" y2="14.92" />

                                <rect class="cls-1" x="1.4" y="1.49" width="21.1" height="21.1" />

                                <polygon class="cls-1"
                                    points="22.5 7.25 16.23 7.25 14.31 7.25 1.4 7.25 1.4 1.49 22.5 1.49 22.5 7.25" />

                                <line class="cls-1" x1="4.28" y1="4.37" x2="6.2" y2="4.37" />

                                <line class="cls-1" x1="8.11" y1="4.37" x2="10.03" y2="4.37" />

                                <line class="cls-1" x1="11.95" y1="4.37" x2="13.87" y2="4.37" />

                            </g>

                        </svg>
                    </div>
                    <div>
                        <span class="ml-1 font-semibold">Payment</span>
                    </div>
                </a>
            </li>
            <h1 class="mt-2 mb-2">
                <div
                    class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.7 14C10.623 14 9.74999 13.1046 9.74999 12C9.74999 10.8954 10.623 10 11.7 10C12.7769 10 13.65 10.8954 13.65 12C13.65 12.5304 13.4445 13.0391 13.0789 13.4142C12.7132 13.7893 12.2172 14 11.7 14Z"
                                stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.8841 16.063V14.721C16.8841 14.3887 17.0128 14.07 17.2419 13.835L18.1672 12.886C18.6443 12.3967 18.6443 11.6033 18.1672 11.114L17.2419 10.165C17.0128 9.93001 16.8841 9.61131 16.8841 9.27899V7.93599C16.8841 7.24398 16.3371 6.68299 15.6624 6.68299H14.353C14.029 6.68299 13.7182 6.55097 13.4891 6.31599L12.5638 5.36699C12.0867 4.87767 11.3132 4.87767 10.8361 5.36699L9.91087 6.31599C9.68176 6.55097 9.37102 6.68299 9.04702 6.68299H7.73759C7.41341 6.68299 7.10253 6.81514 6.87339 7.05034C6.64425 7.28554 6.51566 7.6045 6.51592 7.93699V9.27899C6.51591 9.61131 6.3872 9.93001 6.15809 10.165L5.23282 11.114C4.75573 11.6033 4.75573 12.3967 5.23282 12.886L6.15809 13.835C6.3872 14.07 6.51591 14.3887 6.51592 14.721V16.063C6.51592 16.755 7.06288 17.316 7.73759 17.316H9.04702C9.37102 17.316 9.68176 17.448 9.91087 17.683L10.8361 18.632C11.3132 19.1213 12.0867 19.1213 12.5638 18.632L13.4891 17.683C13.7182 17.448 14.029 17.316 14.353 17.316H15.6614C15.9856 17.3163 16.2966 17.1844 16.5259 16.9493C16.7552 16.7143 16.8841 16.3955 16.8841 16.063Z"
                                stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <span class="ml-1 font-semibold">Settings</span>
                    </div>
                </div>
            </h1>
            <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black to-transparent" />
            <li class="mt-2 ml-10">
                <a class="py-2 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="">
                    <span class="ml-1 font-semibold">Users</span>
                </a>
            </li>
            <li class="mt-2 ml-10 mb-2">
                <a class="py-2 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="https://custompedia.vercel.app/" target="blank">
                    <span class="ml-1 font-semibold">Website</span>
                </a>
            </li>
            <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black to-transparent" />
            <li class="mt-2">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:text-black"
                    href="{{ route('logout') }}">
                    <div class="flex h-8 w-8 bg-amber-400 rounded-xl items-center justify-center text-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="12" height="12" id="icon-bound" fill="none" />
                            <path
                                d="M14,14l0,-12l-6,0l0,-2l8,0l0,16l-8,0l0,-2l6,0Zm-9.002,-0.998l-4.998,-5.002l5,-5l1.416,1.416l-2.588,2.584l8.172,0l0,2l-8.172,0l2.586,2.586l-1.416,1.416Z" />
                        </svg>
                    </div>
                    <span class="ml-1 font-semibold">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
