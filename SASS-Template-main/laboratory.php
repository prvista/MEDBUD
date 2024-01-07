<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    // header('location:login_form.php');
}

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
                            <li><a href="#"><i class="fa-solid fa-flask-vial"></i>Laboratory Tests</a></li>
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




        <div class="users__table labtest__overflow">


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
                <h2>Laboratory Tests Available</h2>
                <a href="#" class="open-cart-btn"><i class="fa-regular fa-calendar-check"></i>&nbsp;Lab Tests Booked <span class="cart-count">0</span></a>
            </div>



            <!------------------------ CART ---------------------->



            <aside class="cart__container">
                <div class="cart-content">
                    <div class="cart-close">&times;</div>
                    <div class="cart-items-total">
                        <div class="cart__nav__head">
                            <h2>Lab Test Bookings</h2>
                            <h3>Lab Tests Booked</h3>
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
                            <!-- <a href="" class="cart-clear">Clear Cart</a>
                            <a href="" class="booking-test">Book Test</a> -->
                        </div>
                    </div>


                </div>
            </aside>







            <div class="labtest">
                <div class="container">
                    <div class="labtest__wrapper">

                        <div class="labtest__container">

                            <div class="labtest__item">
                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>
                                <div class="labtest__item__title">
                                    <h2>Complete Blood Count (CBC)</h2>
                                    <h3>Measures different components of blood like red blood cells, white blood cells, and platelets.</h3>
                                </div>
                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>
                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="500" data-test="Complete Blood Count (CBC)">Book Test</a>
                                </div>
                            </div>



                            <div class="labtest__item">
                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>
                                <div class="labtest__item__title">
                                    <h2>Blood Chemistry Panel</h2>
                                    <h3>Checks various components in the blood, including electrolytes, glucose, and kidney and liver function markers.</h3>
                                </div>
                                <div class="labtest__item__price">
                                    <h3>Php 1,000</h3>
                                </div>
                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="1000" data-test="Blood Chemistry Panel">Book Test</a>
                                </div>
                            </div>

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Latest Add</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Urinalysis</h2>
                                    <h3>Analyzes the content of urine for abnormalities, such as infections or kidney problems.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="500" data-test="Urinalysis">Book Test</a>
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
                                    <h3>Php 600</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="600" data-test="X-Ray">Book Test</a>
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
                                    <a href="#" class="add-to-cart-btn" data-price="500" data-test="Electrocardiogram (ECG)">Book Test</a>
                                </div>

                            </div>

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Magnetic Resonance Imaging (MRI)</h2>
                                    <h3>Uses magnetic fields and radio waves to create detailed images of organs and tissues.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 8,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="8000" data-test="Magnetic Resonance Imaging (MRI)">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Latest Add</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>CT Scan</h2>
                                    <h3>Combines multiple X-ray images to create cross-sectional images of the body, useful for detailed views of internal organs. </h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 5,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="5000" data-test="CT Scan">Book Test</a>
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
                                    <h3>Php 2,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="2000" data-test="Ultrasound">Book Test</a>
                                </div>

                            </div>

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Bone Density Test</h2>
                                    <h3>Measures bone strength and density to diagnose osteoporosis or assess fracture risk.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 3,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="3000" data-test="Bone Density Test">Book Test</a>
                                </div>

                            </div>


                            <!-- MGA BAGO -->


                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Colonoscopy</h2>
                                    <h3> Examines the colon and rectum for abnormalities, polyps, or signs of colorectal cancer.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 10,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="10000" data-test="Colonoscopy">Book Test</a>
                                </div>

                            </div>



                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Latest Add</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Mammogram</h2>
                                    <h3>X-ray of the breast tissue to detect and diagnose breast cancer or other breast abnormalities.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 1,500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="1500" data-test="Mammogram">Book Test</a>
                                </div>

                            </div>


                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Latest Add</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Pap Smear (Pap Test)</h2>
                                    <h3>Screens for cervical cancer by collecting and examining cells from the cervix.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="500" data-test="Pap Smear (Pap Test">Book Test</a>
                                </div>

                            </div>



                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Biopsy</h2>
                                    <h3>Involves the removal of tissue samples to examine under a microscope for signs of disease or abnormalities.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 3,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="3000" data-test="Biopsy">Book Test</a>
                                </div>

                            </div>



                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Stress Test</h2>
                                    <h3>Evaluates heart function during physical stress, typically using exercise or medication, to detect heart problems.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 2,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="2000" data-test="Stress Test">Book Test</a>
                                </div>

                            </div>



                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Thyroid Function Tests</h2>
                                    <h3> Measures levels of thyroid hormones to assess thyroid function and diagnose conditions like hypothyroidism or hyperthyroidism.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 800</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="800" data-test="Thyroid Function Tests">Book Test</a>
                                </div>

                            </div>


                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Lung Function Tests</h2>
                                    <h3>Assesses lung capacity, airflow, and gas exchange to diagnose respiratory conditions.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 800</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="800" data-test="Lung Function Tests">Book Test</a>
                                </div>

                            </div>




                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Endoscopy</h2>
                                    <h3>This procedure involves inserting a flexible tube with a camera through the mouth (upper endoscopy) or rectum (lower endoscopy)</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 5,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="5000" data-test="Endoscopy">Book Test</a>
                                </div>

                            </div>



                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>MedBud Exclusive</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Viral Load Test</h2>
                                    <h3>This test measures the amount of a specific virus (such as HIV, hepatitis, etc.) in a person's blood.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 3,000</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#" class="add-to-cart-btn" data-price="3000" data-test="Viral Load Test">Book Test</a>
                                </div>

                            </div>








                        </div>

                    </div>
                </div>
            </div>



        </div>
    </section>



    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const selectedTests = [];
            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
            const deselectButtons = document.querySelectorAll('.deselect-test');
            const cartItemsContainer = document.querySelector('.cart-items');
            const cartTotal = document.querySelector('.total-amount');
            const cartClearBtn = document.querySelector('.cart-clear');
            const openCartButton = document.querySelector('.open-cart-btn');
            const cartCount = document.querySelector('.cart-count');
            const selectedTestsContainer = document.querySelector('.selected-tests'); // New element to display selected tests
            let totalAmount = 0;

            const updateCartCount = () => {
                const itemsCount = document.querySelectorAll('.cart-item').length;
                cartCount.textContent = itemsCount;
            };

            const updateCart = () => {
                cartItemsContainer.innerHTML = '';
                totalAmount = 0;

                addToCartButtons.forEach(button => {
                    button.addEventListener('click', (event) => {
                        event.preventDefault();
                        const clickedButton = event.target;
                        const price = parseInt(clickedButton.getAttribute('data-price'));

                        if (!clickedButton.disabled) {
                            const testName = clickedButton.getAttribute('data-test');
                            selectedTests.push(testName);

                            totalAmount += price;
                            const cartItem = document.createElement('div');
                            cartItem.classList.add('cart-item');
                            cartItem.textContent = `${testName}: Php ${price}`;

                            const deleteButton = document.createElement('button');
                            deleteButton.classList.add('delete-btn');
                            deleteButton.innerHTML = 'x';
                            deleteButton.style.float = 'right';

                            deleteButton.addEventListener('click', () => {
                                const index = selectedTests.indexOf(testName);
                                if (index !== -1) {
                                    selectedTests.splice(index, 1);
                                    totalAmount -= price;
                                    cartTotal.textContent = `Total: Php ${totalAmount}`;
                                    cartItemsContainer.removeChild(cartItem);
                                    clickedButton.disabled = false;
                                    updateCartCount();
                                }
                            });

                            cartItem.appendChild(deleteButton);
                            cartItemsContainer.appendChild(cartItem);
                            cartTotal.textContent = `Total: Php ${totalAmount}`;

                            clickedButton.disabled = true;
                            updateCartCount();

                            // Update selected tests display
                            const selectedTestsList = document.createElement('ul');
                            selectedTests.forEach(test => {
                                const testItem = document.createElement('li');
                                testItem.textContent = test;
                                selectedTestsList.appendChild(testItem);
                            });
                            selectedTestsContainer.innerHTML = '';
                            selectedTestsContainer.appendChild(selectedTestsList);
                        }
                    });
                });
            };

            const clearCart = () => {
                totalAmount = 0;
                cartTotal.textContent = `Total: Php ${totalAmount}`;
                cartItemsContainer.innerHTML = '';

                addToCartButtons.forEach(button => {
                    button.disabled = false;
                });

                selectedTests.length = 0;
                selectedTestsContainer.innerHTML = ''; // Clear selected tests display
                updateCartCount();
            };

            cartClearBtn.addEventListener('click', clearCart);

            openCartButton.addEventListener('click', () => {
                updateCartCount();
                document.body.classList.add('cart-opened');
                document.body.style.overflow = 'hidden';
                document.querySelector('.cart__container').classList.add('open');
            });

            document.querySelector('.cart-close').addEventListener('click', () => {
                document.body.classList.remove('cart-opened');
                document.body.style.overflow = '';
                document.querySelector('.cart__container').classList.remove('open');
            });

            const bookTestButton = document.querySelector('.booking-test');
            bookTestButton.addEventListener('click', () => {
                if (selectedTests.length > 0) {
                    const urlParams = new URLSearchParams();
                    selectedTests.forEach(testName => {
                        urlParams.append('selectedTests[]', testName);
                    });
                    const bookingURL = `laboratory-test.php?${urlParams.toString()}`;
                    window.location.href = bookingURL;
                } else {
                    alert('Please select at least one test before booking.');
                }
            });

            updateCart();
        });
    </script>

</body>

</html>