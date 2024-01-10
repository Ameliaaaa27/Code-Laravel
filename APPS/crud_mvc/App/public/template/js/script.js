document.addEventListener('DOMContentLoaded', function() {
    // Example JavaScript to interact with the DOM
    const buttons = document.querySelectorAll('.btn');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            alert('Button clicked!');
        });
    });

    // More interactivity can be added here
});
