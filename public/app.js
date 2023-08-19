// Check if the uploaded file is an image
function isImage(file) {
    return file.type.match('image.*');
}

function previewFile() {
    var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}

// Handle the form submit event
window.addEventListener("DOMContentLoaded", (event) => {
    document.querySelector('form').addEventListener('submit', (event) => {
        event.preventDefault();

        // Get the form data
        const formData = new FormData(event.target);

        // Check if the image is valid
        if (!isImage(formData.get('image'))) {
            alert('Please upload a valid image.');
            return;
        }

        // Submit the form data to the backend
        fetch('/create-user', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if(response.ok) {
                return response.json();
            }
            throw new Error('Something went wrong');
        })
        .then(data => {
            alert(data.message);
            document.querySelector('form').reset();
            document.querySelector('img').src = "";
            console.log(data);
        })
        .catch(error => {
            console.error(error);
            alert('Error! Try again or Check your data..');
        });
    });
});