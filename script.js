document.getElementById('ecommerceForm').addEventListener('submit', function(event) {
    // Example of form validation
    const name = document.getElementById('name').value;
    const address = document.getElementById('address').value;
    const productCode = document.getElementById('product_code').value;
    const quantity = document.getElementById('quantity').value;

    if (name === '' || address === '' || productCode === '' || quantity === '') {
        event.preventDefault();
        alert('Please fill out all fields.');
    }
});
