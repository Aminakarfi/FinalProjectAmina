<x-app-layout>
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Calorie Calculation Result</h2>
    
        <p class="text-lg mb-4">Name: {{ $calculation->name }}</p>
        <p class="text-lg mb-4">Calories Needed: {{ $calculation->calories_needed }} kcal/day</p>
    
        <a href="{{ route('dashboard') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Continue</a>
    </div>
</x-app-layout>