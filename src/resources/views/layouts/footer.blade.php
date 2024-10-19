<footer class="bg-white text-dark pt-8 sm:pb-8 mb-20 sm:mb-0 shadow-t-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap justify-between items-start">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h2 class="text-blue-600 mb-2">Myriam Ott</h2>
                <p class="mb-2">Copyright &copy; {{ date('Y') }} - Myriam Ott</p>
                <p>Site internet créé par plkode</p>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Contactez-moi</h3>
                <p class="mb-4">06 40 30 70 15</p>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/solaruprod"
                        class="text-dark hover:text-blue-600" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-instagram h-6 w-6">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Informations</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('mentions') }}" class="hover:underline">Mentions légales</a>
                    </li>
                    <li>
                        <a href="https://psychologues.org/deontologie-single/code-deontologie-psychologues/"
                            target="_blank" class="hover:underline">Code de déontologie</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
