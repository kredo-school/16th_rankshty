// eyeIcon click event
$("#eyeIcon").on("click", () => {
    // eyeIconのclass切り替え
    $("#eyeIcon").toggleClass("fa-eye-slash fa-eye");
    // inputのtype切り替え
    if ($("#password").attr("type") == "password") {
        $("#password").attr("type", "text");
    } else {
        $("#password").attr("type", "password");
    }
});

// eyeIcon_confirm click event
$("#eyeIcon_confirm").on("click", () => {
    // eyeIconのclass切り替え
    $("#eyeIcon_confirm").toggleClass("fa-eye-slash fa-eye");
    // inputのtype切り替え
    if ($("#password-confirm").attr("type") == "password") {
        $("#password-confirm").attr("type", "text");
    } else {
        $("#password-confirm").attr("type", "password");
    }
});
