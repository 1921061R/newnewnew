<?php include('header.php'); ?>

<main>
    <section class="content-section">
        <h2>What are Emergency Events?</h2>
        <p>Emergency events refer to various urgent situations, including accidents, crimes, medical emergencies, fires, and other unforeseen events requiring immediate action. Timely data collection and analysis of such incidents help authorities respond effectively and allocate necessary resources.</p>
    </section>

    <section class="content-section">
        <h2>Categories of Emergency Events</h2>
        <p>Below are common types of emergency events that require quick intervention:</p>
        <ul>
            <li><strong>Robbery:</strong> Incidents involving theft or assault.</li>
            <li><strong>Fire:</strong> Incidents involving flames or heat that pose a danger to life or property.</li>
            <li><strong>Accidents:</strong> Includes vehicle crashes, industrial accidents, and other incidents causing injury or damage.</li>
            <li><strong>Medical Emergency:</strong> Situations requiring immediate medical attention, such as heart attacks, accidents, etc.</li>
            <li><strong>Other Emergencies:</strong> Miscellaneous urgent situations, including natural disasters, chemical spills, or public disturbances.</li>
        </ul>
    </section>

    <section class="content-section">
        <h2>Emergency Events Statistics</h2>
        <p>Below is a bar graph illustrating the frequency of various emergency events:</p>
        <canvas id="barChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            
            var ctx = document.getElementById('barChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Robbery', 'Fire', 'Accident', 'Medical Emergency', 'Other Emergencies'],  // Categories
                    datasets: [{
                        label: 'Frequency of Emergency Events',
                        data: [35, 25, 15, 40, 10],  // Example frequencies
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)', // Rob color
                            'rgba(54, 162, 235, 0.2)', // Fire color
                            'rgba(255, 206, 86, 0.2)', // Accident color
                            'rgba(75, 192, 192, 0.2)', // Med Emergency color
                            'rgba(153, 102, 255, 0.2)' // Other Emergencies color
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)', 
                            'rgba(54, 162, 235, 1)', 
                            'rgba(255, 206, 86, 1)', 
                            'rgba(75, 192, 192, 1)', 
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </section>

    <section class="content-section">
        <h2>Why Tracking Emergency Events Matters</h2>
        <p>Tracking and analyzing emergency events enables emergency responders to better allocate resources, recognize patterns in incidents, and enhance public safety measures. With reliable data, authorities can improve the speed and efficiency of their responses to these urgent events.</p>
    </section>

    <section class="content-section">
        <h2>Impact of Data on Emergency Management</h2>
        <p>Data-driven emergency management has become crucial in modern-day response systems. By collecting real-time data, authorities can make quick decisions, optimize resources, and ensure the public receives timely assistance. Ongoing analysis helps fine-tune protocols and strategies for the future.</p>
    </section>
</main>

<?php include('footer.php'); ?>
