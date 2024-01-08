<?php
session_start(); // Starting the session

// Database configuration (update with your credentials)
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your MySQL password
$dbname = "labtest_db";

// Establishing a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_form'])) {
    // Basic form validation - Ensure required fields are not empty
    if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['contact_no']) || empty($_POST['gender']) || empty($_POST['test_date']) || empty($_POST['test_time']) || empty($_POST['selectedTestsDisplay']) || empty($_POST['totalAmountInput'])) {
        die("Please fill in all required fields.");
    }

    // Get the total amount from the input field
    $total_amount_input = $_POST['totalAmountInput'];

    // Extracting the numerical value
    $total_amount = floatval(preg_replace('/[^0-9.]/', '', $total_amount_input));

    // Prepare and bind the INSERT statement with prepared statements
    $stmt = $conn->prepare("INSERT INTO lab_tests (first_name, last_name, contact_no, gender, test_date, test_time, selected_tests, total_amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssissssd", $first_name, $last_name, $contact_no, $gender, $test_date, $test_time, $selected_tests, $total_amount);

        // Set parameters (data fetched from $_POST)
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_no = $_POST['contact_no'];
        $gender = $_POST['gender'];
        $test_date = $_POST['test_date'];
        $test_time = $_POST['test_time'];
        $selected_tests = $_POST['selectedTestsDisplay'];

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Generating JavaScript alert code
            echo '<script>alert("Total amount inserted into the database successfully: Php ' . number_format($total_amount, 2) . '");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error: Unable to prepare the statement.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedBud</title>

    <link rel="stylesheet" href="./dist/scss/main.css" />

    <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />

    <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper active" id="header">
                <div class="branding">
                    <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="" />
                </div>

                <div class="header__nav">
                    <ul>
                        <li><a href="./user_page.php">Home</a></li>
                        <li><a href="#about">About</a></li>

                        <li class="navi">
                            <a href="#service" class="place">Services</a>
                        </li>
                        <li><a href="">MedTips</a></li>


                        <li><a href="">Contact</a></li>
                    </ul>
                </div>

                <div class="logout__btn">
                    <a href="./login_form.php">Logout</a>
                </div>

                <div class="burger__btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>


    <section class="dashboard">
        <div class="dashboard__wrapper">
            <div class="dashboard__content">
                <div class="dashboard__nav">
                    <div class="dashboard__name">
                        <h2><?php echo $_SESSION['user_name'] ?></h2>
                        <h5>Patient</h5>
                    </div>

                    <div class="dashboard__side__nav">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li><a href="./dashboard.php"><i class="fa-regular fa-bookmark"></i>Dashboard</a></li>
                            <span></span>
                            <li><a href="./medical_record.php"><i class="fa-solid fa-notes-medical"></i>Medical Record</a></li>
                            <span></span>
                            <li><a href="./doctor.php"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-regular fa-calendar"></i>Schedule Appointment</a></li>
                            <span></span>
                            <li><a href="./laboratory.php"><i class="fa-solid fa-flask-vial"></i>Laboratory Tests</a></li>
                            <div class="lower__buttons">
                                <a href="./login_form.php">
                                    <button class="logout__btn__animation">

                                        <div class="sign"><svg viewBox="0 0 512 512">
                                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                            </svg></div>

                                        <div class="text">Logout</div>
                                    </button>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




        <div class="users__table">


            <div class="dashboard__form__title">
                <div class="dashboard__form__title__text">
                    <h3>Laboratory</h3>
                </div>

                <div class="dashboard__date" id="todayDate">
                    <h3>Today's Date</h3>
                    <h4> <?php
                            echo date('F j, Y');
                            ?></h4>
                </div>
            </div>


            <div class="lab__banner">
                <div class="container">
                    <div class="lab__banner__wrapper">
                        <div class="lab__banner__text">
                            <h2>MedBud Laboratory Tests</h2>
                            <!-- <h3><?php echo $_SESSION['user_name'] ?></h3> -->
                            <p>Health testing has never been easier, faster, and more personalized. Browse the most popular tests available from MedBud.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lab__details__title">
                <h2>Lab Test Form</h2>
            </div>

            <section class="labtest__form">
                <div class="container">
                    <div class="labtest__form__wrapper">
                        <div class="labtest__form__split">



                            <form class="lab-form" action="./laboratory-test.php" method="post" id="labTestForm">
                                <div class="labtest__wrapper">
                                    <div class="labtest__name">
                                        <input type="text" name="first_name" placeholder="First Name">
                                        <input type="text" name="last_name" placeholder="Last Name">
                                    </div>

                                    <div class="labtest__info">
                                        <input type="tel" name="contact_no" placeholder="Contact No">
                                        <select name="gender">
                                            <option selected disabled>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="labtest__sched-date">
                                        <input type="date" class="" placeholder="Enter Date" name="test_date">
                                        <input type="time" class="" placeholder="Enter Time" name="test_time">
                                    </div>

                                    <div class="labtest__type">
                                        <input type="text" id="selectedTestsDisplay" name="selectedTestsDisplay" readonly>
                                        <input type="text" id="totalAmountInput" name="totalAmountInput" readonly>
                                    </div>

                                    <div class="labtest__btn">
                                        <button href="./dashboard.php">Cancel</button>
                                        <button type="submit" name="submit_form" id="submitForm">Book Test</button>
                                    </div>
                                </div>
                            </form>





                            <!-- <div class="labtest__details">
                                <div class="labtest__details__title">
                                    <h2>Lab Test Summary</h2>
                                </div>

                                <div class="cart-items">
                                </div>

                                <div class="cart-total">
                                    <span class="total-amount">Total: Php 0</span>
                                </div>

                            </div> -->


                            <div class="labtest__details">
                                <div class="labtest__details__title">
                                    <h2>Lab Test Summary</h2>
                                </div>

                                <div class="selected-tests">
                                    <?php
                                    // Check if selectedTests array is present in URL parameters
                                    if (isset($_GET['selectedTests']) && is_array($_GET['selectedTests'])) {
                                        // Retrieve selected tests from URL parameters
                                        $selectedTests = $_GET['selectedTests'];

                                        // Output the selected tests within the div
                                        echo '<ul>';
                                        foreach ($selectedTests as $test) {
                                            echo '<li>' . htmlspecialchars($test) . '</li>';
                                        }
                                        echo '</ul>';
                                    } else {
                                        // If no tests are selected, display a message
                                        echo '<p>No tests selected</p>';
                                    }
                                    ?>
                                </div>

                                <div class="cart-total">
                                    <span class="total-amount">
                                        <p>Total: Php 0</p>
                                    </span>

                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </section>



            <!------------------------ CART ---------------------->

            <!-- <nav class="sidebar-nav">
                <ul>
                    <li>
                        <div class="labtest__checkout">
                            <div class="lab__booking">
                                <div class="lab__booking__btn">
                                    <a href="#">Book Lab Tests</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" class="open-cart-btn"><i class="fa-regular fa-calendar-check"></i>&nbsp;Lab Tests Booked <span class="cart-count">0</span></a></li>
                </ul>
            </nav> -->

            <!-- <aside class="cart__container">
                <div class="cart-content">
                    <div class="cart-close">&times;</div>
                    <div class="cart-items-total">
                        <div class="cart__nav__head">
                            <h2>Lab Test Bookings</h2>
                        </div>


                        <div class="cart-items">
                        </div>

                        <div class="cart-total">
                            <span class="total-amount">Total: Php 0</span>
                        </div>

                        <hr>
                        <div class="cart-btn">
                            <button class="cart-clear">Clear Booking</button>
                            <button class="booking-test">Book Test</button>
                        </div>
                    </div>


                </div>
            </aside> -->


            <!-- <div class="labtest">
                <div class="container">
                    <div class="labtest__wrapper">

                        <div class="labtest__container">

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Complete Blood Count (CBC)</h2>
                                    <h3>Measures different components of blood like red blood cells, white blood cells, and platelets.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="500">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Blood Chemistry Panel</h2>
                                    <h3>Checks various components in the blood, including electrolytes, glucose, and kidney and liver function markers.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 400</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="400">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status  white--clr">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Urinalysis</h2>
                                    <h3>Analyzes the content of urine for abnormalities, such as infections or kidney problems.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 300</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="300">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>X-Ray</h2>
                                    <h3> Uses radiation to create images of internal body structures, commonly used for bones and detecting certain conditions.
                                    </h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="300">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Electrocardiogram (ECG)</h2>
                                    <h3>Records the electrical activity of the heart to detect abnormalities in heart rhythm or function.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="300">Book Test</a>
                                </div>

                            </div>

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Magnetic Resonance Imaging (MRI)</h2>
                                    <h3>Uses magnetic fields and radio waves to create detailed images of organs and tissues.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>CT Scan</h2>
                                    <h3>Combines multiple X-ray images to create cross-sectional images of the body, useful for detailed views of internal organs. </h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Ultrasound</h2>
                                    <h3>Uses sound waves to produce images of organs, blood vessels, and tissues.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Bone Density Test</h2>
                                    <h3>Measures bone strength and density to diagnose osteoporosis or assess fracture risk.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>




                        </div>

                    </div>
                </div>
            </div> -->

        </div>
    </section>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const selectedTestsDisplay = document.getElementById('selectedTestsDisplay');
            const totalAmountInput = document.getElementById('totalAmountInput');
            const totalAmountSpan = document.querySelector('.total-amount');

            // Define your test prices here
            const testPrices = {
                'Complete Blood Count (CBC)': 500,
                'Blood Chemistry Panel': 1000,
                'Urinalysis': 500,
                'X-Ray': 600,
                'Electrocardiogram (ECG)': 500,
                'Magnetic Resonance Imaging (MRI)': 8000,
                'CT Scan': 5000,
                'Ultrasound': 2000,
                'Bone Density Test': 3000,


                'Colonoscopy': 10000,
                'Mammogram': 1500,
                'Pap Smear (Pap Test)': 500,
                'Biopsy': 3000,
                'Stress Test': 2000,
                'Thyroid Function Tests': 800,
                'Lung Function Tests': 800,
                'Endoscopy': 5000,
                'Viral Load Test': 3000,
            };

            // Function to parse URL parameters
            function getUrlParams() {
                const params = new URLSearchParams(window.location.search);
                const selectedTests = params.getAll('selectedTests[]');
                return selectedTests;
            }

            // Function to display selected tests in the input field
            function displaySelectedTestsInInput(selectedTests) {
                selectedTestsDisplay.value = selectedTests.join(', '); // Display selected tests in the input field
            }

            // Function to calculate and display the total amount
            function calculateTotalAmount(selectedTests) {
                let totalAmount = 0;

                selectedTests.forEach(testName => {
                    // Check if the test price exists in the testPrices object
                    if (testPrices[testName]) {
                        totalAmount += testPrices[testName];
                    }
                });

                totalAmountSpan.textContent = `Total: Php ${totalAmount}`;
                totalAmountInput.value = `Total Payment: Php ${totalAmount}`;
            }

            // Retrieve selected tests from URL parameters and display them
            let selectedTests = getUrlParams();
            if (selectedTests.length > 0) {
                displaySelectedTestsInInput(selectedTests);
                calculateTotalAmount(selectedTests);
            }

            // Event listener for deselection buttons
            const deselectButtons = document.querySelectorAll('.deselect-test');
            deselectButtons.forEach(button => {
                button.addEventListener('click', event => {
                    const testName = event.target.dataset.testName; // Retrieve the test name from the button's data attribute

                    // Remove the deselected test from the selectedTests array
                    selectedTests = selectedTests.filter(test => test !== testName);

                    // Update the displayed tests
                    displaySelectedTestsInInput(selectedTests);

                    // Recalculate the total amount
                    calculateTotalAmount(selectedTests);
                });
            });
        });
    </script>
</body>

</html>