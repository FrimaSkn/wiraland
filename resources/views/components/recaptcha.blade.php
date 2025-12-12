<div class="g-recaptcha mt-4" data-sitekey={{env('GOOGLE_RECAPTCHA_KEY')}}></div>
@push('after-styles')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
