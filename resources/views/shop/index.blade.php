<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Контейнер для заголовка и кнопки -->
        <div class="flex items-center justify-between mb-6">
            <!-- Заголовок страницы -->
            <h1 class="text-3xl font-semibold text-gray-900">Мои магазины</h1>

            <!-- Кнопка для создания магазина -->
            <a href="{{ route('shops.create') }}" class="inline-flex items-center px-4 py-2 text-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 rounded-lg shadow-sm">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Создать магазин
            </a>
        </div>

        <!-- Уведомление -->
        @if($shops->isEmpty())
            <div class="bg-yellow-200 border-l-4 border-yellow-600 text-yellow-800 p-4 rounded-lg shadow-md">
                <div class="flex">
                    <svg class="h-6 w-6 text-yellow-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M5.22 4.22a6 6 0 118.49 8.49A5.978 5.978 0 0112 12a5.978 5.978 0 01-4.48-2.29A5.978 5.978 0 015.22 4.22z"/>
                    </svg>
                    <p>У вас пока нет созданных магазинов.</p>
                </div>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                @foreach ($shops as $shop)
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-semibold">{{ $shop->name }}</h2>
                        <p class="text-gray-600 mt-2">{{ $shop->description }}</p>
                        <div class="mt-4">
                            <a href="{{ route('shops.show', $shop->id) }}" class="text-indigo-600 hover:text-indigo-800">
                                Перейти к магазину
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
