document.addEventListener('DOMContentLoaded', (event) => {
    const inputs = document.querySelectorAll('input[type="text"], input[type="password"], input[type="email"]');

    inputs.forEach(input => {
        input.addEventListener('input', () => {
            input.style.backgroundColor = 'transparent';
        });
    });
});
