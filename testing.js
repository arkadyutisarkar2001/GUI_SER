// $(document).ready(function() {
//   $('#upload-button').click(function() {
//     var form_data = new FormData();
//     var folder = $('#folder-input')[0].files[0];
//     form_data.append('folder', folder);
//     $.ajax({
//       url: 'ajax_upload.php',
//       type: 'post',
//       data: form_data,
//       contentType: false,
//       processData: false,
//       success: function(response) {
//         alert('Folder uploaded successfully. Path: ' + response);
//       }
//     });
//   });
// });


document.addEventListener("submit", function(event) {
  event.preventDefault();
  console.log("clicked")
  var fileInput = document.getElementById("myFile");
  var file = fileInput.files[0];
  console.log("file", file)
  var formData = new FormData();
  console.log("FormData", formData)
  formData.append("file", file);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax_upload.php", true);
  xhr.onload = function() {
    if (this.status == 200) {
      // var response = JSON.parse(this.responseText);
      // var filePath = response.path;
      // do something with the file path
    }
  };
  xhr.send(formData);
});
