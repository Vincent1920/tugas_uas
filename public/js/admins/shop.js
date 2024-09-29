document.addEventListener('DOMContentLoaded', function () {
    // Ambil semua checkbox dengan class 'toggle-checkbox'
    const checkboxes = document.querySelectorAll('.toggle-checkbox');

    checkboxes.forEach(function (checkbox) {
        // Tambahkan event listener untuk setiap checkbox
        checkbox.addEventListener('change', function () {
            const id = this.getAttribute('data-id');
            const extraInfo = document.getElementById('extra-info-' + id);

            // Tampilkan atau sembunyikan data berdasarkan status checkbox
            if (this.checked) {
                extraInfo.style.display = 'block';
            } else {
                extraInfo.style.display = 'none';
            }
        });
    });
});