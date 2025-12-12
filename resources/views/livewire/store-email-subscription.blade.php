<form @submit.prevent="doCaptcha" method="POST"
    x-data="{
        siteKey: @js(env('GOOGLE_RECAPTCHA_KEY')),
        init() {
            if (!window.recaptcha) {
                const script = document.createElement('script');
                script.src = 'https://www.google.com/recaptcha/api.js?render=' + this.siteKey;
                document.body.append(script);
            }
        },
         doCaptcha() {
            grecaptcha.execute(this.siteKey, {action: 'submit'}).then(token => {
                Livewire.dispatch('formSubmitted', {token: token});
            });
        },
    }">

    <div class="relative mt-4">
        <input type="text" wire:model="email" class="block w-full text-white p-3 pe-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-xl border-secondary focus:ring-brand focus:border-brand shadow-xs placeholder:text-white" placeholder="Tulis email kami disini..." required />
        <button type="submit" class="absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs focus:outline-none">
            <img class="size-8" src="{{ asset('assets/svg/icon-arrow.svg') }}" alt="">
        </button>
    </div>
</form>
