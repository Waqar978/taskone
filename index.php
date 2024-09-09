<?php
// Define an array to store project information
$projects = [
    [
        'title' => 'Urdu Language Instructor',
        'company' => 'Done by Native',
        'price' => 'PKR 2,500/hour',
        'features' => ['Assessment Development', 'Teaching']
    ],
    [
        'title' => 'SEO Expert',
        'company' => 'Tecmyer',
        'price' => 'PKR 50,000 fixed',
        'features' => ['SEO', 'Email Hosting', 'Web Hosting']
    ],
    [
        'title' => 'Website and Social Media Developer',
        'company' => 'Sea Private Limited',
        'price' => 'PKR 25,000/month',
        'features' => ['Wordpress', 'Website Management']
    ],
    [
        'title' => 'Urdu Narrator',
        'company' => 'Luminac Innovation',
        'price' => 'PKR 5,000 fixed',
        'features' => ['Meeting Deadlines', 'Pay Close Attention to Detail']
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Side Hustles</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <div class="header-container">
            <img src="logo.png" alt="Logo" class="logo"> <!-- Replace with your logo path -->
            <nav>
                <ul>
                    <li><a href="#">Beware! Reported Companies</a></li>
                    <li><a href="#">Free CV Review</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </nav>
            <div class="cta-buttons">
                <button>Post a Job</button>
                <button>Hire a Freelancer</button>
            </div>
        </div>
    </header>

    <main>
        <section class="banner">
            <div class="banner-content">
                <h1>Earn Extra Income</h1>
                <p>Find a freelance side hustle</p>
            </div>
        </section>

        <section class="freelance-projects">
            <h2>Freelance Side Hustles - Make Extra Income</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p class="company"><?php echo $project['company']; ?></p>
                        <p class="price"><?php echo $project['price']; ?></p>
                        <ul>
                            <?php foreach ($project['features'] as $feature): ?>
                                <li><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <button>Project Details</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>
