$(document).ready(() => {
  $("#work-order-form").submit((event) => {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(this);

    $.ajax({
      type: "POST",
      url: "processForm.php",
      data: formData,
      processData: false,
      contentType: false,
      success: (response) => {
        // Request was successful

        // Write success message to the page
        console.log(response);
      },
      error: function (xhr, status, error) {
        // Write Request failed to the page
        console.error("Error:", error);
      },
    });
  });
});
