<x-layouts.app>
    <x-container>
        <div class="flex flex-col items-center justify-center space-y-4 w-full">


            <a href="{{ route('profile') }}"
                class="flex items-center space-x-4 w-full  rounded-lg p-4 transition-all duration-300 ease-in-out">
                {{-- Avatar --}}
                <div class="avatar avatar-placeholder">
                    <div
                        class="bg-neutral text-neutral-content w-12 h-12 rounded-full flex items-center justify-center shadow-md hover:shadow-lg transition-all duration-200">
                        <span class="text-xl font-semibold">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</span>
                    </div>
                </div>

                {{-- Nome e descrição --}}
                <div class="flex flex-col text-left space-y-1">
                    <div class="font-bold text-xl tracking-wide text-white-800">{{ auth()->user()->name }}</div>
                    <div class="text-sm text-white-400">{{ auth()->user()->description }}</div>
                </div>
            </a>


            <div class="flex items-center justify-center w-full">
                {{-- Título --}}
                {{-- Lista de links --}}
                <ul class="space-y-2 w-full">
                    @foreach ($links as $link)
                        <li class="flex items-center gap-2">
                            {{-- Botão de subir --}}
                            @unless ($loop->first)
                                <x-form :route="route('links.up', $link)" patch>
                                    <x-button type="submit" ghost>
                                        <x-icons.arrow-up class="w-6 h-6" />
                                    </x-button>
                                </x-form>
                            @else
                                <x-button ghost disabled>
                                    <x-icons.arrow-up class="w-6 h-6" />
                                </x-button>
                            @endunless

                            {{-- Botão de editar --}}
                            <x-button href="{{ route('links.edit', $link) }}" outline info class="flex-1">
                                {{ $link['name'] }}
                            </x-button>

                            {{-- Botão de descer --}}
                            @unless ($loop->last)
                                <x-form :route="route('links.down', $link)" patch>
                                    <x-button type="submit" ghost>
                                        <x-icons.arrow-down class="w-6 h-6" />
                                    </x-button>
                                </x-form>
                            @else
                                <x-button ghost disabled>
                                    <x-icons.arrow-down class="w-6 h-6" />
                                </x-button>
                            @endunless

                            {{-- Botão de deletar --}}
                            <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Você tem certeza??')">
                                <x-button type="submit" ghost>
                                    <x-icons.trash class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Botão de criar novo link --}}
            <div class="pt-4 w-full">
                <x-button :href="route('links.create')" primary class="w-full">
                    Criar Novo Link
                </x-button>

            </div>

        </div>
    </x-container>
</x-layouts.app>
