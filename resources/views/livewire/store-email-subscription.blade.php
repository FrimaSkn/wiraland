<form wire:submit.prevent="store" method="POST">

    <div class="relative mt-4">
        <input type="text" wire:model="email" class="block w-full text-white p-3 pe-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-xl border-secondary focus:ring-brand focus:border-brand shadow-xs placeholder:text-white" placeholder="Tulis email kami disini..." required />
        <button
            type="submit"
            class="g-recaptcha absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs focus:outline-none"
            data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"
            data-size="invisible"
            data-callback="onCallback"
            >
            <img class="size-8" src="{{ asset('assets/svg/icon-arrow.svg') }}" alt="">
        </button>
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
</form>
<script>
    function onCallback(token) {
        @this.set('recaptcha', token);
        @this.store();
    }
</script>
