document.addEventListener('DOMContentLoaded', function () {
    const darkSwitch = document.getElementById('darkSwitch');
    if (!darkSwitch) return;

    // Apply saved theme on load
    if (localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark-mode');
        darkSwitch.checked = true;
    }

    darkSwitch.addEventListener('change', function () {
        if (this.checked) {
            document.body.classList.add('dark-mode');
            localStorage.setItem('darkMode', 'enabled');
        } else {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('darkMode', 'disabled');
        }
    });
}); 