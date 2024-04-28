//Emails
const first_name = document.getElementById("name");
const last_name = document.getElementById("last_name");
const country = document.getElementById("country");
const email_input = document.getElementById("email");
const idInput = document.getElementById("id");
const domain = "";
const email = "";

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
