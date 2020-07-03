    <div class="container footer">
      <hr>
      <footer>
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </li>';
                }
        ?>
        </p>
        <p align="center">
        Copyright © <?php echo date('Y'); ?> , Brand_name. All Rights reserved
        </nav>
		</p>
      </footer>
    </div>
  </body>
</html>
