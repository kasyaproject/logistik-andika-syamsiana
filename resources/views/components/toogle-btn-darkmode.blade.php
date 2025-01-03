<button id="dark-mode-toggle" type="button"
    class="p-1 mr-2 text-sm text-gray-500 rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700">
    <svg id="theme-toggle-dark-icon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z" />
    </svg>

    <svg id="theme-toggle-light-icon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd"
            d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.343 4.929A1 1 0 0 0 4.93 6.343l1.414 1.414a1 1 0 0 0 1.414-1.414L6.343 4.929Zm12.728 1.414a1 1 0 0 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 1.414 1.414l1.414-1.414ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.757 17.657a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414Zm9.9-1.414a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z"
            clip-rule="evenodd" />
    </svg>
</button>

<script>
    // Periksa preferensi mode gelap yang disimpan di localStorage
    const isDarkMode = localStorage.getItem('dark-mode') === 'true';
    const darkModeIcon = document.getElementById('theme-toggle-dark-icon');
    const lightModeIcon = document.getElementById('theme-toggle-light-icon');

    // Aktifkan dark mode jika sebelumnya diset dan ambil icon yang sesuai
    if (isDarkMode) {
        document.documentElement.classList.add('dark');
        darkModeIcon.style.display = 'none';
        lightModeIcon.style.display = 'block';
    } else {
        lightModeIcon.style.display = 'none';
        darkModeIcon.style.display = 'block';
    }

    // Tombol untuk toggle dark mode
    const toggleButton = document.getElementById('dark-mode-toggle');
    toggleButton.addEventListener('click', () => {
        // Toggle dark mode
        document.documentElement.classList.toggle('dark');

        // Simpan preferensi pengguna di localStorage
        const isDarkModeNow = document.documentElement.classList.contains('dark');
        localStorage.setItem('dark-mode', isDarkModeNow);

        // Tampilkan ikon yang sesuai
        if (isDarkModeNow) {
            darkModeIcon.style.display = 'none';
            lightModeIcon.style.display = 'block';
        } else {
            lightModeIcon.style.display = 'none';
            darkModeIcon.style.display = 'block';
        }
    });
</script>
