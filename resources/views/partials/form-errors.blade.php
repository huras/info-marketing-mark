@if ($errors->has($fieldName))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($fieldName) }}</strong>
    </span>
@endif