document.getElementById('autofill-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(e.target);

    fetch('save.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.text())
        .then(result => {
            alert('Data saved successfully.');
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
