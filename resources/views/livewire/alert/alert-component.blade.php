<div>
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

        <script>
            document.addEventListener('livewire:load', function () {
                let countdown = 15; // Start the countdown from 15 seconds
                const countdownElement = document.getElementById('countdown');
                const alertMessage = document.getElementById('alert-message');

                // Update the countdown every second
                const interval = setInterval(function() {
                    countdown--;
                    countdownElement.textContent = countdown; // Update the countdown display

                    // When countdown reaches 0
                    if (countdown <= 0) {
                        clearInterval(interval); // Stop the countdown
                        alertMessage.classList.remove('show'); // Hide the alert
                        alertMessage.classList.add('fade'); // Apply fade out effect

                        // Optionally, remove it from DOM after fading out
                        setTimeout(function() {
                            alertMessage.remove(); // Remove from DOM
                        }, 500); // Adjust duration for fading
                    }
                }, 1000); // Update every second
            });
        </script>
    @endif
</div>
