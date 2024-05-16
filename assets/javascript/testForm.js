$(document).ready(() => {
  $("#work-order-form").submit(function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    $.ajax({
      type: "POST",
      url: "processForm.php",
      data: formData,
      processData: false,
      contentType: false,
      success: (response) => {
        $("#success-message").text("Your Message has successfully been logged");
        $("#work-order-form")[0].reset();
      },
      error: function (xhr, status, error) {
        $("#success-message").text("Error: Your message could not be logged");
        console.error("Error:", error);
      },
    });
  });
});
