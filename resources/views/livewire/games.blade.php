<div class="container mx-auto px-4 py-8">
    <div class="text-2xl font-bold mb-4 text-center">UEFA Euro 2024</div>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($games as $game)
        <div class="flex flex-col justify-between bg-gray-900 text-white p-4 rounded-lg hover:cursor-pointer" wire:click="selectGame({{ $game->id }})">
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <img src="https://flagcdn.com/w40/{{ $game->team1_flag }}.png" alt="{{ $game->team1_name }}"
                        class="w-6 h-6 mr-2 rounded-sm border-solid border-2 border-white" />
                    <span>{{ $game->team1_name }}</span>
                </div>
                <div class="flex items-center">
                    <span>{{ $game->team2_name }}</span>
                    <img src="https://flagcdn.com/w40/{{ $game->team2_flag }}.png" alt="{{ $game->team2_name }}"
                        class="w-6 h-6 ml-2 rounded-sm border-solid border-2 border-white" />
                </div>
            </div>
            @if ($game->score1 !== null && $game->score2 !== null)
            <div class="text-center font-bold">{{ $game->score1 }} - {{ $game->score2 }}</div>
            @else
            <div class="text-center font-bold">-- - --</div>
            @endif
            <div class="text-right">
                <div>{{ $game->date }}</div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal -->
    @if ($showModal)
    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Add Score</h3>
                <form wire:submit.prevent="saveScore">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="score1">{{
                            $selectedGame->team1_name }}</label>
                        <input type="number" id="score1" wire:model.defer="score1"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('score1') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="score2">{{
                            $selectedGame->team2_name }}</label>
                        <input type="number" id="score2" wire:model.defer="score2"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('score2') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="button" wire:click="closeModal"
                            class="mr-4 bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</button>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
