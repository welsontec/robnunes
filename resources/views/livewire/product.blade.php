<div>
    <div class="bg-white bg-opacity-50 shadow-lg rounded-md">

        <div class="relative w-full">
            <div x-data="{ currentSlide: 0 }">
                <div class="carousel object-center">



                    <div x-show="currentSlide === 0" class="carousel-item">

                        <div class="w-svw h-svh bg-black flex items-center justify-center">

                            @if ($this->isImage($media[$currentSlide]))
                                <img src="{{ $media[$currentSlide] }}" alt="Imagem" class="max-w-full max-h-full object-contain">
                            @elseif($this->isVideo($media[$currentSlide]))
                                <iframe src="{{ $media[$currentSlide] }}" frameborder="0" allowfullscreen
                                    class="max-w-full max-h-full object-contain"></iframe>
                            @endif
                            {{-- <img src="{{ $media[$currentSlide] }}" alt="Imagem"
                                    class="max-w-full max-h-full object-contain">
                                <div class="text-bottom">Texto no rodapé</div> --}}


                            <div
                                class="absolute top-1/2 transform -translate-y-1/2 left-4 rounded-full bg-gray-800 bg-opacity-50 p-2">
                                <button wire:click="prevSlide" class="text-white">&lt;</button>
                            </div>
                            <div
                                class="absolute top-1/2 transform -translate-y-1/2 right-4 rounded-full bg-gray-800 bg-opacity-50 p-2">
                                <button wire:click="nextSlide" class="text-white">&gt;</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
