<x-app-layout>
    <div class="sm:py-12 flex flex-col gap-8 min-h-[calc(100dvh-80px)]">
        <div class="max-w-7xl w-full sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section name="consultations-videos" class="flex flex-col gap-6">
                        <div class="text-center max-w-3xl mx-auto">
                            <h1 class="text-4xl mb-4">Consultations</h1>
                            <p class="text-gray-600">Découvrez une sélection de vidéos éducatives sur la psychologie et
                                l'EMDR, pour mieux comprendre les différentes approches thérapeutiques.
                            </p>
                        </div>

                        <!-- Video Grid -->
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                            <!-- Video Card Example 1 -->
                            <article class="flex flex-col gap-3 group">
                                <a href="https://youtu.be/JGJR5hGzaIE" target="_blank"
                                    class="relative aspect-video rounded-lg overflow-hidden">
                                    <img src="/img/videos/individuelle_adulte.jpg" alt="Miniature vidéo" loading="lazy"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                    </div>
                                </a>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-semibold group-hover:text-blue-600 transition duration-300">
                                        <a href="https://youtu.be/JGJR5hGzaIE" target="_blank">
                                            La thérapie adulte individuelle
                                        </a>
                                    </h3>
                                    <p class="text-sm text-gray-600">Par Myriam Ott</p>
                                </div>
                            </article>
                            <article class="flex flex-col gap-3 group">
                                <a href="https://youtu.be/2zbi4s2kCyo" target="_blank"
                                    class="relative aspect-video rounded-lg overflow-hidden">
                                    <img src="/img/videos/couple.jpg" alt="Miniature vidéo" loading="lazy"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                    </div>
                                </a>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-semibold group-hover:text-blue-600 transition duration-300">
                                        <a href="https://youtu.be/2zbi4s2kCyo" target="_blank">
                                            La thérapie de couple
                                        </a>
                                    </h3>
                                    <p class="text-sm text-gray-600">Par Myriam Ott</p>
                                </div>
                            </article>
                            <article class="flex flex-col gap-3 group">
                                <a href="https://youtu.be/AkmS8OwovvQ" target="_blank"
                                    class="relative aspect-video rounded-lg overflow-hidden">
                                    <img src="/img/videos/soutien.jpg" alt="Miniature vidéo" loading="lazy"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                    </div>
                                </a>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-semibold group-hover:text-blue-600 transition duration-300">
                                        <a href="https://youtu.be/AkmS8OwovvQ" target="_blank">
                                            La thérapie de soutien
                                        </a>
                                    </h3>
                                    <p class="text-sm text-gray-600">Par Myriam Ott</p>
                                </div>
                            </article>
                            <article class="flex flex-col gap-3 group">
                                <a href="https://youtu.be/EgxDWrlovvA?si=ZQqC_8Ebfnwk6ZPH" target="_blank"
                                    class="relative aspect-video rounded-lg overflow-hidden">
                                    <img src="/img/videos/edmr.jpg" alt="Miniature vidéo" loading="lazy"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300">
                                    </div>
                                </a>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-semibold group-hover:text-blue-600 transition duration-300">
                                        <a href="https://youtu.be/EgxDWrlovvA?si=ZQqC_8Ebfnwk6ZPH" target="_blank">
                                            L'EMDR
                                        </a>
                                    </h3>
                                    <p class="text-sm text-gray-600">Par Myriam Ott</p>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
