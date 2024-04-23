<?php include 'header.php'; 
session_start();

if (!isset($_SESSION['id_petugas']) && !isset($_COOKIE['username'])) {
    // Jika tidak ada sesi dan cookie tersimpan, arahkan ke halaman login
    header("Location: index.php");
    exit();
}?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><i class="fas fa-bullhorn"></i> Coronavirus</h2>
                    <p class="card-text" style="text-align: justify;">
                        Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

                        The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol-based rub frequently and not touching your face.

                        The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

                        At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.
                    </p>
                    <p class="text-danger"><b>FROM: WORLD HEALTH ORGANIZATION</b></p>
                    <div class="alert alert-primary" role="alert">
                        Check in this : <a href="https://www.who.int/health-topics/coronavirus" class="alert-link">WHO CORONAVIRUS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
