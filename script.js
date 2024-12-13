$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Gather form data
        const formData = {
            name: $('#name').val(),
            age: $('#age').val(),
            gender: $('#gender').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            address: $('#address').val(),
            symptoms: $('#symptoms').val(),
        };

        // Display result
        $('#result').html(`
            <h3>Registration Details</h3>
            <p><strong>Name:</strong> ${formData.name}</p>
            <p><strong>Age:</strong> ${formData.age}</p>
            <p><strong>Gender:</strong> ${formData.gender}</p>
            <p><strong>Email:</strong> ${formData.email}</p>
            <p><strong>Phone:</strong> ${formData.phone}</p>
            <p><strong>Address:</strong> ${formData.address}</p>
            <p><strong>Symptoms:</strong> ${formData.symptoms}</p>
        `);
    });
});
