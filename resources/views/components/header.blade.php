<header class="bg-white bg-opacity-90 shadow-lg rounded-md p-4 sticky top-0 z-50">
    <div class="container mx-auto flex items-center space-x-20">
        <div class="w-1/3 ml-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-blue-500 font-bold text-xl">
                <img src="{{ asset('images/logo-robnunes.png') }}" alt="Logo" class="h-20">
            </a>
        </div>

        <div class="w-2/3 flex justify-start">
            <!-- Menu -->
            <nav class="flex flex-col md:flex-row space-x-0 md:space-x-4">
                <a href="{{ route('home') }}" class="text-blue-500 text-xl hover:bg-blue-100 md:border md:p-2 rounded-full">Robnunes</a>
                <a href="{{ route('partner') }}" class="text-blue-500 text-xl hover:bg-blue-100 md:border md:p-2 rounded-full">Representados</a>
                <a href="{{ route('product') }}" class="text-blue-500 text-xl hover:bg-blue-100 md:border md:p-2 rounded-full">Produtos</a>
                <a href="{{ route('contact') }}" class="text-blue-500 text-xl hover:bg-blue-100 md:border md:p-2 rounded-full">Fale Conosco</a>
                <!-- Adicione mais links conforme necessário -->
            </nav>
        </div>
    </div>
</header>
