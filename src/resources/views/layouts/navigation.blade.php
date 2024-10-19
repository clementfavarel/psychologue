<nav class="hidden lg:block fixed top-0 left-0 w-full h-20 bg-white shadow-lg z-10 text-dark">
    <div class="max-w-7xl mx-auto h-full flex items-center justify-between">
        <a href="{{ route('accueil') }}" class="flex gap-4 items-center">
            <h1 class="flex gap-2">
                <span class="text-blue-600">Myriam Ott</span>
                <span>| Psychologue</span>
            </h1>
        </a>
        <ul class="flex items-center gap-2">
            <li>
                <a href="{{ route('accueil') }}"
                    class="p-2 text-lg {{ request()->routeIs('accueil') ? 'text-blue-600' : 'text-black/50 hover:text-blue-600' }}">Accueil</a>
            </li>
            <li>
                <a href="{{ route('a-propos') }}"
                    class="p-2 text-lg {{ request()->routeIs('a-propos') ? 'text-blue-600' : 'text-black/50 hover:text-blue-600' }}">A
                    propos</a>
            </li>
            <li>
                <a href="{{ route('consultations') }}"
                    class="p-2 text-lg {{ request()->routeIs('consultations') ? 'text-blue-600' : 'text-black/50 hover:text-blue-600' }}">Consultations</a>
            </li>
            <li>
                <a href="{{ route('publications') }}"
                    class="p-2 text-lg {{ request()->routeIs('publications') ? 'text-blue-600' : 'text-black/50 hover:text-blue-600' }}">Publications</a>
            </li>
            <li>
                <a href="https://www.doctolib.fr/psychologue/aix-en-provence/myriam-ott-rabiet" target="_blank"
                    class="mx-auto bg-blue-600 font-semibold text-center text-white px-4 py-3 rounded-md hover:bg-blue-700 transition">
                    Prendre RDV
                </a>
            </li>
        </ul>
    </div>
</nav>

<nav class="block lg:hidden fixed bottom-0 left-0 w-full h-20 bg-white z-10 text-dark rounded-t-lg">
    <div class="h-full px-4 py-2 flex items-center justify-around">
        <a href="{{ route('accueil') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('accueil') ? 'text-blue-600' : 'text-gray-400' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home w-6">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            <p class="text-xs">Accueil</p>
        </a>
        <a href="{{ route('a-propos') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('a-propos') ? 'text-blue-600' : 'text-gray-400' }}">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <p class="text-xs">A propos</p>
        </a>
        <a href="{{ route('consultations') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('consultations') ? 'text-blue-600' : 'text-gray-400' }}">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg>
            <p class="text-xs">Consultations</p>
        </a>
        <a href="{{ route('publications') }}"
            class="flex flex-col gap-1 items-center {{ request()->routeIs('publications') ? 'text-blue-600' : 'text-gray-400' }}">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            <p class="text-xs">Publications</p>
        </a>
    </div>
</nav>