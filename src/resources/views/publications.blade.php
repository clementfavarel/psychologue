<x-app-layout>
    <div class="sm:py-12 flex flex-col gap-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section name="publications" class="flex flex-col gap-12">
                        <div class="text-center max-w-3xl mx-auto">
                            <h1 class="text-4xl mb-4">Publications</h1>
                            <p class="text-gray-600">Retrouvez une selection de mes interventions dans les médias.</p>
                        </div>

                        <!-- Press Section -->
                        <div class="flex flex-col gap-6">
                            <h2 class="text-2xl font-semibold text-blue-600">Presse</h2>
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <article
                                    class="flex flex-col gap-3 p-6 border rounded-lg hover:shadow-md transition group">
                                    <div class="flex items-center gap-4 mb-3">
                                        <img src="/img/presse/maxi.png" alt="Logo journal"
                                            class="w-16 h-16 aspect-square object-cover" loading="lazy">
                                        <div>
                                            <h3 class="font-semibold group-hover:text-blue-600 transition">Articles Maximag</h3>
                                            <p class="text-sm text-gray-600">Maximag</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 line-clamp-3">Découvrez une sélection d'articles rédigés par Myriam Ott.</p>
                                    <a href="https://www.maxi-mag.fr/?s=myriam+ott" class="text-blue-600 text-sm hover:underline mt-auto">Lire
                                        les articles →</a>
                                </article>
                                <article
                                    class="flex flex-col gap-3 p-6 border rounded-lg hover:shadow-md transition group">
                                    <div class="flex items-center gap-4 mb-3">
                                        <img src="/img/presse/le_figaro.png" alt="Logo journal"
                                            class="w-16 h-16 aspect-square object-cover" loading="lazy">
                                        <div>
                                            <h3 class="font-semibold group-hover:text-blue-600 transition">Articles Le Figaro</h3>
                                            <p class="text-sm text-gray-600">Le Figaro</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 line-clamp-3">Découvrez une sélection d'articles rédigés par Myriam Ott.</p>
                                    <a href="https://recherche.lefigaro.fr/recherche/myriam%20ott/" class="text-blue-600 text-sm hover:underline mt-auto">Lire
                                        les articles →</a>
                                </article>
                                <article
                                    class="flex flex-col gap-3 p-6 border rounded-lg hover:shadow-md transition group">
                                    <div class="flex items-center gap-4 mb-3">
                                        <img src="/img/presse/femme_actuelle.png" alt="Logo journal"
                                            class="w-16 h-16 aspect-square object-contain" loading="lazy">
                                        <div>
                                            <h3 class="font-semibold group-hover:text-blue-600 transition">Articles Femme Actuelle</h3>
                                            <p class="text-sm text-gray-600">Femme Actuelle</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 line-clamp-3">Découvrez une sélection d'articles rédigés par Myriam Ott.</p>
                                    <a href="https://recherche.lefigaro.fr/recherche/myriam%20ott/" class="text-blue-600 text-sm hover:underline mt-auto">Lire
                                        les articles →</a>
                                </article>
                            </div>
                        </div>

                        <!-- Videos Section -->
                        <div class="flex flex-col gap-6">
                            <h2 class="text-2xl font-semibold text-blue-600">Vidéos</h2>
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <article class="flex flex-col gap-3 group">
                                    <a href="https://youtu.be/jOtJne4YJzY" class="relative aspect-video rounded-lg overflow-hidden">
                                        <img src="/img/videos/amour.jpg" alt="Miniature vidéo" loading="lazy"
                                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                        </div>
                                    </a>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="font-semibold group-hover:text-blue-600 transition">Rechercher l'amour passionnel vous conduit à l'échec</h3>
                                        <p class="text-sm text-gray-600">Le Huffington Post</p>
                                    </div>
                                </article>
                                <article class="flex flex-col gap-3 group">
                                    <a href="https://youtu.be/PffjQpU1nNY" class="relative aspect-video rounded-lg overflow-hidden">
                                        <img src="/img/videos/crise.jpg" alt="Miniature vidéo" loading="lazy"
                                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                        </div>
                                    </a>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="font-semibold group-hover:text-blue-600 transition">Comment traverser une crise de couple</h3>
                                        <p class="text-sm text-gray-600">Le Huffington Post</p>
                                    </div>
                                </article>
                                <article class="flex flex-col gap-3 group">
                                    <a href="https://youtu.be/_YIH3dmmqQU" class="relative aspect-video rounded-lg overflow-hidden">
                                        <img src="/img/videos/savoir_hypnose.jpg" alt="Miniature vidéo" loading="lazy"
                                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                        </div>
                                    </a>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="font-semibold group-hover:text-blue-600 transition">3 choses à savoir sur l'hypnose</h3>
                                        <p class="text-sm text-gray-600">Le Huffington Post</p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Radio Section -->
                        <div class="flex flex-col gap-6">
                            <h2 class="text-2xl font-semibold text-blue-600">Interventions Radio</h2>
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <article
                                    class="flex flex-col gap-3 p-4 border rounded-lg hover:shadow-md transition group">
                                    <div class="flex items-center gap-4">
                                        <img src="/img/presse/radio_zinzine.png" alt="Logo radio"
                                            class="w-20 h-20 aspect-square object-cover" loading="lazy">
                                        <div>
                                            <h3 class="font-semibold group-hover:text-blue-600 transition">Victime d'abus sexuels - Parking 2 roues</h3>
                                            <p class="text-sm text-gray-600">Radio Zinzine - 23 Novembre 2020</p>
                                        </div>
                                    </div>
                                    <a href="https://www.radiozinzineaix.org/index.php/component/commedia/popup/2457/6807/2457/component" class="text-blue-600 text-sm hover:underline">Écouter l'émission
                                        →</a>
                                </article>
                                <article
                                    class="flex flex-col gap-3 p-4 border rounded-lg hover:shadow-md transition group">
                                    <div class="flex items-center gap-4">
                                        <img src="/img/presse/radio_zinzine.png" alt="Logo radio"
                                            class="w-20 h-20 aspect-square object-cover" loading="lazy">
                                        <div>
                                            <h3 class="font-semibold group-hover:text-blue-600 transition">La communication non violente - Parking 2 roues</h3>
                                            <p class="text-sm text-gray-600">Radio Zinzine - 28 Septembre 2020</p>
                                        </div>
                                    </div>
                                    <a href="https://www.radiozinzineaix.org/index.php/component/commedia/page/2457/6705/2457" class="text-blue-600 text-sm hover:underline">Écouter l'émission
                                        →</a>
                                </article>
                                <article
                                    class="flex flex-col gap-3 p-4 border rounded-lg hover:shadow-md transition group">
                                    <div class="flex items-center gap-4">
                                        <img src="/img/presse/frequence_protestante.png" alt="Logo radio"
                                            class="w-20 h-20 aspect-square object-cover" loading="lazy">
                                        <div>
                                            <h3 class="font-semibold group-hover:text-blue-600 transition">Se séparer en bons termes - Histoires intimes</h3>
                                            <p class="text-sm text-gray-600">Fréquence protestante - 10 Novembre 2020</p>
                                        </div>
                                    </div>
                                    <a href="https://frequenceprotestante.com/diffusion/histoires-intimes-du-10-11-2020/" class="text-blue-600 text-sm hover:underline">Écouter l'émission
                                        →</a>
                                </article>
                            </div>
                        </div>

                        <!-- Blog Posts Section -->
                        {{-- <div class="flex flex-col gap-6">
                            <h2 class="text-2xl font-semibold text-blue-600">Articles de Blog</h2>
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <article
                                    class="flex flex-col gap-3 p-6 border rounded-lg hover:shadow-md transition group">
                                    <span class="text-sm text-gray-500"></span>
                                    <h3 class="font-semibold group-hover:text-blue-600 transition">L'importance de
                                        l'écoute active en thérapie</h3>
                                    <p class="text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.</p>
                                    <a href="#" class="text-blue-600 text-sm hover:underline mt-auto">Lire
                                        l'article →</a>
                                </article>
                                <article
                                    class="flex flex-col gap-3 p-6 border rounded-lg hover:shadow-md transition group">
                                    <span class="text-sm text-gray-500">15 Mars 2024</span>
                                    <h3 class="font-semibold group-hover:text-blue-600 transition">L'importance de
                                        l'écoute active en thérapie</h3>
                                    <p class="text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.</p>
                                    <a href="#" class="text-blue-600 text-sm hover:underline mt-auto">Lire
                                        l'article →</a>
                                </article>
                                <article
                                    class="flex flex-col gap-3 p-6 border rounded-lg hover:shadow-md transition group">
                                    <span class="text-sm text-gray-500">15 Mars 2024</span>
                                    <h3 class="font-semibold group-hover:text-blue-600 transition">L'importance de
                                        l'écoute active en thérapie</h3>
                                    <p class="text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.</p>
                                    <a href="#" class="text-blue-600 text-sm hover:underline mt-auto">Lire
                                        l'article →</a>
                                </article>
                            </div>
                        </div> --}}
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
