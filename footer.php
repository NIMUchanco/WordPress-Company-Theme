<footer>
        <div class="container">
            <div class="footer-wrapper">
                <article>
                    <h2>Contact us</h2>
                    <p>Become our partner!</p>
                </article>
                <article class="contact">
                    <ul>
                        <li>
                            <a href=""><i class="fa-solid fa-location-dot"></i>&nbsp;123 Main Street, Cityville</a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-phone"></i>&nbsp;(555) 123-4567</a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-envelope"></i>&nbsp;info@droneworld.com</a>
                        </li>
                    </ul>
                </article>
                <div class="icons">
                    <ul>
                        <li>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.querySelector('.hamburger-menu');
            const navMenu = document.querySelector('.nav-menu');
            const closeButton = document.querySelector('.close-btn');
            const blogLink = document.querySelector('#blog-link');

            menuButton.addEventListener('click', function () {
                navMenu.classList.toggle('show');
                closeButton.classList.toggle('show');
            });

            closeButton.addEventListener('click', function () {
                navMenu.classList.toggle('show');
                closeButton.classList.toggle('show');
            });

            blogLink.addEventListener('click', function () {
                navMenu.classList.remove('show');
                closeButton.classList.remove('show');
            });

            const lineAnimations = document.querySelectorAll('.line-animation');

            window.addEventListener('scroll', function () {
                const scrollPosition = window.scrollY;
                const windowHeight = window.innerHeight;
        
                lineAnimations.forEach(function (title) {
                    const pageDistance = title.offsetTop;
        
                    if (scrollPosition > pageDistance - windowHeight + 100) {
                        title.classList.add('isActive');
                    } else {
                        title.classList.remove('isActive');
                    }
                });
            });
        });
    </script>
</body>
</html>