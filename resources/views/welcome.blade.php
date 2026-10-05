<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Judul Halaman -->
        <h1 class="text-center">Portofolio Pribadi</h1>
        
        <!-- Gambar Profil -->
        <div class="text-center">
            <!-- Pastikan file profil.jpg disimpan di folder public/ (misal: public/profil.jpg) -->
            <img src="{{ asset('img/minju.jpg') }}" alt="Gambar Profil">
        </div>

        <!-- Tentang Saya -->
        <h2 class="text-center">Tentang Saya</h2>
        <p class="text-center">Selamat datang di portofolio saya! Saya adalah seorang pengembang web yang penuh semangat.</p>
        <blockquote class="text-center">"Kreativitas adalah intelijensi yang bersenang-senang." - Albert Einstein</blockquote>

         <!-- Pengalaman Kerja -->
        <h2 class="text-center">Pengalaman Kerja</h2>
        <table>
            <tr>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Tahun</th>
            </tr>
            <tr>
                <td>Web Developer</td>
                <td>PT. Teknologi</td>
                <td>2020-2023</td>
            </tr>
            <tr>
                <td>Junior Developer</td>
                <td>PT. Inovasi</td>
                <td>2018-2020</td>
            </tr>
        </table>

        <!-- Hobi -->
        <h2>Hobi Saya</h2>
        <ul>
            <li>Membaca</li>
            <li>Olahraga</li>
            <li>Fotografi</li>
        </ul>
        <ol>
            <li>Belajar Bahasa Asing</li>
            <li>Menulis Blog</li>
            <li>Melukis</li>
        </ol>

        <!-- Audio -->
        <h2 class="text-center">Lagu Favorit</h2>
        <!-- <audio controls>
            Pastikan file lagu.mp3 disimpan di folder public/ (misal: public/lagu.mp3)
            <source src="{{ asset('lagu.mp3') }}" type="audio/mpeg">
            Browser Anda tidak mendukung pemutar audio.
        </audio> -->

        <!-- Embed Audio -->
        <div class="audio-embed">
            <iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/track/2LBqCSwhJGcFQeTHMVGwy3?utm_source=generator&si=04a84b4d2c1a488d" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <a href='#'
                style="text-align: center; display: block; color: #A4ABB6; font-size: 12px; font-family: sans-serif; line-height: 16px; margin-top: 8px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">embed-musik</a>
        </div>

        <!-- Video Karya -->
        <h2 class="text-center">Video Karya</h2>
        <!-- <iframe width="640" height="360" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
            allowfullscreen></iframe> -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Sa6EslOHsI0?si=rr1XBe9d_mvgNkt5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <!-- Link ke Media Sosial -->
        <h2 class="text-center">Ikuti Saya</h2>
        <p class="text-center">
            <a href="https://www.instagram.com/mhra.ptt" target="_blank">Instagram</a> |
            <a href="https://www.linkedin.com/in/username" target="_blank">LinkedIn</a>
        </p>

        <!-- Footer -->
        <footer>
            &copy; 2024 Portofolio Pribadi. Semua hak dilindungi.
        </footer>
    </div>
</body>
</html>