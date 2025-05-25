// Home Page Detail Button-Redirect
function goToPage1(id) {
    window.location.href = `/books/${id}`;
}

// Home Page Update Button-Redirect
function goToPage2(id) {
    window.location.href = `/books/${id}/edit`;
}

// Search books by title or author
function searchBooks() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const rows = document.querySelectorAll('table tbody tr');

    rows.forEach(row => {
        const title = row.cells[1].innerText.toLowerCase();
        const author = row.cells[2].innerText.toLowerCase();
        if (title.includes(input) || author.includes(input)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
