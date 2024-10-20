<x-layout>
    <div class="space-y-6">
        <section>
            <x-panel>
                <section class="relative h-[50vh]">
                    <div class="absolute inset-0">
                        <img src="{{ Vite::asset('resources/images/homepage/hero.jpg') }}" class="w-full h-full object-cover rounded-xl" alt="education">
                        <div class="absolute inset-0 bg-gradient-to-r rounded-xl from-black/60 to-black/95"></div>
                    </div>
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-12">
                            <div>
                                <h1 class="text-[2rem] font-black leading-10 text-WHITE mb-4">BRIDGING</h1>
                                <h1 class="text-[2rem] font-black leading-10 text-WHITE mb-4"> THE GAP BETWEEN</h1>
                                <h1 class="text-[3rem] font-black leading-12 text-blue-600 mb-4">CLASSROOM AND CAREER</h1>
                            </div>
                        </div>
                        <div class="w-full mx-12">
                            <x-panel class="space-y-4">
                                <div class="flex items-center justify-start my-3 space-x-2">
                                    <x-heroicon-o-check-badge class="h-6 w-6 text-blue-600" />
                                    <h4 class="text-blue-600 " >What industry excites you</h4>
                                </div>
                                <div class="my-2 flex flex-wrap gap-2">
                                    <x-profession-tag profession="Engineering" />
                                    <x-profession-tag profession="Healthcare" />
                                    <x-profession-tag profession="Education" />
                                    <x-profession-tag profession="Finance" />
                                    <x-profession-tag profession="Law" />
                                    <x-profession-tag profession="Agriculture" />
                                    <x-profession-tag profession="Construction" />
                                    <x-profession-tag profession="Hospitality" />
                                    <x-profession-tag profession="Retail" />
                                    <x-profession-tag profession="Manufacturing" />
                                    <x-profession-tag profession="Transportation" />
                                    <x-profession-tag profession="Energy" />
                                    <x-profession-tag profession="Arts" />
                                    <x-profession-tag profession="Sports" />
                                    <x-profession-tag profession="Media" />
                                    <x-profession-tag profession="Real Estate" />
                                    <x-profession-tag profession="Science" />
                                    <x-profession-tag profession="Public Service" />
                                </div>
                            </x-panel>
                        </div>
                    </div>
                </section>
            </x-panel>
        </section>


        <section>
            {{-- <x-panel> --}}
                <section class="relative h-[50vh]">
                    <div class="absolute inset-0">
                        <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-white/80 to-white/95"></div>
                    </div>
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-12">
                            <div>
                                <img src="{{ Vite::asset('resources/images/homepage/ai_assisted.png') }}" class="w-[30vw] h-[42vh] object-cover rounded-xl" alt="ai assisted learning">
                            </div>
                        </div>
                        <div class="w-full mx-12">
                                <div class="flex items-center justify-start my-3 space-x-2">
                                    <x-heroicon-o-check-badge class="h-6 w-6 text-blue-600" />
                                    <h4 class="text-blue-600" >What is your company looking for</h4>
                                </div>
                                <div class="my-2 flex flex-wrap gap-2">
                                    <x-profession-tag profession="Engineering" />
                                    <x-profession-tag profession="Healthcare" />
                                    <x-profession-tag profession="Education" />
                                    <x-profession-tag profession="Finance" />
                                    <x-profession-tag profession="Law" />
                                    <x-profession-tag profession="Agriculture" />
                                    <x-profession-tag profession="Construction" />
                                    <x-profession-tag profession="Hospitality" />
                                    <x-profession-tag profession="Retail" />
                                    <x-profession-tag profession="Manufacturing" />
                                    <x-profession-tag profession="Transportation" />
                                    <x-profession-tag profession="Energy" />
                                    <x-profession-tag profession="Arts" />
                                    <x-profession-tag profession="Sports" />
                                    <x-profession-tag profession="Media" />
                                    <x-profession-tag profession="Real Estate" />
                                    <x-profession-tag profession="Science" />
                                    <x-profession-tag profession="Public Service" />
                                </div>
                        </div>
                    </div>
                </section>
            {{-- </x-panel> --}}
        </section>


        <section>
            {{-- <x-panel> --}}
                <section class="relative h-[50vh]">
                    {{-- <div class="absolute inset-0"> --}}
                        <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/95"></div>
                    {{-- </div> --}}
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-12">
                            <div>
                                <img src="{{ Vite::asset('resources/images/homepage/ai_assisted.png') }}" class="w-[30vw] h-[30vh] object-cover rounded-xl" alt="ai assisted learning">
                            </div>
                        </div>
                        <div class="w-full mx-12">
                                <div class="flex items-center justify-start my-3 space-x-2">
                                    {{-- <x-heroicon-o-check-badge class="h-6 w-6 text-blue-600" /> --}}
                                    <h4 class="text-blue-600 font-black text-4xl" >Take chance of AI assistance</h4>
                                </div>
                                <div class="my-2 flex flex-wrap gap-2">
                                    <x-profession-tag profession="Engineering" />
                                    <x-profession-tag profession="Healthcare" />
                                    <x-profession-tag profession="Education" />
                                    <x-profession-tag profession="Finance" />
                                    <x-profession-tag profession="Law" />
                                    <x-profession-tag profession="Agriculture" />
                                    <x-profession-tag profession="Construction" />
                                    <x-profession-tag profession="Hospitality" />
                                    <x-profession-tag profession="Retail" />
                                    <x-profession-tag profession="Manufacturing" />
                                    <x-profession-tag profession="Transportation" />
                                    <x-profession-tag profession="Energy" />
                                    <x-profession-tag profession="Arts" />
                                    <x-profession-tag profession="Sports" />
                                    <x-profession-tag profession="Media" />
                                    <x-profession-tag profession="Real Estate" />
                                    <x-profession-tag profession="Science" />
                                    <x-profession-tag profession="Public Service" />
                                </div>
                        </div>
                    </div>
                </section>
            {{-- </x-panel> --}}
        </section>


                <section>
            <x-panel>
                <section class="relative h-[50vh]">
                    <div class="absolute inset-0">
                        {{-- <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/95"></div> --}}
                    </div>
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-12">
                            <div>
                                <img src="{{ Vite::asset('resources/images/homepage/ai_assisted.png') }}" class="w-[30vw] h-[42vh] object-cover rounded-xl" alt="ai assisted learning">
                            </div>
                        </div>
                        <div class="w-full mx-12">
                                <div class="flex items-center justify-start my-3 space-x-2">
                                    <x-heroicon-o-check-badge class="h-6 w-6 text-blue-600" />
                                    <h4 class="text-blue-600" >Explore our Expert built courses</h4>
                                </div>
                                <div class="my-2 flex flex-wrap gap-2">
                                    <x-profession-tag profession="Engineering" />
                                    <x-profession-tag profession="Healthcare" />
                                    <x-profession-tag profession="Education" />
                                    <x-profession-tag profession="Finance" />
                                    <x-profession-tag profession="Law" />
                                    <x-profession-tag profession="Agriculture" />
                                    <x-profession-tag profession="Construction" />
                                    <x-profession-tag profession="Hospitality" />
                                    <x-profession-tag profession="Retail" />
                                    <x-profession-tag profession="Manufacturing" />
                                    <x-profession-tag profession="Transportation" />
                                    <x-profession-tag profession="Energy" />
                                    <x-profession-tag profession="Arts" />
                                    <x-profession-tag profession="Sports" />
                                    <x-profession-tag profession="Media" />
                                    <x-profession-tag profession="Real Estate" />
                                    <x-profession-tag profession="Science" />
                                    <x-profession-tag profession="Public Service" />
                                </div>
                        </div>
                    </div>
                </section>
            </x-panel>
        </section>

        <section>
            {{-- <x-panel> --}}
                <section class="relative h-[50vh]">
                    {{-- <div class="absolute inset-0"> --}}
                        <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/95"></div>
                    {{-- </div> --}}
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-12">
                            <div>
                                <img src="{{ Vite::asset('resources/images/homepage/ai_assisted.png') }}" class="w-[30vw] h-[30vh] object-cover rounded-xl" alt="ai assisted learning">
                            </div>
                        </div>
                        <div class="w-full mx-12">
                                <div class="flex items-center justify-start my-3 space-x-2">
                                    {{-- <x-heroicon-o-check-badge class="h-6 w-6 text-blue-600" /> --}}
                                    <h4 class="text-blue-600 font-black text-4xl" >We also have events</h4>
                                </div>
                                <div class="my-2 flex flex-wrap gap-2">
                                    <x-profession-tag profession="Engineering" />
                                    <x-profession-tag profession="Healthcare" />
                                    <x-profession-tag profession="Education" />
                                    <x-profession-tag profession="Finance" />
                                    <x-profession-tag profession="Law" />
                                    <x-profession-tag profession="Agriculture" />
                                    <x-profession-tag profession="Construction" />
                                    <x-profession-tag profession="Hospitality" />
                                    <x-profession-tag profession="Retail" />
                                    <x-profession-tag profession="Manufacturing" />
                                    <x-profession-tag profession="Transportation" />
                                    <x-profession-tag profession="Energy" />
                                    <x-profession-tag profession="Arts" />
                                    <x-profession-tag profession="Sports" />
                                    <x-profession-tag profession="Media" />
                                    <x-profession-tag profession="Real Estate" />
                                    <x-profession-tag profession="Science" />
                                    <x-profession-tag profession="Public Service" />
                                </div>
                        </div>
                    </div>
                </section>
            {{-- </x-panel> --}}
        </section>

        <section    >
            <x-panel>
                <a href="/">
                    <img class="p-12" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions">
                </a>
                {{-- <h4 class="text-blue-600 font-black text-4xl p-12" >SKILL BRIDGE</h4> --}}
                <section class="relative h-[50vh]">
                    <div class="absolute inset-0">
                        {{-- <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/95"></div> --}}
                    </div>
                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-12">
                            <div>
                                {{-- <img src="{{ Vite::asset('resources/images/homepage/ai_assisted.png') }}" class="w-[30vw] h-[42vh] object-cover rounded-xl" alt="ai assisted learning"> --}}
                            </div>
                        </div>
                        <div class="w-full mx-12">
                                <div class="flex items-center justify-start my-3 space-x-2">
                                    {{-- <x-heroicon-o-check-badge class="h-6 w-6 text-blue-600" /> --}}
                                    <h4 class="text-blue-600" >Explore our Expert built courses</h4>
                                </div>
                                <div class="my-2 flex flex-wrap gap-2">
                                    <x-profession-tag profession="Engineering" />
                                    <x-profession-tag profession="Healthcare" />
                                    <x-profession-tag profession="Education" />
                                    <x-profession-tag profession="Finance" />
                                    <x-profession-tag profession="Law" />
                                    <x-profession-tag profession="Agriculture" />
                                    <x-profession-tag profession="Construction" />
                                    <x-profession-tag profession="Hospitality" />
                                    <x-profession-tag profession="Retail" />
                                    <x-profession-tag profession="Manufacturing" />
                                    <x-profession-tag profession="Transportation" />
                                    <x-profession-tag profession="Energy" />
                                    <x-profession-tag profession="Arts" />
                                    <x-profession-tag profession="Sports" />
                                    <x-profession-tag profession="Media" />
                                    <x-profession-tag profession="Real Estate" />
                                    <x-profession-tag profession="Science" />
                                    <x-profession-tag profession="Public Service" />
                                </div>
                        </div>
                    </div>
                </section>
            </x-panel>
        </section>

    </div>
</x-layout>
