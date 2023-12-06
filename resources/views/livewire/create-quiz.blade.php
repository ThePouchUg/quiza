<div class="flex flex-col">
    <livewire:nav-bar />

    <div class="flex flex-col mt-4 mx-auto px-6 gap-y-2">
        <button type="button mt-2" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
            wire:click="addCategory">Add Categories</button>

        <button type="button mt-2" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
            wire:click="addQuestions">Select Questions</button>
    </div>

</div>
