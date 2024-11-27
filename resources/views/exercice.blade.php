<x-app-layout>
    
    
   
    <div class="container mx-auto py-8">
        <!-- Form to Create an Exercice -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <button id="openModal" class=" text-3xl font-bold bg-red-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-red-700 transition">
        Create Exercise
    </button>

    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden">
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md relative">
            <h4 class="text-4xl font-bold text-red-600 mb-4">OUR PLANS</h4>
            <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <form action="/exercice/store" method="POST" enctype="multipart/form-data" class="space-y-4">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Exercise Name</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                        placeholder="Enter exercise name" required>
                </div>

                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Exercise Image</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                        accept="image/*" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                        rows="3" placeholder="Enter exercise description" required></textarea>
                </div>

                <div>
                    <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
                    <input id="start" type="datetime-local" name="start_time" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                        required>
                </div>

                <div>
                    <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
                    <input id="end" type="datetime-local" name="end_time"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                        required>
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-red-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-red-700 transition">
                        Create Exercise
                    </button>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>

        <!-- List of Exercices -->
        <div class="bg-black text-white rounded-lg shadow-md p-6">
            <h4 class="text-2xl font-bold  text-white mb-4">All Exercices</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($exercices as $exercice)
                    <!-- Exercice Card -->
                    <div class="bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <!-- Exercice Image -->
                        <img src="{{ asset('storage/images/' . $exercice->image) }}" alt="{{ $exercice->name }}"
                            class="w-full h-40 object-cover">

                        <!-- Exercice Details -->
                        <div class="p-4">
                            <h5 class="text-lg font-bold text-red-500">{{ $exercice->name }}</h5>
                            <p class="text-sm text-gray-300 mt-2">{{ $exercice->description }}</p>

                            <!-- Start and End Time -->
                            <div class="text-gray-400 text-sm mt-4">
                                <p><span  class="font-semibold text-white">Start Time:</span> {{ $exercice->start_time }}
                                </p>
                                <p><span class="font-semibold text-white">End Time:</span> {{ $exercice->end_time }}</p>
                                <form action="/exercice/destroy/{{ $exercice->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    @if (Auth::user()->role == 'trainer')
                                        
                                    <button class="bg-red-500 text-white p-2 rounded-lg">Delete</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <p class="text-gray-300 col-span-full text-center">No exercices found.</p>
                @endforelse
            </div>
        </div>
    </div>
    <div id="calendar" class="bg-black text-white">
        <h1 class="text-center pt-4 text-2xl font-bold">Calender</h1>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            let response = await axios.get("/exercice/create")
            let events = response.data.events
      
            let nowDate = new Date()
            let day = nowDate.getDate()
            let month = nowDate.getMonth() + 1
            let hours = nowDate.getHours()
            let minutes = nowDate.getMinutes()
            let minTimeAllowed =
                `${nowDate.getFullYear()}-${month < 10 ? "0"+month : month}-${day < 10 ? "0"+day : day}T${hours < 10 ? "0"+hours : hours}:${minutes < 10 ? "0"+minutes : minutes}:00`
            start.min = minTimeAllowed;
      
      
            var myCalendar = document.getElementById('calendar');
      
      
            var calendar = new FullCalendar.Calendar(myCalendar, {
      
                headerToolbar: {
                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    center: 'title',
                    right: 'listMonth,listWeek,listDay'
                },
      
      
                views: {
                    listDay: { // Customize the name for listDay
                        buttonText: 'Day Events',
      
                    },
                    listWeek: { // Customize the name for listWeek
                        buttonText: 'Week Events'
                    },
                    listMonth: { // Customize the name for listMonth
                        buttonText: 'Month Events'
                    },
                    timeGridWeek: {
                        buttonText: 'Week', // Customize the button text
                    },
                    timeGridDay: {
                        buttonText: "Day",
                    },
                    dayGridMonth: {
                        buttonText: "Month",
                    },
      
                },
      
      
                initialView: "timeGridWeek", // initial view  =   l view li kayban  mni kan7ol l  calendar
                slotMinTime: "09:00:00", // min  time  appear in the calendar
                slotMaxTime: "19:00:00", // max  time  appear in the calendar
                nowIndicator: true, //  indicator  li kaybyen  l wa9t daba   fin  fl calendar
                selectable: true, //   kankhali l user  i9ad  i selectioner  wast l calendar
                selectMirror: true, //  overlay   that show  the selected area  ( details  ... )
                selectOverlap: false, //  nkhali ktar mn event f  nfs  l wa9t  = e.g:   5 nas i reserviw nfs lblasa  f nfs l wa9t
                weekends: true, // n7ayed  l weekends    ola nkhalihom 
      
      
                // events  hya  property dyal full calendar
                //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                events: events,
      
                selectAllow: (info) => {
      
                    return info.start >= nowDate;
                },
      
                select: (info) => {
      
      
                    if (info.end.getDate() - info.start.getDate() > 0 && !info.allDay ) {
                        return
                    }
      
                    console.log(info);
                    if (info.allDay) {
                        start.value = info.startStr+" 09:00:00"
                        end.value = info.startStr+" 19:00:00"   
                        
                    }else{     
                        start.value = info.startStr.slice(0, info.startStr.length - 6)
                        end.value = info.endStr.slice(0, info.endStr.length - 6)   
                    }
      
                    submitEvent.click()
                }
      
      
      
            });
      
            calendar.render();
        })
      </script>
      <script>
        const modal = document.getElementById('modal');
        const openModalBtn = document.getElementById('openModal');
        const closeModalBtn = document.getElementById('closeModal');

        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
