@inject('session', '\Illuminate\Support\Facades\Session')
@if (Session::has('alert'))
    @php
        $alert = Session::get('alert');
    @endphp
    <div id="alert-message" class="alert alert-{{ $alert['type'] }} alert-dismissible fade show" role="alert">
        <strong>{{ $alert['title'] }}</strong> {{ $alert['message'] }}
        <span id="countdown">15</span> seconds.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
