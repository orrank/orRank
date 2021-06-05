<meta charset="utf-8" />
<title>
    @if (Auth::user()) {{ Auth::user()->username }} @endif •
    RatinQ •
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Responsive bootstrap 4 admin template" name="description" />
<meta content="RatinQ" name="author" />
<meta content="Analyze Rating & get feedback to you & your organization" name="description" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="{{ asset('assets/images/Ratinq.ico') }}">
<link rel="icon" href="{{ asset('assets/images/RatinQ_white.svg') }}" sizes="any" type="image/svg+xml">
@livewireStyles
