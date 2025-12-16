@if (session('success'))
    <div class="fixed top-20 lg:top-48 right-2 z-[99]"
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-2"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-2"
        x-init="setTimeout(() => show = false, 8000)"
    >
        <div class="bg-primary text-white p-3 rounded relative overflow-hidden">
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>{{ session('success') }}</span>
                <button type="button" class="pt-0 px-1"  @click="show = false">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <progress x-data="{ value : 0 }"
                    x-init="setInterval(()=> {
                            if(value == 100){
                                clearInterval();
                            }else{
                                value+=1
                                }},8000 / 100)"
                    max="100"
                    :value="value"
                    class="w-full h-1 p-0 absolute bottom-0 left-0 rounded">
            </progress>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="fixed top-20 lg:top-48 right-2 z-[99]"
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-2"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-2"
        x-init="setTimeout(() => show = false, 8000)"
    >
        <div class="bg-red-600 text-white p-3 rounded relative overflow-hidden">
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>{{ session('error') }}</span>
                <button type="button" class="pt-0 px-1"  @click="show = false">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <progress x-data="{ value : 0 }"
                    x-init="setInterval(()=> {
                            if(value == 100){
                                clearInterval();
                            }else{
                                value+=1
                                }},8000 / 100)"
                    max="100"
                    :value="value"
                    class="w-full h-1 p-0 absolute bottom-0 left-0 rounded">
            </progress>
        </div>
    </div>
@endif



