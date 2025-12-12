<?php
$data = [
    'profile' => [
        'name_first' => 'Achmad',
        'name_last' => 'Ichzan',
        'photo_url' => 'achmad.jpg',
        'address' => 'Mutiara Indah Village blok H/6,<br> Samata, Kab. Gowa',
        'phone' => '082291871923',
        'email' => 'achmadichzan9@gmail.com',
        'social' => 'GitHub: achmadichzan </br> LinkedIn: achmadichzan',
    ],
    'objective' => [
        'title' => 'TUJUAN KARIER',
        'content' => 'Sarjana Bahasa Inggris yang switch career menjadi software developer dengan pengalaman magang di bidang pengembangan aplikasi Mobile dan model Machine Learning. Mencari posisi junior developer untuk menerapkan keterampilan teknis dan kemampuan pemecahan masalah dalam lingkungan kerja yang dinamis.'
    ],
    'education' => [
        'title' => 'PENDIDIKAN',
        'items' => [
            [
                'degree' => 'Sarjana Pendidikan Bahasa Inggris',
                'school' => 'UIN Alauddin Makassar',
                'date' => 'Februari 2025',
                'details' => 'IPK 3,70'
            ],
            [
                'degree' => 'Ilmu Pengetahuan Alam (IPA)',
                'school' => 'SMA Negeri 7 Wajo',
                'date' => '2017 — 2020',
                'details' => ''
            ]
        ]
    ],
    'experience' => [
        'title' => 'PENGALAMAN DAN PELATIHAN RELEVAN',
        'items' => [
            [
                'role' => 'Machine Learning Bootcamp Participant',
                'company' => 'Dicoding Indonesia',
                'date' => 'Juli 2025 — November 2025',
                'tasks' => [
                    'Membuat kode Python untuk mengimplementasikan algoritma machine learning seperti regresi linier, klasifikasi, dan clustering.',
                    'Menggunakan teknik pra-pemrosesan data untuk membersihkan dan menyiapkan dataset sebelum pelatihan model.',
                    'Menggunakan pustaka machine learning populer seperti Scikit-Learn dan TensorFlow untuk membangun dan melatih model.',
                    'Membuat proyek akhir yang melibatkan analisis data dan penerapan model machine learning untuk memecahkan masalah dunia nyata.'
                ]
            ],
            [
                'role' => 'Mobile Apps Developer Intern',
                'company' => 'Rakamin Academy',
                'date' => 'Desember 2023 — Januari 2024',
                'tasks' => [
                    'Mengembangkan aplikasi mobile menggunakan Kotlin dan Android Studio.',
                    'Mengambil data dari API eksternal dan menampilkannya dalam aplikasi.',
                    'Mempresentasikan aplikasi kepada tim pengembang dan mentor untuk mendapatkan umpan balik.'
                ]
            ],
            [
                'role' => 'Mobile Development Cohort Participant',
                'company' => 'Bangkit Academy',
                'date' => 'Februari 2023 — Juli 2023',
                'tasks' => [
                    'Belajar Pengembangan Aplikasi Mobile menggunakan Kotlin dan Android Studio sampai level menengah.',
                    'Belajar soft skills seperti komunikasi, kolaborasi, dan manajemen waktu dalam konteks proyek pengembangan perangkat lunak.',
                    'Mengembangkan proyek akhir berupa aplikasi mobile deteksi penyakit hewan terintegrasi dengan machine learning dan cloud computing.',
                ]
            ]
        ]
    ],
    'skills' => [
        'title' => 'KETERAMPILAN DAN KEAHLIAN',
        'items' => [
            'Mampu mengembangkan aplikasi mobile dengan Kotlin dan Android Studio',
            'Mampu membuat model machine learning dan deep learning dengan Python',
            'Mampu menggunakan Git dan GitHub untuk version control',
            'Mampu bekerja dalam tim dan berkomunikasi secara efektif',
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $data['profile']['name_first'] . ' ' . $data['profile']['name_last']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #fcf7f2;
            --accent-color: #e85021;
            --text-color: #333333;
            --border-color: #333333;
            --photo-bg: #e6e6e6;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        body {
            background-color: #e0e0e0;
            font-family: 'Lato', sans-serif;
            color: var(--text-color);
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .resume-container {
            width: 210mm;
            min-height: 297mm;
            background-color: var(--bg-color);
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            position: relative;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        header {
            display: flex;
            border-bottom: 1px solid var(--border-color);
            height: 240px;
        }

        .header-photo {
            width: 35%;
            background-color: var(--photo-bg);
            border-right: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .header-photo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 35px;
            height: 100%;
            background-color: #dccfb8;
            z-index: 0;
            opacity: 0.3;
        }

        .photo-frame {
            z-index: 1;
            width: 170px;
            height: 170px;
            overflow: hidden;
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-info {
            width: 65%;
            display: flex;
            flex-direction: column;
        }

        .name-section {
            flex: 2;
            padding: 25px 30px 10px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 50px;
            line-height: 1;
            color: var(--accent-color);
            font-weight: 700;
        }

        .contact-section {
            flex: 1;
            border-top: 1px solid var(--border-color);
            padding: 20px 30px;
            display: flex;
            justify-content: space-around;
            font-size: 12px;
            line-height: 1.5;
        }

        .contact-col {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            display: flex;
            flex: 1;
        }

        .left-column {
            width: 35%;
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
        }

        .right-column {
            width: 65%;
            display: flex;
            flex-direction: column;
        }

        section {
            padding: 20px 25px;
            position: relative;
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #000;
            border-bottom: 2px solid var(--accent-color);
            display: inline-block;
            padding-bottom: 2px;
        }

        h3 {
            font-size: 14px;
            font-weight: 700;
        }

        .sub-title {
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 2px;
        }

        .date {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
            font-style: italic;
        }

        p, li {
            font-size: 13px;
            line-height: 1.5;
            color: #333;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
            margin-top: 5px;
        }

        li {
            margin-bottom: 2px;
        }

        .section-separator {
            border-top: 1px solid var(--border-color);
        }

        .arrow-icon {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 15px;
            height: 15px;
        }
        
        .arrow-icon svg {
            fill: var(--accent-color);
            stroke: none;
            width: 100%;
            height: 100%;
            transform: rotate(45deg);
        }

        .footer-skills {
            border-top: 1px solid var(--border-color);
            padding: 20px 30px;
            display: flex;
        }

        .footer-skills .label {
            width: 33%;
            padding-right: 20px;
        }
        
        .footer-skills .skill-list {
            width: 62%;
            padding-left: 30px;
        }

        .footer-skills h2 {
            margin-bottom: 0;
            max-width: 150px;
        }

        .skill-ul {
            margin: 0;
            margin-left: 20px;
        }

        .bottom-bar {
            height: 40px;
            background-color: var(--accent-color);
            width: 100%;
            margin-top: auto;
        }

        @media print {
            @page {
                margin: 0;
            }
            body { 
                background: none; 
                padding: 0;
            }
            .resume-container {
                box-shadow: none;
                width: 100%;
                height: 100vh;
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class="resume-container">
        <header>
            <div class="header-photo">
                <div class="photo-frame">
                    <img src="<?php echo $data['profile']['photo_url']; ?>" alt="Foto Profil">
                </div>
            </div>
            <div class="header-info">
                <div class="name-section">
                    <h1><?php echo $data['profile']['name_first']; ?></h1>
                    <h1><?php echo $data['profile']['name_last']; ?></h1>
                </div>
                <div class="contact-section">
                    <div class="contact-col">
                        <span><?php echo $data['profile']['address']; ?></span>
                        <span><?php echo $data['profile']['phone']; ?></span>
                    </div>
                    <div class="contact-col">
                        <span><?php echo $data['profile']['email']; ?></span>
                        <span><?php echo $data['profile']['social']; ?></span>
                    </div>
                </div>
            </div>
        </header>

        <div class="main-content">
            
            <div class="left-column">
                <section>
                    <h2><?php echo $data['objective']['title']; ?></h2>
                    <p><?php echo $data['objective']['content']; ?></p>
                    
                    <div class="arrow-icon">
                        <?php echo file_get_contents('arrow.svg'); ?> 
                    </div>
                </section>

                <div class="section-separator"></div>

                <section>
                    <h2><?php echo $data['education']['title']; ?></h2>
                    <?php foreach($data['education']['items'] as $edu): ?>
                        <h3><?php echo $edu['degree']; ?></h3>
                        <div class="sub-title"><?php echo $edu['school']; ?></div>
                        <div class="date"><?php echo $edu['date']; ?></div>
                        <?php if($edu['details']): ?>
                            <p><?php echo $edu['details']; ?></p>
                        <?php endif; ?>
                        <br>
                    <?php endforeach; ?>

                    <div class="arrow-icon">
                        <?php echo file_get_contents('arrow.svg'); ?> 
                    </div>
                </section>
            </div>

            <div class="right-column">
                <section>
                    <h2><?php echo $data['experience']['title']; ?></h2>
                    
                    <?php foreach($data['experience']['items'] as $job): ?>
                        <h3><?php echo $job['role']; ?></h3>
                        <div class="sub-title"><?php echo $job['company']; ?></div>
                        <div class="date"><?php echo $job['date']; ?></div>
                        <ul>
                            <?php foreach($job['tasks'] as $task): ?>
                                <li><?php echo $task; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <br>
                    <?php endforeach; ?>

                    <div class="arrow-icon">
                        <?php echo file_get_contents('arrow.svg'); ?> 
                    </div>
                </section>
            </div>
        </div>

        <div class="footer-skills">
            <div class="label">
                <h2><?php echo $data['skills']['title']; ?></h2>
            </div>
            <div class="skill-list">
                <ul class="skill-ul">
                    <?php foreach($data['skills']['items'] as $skill): ?>
                        <li><?php echo $skill; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="bottom-bar"></div>

    </div>

</body>
</html>