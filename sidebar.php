<?php include 'connection.php'; ?>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>cloudsMediflow</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="loggedin">
  <!-- <body> -->
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="CL.png" alt=""></i>cloudsMediflow
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell'></i>
        <div class="dropdown-content">
            <a href="profile.php"><i class="fas fa-user"></i> My Profile</a>
            <a href="#"><i class="fas fa-edit"></i> Edit Profile</a>
            <a href="#"><i class="fas fa-inbox"></i> Inbox</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        <img src="hii.jpg" alt="" class="profile" />
    </div>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="services.php" class="nav_link sublink">Services</a>
              <a href="process_form.php" class="nav_link sublink">Doctors</a>
              <a href="faqs.php" class="nav_link sublink">FAQs</a>
              <a href="userexperience.php" class="nav_link sublink">Survey</a>
            </ul>
          </li>
          <!-- end -->

          <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-grid-alt"></i>
              </span>
              <span class="navlink">Consultations</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="process_form.php" class="nav_link sublink">Schedule consultations</a>
              <a href="view_appointments.php" class="nav_link sublink">View consultations</a>
              <!-- <a href="join_consultation.php" class="nav_link sublink">Join consultations</a> -->
              <a href="cancel_consultation.php" class="nav_link sublink">Cancel consultations</a>
            </ul>
          </li>
          <!-- end -->
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_eeditor"></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <li class="item">
            <a href="view_appointments.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-magic-wand"></i>
              </span>
              <span class="navlink">View Appointments</span>
            </a>
          </li>
          <!-- End -->

          <!-- <li class="item">
            <a href="medical_history.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Medical History</span>
            </a>
          </li> -->
          <li class="item">
            <a href="resources.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">Health Resources</span>
            </a>
          </li>
          <li class="item">
            <a href="payment.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Billing & Payment</span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
          <div class="menu_title menu_seetting"></div>
          
          <li class="item">
            <a href="consent.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-medal"></i>
              </span>
              <span class="navlink">Consent</span>
            </a>
          </li>
          <li class="item">
            <a href="message.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cog"></i>
              </span>
              <span class="navlink">Message</span>
            </a>
          </li>
          <li class="item">
            <a href="help.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-layer"></i>
              </span>
              <span class="navlink">Help</span>
            </a>
          </li>
          <li class="item">
            <a href="settings.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-flag"></i>
              </span>
              <span class="navlink">Settings</span>
            </a>
          </li>
          <li class="item">
            <a href="aboutus.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">About Us</span>
            </a>
          </li>
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="script.js"></script>
    <script>
    // Toggle dropdown on image click
    const profileImage = document.querySelector('.navbar_content img.profile');
    const dropdownContent = document.querySelector('.dropdown-content');

    profileImage.addEventListener('click', (event) => {
        // Prevent the click event from propagating to the document
        event.stopPropagation();
        
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    // Close the dropdown when clicking anywhere else on the document
    document.addEventListener('click', (event) => {
        if (dropdownContent.style.display === 'block' && !profileImage.contains(event.target)) {
            dropdownContent.style.display = 'none';
        }
    });
</script>
<script>
  function displayNotification() {
    const bellIcon = document.querySelector('.bx.bx-bell');

    // Add a CSS class to style the bell icon to indicate a new notification.
    bellIcon.classList.add('notification');

    // You can also add an event listener to open a messaging modal or show a notification when the user clicks the bell icon.
    bellIcon.addEventListener('click', () => {
      // Implement your logic to display the notification or open a messaging modal.
      // For example, you can show a popup or redirect to a notification page.
    });
  }

  // Call the function when the appointment status changes to "approved."
  // You can call this function in your PHP code when the status changes.
  // For example:
  // if (appointmentStatusChanged) {
  //   echo '<script>displayNotification();
  
</script>
</html>
</html>