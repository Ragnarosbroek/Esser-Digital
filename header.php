<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>

    <style>
        /* Default menu styling for desktop */
        .top-bar {
            display: flex;
            justify-content: space-between;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .menu-toggle {
            display: none;
        }

        /* Responsive styles for tablet/mobile */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: none;
                border: none;
                font-size: 2rem;
                cursor: pointer;
            }

            .top-bar {
                display: none;
                flex-direction: column;
                align-items: flex-start;
                position: absolute;
                top: 3rem;
                right: 1rem;
                background: white;
                border: 1px solid #ccc;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 1rem;
                z-index: 10;
            }

            .top-bar.active {
                display: flex;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <img src="http://esser-digital.test/wp-content/uploads/2024/12/esser-digital-logo.png" alt="esser-digital-logo">

        <!-- Menu Toggle Button -->
        <button class="menu-toggle" aria-label="Toggle navigation">☰</button>

        <!-- Main Navigation -->
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'top-bar',
            )
        );
        ?>
    </div>
</header>

<script>
    // JavaScript to handle menu toggle functionality
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.top-bar');

        // Responsive logic
        const updateMenuVisibility = () => {
            if (window.innerWidth > 768) {
                menu.style.display = 'flex'; // Always show menu on desktop
            } else {
                menu.style.display = 'none'; // Collapse menu on smaller screens
            }
        };

        // Initial setup
        updateMenuVisibility();

        // Update on window resize
        window.addEventListener('resize', updateMenuVisibility);

        // Toggle menu on button click for mobile/tablet
        toggleButton.addEventListener('click', function () {
            if (menu.style.display === 'none') {
                menu.style.display = 'flex';
            } else {
                menu.style.display = 'none';
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
