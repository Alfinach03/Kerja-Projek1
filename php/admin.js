document.addEventListener('DOMContentLoaded', function () {
    const navbarnav = document.querySelector('.dropdown-menu');
    const sdbar = document.querySelector('#sidebar');

    // Saat sidebar diklik
    document.querySelector('#sidebar').onclick = () => {
        navbarnav.classList.toggle('active');
    }

    // Diluar sidebar
    document.addEventListener('click', function (e) {
        if (!sdbar.contains(e.target) && !navbarnav.contains(e.target)) {
            navbarnav.classList.remove('active');
        }
    });
});

// Delete admin php

function confirmDelete() {
    return confirm("Yakin ingin menghapus data?");
    }