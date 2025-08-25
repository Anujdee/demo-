<?php
// Connect to your database
 include 'config.php';
$certificate = null;
if (isset($_GET['registration_number'])) {
    $reg_no = $conn->real_escape_string($_GET['registration_number']);
    $sql = "SELECT * FROM certificates WHERE registration_number = '$reg_no' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $certificate = $result->fetch_assoc();
    }
}

$certificate = null;
if (isset($_GET['registration_number'])) {
    $reg_no = $conn->real_escape_string($_GET['registration_number']);
    $sql = "SELECT * FROM certificates WHERE registration_number = '$reg_no' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $certificate = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
        <title>Global Connection21</title>

    <meta name="keywords" content="Global Connection21" />
    <meta name="description" content="Global Connection21">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets\images\demos\demo14\site-icon.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Great+Vibes&family=Dancing+Script&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
      background-color: #f9f6f1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 20px;
    }
    .certificate {
      width: 700px;
      padding: 40px;
      border: 15px solid #c6a679;
      background: #fff;
      position: relative;
      box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    .border-design {
      position: absolute;
      top: 10px;
      left: 10px;
      right: 10px;
      bottom: 10px;
      border: 4px double #c6a679;
    }
    .header {
      display: flex;
      justify-content: space-between;
      font-size: 16px;
      margin-bottom: 10px;
      margin-top: -20px;
    }
    .certificate h1 {
      font-size: 35px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
    .certificate p {
      font-size: 18px;
      margin: 5px 0;
      margin-top: -5px;
    }
    .certificate h5 {
      font-weight: normal;
      font-size: 15px;
      font-style: italic;
      margin: 10px 0;
    }
    .recipient {
      font-size: 28px;
      font-weight: bold;
      text-decoration: underline;
      font-family: 'Great Vibes', cursive;
    }
    .signatures {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }
    .signature {
      text-align: center;
      font-family: 'Dancing Script', cursive;
      font-size: 26px;
      width: 40%;
    }
 .brush-image {
            position: absolute;
            width: 150px;
            top: 83%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    .download-btn {
      margin: 20px;
      padding: 10px 20px;
      background-color: #c6a679;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <button class="download-btn" onclick="downloadPDF()">Download Certificate as PDF <i class=" w-icon-download"></i></button>
<?php if ($certificate): ?>
  <div class="certificate" id="certificate">
    <div class="border-design"></div>

    <div class="header">
      <p><strong>Issue Date:</strong> <?= date("d F Y", strtotime($certificate['date_of_issue'])) ?></p>
      <p><strong>CERTIFICATE NO:</strong> <?= htmlspecialchars($certificate['name']) ?></p>
    </div>

    <h1>CERTIFICATE OF TRUST</h1>
    <p>This certificate is proudly presented to</p>
    <p> <b><?= htmlspecialchars($certificate['certificate_number']) ?> </b></p>
    <p><strong>THIS IS TO CERTIFY THAT</strong></p>
    <p><em><?= htmlspecialchars($certificate['company']) ?></em></p>

    <h5>
      Having its principal place of business at 4219 Par Five DR Westlake Village, CA 91362 USA<br>
      is registered as a Trader under the Trusted supplier and is authorized to conduct business worldwide.
    </h5>

    <p><strong>Business Type:</strong> <?= htmlspecialchars($certificate['business_type']) ?></p>
    <p><strong>Registration Number:</strong> <?= htmlspecialchars($certificate['registration_number']) ?></p>
    <p><strong>Issued by:</strong> Global Certification Authority</p>

    <div class="signatures">
      <div class="signature">
        <img src="assets/2.png" alt="Decorative Brush" style="width:80px;margin-top:-60px">
        <p style="margin-top:-10px">Barry</p>
        <hr>
        <p style="margin-top:-10px">Training Specialist</p>
      </div>

      <div class="signature">
        <img src="assets/1.png" alt="Decorative Brush" style="width:110px;margin-top:-60px">
        <img src="assets/images/quality.png" alt="Brush" class="brush-image" style="width:90px">
        <p style="margin-top:-10px">David Peterson</p>
        <hr>
        <p style="margin-top:-10px">Certification Officer</p>
      </div>
    </div>
  </div>
  <?php else: ?>
  <p style="text-align: center; color: red;">Certificate not found. Please check the registration number and try again.</p>
<?php endif; ?>

  <script>
    function downloadPDF() {
      const element = document.getElementById('certificate');
      const opt = {
        margin:       0,
        filename:     'certificate.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      html2pdf().set(opt).from(element).save();
    }
  </script>

</body>
</html>

 
 
