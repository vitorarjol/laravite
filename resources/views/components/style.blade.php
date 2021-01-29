@env('local')
<link rel="stylesheet"
      href="{{ env('VITE_URL') . '/' . $src }}">
@endenv

@if(env('APP_ENV') === "production" && isset($manifest[$src]))
<link rel="stylesheet"
      href="{{ asset($manifest[$src]['css']) }}">
@endif