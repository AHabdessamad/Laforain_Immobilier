<?php
session_start();

if (isset($_SESSION['user_id'])) {
  // Session is active
  echo "active";
} else {
  // Session is not active
  echo "inactive";
}
?>
