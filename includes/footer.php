<footer class="bg-warning text-white text-center py-3">
    <p class="text-center">&copy; 2024 Durga Bahadur Shrestha | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>// Dynamic counters for stats
    function animateCounter(id, endValue) {
        let startValue = 0;
        const duration = 2000;
        const increment = Math.ceil(endValue / (duration / 50));
        const counter = document.getElementById(id);

        const interval = setInterval(() => {
            startValue += increment;
            if (startValue > endValue) startValue = endValue;
            counter.textContent = startValue;
            if (startValue === endValue) clearInterval(interval);
        }, 50);
    }

    window.onload = () => {
        animateCounter("projectsCompleted", 10); // Replace with actual data
        animateCounter("yearsExperience", 2); // Replace with actual data
        animateCounter("happyClients", 50); // Replace with actual data
    };
    
    </script>
    <script>
        const projectImages = [
            { id: 'project-ecommerce-ai.jpg', description: 'A modern e-commerce platform with dynamic visuals and user-friendly design.' },
            { id: 'project-blog-ai.jpg', description: 'An interactive blog management system with a clean interface.' },
            { id: 'project-portfolio-ai.jpg', description: 'A sleek and professional personal portfolio with AI-enhanced imagery.' }
        ];

        projectImages.forEach(image => {
            const imagePath = `https://dummyimage.com/600x400/cccccc/000000&text=${image.description}`;
            const imgElement = document.querySelector(`img[alt="${image.description}"]`);
            if (imgElement) {
                imgElement.src = imagePath;
            }
        });
    </script>
</body>
</html>
