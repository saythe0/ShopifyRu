<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Заголовок страницы -->
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-900">Создание нового магазина</h1>
            <p class="mt-1 text-sm text-gray-600">Заполните форму для создания нового магазина.</p>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <!-- Форма создания магазина -->
                <form method="POST" action="{{ route('shops.store') }}" class="space-y-6">
                    @csrf

                    <!-- Название магазина -->
                    <div class="!mt-0">
                        <x-input-label for="name" value="Название магазина" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <!-- Поддомен -->
                    <div>
                        <x-input-label for="subdomain" value="Поддомен" />
                        <x-text-input id="subdomain" name="subdomain" type="text" class="mt-1 block w-full" :value="old('subdomain')" required />
                        <x-input-error class="mt-2" :messages="$errors->get('subdomain')" />
                    </div>

                    <!-- Описание магазина -->
                    <div>
                        <x-input-label for="description" value="Описание магазина" />
                        <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </div>

                    <!-- Кнопка отправки -->
                    <div class="flex items-center gap-4">
                        <x-primary-button>Создать магазин</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
