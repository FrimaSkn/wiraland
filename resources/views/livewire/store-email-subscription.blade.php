<form wire:submit.prevent="store" method="POST">

    <div class="relative mt-4">
        <input type="text" wire:model="email" class="block w-full text-white p-3 pe-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-xl border-secondary focus:ring-brand focus:border-brand shadow-xs placeholder:text-white" placeholder="Tulis email kami disini..." required />
        <div wire:ignore.self>
            <button
                type="submit"
                class="g-recaptcha absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs focus:outline-none"
                data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"
                data-size="invisible"
                data-callback="onCallback"
                wire:loading.attr="disabled"
                >
                <img class="size-8" src="{{ asset('assets/svg/icon-arrow.svg') }}" alt="">
            </button>
        </div>
    </div>

    @error('email')
        <small class="text-red-500">
            {{ $message }}
        </small>
    @enderror

    @error('recaptcha')
        <small class="text-red-500">
            {{ $message }}
        </small>
    @enderror

    @if ($status)
        <div class="mt-4"
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
            <div @class(['bg-green-600' => $status == 'success', 'bg-red-600' => $status == 'error', "text-white p-3 rounded relative overflow-hidden"]) class="">
                <div class="flex items-center gap-2 justify-between">
                    <div class="flex gap-2">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>{{ $message }}</span>
                    </div>
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
</form>
<script>
    function onCallback(token) {
        @this.set('recaptcha', token);
        @this.store();
    }
</script>
