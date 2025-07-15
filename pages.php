<?php
include 'connection.php';

$sql = "SELECT * FROM card ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to Page 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', sans-serif;
      padding: 40px;
    }

    .media-section {
      margin-bottom: 60px;
      padding: 20px 0;
      border-bottom: 1px solid #ddd;
    }

    .media-section img,
    .media-section video,
    .media-section iframe {
      max-width: 100%;
      border-radius: 12px;
      margin-bottom: 20px;
    }

    .media-title {
      font-size: 24px;
      font-weight: 600;
      color: #333;
    }

    .media-desc {
      color: #555;
      font-size: 16px;
    }

    #btn1 {
      position: absolute;
      top: 20px;
      right: 20px;
      padding: 8px 16px;
    }
  </style>
</head>
<body>

  <h1 class="mb-5">Welcome to Page 1</h1>
  <button id="btn1" onclick="window.location.href='admin_login.php'" class="btn btn-primary">Admin Login</button>

  <div class="container">
    <?php if ($result && mysqli_num_rows($result) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="media-section">
          <?php if (!empty($row['image_path'])): ?>
            <img src="<?= htmlspecialchars($row['image_path']) ?>" alt="Image">
          <?php endif; ?>

          <?php if (!empty($row['video_url'])): ?>
            <iframe width="100%" height="315" src="<?= htmlspecialchars($row['video_url']) ?>"
              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          <?php endif; ?>

          <?php if (!empty($row['video_file'])): ?>
            <video controls>
              <source src="<?= htmlspecialchars($row['video_file']) ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          <?php endif; ?>

          <div class="media-title"><?= htmlspecialchars($row['title']) ?></div>
          <p class="media-desc"><?= nl2br(htmlspecialchars($row['description'])) ?></p>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>No content found.</p>
    <?php endif; ?>
  </div>

</body>
</html>
