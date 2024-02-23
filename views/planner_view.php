<!DOCTYPE html>
<html lang="en">
<?php include BASE_DIR . '/includes/header.php'; ?>
<!-- <?php include(BASE_DIR . '/public/planner.js'); ?> -->
<!-- <?php include('../public/planner.js'); ?> -->
<?php include BASE_DIR . '/includes/nav.php'; ?>
<body>

    <section id="planner">
        <div class="planner-container">
        <!-- <div class="planner-header">Weekly planner</div> -->
            <div class="planner-nav-bar">
                <span class="previous-week">PREV</span>
                <span class="planner-nav-bar-date"></span>
                </span><span class="next-week">NEXT</span>
            </div>
            <div class="week-calander-container">
                <div class="day-container active">
                    <h2>
                        Monday
                    </h2>
                    <div class="day-container-image"></div>
                    <h3>
                        Lasagna
                    </h3>
                    <button class="add-meal-btn">
                        Add Meal
                    </button>
                </div>
                <div class="day-container">
                    <h2>
                        Tuesday
                    </h2>
                </div>
                <div class="day-container">
                    <h2>
                        Wednesday
                    </h2>
                </div>
                <div class="day-container">
                    <h2>
                        Thursday
                    </h2>
                </div>
                <div class="day-container">
                    <h2>
                        Friday
                    </h2>
                </div>
                <div class="day-container">
                    <h2>
                        Saturday
                    </h2>
                </div>
                <div class="day-container">
                    <h2>
                        Sunday
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 What's for dinner. All rights reserved.</p>
    </footer>
    <script src="../public/js/planner.js"></script>
</body>
</html>

