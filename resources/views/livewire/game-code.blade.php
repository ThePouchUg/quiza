<div class="flex flex-col h-screen items-center justify-center border-4 ">
    <h1 class="text-3xl font-bold">The Pub Quiz</h1>
    <h2 class="text-2xl">Enter quiz code</h2>
    <div class="flex flex-col justify-center items-center space-y-4">
        <div class="flex flex-col justify-center items-center">
            <label for="quiz-code" class="block mb-2 text-sm font-medium text-gray-900 sr-only">Quiz
                Code</label>
            <input type="text" id="quiz-code"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="EF002255" required>
        </div>
        <button type="button"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="enterQuiz">Enter</button>

    </div>
</div>
