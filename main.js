let today = new Date().toISOString().substr(0, 10);
document.querySelector("#eventDate").min = today;
document.querySelector("#eventDate").value = today;