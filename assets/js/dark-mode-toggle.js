document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const moonIcon = 'fa-moon-o';
    const sunIcon = 'fa-sun-o'; // Assuming you want to change icon

    // Function to apply the saved theme
    function applyTheme(theme) {
        if (theme === 'dark') {
            body.classList.add('dark-mode');
            if (darkModeToggle) {
                darkModeToggle.innerHTML = '<i class="fa ' + sunIcon + '"></i>';
            }
            // Link dark mode CSS
            let darkCssLink = document.getElementById('dark-mode-css');
            if (!darkCssLink) {
                darkCssLink = document.createElement('link');
                darkCssLink.id = 'dark-mode-css';
                darkCssLink.rel = 'stylesheet';
                // Corrected path assuming 'assets/' is accessible from the root
                // or base_url() needs to be provided globally for JS
                darkCssLink.href = 'assets/css/dark-mode.css'; 
                document.head.appendChild(darkCssLink);
            }
        } else {
            body.classList.remove('dark-mode');
            if (darkModeToggle) {
                darkModeToggle.innerHTML = '<i class="fa ' + moonIcon + '"></i>';
            }
            // Unlink dark mode CSS
            const darkCssLink = document.getElementById('dark-mode-css');
            if (darkCssLink) {
                darkCssLink.remove();
            }
        }
    }

    // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        applyTheme(savedTheme);
    } else {
         // Default to light mode if no preference is saved
         applyTheme('light');
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function () {
            if (body.classList.contains('dark-mode')) {
                applyTheme('light');
                localStorage.setItem('theme', 'light');
            } else {
                applyTheme('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    }
});
