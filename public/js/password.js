// eyeIconのclickクリックイベント
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