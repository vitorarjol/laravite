@env('local')
<script type="module"
        src="{{ env('VITE_URL') . '/' . $src }}"></script>
@endenv

@if(env('APP_ENV') === "production" && isset($manifest[$src]))
<script type="module"
        src="{{ asset($manifest[$src]['file']) }}"></script>
@endif