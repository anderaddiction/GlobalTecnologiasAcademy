//Emails
const first_name = document.getElementById("name");
const last_name = document.getElementById("last_name");
const country = document.getElementById("country");
const email_input = document.getElementById("email");
const idInput = document.getElementById("id");
const registerDateHour = document.getElementById("register_date");
const status = (document.getElementById("status").value = "Activo");
const domain = "";
const email = "";
let time = new Date();
let currenDate =
    time.toJSON().slice(0, 10).replace(/-/g, "/") +
    " " +
    (time.getHours() < 10 ? "0" : "") +
    time.getHours() +
    ":" +
    (time.getMinutes() < 10 ? "0" : "") +
    time.getMinutes() +
    ":" +
    (time.getSeconds() < 10 ? "0" : "") +
    time.getSeconds();

registerDateHour.value = currenDate;

country.addEventListener("change", function () {
    createEmail(
        this,
        first_name,
        last_name,
        idInput,
        domain,
        email,
        email_input
    );
});

function createEmail(
    country,
    first_name,
    last_name,
    idInput,
    domain,
    email,
    email_input
) {
    if (country.value == 0) {
        const id = idInput.value++;
        domain = "global.com.co";
        email = first_name.value + "" + last_name.value + id + "@" + domain;
        email_input.value = email.toLowerCase();
    } else {
        const id = idInput.value++;
        domain = "global.com.us";
        email = first_name.value + "" + last_name.value + id + "@" + domain;
        email_input.value = email.toLowerCase();
    }
}
