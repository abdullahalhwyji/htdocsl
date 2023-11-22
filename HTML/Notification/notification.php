<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Sender</title>
 <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      
      .container {
        width: 80%;
        margin: 20px auto;
      }
      
      input[type="text"],
      textarea,
      button,
      input[type="file"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
      }
      
      button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-right: 10px;
        cursor: pointer;
      }
      
      .email-preview {
        margin-top: 20px;
        border: 1px solid #ccc;
        padding: 10px;
      }
      

 </style>
</head>
<body>
  <div class="container">
    <h1>Email Sender</h1>
    <form id="emailForm">
      <label for="emailTitle">Title of the Email:</label>
      <input type="text" id="emailTitle" required><br><br>
      
      <label for="emailContent">Content of the Email:</label>
      <textarea id="emailContent" rows="8" required></textarea><br><br>
      
      <label for="replyChoice1">Choice 1 for User Reply:</label>
      <input type="text" id="replyChoice1" required><br><br>
      
      <label for="replyChoice2">Choice 2 for User Reply:</label>
      <input type="text" id="replyChoice2" required><br><br>
      
      <label for="replyChoice3">Choice 3 for User Reply:</label>
      <input type="text" id="replyChoice3" required><br><br>
      
      <label for="fileUpload">Add Photo or PDF:</label>
      <input type="file" id="fileUpload"><br><br>
      
      <button type="button" onclick="previewEmail()">Preview Email</button>
      <button type="submit">Send Email</button>
    </form>
    <div id="emailPreview" class="email-preview"></div>
  </div>

  <script>
    function previewEmail() {
        const title = document.getElementById('emailTitle').value;
        const content = document.getElementById('emailContent').value;
        const choice1 = document.getElementById('replyChoice1').value;
        const choice2 = document.getElementById('replyChoice2').value;
        const choice3 = document.getElementById('replyChoice3').value;
      
        const emailPreview = document.getElementById('emailPreview');
        emailPreview.innerHTML = `
          <h2>Email Preview</h2>
          <strong>Title:</strong> ${title}<br>
          <strong>Content:</strong><br>${content}<br>
          <strong>Choices for User Reply:</strong><br>
          1. ${choice1}<br>
          2. ${choice2}<br>
          3. ${choice3}
        `;
      }
      
      document.getElementById('emailForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Add logic to send the email here
        alert('Email sent!');
      });
      

  </script>


</body>
</html>
