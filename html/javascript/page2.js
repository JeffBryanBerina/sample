User

function buyProduct() {
    // Display a notification message
    showBuyNotification('Buying the product...');

    // Simulate a delay (e.g., AJAX request) before redirecting to the next page
    setTimeout(function () {
        // Redirect to the next page
        window.location.href = "payment.html";
    }, 2000); // Simulating a 2-second delay (adjust as needed)
}

function showBuyNotification(message) {
    var notification = document.getElementById('buyNotification');
    notification.innerHTML = message;
    notification.style.display = 'block';

    // Hide the notification after a few seconds (adjust as needed)
    setTimeout(function () {
        notification.style.display = 'none';
    }, 3000);
}