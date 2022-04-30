@props(['value'])
<label class="form-label">
    {{ $value ?? $slot }}
    @if($value === 'Password' && Route::has('password.request'))
      <span class="form-label-description">
        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
      </span>
    @endif
</label>