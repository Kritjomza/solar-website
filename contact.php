<?php include('includes/header.php'); ?>

<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4 max-w-7xl">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-12 animate-fade-in">
      ติดต่อเรา
    </h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $name = trim($_POST["name"]);
      $email = trim($_POST["email"]);
      $subject = trim($_POST["subject"]);
      $message = trim($_POST["message"]);

      if ($name && $email && $message) {
        $to = "kritjomza23@email.com"; // อีเมลปลายทาง
        $headers = "From: $email";
        $body = "ชื่อ: $name\nอีเมล: $email\nหัวข้อ: $subject\n\nข้อความ:\n$message";

        if (mail($to, $subject, $body, $headers)) {
          echo '<div class="bg-green-100 text-green-700 p-4 rounded mb-6 text-center animate-fade-in">✅ ข้อความของคุณถูกส่งเรียบร้อยแล้ว</div>';
        } else {
          echo '<div class="bg-red-100 text-red-700 p-4 rounded mb-6 text-center animate-fade-in">❌ ระบบไม่สามารถส่งข้อความได้ กรุณาลองใหม่ภายหลัง</div>';
        }
      } else {
        echo '<div class="bg-yellow-100 text-yellow-700 p-4 rounded mb-6 text-center animate-fade-in">⚠️ กรุณากรอกข้อมูลให้ครบถ้วน</div>';
      }
    }
    ?>

    <div class="grid lg:grid-cols-2 gap-10 animate-fade-in">

      <!-- ฟอร์มติดต่อ -->
      <form method="POST" class="bg-white p-10 rounded-lg shadow-xl space-y-6">
        <div>
          <label class="block font-medium text-gray-700 mb-2">ชื่อของคุณ <span class="text-red-500">*</span></label>
          <input type="text" name="name" required class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
          <label class="block font-medium text-gray-700 mb-2">อีเมล <span class="text-red-500">*</span></label>
          <input type="email" name="email" required class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
          <label class="block font-medium text-gray-700 mb-2">หัวข้อ</label>
          <input type="text" name="subject" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
          <label class="block font-medium text-gray-700 mb-2">ข้อความของคุณ <span class="text-red-500">*</span></label>
          <textarea name="message" rows="5" required class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
        </div>

        <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-300 text-black font-semibold py-3 px-6 rounded-md transition duration-300">
          📩 ส่งข้อความ
        </button>
      </form>

      <!-- ช่องทางติดต่อ -->
      <div class="space-y-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">ข้อมูลติดต่อบริษัท</h3>
          <p class="mb-2"><strong>📍 ที่อยู่:</strong> 123 ถนนพลังงานเขียว, กรุงเทพฯ</p>
          <p class="mb-2"><strong>📞 โทร:</strong> 02-123-4567</p>
          <p class="mb-2"><strong>📧 อีเมล:</strong> info@solarcell.co.th</p>

          <div class="flex space-x-4 mt-4">
            <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook fa-xl"></i></a>
            <a href="https://line.me/ti/p/yourlineid" target="_blank" class="text-green-500 hover:text-green-700"><i class="fab fa-line fa-xl"></i></a>
            <a href="mailto:info@solarcell.co.th" class="text-gray-600 hover:text-black"><i class="fas fa-envelope fa-xl"></i></a>
          </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-center">
          <p class="mb-2 font-semibold">แอดไลน์เพื่อสอบถามเพิ่มเติม</p>
          <img src="assets/images/line-qr.png" alt="LINE QR Code" class="w-40 h-40 mx-auto rounded border">
        </div>
      </div>
    </div>

    <!-- แผนที่ -->
    <div class="mt-16 rounded-lg overflow-hidden shadow-md animate-fade-in">
      <iframe src="https://maps.app.goo.gl/Zq1asKgXR6j8A6hP6" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
