
            const sliderWrapper = document.querySelector('.slider-wrapper');
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;
            let currentIndex = 0;

            function showNextSlide() {
                // Move to the next slide index
                currentIndex = (currentIndex + 1) % totalSlides;

                // Calculate the percentage to offset the wrapper
                // For 3 slides, this will be 0%, 33.333%, 66.666%
                const offset = currentIndex * (100 / totalSlides);

                // Apply the transform to move the entire wrapper
                sliderWrapper.style.transform = `translateX(-${offset}%)`;
            }

            // Automatically slide every 3 seconds
            setInterval(showNextSlide, 3000);
