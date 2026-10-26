<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Kategori
        $tech = Category::create(['nama' => 'Teknologi']);
        $sains = Category::create(['nama' => 'Sains']);
        $sejarah = Category::create(['nama' => 'Sejarah']);
        $seni = Category::create(['nama' => 'Seni']);

        // ================= TEKNOLOGI =================
        Material::create(['category_id' => $tech->id, 'judul' => 'Belajar Dasar Pemrograman Web', 'gambar' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
            'konten' => '<p>Pemrograman web adalah proses membuat aplikasi yang berjalan di browser. Fondasi utamanya adalah HTML, CSS, dan JavaScript. HTML berfungsi sebagai kerangka atau struktur halaman (teks, gambar, tombol). Tanpa HTML, halaman web tidak akan memiliki bentuk.</p><p>CSS bertugas untuk mengatur tampilan visual, seperti warna, tata letak, dan ukuran font, sehingga website terlihat menarik dan rapi. Sementara itu, JavaScript memberikan interaktivitas, memungkinkan halaman merespons tindakan pengguna (seperti klik tombol) tanpa harus me-refresh browser.</p><p>Menguasai ketiga bahasa ini adalah langkah awal wajib jika kamu ingin menjadi seorang Web Developer profesional. Selain itu, memahami cara kerja browser dan server akan sangat membantumu dalam membangun aplikasi yang cepat dan aman.</p>',
            'quizzes' => [
                ['q' => 'Apa kepanjangan dari HTML?', 'a' => 'HyperText Markup Language', 'opts' => ['HyperText Markup Language', 'Home Tool Markup Language', 'Hyperlink Text']],
                ['q' => 'Bahasa apa yang mengatur tampilan visual website?', 'a' => 'CSS', 'opts' => ['HTML', 'CSS', 'PHP']],
                ['q' => 'Apa fungsi utama JavaScript?', 'a' => 'Membuat website interaktif', 'opts' => ['Mengatur database', 'Membuat website interaktif', 'Mewarnai teks']],
                ['q' => 'Tag HTML untuk membuat paragraf adalah?', 'a' => '<p>', 'opts' => ['<div>', '<p>', '<h1>']],
                ['q' => 'CSS singkatan dari?', 'a' => 'Cascading Style Sheets', 'opts' => ['Creative Style Sheets', 'Cascading Style Sheets', 'Computer Style Sheets']],
                ['q' => 'Di mana kode JavaScript biasanya diletakkan?', 'a' => 'Dalam tag <script>', 'opts' => ['Dalam tag <style>', 'Dalam tag <script>', 'Dalam tag <css>']],
                ['q' => 'Apa itu responsif design?', 'a' => 'Tampilan menyesuaikan ukuran layar', 'opts' => ['Tampilan menyesuaikan ukuran layar', 'Tampilan berwarna cerah', 'Tampilan bergerak']]
            ]
        ]);
        Material::create(['category_id' => $tech->id, 'judul' => 'Framework Laravel dari Nol', 'gambar' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c',
            'konten' => '<p>Laravel adalah framework PHP yang sangat populer karena sintaksnya yang elegan dan fiturnya yang lengkap. Laravel menggunakan arsitektur MVC (Model-View-Controller) yang memisahkan logika bisnis (Model), tampilan (View), dan pengendali (Controller). Pola ini membuat kode lebih terstruktur dan mudah dipelihara.</p><p>Dengan Laravel, developer tidak perlu menulis kode dari awal untuk hal-hal umum seperti routing (pemetaan URL), autentikasi (login/register), dan koneksi database. Laravel juga dilengkapi dengan sistem migrasi database yang memudahkan pengelolaan struktur tabel, serta Eloquent ORM yang memudahkan interaksi dengan database menggunakan objek PHP.</p><p>Framework ini sangat cocok untuk membangun aplikasi web skala kecil hingga enterprise dengan cepat dan aman. Ekosistem Laravel juga sangat besar, dengan banyak paket pihak ketiga yang siap digunakan.</p>',
            'quizzes' => [
                ['q' => 'Laravel adalah framework untuk bahasa?', 'a' => 'PHP', 'opts' => ['Python', 'PHP', 'Ruby']],
                ['q' => 'Apa singkatan dari arsitektur Laravel?', 'a' => 'MVC', 'opts' => ['MVP', 'MVC', 'API']],
                ['q' => 'Apa fungsi "Routing" di Laravel?', 'a' => 'Menentukan URL ke fungsi tertentu', 'opts' => ['Menghapus database', 'Menentukan URL ke fungsi tertentu', 'Membuat desain']],
                ['q' => 'Alat untuk mengelola database di Laravel adalah?', 'a' => 'Migration', 'opts' => ['Seeder', 'Migration', 'Routing']],
                ['q' => 'Siapa pembuat framework Laravel?', 'a' => 'Taylor Otwell', 'opts' => ['Taylor Swift', 'Taylor Otwell', 'Brendan Eich']],
                ['q' => 'Apa itu Eloquent di Laravel?', 'a' => 'ORM untuk interaksi database', 'opts' => ['Nama template', 'ORM untuk interaksi database', 'Fitur keamanan']],
                ['q' => 'File konfigurasi environment Laravel adalah?', 'a' => '.env', 'opts' => ['.htaccess', '.env', 'config.php']]
            ]
        ]);
        Material::create(['category_id' => $tech->id, 'judul' => 'Mengenal UI/UX Design', 'gambar' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5',
            'konten' => '<p>UI (User Interface) dan UX (User Experience) adalah dua hal yang saling melengkapi dalam desain produk digital. UI berfokus pada tampilan visual, seperti tombol, warna, tipografi, dan tata letak. Tujuannya adalah membuat tampilan produk terlihat menarik dan konsisten.</p><p>UX berfokus pada pengalaman pengguna secara keseluruhan. Tujuannya adalah memastikan produk mudah digunakan, menyenangkan, dan menyelesaikan masalah pengguna secara efektif. Proses UX melibatkan riset pengguna, pembuatan wireframe, prototipe, dan pengujian kegunaan.</p><p>Desainer UI/UX harus memahami perilaku pengguna dan menggunakan alat desain seperti Figma atau Adobe XD untuk membuat prototipe sebelum produk dikembangkan oleh tim developer. Kolaborasi yang baik antara desainer dan developer sangat penting untuk menghasilkan produk yang sukses.</p>',
            'quizzes' => [
                ['q' => 'UI berfokus pada?', 'a' => 'Tampilan visual', 'opts' => ['Sistem database', 'Tampilan visual', 'Kecepatan server']],
                ['q' => 'UX berfokus pada?', 'a' => 'Pengalaman pengguna', 'opts' => ['Warna tombol', 'Pengalaman pengguna', 'Kode program']],
                ['q' => 'Alat desain UI/UX populer saat ini?', 'a' => 'Figma', 'opts' => ['Photoshop', 'Figma', 'Excel']],
                ['q' => 'Apa itu wireframe?', 'a' => 'Kerangka desain dasar', 'opts' => ['Desain akhir', 'Kerangka desain dasar', 'Kode HTML']],
                ['q' => 'Mengapa UX penting?', 'a' => 'Agar produk mudah digunakan', 'opts' => ['Agar produk mahal', 'Agar produk mudah digunakan', 'Agar server cepat']],
                ['q' => 'Apa itu prototipe?', 'a' => 'Model awal produk', 'opts' => ['Produk final', 'Model awal produk', 'Nama brand']],
                ['q' => 'Warna yang sering dipakai untuk tombol aksi sukses?', 'a' => 'Hijau', 'opts' => ['Merah', 'Hijau', 'Hitam']]
            ]
        ]);
        Material::create(['category_id' => $tech->id, 'judul' => 'Dasar Keamanan Siber', 'gambar' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5',
            'konten' => '<p>Keamanan siber adalah praktik melindungi sistem, jaringan, dan data dari serangan digital. Di era digital ini, data adalah aset berharga, sehingga keamanan siber menjadi prioritas utama bagi individu maupun organisasi.</p><p>Salah satu ancaman paling umum adalah Phishing, yaitu upaya menipu pengguna agar memberikan informasi sensitif seperti password atau data kartu kredit melalui email atau situs palsu. Ancaman lainnya adalah Malware, perangkat lunak berbahaya yang dirancang untuk merusak sistem atau mencuri data, seperti virus, ransomware, dan spyware.</p><p>Untuk melindungi diri, selalu gunakan password yang kuat dan unik, aktifkan autentikasi dua faktor (2FA), dan rutin memperbarui perangkat lunak. Kesadaran pengguna adalah garis pertahanan pertama dalam menjaga keamanan data pribadi di internet.</p>',
            'quizzes' => [
                ['q' => 'Apa itu Phishing?', 'a' => 'Penipuan untuk mencuri data', 'opts' => ['Membuat website', 'Penipuan untuk mencuri data', 'Mengunci file']],
                ['q' => 'Apa fungsi Autentikasi Dua Faktor (2FA)?', 'a' => 'Menambah lapisan keamanan', 'opts' => ['Mempercepat login', 'Menambah lapisan keamanan', 'Menghapus password']],
                ['q' => 'Software berbahaya disebut?', 'a' => 'Malware', 'opts' => ['Hardware', 'Malware', 'Firmware']],
                ['q' => 'Sandi yang baik sebaiknya?', 'a' => 'Panjang dan kompleks', 'opts' => ['Tanggal lahir', 'Panjang dan kompleks', 'Nama sendiri']],
                ['q' => 'Mengapa update sistem penting?', 'a' => 'Menutup celah keamanan', 'opts' => ['Mengubah tampilan', 'Menutup celah keamanan', 'Mengurangi memori']],
                ['q' => 'Serangan yang menebak password berulang disebut?', 'a' => 'Brute Force', 'opts' => ['Brute Force', 'Phishing', 'Spam']],
                ['q' => 'Data penting sebaiknya disimpan di?', 'a' => 'Tempat aman/terenkripsi', 'opts' => ['Sembarang tempat', 'Tempat aman/terenkripsi', 'Kertas']]
            ]
        ]);
        Material::create(['category_id' => $tech->id, 'judul' => 'Pengenalan Cloud Computing', 'gambar' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8',
            'konten' => '<p>Cloud computing (komputasi awan) adalah penyediaan sumber daya komputasi (seperti server, penyimpanan, database, jaringan, perangkat lunak) melalui internet. Dengan cloud, kita tidak perlu memiliki perangkat keras fisik sendiri; kita bisa menyewa kapasitas sesuai kebutuhan.</p><p>Terdapat tiga model layanan utama: IaaS (Infrastructure as a Service) yang menyediakan infrastruktur dasar, PaaS (Platform as a Service) yang menyediakan platform untuk pengembangan aplikasi, dan SaaS (Software as a Service) yang menyediakan perangkat lunak siap pakai (seperti Google Workspace atau Microsoft 365).</p><p>Contoh penyedia layanan cloud terkemuka adalah Amazon Web Services (AWS), Google Cloud, dan Microsoft Azure. Cloud computing memungkinkan skalabilitas yang tinggi dan efisiensi biaya, terutama untuk startup dan perusahaan besar.</p>',
            'quizzes' => [
                ['q' => 'Apa itu Cloud Computing?', 'a' => 'Layanan komputasi lewat internet', 'opts' => ['Penyimpanan di hardisk lokal', 'Layanan komputasi lewat internet', 'Nama perangkat keras']],
                ['q' => 'SaaS singkatan dari?', 'a' => 'Software as a Service', 'opts' => ['System as a Service', 'Software as a Service', 'Storage as a Service']],
                ['q' => 'Contoh layanan cloud adalah?', 'a' => 'AWS', 'opts' => ['Photoshop', 'AWS', 'Notepad']],
                ['q' => 'Apa keuntungan Cloud?', 'a' => 'Skalabilitas fleksibel', 'opts' => ['Harus beli server', 'Skalabilitas fleksibel', 'Sering mati']],
                ['q' => 'PaaS digunakan untuk?', 'a' => 'Platform pengembangan aplikasi', 'opts' => ['Menyimpan foto', 'Platform pengembangan aplikasi', 'Main game']],
                ['q' => 'Penyedia cloud dari Google adalah?', 'a' => 'Google Cloud', 'opts' => ['Google Drive', 'Google Cloud', 'Google Search']],
                ['q' => 'Apa itu IaaS?', 'a' => 'Infrastructure as a Service', 'opts' => ['Internet as a Service', 'Infrastructure as a Service', 'Information as a Service']]
            ]
        ]);
        Material::create(['category_id' => $tech->id, 'judul' => 'Dasar Internet of Things (IoT)', 'gambar' => 'https://images.unsplash.com/photo-1518770660439-4636190af475',
            'konten' => '<p>Internet of Things (IoT) adalah konsep menghubungkan perangkat fisik sehari-hari (seperti lampu, kulkas, mobil, atau jam tangan) ke internet, sehingga mereka dapat mengirim dan menerima data. Perangkat IoT dilengkapi dengan sensor, perangkat lunak, dan teknologi jaringan.</p><p>Contoh penerapan IoT adalah smart home (rumah pintar), di mana lampu dan AC bisa dikontrol melalui smartphone. Di bidang industri, IoT digunakan untuk memantau mesin dan memprediksi kerusakan sebelum terjadi (predictive maintenance).</p><p>Tantangan utama IoT adalah masalah keamanan dan privasi data, karena semakin banyak perangkat yang terhubung, semakin besar pula potensi celah keamanan yang bisa dieksploitasi.</p>',
            'quizzes' => [
                ['q' => 'IoT singkatan dari?', 'a' => 'Internet of Things', 'opts' => ['Internet of Time', 'Internet of Things', 'Input of Things']],
                ['q' => 'Perangkat IoT biasanya dilengkapi?', 'a' => 'Sensor', 'opts' => ['Roda', 'Sensor', 'Layar sentuh']],
                ['q' => 'Contoh penerapan IoT di rumah?', 'a' => 'Smart Home', 'opts' => ['Smart Home', 'Smart City', 'Smart Car']],
                ['q' => 'Tantangan utama IoT?', 'a' => 'Keamanan dan privasi', 'opts' => ['Kecepatan', 'Keamanan dan privasi', 'Warna alat']],
                ['q' => 'Apa itu sensor pada IoT?', 'a' => 'Alat pendeteksi lingkungan', 'opts' => ['Alat musik', 'Alat pendeteksi lingkungan', 'Alat masak']],
                ['q' => 'IoT menghubungkan benda fisik ke?', 'a' => 'Internet', 'opts' => ['Kabel listrik', 'Internet', 'Air']],
                ['q' => 'Manfaat IoT di industri?', 'a' => 'Memantau mesin', 'opts' => ['Memasak', 'Memantau mesin', 'Menyanyi']]
            ]
        ]);

        // ================= SAINS =================
        Material::create(['category_id' => $sains->id, 'judul' => 'Mengenal Tata Surya Lebih Dekat', 'gambar' => 'https://images.unsplash.com/photo-1507413245164-6160d8298b31',
            'konten' => '<p>Tata Surya kita terdiri dari Matahari sebagai pusatnya, dikelilingi oleh delapan planet utama. Urutan planet dari yang terdekat dengan Matahari adalah Merkurius, Venus, Bumi, Mars, Jupiter, Saturnus, Uranus, dan Neptunus. Matahari adalah bintang raksasa yang gravitasinya menjaga semua planet tetap pada orbitnya.</p><p>Planet-planet ini terbagi menjadi dua kelompok: planet terrestrial (berbatu) seperti Bumi dan Mars, serta planet gas raksasa seperti Jupiter dan Saturnus. Selain planet, terdapat juga asteroid (terutama di sabuk asteroid antara Mars dan Jupiter), komet, dan satelit alami seperti Bulan yang mengorbit Bumi.</p><p>Memahami tata surya membantu kita menghargai posisi Bumi di alam semesta dan mendorong eksplorasi luar angkasa untuk mencari tahu apakah ada kehidupan lain di luar sana.</p>',
            'quizzes' => [
                ['q' => 'Planet terdekat dengan Matahari?', 'a' => 'Merkurius', 'opts' => ['Venus', 'Merkurius', 'Mars']],
                ['q' => 'Planet terbesar di Tata Surya?', 'a' => 'Jupiter', 'opts' => ['Saturnus', 'Jupiter', 'Neptunus']],
                ['q' => 'Planet yang dikenal dengan cincinnya?', 'a' => 'Saturnus', 'opts' => ['Uranus', 'Saturnus', 'Mars']],
                ['q' => 'Pusat Tata Surya kita?', 'a' => 'Matahari', 'opts' => ['Bumi', 'Matahari', 'Bulan']],
                ['q' => 'Berapa jumlah planet di Tata Surya?', 'a' => '8', 'opts' => ['9', '8', '7']],
                ['q' => 'Planet yang dihuni manusia?', 'a' => 'Bumi', 'opts' => ['Mars', 'Bumi', 'Venus']],
                ['q' => 'Benda langit pengeliling planet disebut?', 'a' => 'Satelit', 'opts' => ['Komet', 'Satelit', 'Asteroid']]
            ]
        ]);
        Material::create(['category_id' => $sains->id, 'judul' => 'Fisika Kuantum Sederhana', 'gambar' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d',
            'konten' => '<p>Fisika kuantum adalah cabang fisika yang mempelajari perilaku materi dan energi pada skala atom dan subatom. Berbeda dengan fisika klasik (yang mengatur benda besar seperti bola atau planet), di dunia kuantum, partikel dapat berperilaku sebagai gelombang dan partikel secara bersamaan (dualisme gelombang-partikel).</p><p>Konsep penting lainnya adalah "Superposisi", di mana sebuah partikel dapat berada di beberapa keadaan sekaligus sampai diukur (seperti kucing Schrödinger yang hidup dan mati secara bersamaan). Ada juga "Prinsip Ketidakpastian Heisenberg" yang menyatakan kita tidak bisa mengetahui posisi dan momentum partikel secara bersamaan dengan presisi sempurna.</p><p>Fisika kuantum menjadi dasar dari banyak teknologi modern, seperti transistor (komponen utama komputer), laser, MRI di rumah sakit, dan yang terbaru adalah komputer kuantum.</p>',
            'quizzes' => [
                ['q' => 'Fisika kuantum mempelajari benda pada skala?', 'a' => 'Atom dan subatom', 'opts' => ['Planet', 'Atom dan subatom', 'Galaksi']],
                ['q' => 'Siapa penemu teori relativitas?', 'a' => 'Albert Einstein', 'opts' => ['Isaac Newton', 'Albert Einstein', 'Niels Bohr']],
                ['q' => 'Partikel dapat bersifat sebagai?', 'a' => 'Gelombang dan partikel', 'opts' => ['Hanya padat', 'Gelombang dan partikel', 'Hanya cair']],
                ['q' => 'Apa itu superposisi?', 'a' => 'Beberapa keadaan sekaligus', 'opts' => ['Keadaan diam', 'Beberapa keadaan sekaligus', 'Kehancuran atom']],
                ['q' => 'Teknologi dari fisika kuantum?', 'a' => 'Laser', 'opts' => ['Mesin uap', 'Laser', 'Roda']],
                ['q' => 'Prinsip Ketidakpastian dicetuskan oleh?', 'a' => 'Heisenberg', 'opts' => ['Einstein', 'Heisenberg', 'Newton']],
                ['q' => 'Simbol atom terdiri dari?', 'a' => 'Proton, neutron, elektron', 'opts' => ['Api, air, tanah', 'Proton, neutron, elektron', 'Batu, kayu, besi']]
            ]
        ]);
        Material::create(['category_id' => $sains->id, 'judul' => 'Biologi: Sel dan Kehidupan', 'gambar' => 'https://images.unsplash.com/photo-1530026405186-ed1f139313f8',
            'konten' => '<p>Sel adalah unit terkecil dari kehidupan. Semua makhluk hidup, baik tumbuhan, hewan, maupun manusia, tersusun dari sel. Ada dua jenis utama sel: sel prokariotik (tanpa membran inti, seperti bakteri) dan sel eukariotik (memiliki membran inti, seperti sel tumbuhan dan hewan).</p><p>Di dalam sel eukariotik terdapat organel-organel yang memiliki fungsi spesifik. Misalnya, mitokondria berfungsi sebagai "pembangkit energi" sel melalui respirasi, sedangkan inti sel (nukleus) menyimpan materi genetik (DNA) yang mengatur seluruh aktivitas sel. Sel tumbuhan memiliki kloroplas untuk fotosintesis, yang tidak dimiliki sel hewan.</p><p>Memahami sel membantu kita mengerti bagaimana tubuh bekerja, bagaimana penyakit berkembang (misalnya kanker akibat pembelahan sel tak terkendali), dan bagaimana kehidupan bereproduksi dan berevolusi.</p>',
            'quizzes' => [
                ['q' => 'Unit terkecil kehidupan adalah?', 'a' => 'Sel', 'opts' => ['Atom', 'Sel', 'Jaringan']],
                ['q' => 'Pembangkit energi sel disebut?', 'a' => 'Mitokondria', 'opts' => ['Nukleus', 'Mitokondria', 'Ribosom']],
                ['q' => 'Sel yang tidak memiliki membran inti?', 'a' => 'Prokariotik', 'opts' => ['Eukariotik', 'Prokariotik', 'Multiseluler']],
                ['q' => 'Materi genetik disimpan di?', 'a' => 'Nukleus', 'opts' => ['Nukleus', 'Dinding sel', 'Vakuola']],
                ['q' => 'Sel tumbuhan memiliki organel yang tidak dimiliki hewan, yaitu?', 'a' => 'Kloroplas', 'opts' => ['Mitokondria', 'Kloroplas', 'Nukleus']],
                ['q' => 'Proses pembelahan sel untuk pertumbuhan?', 'a' => 'Mitosis', 'opts' => ['Meiosis', 'Mitosis', 'Fotosintesis']],
                ['q' => 'DNA singkatan dari?', 'a' => 'Deoxyribonucleic Acid', 'opts' => ['Dynamic Nuclear Acid', 'Deoxyribonucleic Acid', 'Double Nuclear Acid']]
            ]
        ]);
        Material::create(['category_id' => $sains->id, 'judul' => 'Kimia Dasar: Reaksi Unsur', 'gambar' => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69',
            'konten' => '<p>Kimia adalah ilmu yang mempelajari komposisi, struktur, sifat, dan perubahan materi. Segala sesuatu di sekitar kita tersusun dari atom, yang bergabung membentuk molekul. Tabel Periodik Unsur mengelompokkan semua unsur berdasarkan nomor atom dan sifat kimianya, seperti logam, non-logam, dan gas mulia.</p><p>Reaksi kimia terjadi ketika zat-zat bereaksi dan berubah menjadi zat baru. Contoh sederhana adalah pembakaran (reaksi dengan oksigen) dan karat pada besi (reaksi besi dengan oksigen dan air). Dalam reaksi kimia, hukum kekekalan massa berlaku: massa zat sebelum dan sesudah reaksi adalah sama (Lavoisier).</p><p>Kimia sangat penting dalam kehidupan sehari-hari, mulai dari proses memasak (reaksi Maillard), obat-obatan, pupuk untuk pertanian, hingga bahan bakar kendaraan.</p>',
            'quizzes' => [
                ['q' => 'Partikel terkecil dari unsur adalah?', 'a' => 'Atom', 'opts' => ['Molekul', 'Atom', 'Sel']],
                ['q' => 'Tabel yang mengelompokkan unsur disebut?', 'a' => 'Tabel Periodik', 'opts' => ['Tabel Perkalian', 'Tabel Periodik', 'Tabel Kimia']],
                ['q' => 'Proses besi berkarat bereaksi dengan?', 'a' => 'Oksigen', 'opts' => ['Air', 'Oksigen', 'Api']],
                ['q' => 'Rumus kimia air adalah?', 'a' => 'H2O', 'opts' => ['CO2', 'H2O', 'O2']],
                ['q' => 'Zat yang mempercepat reaksi disebut?', 'a' => 'Katalis', 'opts' => ['Inhibitor', 'Katalis', 'Reaktor']],
                ['q' => 'Hukum kekekalan massa berarti?', 'a' => 'Massa sebelum = sesudah reaksi', 'opts' => ['Massa berubah', 'Massa sebelum = sesudah reaksi', 'Massa hilang']],
                ['q' => 'Lambang unsur Emas adalah?', 'a' => 'Au', 'opts' => ['Ag', 'Au', 'Fe']]
            ]
        ]);
        Material::create(['category_id' => $sains->id, 'judul' => 'Hukum Newton dan Gerak', 'gambar' => 'https://images.unsplash.com/photo-1636466497217-26a8cbeaf0aa',
            'konten' => '<p>Hukum Newton adalah tiga hukum dasar dalam fisika klasik yang menjelaskan hubungan antara gaya dan gerak suatu benda. Hukum I Newton (Hukum Inersia) menyatakan bahwa benda akan tetap diam atau bergerak lurus dengan kecepatan konstan jika tidak ada gaya total yang bekerja padanya.</p><p>Hukum II Newton menyatakan bahwa percepatan suatu benda berbanding lurus dengan gaya total yang bekerja padanya dan berbanding terbalik dengan massanya (F = m.a). Hukum III Newton (Aksi-Reaksi) menyatakan bahwa setiap aksi selalu ada reaksi yang sama besar dan berlawanan arah.</p><p>Hukum-hukum ini menjadi dasar dalam memahami gerak planet, kendaraan, dan benda-benda di sekitar kita, serta menjadi fondasi bagi rekayasa modern.</p>',
            'quizzes' => [
                ['q' => 'Hukum I Newton disebut juga hukum?', 'a' => 'Inersia', 'opts' => ['Gravitasi', 'Inersia', 'Kekekalan']],
                ['q' => 'Rumus Hukum II Newton adalah?', 'a' => 'F = m.a', 'opts' => ['E = mc^2', 'F = m.a', 'V = s/t']],
                ['q' => 'Hukum III Newton menjelaskan tentang?', 'a' => 'Aksi dan Reaksi', 'opts' => ['Kecepatan', 'Aksi dan Reaksi', 'Gaya gesek']],
                ['q' => 'Satuan gaya adalah?', 'a' => 'Newton', 'opts' => ['Joule', 'Newton', 'Watt']],
                ['q' => 'Benda yang diam akan cenderung?', 'a' => 'Tetap diam', 'opts' => ['Bergerak sendiri', 'Tetap diam', 'Berubah warna']],
                ['q' => 'Percepatan dipengaruhi oleh?', 'a' => 'Gaya dan massa', 'opts' => ['Gaya dan massa', 'Warna dan bentuk', 'Suhu']],
                ['q' => 'Siapa penemu Hukum Gerak?', 'a' => 'Isaac Newton', 'opts' => ['Albert Einstein', 'Isaac Newton', 'Galileo']]
            ]
        ]);
        Material::create(['category_id' => $sains->id, 'judul' => 'Ekosistem dan Rantai Makanan', 'gambar' => 'https://images.unsplash.com/photo-1534067783941-51c9c23ecefd',
            'konten' => '<p>Ekosistem adalah sistem ekologi yang terbentuk oleh hubungan timbal balik antara makhluk hidup (biotik) dan lingkungannya (abiotik). Komponen biotik terdiri dari produsen (tumbuhan), konsumen (hewan), dan pengurai (bakteri/jamur). Komponen abiotik meliputi air, tanah, udara, dan cahaya matahari.</p><p>Rantai makanan adalah perpindahan energi dari sumbernya (matahari) melalui serangkaian organisme. Contoh: Tumbuhan (produsen) dimakan oleh Belalang (konsumen I), lalu Belalang dimakan oleh Katak (konsumen II), dan Katak dimakan oleh Ular (konsumen III), lalu Ular dimakan oleh Elang (konsumen puncak).</p><p>Keseimbangan ekosistem sangat penting untuk kelangsungan hidup semua makhluk. Jika satu komponen terganggu (misalnya produsen hilang), seluruh rantai makanan bisa terancam.</p>',
            'quizzes' => [
                ['q' => 'Makhluk hidup yang membuat makanan sendiri disebut?', 'a' => 'Produsen', 'opts' => ['Konsumen', 'Produsen', 'Pengurai']],
                ['q' => 'Rantai makanan dimulai dari?', 'a' => 'Tumbuhan', 'opts' => ['Hewan Karnivora', 'Tumbuhan', 'Bakteri']],
                ['q' => 'Hewan pemakan tumbuhan disebut?', 'a' => 'Herbivora', 'opts' => ['Karnivora', 'Herbivora', 'Omnivora']],
                ['q' => 'Komponen tak hidup dalam ekosistem disebut?', 'a' => 'Abiotik', 'opts' => ['Biotik', 'Abiotik', 'Organik']],
                ['q' => 'Organisme pengurai bangkai adalah?', 'a' => 'Bakteri dan Jamur', 'opts' => ['Bakteri dan Jamur', 'Harimau', 'Rumput']],
                ['q' => 'Energi utama ekosistem berasal dari?', 'a' => 'Matahari', 'opts' => ['Angin', 'Matahari', 'Tanah']],
                ['q' => 'Konsumen puncak biasanya adalah?', 'a' => 'Karnivora besar', 'opts' => ['Karnivora besar', 'Tumbuhan', 'Ikan kecil']]
            ]
        ]);

        // ================= SEJARAH =================
        Material::create(['category_id' => $sejarah->id, 'judul' => 'Jejak Peradaban Dunia Kuno', 'gambar' => 'https://images.unsplash.com/photo-1461360370896-922624d12aa1',
            'konten' => '<p>Peradaban kuno adalah fondasi dari peradaban modern saat ini. Beberapa peradaban terbesar yang meninggalkan jejak mendalam adalah Mesir Kuno, Mesopotamia, Yunani Kuno, dan Romawi. Mesir Kuno terkenal dengan piramida, Sphinx, dan sistem penulisan hieroglif yang rumit.</p><p>Mesopotamia (sekarang Irak) dijuluki sebagai "Tempat Lahir Peradaban" karena di sinilah roda dan tulisan pertama kali ditemukan (tulisan paku). Sementara itu, Yunani Kuno meletakkan dasar bagi demokrasi, filsafat (Socrates, Plato, Aristoteles), dan seni teater.</p><p>Romawi Kuno dikenal dengan sistem hukum yang adil dan infrastruktur seperti jalan raya, saluran air (aqueduct), dan bangunan megah seperti Colosseum yang masih menginspirasi arsitektur hingga kini.</p>',
            'quizzes' => [
                ['q' => 'Peradaban yang membangun Piramida?', 'a' => 'Mesir Kuno', 'opts' => ['Romawi', 'Mesir Kuno', 'Yunani']],
                ['q' => 'Tempat lahirnya peradaban (roda dan tulisan)?', 'a' => 'Mesopotamia', 'opts' => ['Mesir', 'Mesopotamia', 'India']],
                ['q' => 'Peradaban yang mengenalkan Demokrasi?', 'a' => 'Yunani Kuno', 'opts' => ['Romawi', 'Yunani Kuno', 'Persia']],
                ['q' => 'Tulisan Mesir Kuno disebut?', 'a' => 'Hieroglif', 'opts' => ['Latin', 'Hieroglif', 'Sanskrit']],
                ['q' => 'Peradaban yang membangun Colosseum?', 'a' => 'Romawi', 'opts' => ['Romawi', 'Yunani', 'Mesir']],
                ['q' => 'Filsuf terkenal dari Yunani Kuno?', 'a' => 'Socrates', 'opts' => ['Julius Caesar', 'Socrates', 'Napoleon']],
                ['q' => 'Sungai yang penting bagi Mesir Kuno?', 'a' => 'Sungai Nil', 'opts' => ['Sungai Amazon', 'Sungai Nil', 'Sungai Eufrat']]
            ]
        ]);
        Material::create(['category_id' => $sejarah->id, 'judul' => 'Sejarah Kemerdekaan Indonesia', 'gambar' => 'https://images.unsplash.com/photo-1590240268573-4cb144791713',
            'konten' => '<p>Kemerdekaan Indonesia diproklamasikan pada tanggal 17 Agustus 1945 oleh Soekarno dan Mohammad Hatta. Peristiwa ini menjadi puncak perjuangan panjang bangsa Indonesia melawan penjajahan, mulai dari era kolonialisme Belanda selama ratusan tahun hingga pendudukan Jepang.</p><p>Kekalahan Jepang dalam Perang Dunia II menciptakan kekosongan kekuasaan (vacuum of power). Para tokoh pemuda mendesak Soekarno-Hatta segera memproklamasikan kemerdekaan, yang berpuncak pada peristiwa Rengasdengklok. Naskah proklamasi disusun di rumah Laksamana Maeda.</p><p>Sejak saat itu, Indonesia resmi menjadi negara merdeka dan berdaulat. Meskipun perjuangan mempertahankan kemerdekaan masih berlanjut selama beberapa tahun setelahnya (seperti pertempuran Surabaya 10 November), proklamasi menjadi simbol kebangkitan bangsa.</p>',
            'quizzes' => [
                ['q' => 'Indonesia memproklamasikan kemerdekaan pada tanggal?', 'a' => '17 Agustus 1945', 'opts' => ['17 Agustus 1945', '1 Juni 1945', '28 Oktober 1928']],
                ['q' => 'Siapa yang membacakan teks Proklamasi?', 'a' => 'Soekarno', 'opts' => ['Mohammad Hatta', 'Soekarno', 'Soeharto']],
                ['q' => 'Naskah proklamasi disusun di rumah?', 'a' => 'Laksamana Maeda', 'opts' => ['Soekarno', 'Laksamana Maeda', 'Mohammad Hatta']],
                ['q' => 'Penjajah terakhir sebelum kemerdekaan?', 'a' => 'Jepang', 'opts' => ['Belanda', 'Jepang', 'Portugis']],
                ['q' => 'Peristiwa penculikan Soekarno-Hatta disebut?', 'a' => 'Rengasdengklok', 'opts' => ['Bandung Lautan Api', 'Rengasdengklok', 'Sumpah Pemuda']],
                ['q' => 'Siapa wakil presiden pertama Indonesia?', 'a' => 'Mohammad Hatta', 'opts' => ['Soekarno', 'Mohammad Hatta', 'Sutan Sjahrir']],
                ['q' => 'Bendera pusaka Indonesia adalah?', 'a' => 'Merah Putih', 'opts' => ['Merah Putih', 'Merah Biru', 'Putih Merah']]
            ]
        ]);
        Material::create(['category_id' => $sejarah->id, 'judul' => 'Revolusi Industri di Eropa', 'gambar' => 'https://images.unsplash.com/photo-1518972559570-7cc1309f3229',
            'konten' => '<p>Revolusi Industri adalah periode perubahan besar dalam bidang pertanian, manufaktur, pertambangan, transportasi, dan teknologi yang dimulai di Inggris pada abad ke-18. Penemuan mesin uap oleh James Watt menjadi pemicu utama revolusi ini.</p><p>Sebelum revolusi, barang diproduksi secara manual di rumah-rumah (home industry). Setelah revolusi, produksi beralih ke pabrik-pabrik besar yang menggunakan mesin, meningkatkan produksi secara masif. Namun, revolusi ini juga membawa dampak sosial, seperti urbanisasi besar-besaran (perpindahan ke kota) dan munculnya masalah buruh (jam kerja panjang, upah rendah).</p><p>Revolusi Industri mengubah wajah dunia dari masyarakat agraris menjadi masyarakat industri modern, dan memicu perkembangan teknologi selanjutnya seperti kereta api dan listrik.</p>',
            'quizzes' => [
                ['q' => 'Revolusi Industri dimulai di negara?', 'a' => 'Inggris', 'opts' => ['Prancis', 'Inggris', 'Jerman']],
                ['q' => 'Penemuan kunci Revolusi Industri adalah?', 'a' => 'Mesin Uap', 'opts' => ['Listrik', 'Mesin Uap', 'Internet']],
                ['q' => 'Dampak sosial Revolusi Industri?', 'a' => 'Urbanisasi', 'opts' => ['Urbanisasi', 'Penurunan populasi', 'Kembali ke desa']],
                ['q' => 'Siapa yang menyempurnakan mesin uap?', 'a' => 'James Watt', 'opts' => ['Isaac Newton', 'James Watt', 'Thomas Edison']],
                ['q' => 'Revolusi Industri mengubah masyarakat agraris menjadi?', 'a' => 'Masyarakat Industri', 'opts' => ['Masyarakat Digital', 'Masyarakat Industri', 'Masyarakat Nomaden']],
                ['q' => 'Di mana barang diproduksi massal saat itu?', 'a' => 'Pabrik', 'opts' => ['Rumah', 'Pabrik', 'Sawah']],
                ['q' => 'Alat transportasi yang berkembang pesat saat itu?', 'a' => 'Kereta Api', 'opts' => ['Pesawat', 'Kereta Api', 'Motor']]
            ]
        ]);
        Material::create(['category_id' => $sejarah->id, 'judul' => 'Perang Dunia I dan II', 'gambar' => 'https://images.unsplash.com/photo-1580136579312-94651dfd596d',
            'konten' => '<p>Perang Dunia I (1914-1918) dipicu oleh pembunuhan Pangeran Franz Ferdinand dari Austria. Perang ini melibatkan dua blok besar: Sekutu (Inggris, Prancis, Rusia) melawan Blok Sentral (Jerman, Austria-Hongaria, Turki). Perang ini dikenal dengan perang parit yang mematikan dan penggunaan senjata kimia.</p><p>Perang Dunia II (1939-1945) adalah konflik paling besar dalam sejarah manusia. Dipicu oleh invasi Jerman ke Polandia dan ambisi Adolf Hitler, perang ini melibatkan hampir seluruh negara di dunia. Perang ini berakhir dengan jatuhnya bom atom di Hiroshima dan Nagasaki oleh Amerika Serikat, serta kekalahan Jerman dan Jepang.</p><p>Kedua perang ini mengubah peta politik dunia, memunculkan negara-negara adidaya (Amerika Serikat dan Uni Soviet), dan mendorong berdirinya organisasi perdamaian dunia, Perserikatan Bangsa-Bangsa (PBB).</p>',
            'quizzes' => [
                ['q' => 'Pemicu Perang Dunia I?', 'a' => 'Pembunuhan Franz Ferdinand', 'opts' => ['Invasi Polandia', 'Pembunuhan Franz Ferdinand', 'Serangan Pearl Harbor']],
                ['q' => 'Perang Dunia II dimulai pada tahun?', 'a' => '1939', 'opts' => ['1914', '1939', '1945']],
                ['q' => 'Negara yang memulai Perang Dunia II di Eropa?', 'a' => 'Jerman', 'opts' => ['Jepang', 'Jerman', 'Italia']],
                ['q' => 'Kota yang dijatuhi bom atom pertama?', 'a' => 'Hiroshima', 'opts' => ['Tokyo', 'Hiroshima', 'Nagasaki']],
                ['q' => 'Organisasi perdamaian dunia yang dibentuk setelah PD II?', 'a' => 'PBB', 'opts' => ['NATO', 'PBB', 'ASEAN']],
                ['q' => 'Siapa pemimpin Nazi Jerman?', 'a' => 'Adolf Hitler', 'opts' => ['Mussolini', 'Adolf Hitler', 'Stalin']],
                ['q' => 'Perang parit terjadi pada perang dunia ke?', 'a' => 'I', 'opts' => ['I', 'II', 'III']]
            ]
        ]);
        Material::create(['category_id' => $sejarah->id, 'judul' => 'Kerajaan Majapahit dan Sriwijaya', 'gambar' => 'https://images.unsplash.com/photo-1584810359583-96fc3448beaa',
            'konten' => '<p>Sriwijaya dan Majapahit adalah dua kerajaan besar yang pernah berjaya di Nusantara. Sriwijaya adalah kerajaan maritim yang berpusat di Sumatera (sekitar Palembang) dan menguasai jalur perdagangan laut di Asia Tenggara pada abad ke-7 hingga ke-13.</p><p>Majapahit adalah kerajaan agraris yang berpusat di Jawa Timur (Trowulan) dan mencapai puncak kejayaannya pada masa pemerintahan Hayam Wuruk dengan Patih Gajah Mada pada abad ke-14. Sumpah Palapa Gajah Mada menjadi simbol persatuan Nusantara.</p><p>Kedua kerajaan ini meninggalkan warisan budaya yang kaya, seperti candi-candi (Borobudur dan Prambanan dibangun sebelum Majapahit), karya sastra (Negarakertagama), dan sistem pemerintahan yang menjadi inspirasi bagi kerajaan-kerajaan Islam selanjutnya.</p>',
            'quizzes' => [
                ['q' => 'Kerajaan maritim besar di Sumatera?', 'a' => 'Sriwijaya', 'opts' => ['Majapahit', 'Sriwijaya', 'Mataram']],
                ['q' => 'Pusat Kerajaan Majapahit berada di?', 'a' => 'Jawa Timur', 'opts' => ['Jawa Tengah', 'Jawa Timur', 'Sumatera']],
                ['q' => 'Patih terkenal dari Majapahit adalah?', 'a' => 'Gajah Mada', 'opts' => ['Hayam Wuruk', 'Gajah Mada', 'Raden Wijaya']],
                ['q' => 'Sumpah untuk mempersatukan Nusantara disebut?', 'a' => 'Sumpah Palapa', 'opts' => ['Sumpah Pemuda', 'Sumpah Palapa', 'Sumpah Serapah']],
                ['q' => 'Raja terkenal Majapahit?', 'a' => 'Hayam Wuruk', 'opts' => ['Hayam Wuruk', 'Ken Arok', 'Balaputradewa']],
                ['q' => 'Sriwijaya menguasai jalur?', 'a' => 'Perdagangan laut', 'opts' => ['Pertanian', 'Perdagangan laut', 'Pegunungan']],
                ['q' => 'Candi peninggalan sejarah di Indonesia?', 'a' => 'Borobudur', 'opts' => ['Taj Mahal', 'Borobudur', 'Angkor Wat']]
            ]
        ]);
        Material::create(['category_id' => $sejarah->id, 'judul' => 'Peradaban Lembah Sungai Indus', 'gambar' => 'https://images.unsplash.com/photo-1590050752117-238cb0fb12b1',
            'konten' => '<p>Peradaban Lembah Sungai Indus (sekitar 3300–1300 SM) adalah salah satu peradaban tertua di dunia, berkembang di wilayah yang sekarang menjadi Pakistan dan India Barat. Peradaban ini dikenal dengan perencanaan kotanya yang sangat maju, dengan jalan yang lurus, sistem drainase yang baik, dan rumah-rumah dari batu bata.</p><p>Kota-kota besar seperti Mohenjo-daro dan Harappa menunjukkan bahwa masyarakatnya sudah memiliki keahlian arsitektur dan sanitasi yang tinggi, jauh sebelum peradaban Eropa kuno. Mereka juga memiliki sistem tulisan yang belum sepenuhnya bisa dipecahkan hingga saat ini.</p><p>Peradaban ini runtuh sekitar 1900 SM, kemungkinan akibat perubahan iklim (sungai yang mengering) atau invasi bangsa Arya. Warisan mereka tetap menjadi bukti betapa majunya peradaban manusia di masa lalu.</p>',
            'quizzes' => [
                ['q' => 'Peradaban Indus berkembang di lembah sungai?', 'a' => 'Indus', 'opts' => ['Nil', 'Indus', 'Eufrat']],
                ['q' => 'Kota besar peradaban ini adalah?', 'a' => 'Mohenjo-daro', 'opts' => ['Babylon', 'Mohenjo-daro', 'Athena']],
                ['q' => 'Keunggulan peradaban Indus adalah?', 'a' => 'Tata kota dan sanitasi', 'opts' => ['Piramida', 'Tata kota dan sanitasi', 'Kapal perang']],
                ['q' => 'Peradaban Indus terletak di wilayah sekarang?', 'a' => 'Pakistan/India', 'opts' => ['Mesir', 'Pakistan/India', 'Irak']],
                ['q' => 'Tulisan mereka disebut?', 'a' => 'Tulisan Indus', 'opts' => ['Hieroglif', 'Tulisan Indus', 'Latin']],
                ['q' => 'Peradaban ini runtuh sekitar tahun?', 'a' => '1900 SM', 'opts' => ['1000 M', '1900 SM', '500 SM']],
                ['q' => 'Sistem drainase mereka tergolong?', 'a' => 'Sangat maju', 'opts' => ['Sangat maju', 'Biasa saja', 'Tidak ada']]
            ]
        ]);

        // ================= SENI =================
        Material::create(['category_id' => $seni->id, 'judul' => 'Seni Desain Grafis untuk Pemula', 'gambar' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5',
            'konten' => '<p>Desain grafis adalah seni komunikasi visual. Tujuannya menyampaikan pesan atau ide menggunakan elemen visual seperti gambar, tipografi, warna, dan bentuk. Desainer grafis bekerja di berbagai bidang, mulai dari pembuatan logo, poster, kemasan produk, hingga desain antarmuka aplikasi (UI).</p><p>Dasar dari desain grafis adalah prinsip keseimbangan, harmoni, dan hierarki visual. Warna memiliki peran psikologis yang kuat; misalnya, merah menandakan energi atau bahaya, sedangkan biru menandakan kepercayaan dan profesionalisme. Tipografi (pemilihan huruf) juga menentukan karakter sebuah desain.</p><p>Alat bantu desain grafis modern sangat beragam, seperti Adobe Illustrator (untuk vektor), Photoshop (untuk raster/foto), hingga Canva yang memudahkan pemula. Menguasai alat-alat ini akan membuka banyak peluang karir kreatif.</p>',
            'quizzes' => [
                ['q' => 'Desain grafis bertujuan untuk?', 'a' => 'Komunikasi visual', 'opts' => ['Membuat kode', 'Komunikasi visual', 'Menghitung data']],
                ['q' => 'Warna biru sering diasosiasikan dengan?', 'a' => 'Kepercayaan', 'opts' => ['Kemarahan', 'Kepercayaan', 'Kesedihan']],
                ['q' => 'Software untuk desain vektor adalah?', 'a' => 'Adobe Illustrator', 'opts' => ['Microsoft Word', 'Adobe Illustrator', 'Excel']],
                ['q' => 'Prinsip menyusun elemen agar mudah dibaca disebut?', 'a' => 'Hierarki Visual', 'opts' => ['Hierarki Visual', 'Gradasi', 'Kontras']],
                ['q' => 'Warna primer adalah?', 'a' => 'Merah, Kuning, Biru', 'opts' => ['Merah, Kuning, Biru', 'Hijau, Ungu, Oranye', 'Hitam, Putih, Abu']],
                ['q' => 'Apa itu tipografi?', 'a' => 'Seni memilih huruf', 'opts' => ['Seni melukis', 'Seni memilih huruf', 'Seni memotret']],
                ['q' => 'Logo yang baik sebaiknya?', 'a' => 'Sederhana dan mudah diingat', 'opts' => ['Terlalu banyak warna', 'Sederhana dan mudah diingat', 'Sangat rumit']]
            ]
        ]);
        Material::create(['category_id' => $seni->id, 'judul' => 'Dasar Fotografi & Komposisi', 'gambar' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32',
            'konten' => '<p>Fotografi bukan hanya sekadar menekan tombol jepret, melainkan seni menangkap momen dan emosi. Kunci utama fotografi adalah pencahayaan. Fotografer harus memahami arah cahaya, baik cahaya alami (matahari) maupun buatan (lampu studio), serta bagaimana cahaya membentuk bayangan dan dimensi objek.</p><p>Selain cahaya, komposisi sangat penting. Salah satu aturan komposisi paling terkenal adalah "Rule of Thirds" (Aturan Sepertiga), di mana frame dibagi menjadi 9 bagian grid, dan objek utama diletakkan di titik potong garis grid tersebut agar foto terlihat seimbang dan dinamis.</p><p>Kamera dengan settingan manual (seperti ISO, Shutter Speed, dan Aperture) memberikan kontrol penuh bagi fotografer untuk menghasilkan karya sesuai keinginan. Memahami ketiga segitiga eksposur ini adalah kunci untuk menghasilkan foto yang tajam dan tepat cahaya.</p>',
            'quizzes' => [
                ['q' => 'Aturan komposisi membagi frame menjadi?', 'a' => '9 bagian', 'opts' => ['4 bagian', '9 bagian', '3 bagian']],
                ['q' => 'ISO pada kamera mengatur?', 'a' => 'Kepekaan terhadap cahaya', 'opts' => ['Kecepatan lensa', 'Kepekaan terhadap cahaya', 'Ukuran foto']],
                ['q' => 'Apa itu Aperture?', 'a' => 'Bukaan lensa', 'opts' => ['Bukaan lensa', 'Kecepatan rana', 'Lensa kamera']],
                ['q' => 'Cahaya alami berasal dari?', 'a' => 'Matahari', 'opts' => ['Lampu studio', 'Matahari', 'Flash']],
                ['q' => 'Apa itu Rule of Thirds?', 'a' => 'Teknik komposisi grid', 'opts' => ['Aturan warna', 'Teknik komposisi grid', 'Jenis lensa']],
                ['q' => 'Shutter Speed mengatur?', 'a' => 'Lama cahaya masuk', 'opts' => ['Lama cahaya masuk', 'Lebar lensa', 'Warna foto']],
                ['q' => 'Foto yang baik memiliki?', 'a' => 'Komposisi dan pencahayaan tepat', 'opts' => ['Banyak filter', 'Komposisi dan pencahayaan tepat', 'Resolusi tinggi saja']]
            ]
        ]);
        Material::create(['category_id' => $seni->id, 'judul' => 'Seni Lukis dan Teori Warna', 'gambar' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f',
            'konten' => '<p>Seni lukis adalah salah satu bentuk seni tertua yang menggunakan media cat dan kuas untuk mengekspresikan ide atau emosi di atas kanvas. Dalam melukis, teori warna memegang peranan penting. Warna primer (merah, kuning, biru) dapat dicampur untuk menghasilkan warna sekunder (hijau, oranye, ungu).</p><p>Selain warna, pelukis juga mempertimbangkan tekstur, komposisi, dan pencahayaan (gelap-terang/chiaroscuro) untuk menciptakan kedalaman dan suasana pada lukisan. Terdapat berbagai aliran seni lukis, seperti Realisme yang meniru bentuk nyata, dan Impresionisme yang menekankan kesan cahaya dan warna.</p><p>Melukis tidak hanya soal bakat, tetapi juga latihan terus-menerus dalam mengolah rasa dan teknik. Banyak pelukis besar dunia seperti Leonardo da Vinci, Van Gogh, dan Picasso yang karyanya masih dikagumi hingga kini.</p>',
            'quizzes' => [
                ['q' => 'Warna primer terdiri dari?', 'a' => 'Merah, Kuning, Biru', 'opts' => ['Hijau, Merah, Biru', 'Merah, Kuning, Biru', 'Hitam, Putih, Abu']],
                ['q' => 'Campuran biru dan kuning menghasilkan?', 'a' => 'Hijau', 'opts' => ['Ungu', 'Hijau', 'Oranye']],
                ['q' => 'Aliran seni yang meniru bentuk nyata?', 'a' => 'Realisme', 'opts' => ['Impresionisme', 'Realisme', 'Kubisme']],
                ['q' => 'Media untuk melukis biasanya?', 'a' => 'Kanvas', 'opts' => ['Kertas HVS', 'Kanvas', 'Kaca']],
                ['q' => 'Warna sekunder adalah?', 'a' => 'Hasil campuran warna primer', 'opts' => ['Warna dasar', 'Hasil campuran warna primer', 'Warna gelap']],
                ['q' => 'Aliran yang menekankan kesan cahaya?', 'a' => 'Impresionisme', 'opts' => ['Realisme', 'Impresionisme', 'Naturalisme']],
                ['q' => 'Alat untuk mengoleskan cat?', 'a' => 'Kuas', 'opts' => ['Pensil', 'Kuas', 'Spidol']]
            ]
        ]);
        Material::create(['category_id' => $seni->id, 'judul' => 'Musik: Teori dan Harmoni', 'gambar' => 'https://images.unsplash.com/photo-1511379938547-c1f69419868d',
            'konten' => '<p>Musik adalah seni menyusun suara dalam pola yang teratur. Dasar dari musik barat adalah tangga nada diatonis yang terdiri dari 7 not (Do, Re, Mi, Fa, Sol, La, Si). Jarak antar not disebut interval, yang menentukan melodi sebuah lagu.</p><p>Harmoni terjadi ketika beberapa nada dimainkan bersamaan, membentuk akor (chord). Akor mayor biasanya terdengar ceria, sedangkan akor minor terdengar sedih. Irama (ritme) mengatur panjang-pendeknya nada dan menjadi "detak jantung" dari sebuah musik.</p><p>Memahami teori musik dasar sangat membantu siapa pun yang ingin belajar alat musik (seperti gitar, piano, atau drum), menciptakan lagu, atau sekadar mengapresiasi karya musik dengan lebih mendalam. Musik juga terbukti memiliki efek positif bagi kesehatan mental.</p>',
            'quizzes' => [
                ['q' => 'Berapa jumlah not dalam tangga nada diatonis?', 'a' => '7', 'opts' => ['5', '7', '12']],
                ['q' => 'Nada yang terdengar bersamaan disebut?', 'a' => 'Akor (Chord)', 'opts' => ['Melodi', 'Akor (Chord)', 'Ritme']],
                ['q' => 'Akor mayor biasanya terdengar?', 'a' => 'Ceria', 'opts' => ['Sedih', 'Ceria', 'Menegangkan']],
                ['q' => 'Jarak antar not disebut?', 'a' => 'Interval', 'opts' => ['Interval', 'Harmoni', 'Tempo']],
                ['q' => 'Pengatur kecepatan lagu disebut?', 'a' => 'Tempo', 'opts' => ['Tempo', 'Ritme', 'Nada']],
                ['q' => 'Alat musik berdawai yang dimainkan dengan dipetik?', 'a' => 'Gitar', 'opts' => ['Piano', 'Gitar', 'Drum']],
                ['q' => 'Akor minor biasanya memberi kesan?', 'a' => 'Sedih', 'opts' => ['Ceria', 'Sedih', 'Lucu']]
            ]
        ]);
        Material::create(['category_id' => $seni->id, 'judul' => 'Seni Patung dan Media 3D', 'gambar' => 'https://images.unsplash.com/photo-1577083552431-6e5fd01988a5',
            'konten' => '<p>Seni patung adalah cabang seni rupa tiga dimensi (3D) yang membentuk karya dengan volume dan ruang. Patung dapat dibuat dari berbagai bahan, seperti batu, kayu, logam, tanah liat, atau bahan modern seperti resin dan plastik.</p><p>Teknik pembuatan patung sangat beragam, mulai dari memahat (mengurangi bahan), membutsir (menambah bahan), mencetak (menggunakan cetakan), hingga merakit (menggabungkan berbagai bahan). Salah satu patung paling terkenal di dunia adalah Patung Liberty di Amerika Serikat dan patung David karya Michelangelo.</p><p>Di era digital, seni patung juga berkembang ke ranah virtual dengan adanya seni 3D (3D Art) dan pemodelan 3D menggunakan perangkat lunak komputer untuk keperluan game, film, atau arsitektur.</p>',
            'quizzes' => [
                ['q' => 'Seni patung memiliki dimensi?', 'a' => '3 Dimensi', 'opts' => ['1 Dimensi', '2 Dimensi', '3 Dimensi']],
                ['q' => 'Bahan yang sering dipakai membuat patung?', 'a' => 'Batu dan Kayu', 'opts' => ['Air dan Udara', 'Batu dan Kayu', 'Kertas HVS']],
                ['q' => 'Teknik mengurangi bahan disebut?', 'a' => 'Memahat', 'opts' => ['Membutsir', 'Memahat', 'Mengecat']],
                ['q' => 'Patung David dibuat oleh?', 'a' => 'Michelangelo', 'opts' => ['Picasso', 'Michelangelo', 'Van Gogh']],
                ['q' => 'Seni patung modern bisa menggunakan software?', 'a' => 'Blender', 'opts' => ['Excel', 'Blender', 'Notepad']],
                ['q' => 'Teknik menambah bahan disebut?', 'a' => 'Membutsir', 'opts' => ['Memahat', 'Membutsir', 'Merakit']],
                ['q' => 'Patung Liberty berada di negara?', 'a' => 'Amerika Serikat', 'opts' => ['Prancis', 'Amerika Serikat', 'Inggris']]
            ]
        ]);
        Material::create(['category_id' => $seni->id, 'judul' => 'Sejarah Seni Tari Tradisional', 'gambar' => 'https://images.unsplash.com/photo-1549887534-1541e9326642',
            'konten' => '<p>Seni tari tradisional adalah bentuk ekspresi budaya yang diwariskan dari generasi ke generasi. Di Indonesia, terdapat ribuan tarian tradisional, masing-masing mencerminkan kekayaan budaya daerahnya. Tari tradisional biasanya diiringi oleh musik daerah (gamelan, angklung) dan memiliki kostum serta gerakan yang penuh makna.</p><p>Contoh tari tradisional Indonesia yang terkenal adalah Tari Saman dari Aceh (gerakan tangan yang cepat dan kompak), Tari Kecak dari Bali (paduan suara dan gerakan melingkar), dan Tari Piring dari Sumatera Barat (gerakan dengan piring di tangan).</p><p>Tari tradisional tidak hanya berfungsi sebagai hiburan, tetapi juga sebagai media ritual, penyampaian pesan, dan pelestarian identitas budaya. Melestarikan tari tradisional adalah tanggung jawab bersama agar warisan budaya tidak punah.</p>',
            'quizzes' => [
                ['q' => 'Tari tradisional biasanya diiringi oleh?', 'a' => 'Musik daerah', 'opts' => ['Musik modern', 'Musik daerah', 'Musik elektronik']],
                ['q' => 'Tari Saman berasal dari provinsi?', 'a' => 'Aceh', 'opts' => ['Bali', 'Aceh', 'Jawa']],
                ['q' => 'Tari Kecak berasal dari?', 'a' => 'Bali', 'opts' => ['Sumatera', 'Bali', 'Papua']],
                ['q' => 'Tari Piring menggunakan properti?', 'a' => 'Piring', 'opts' => ['Piring', 'Payung', 'Kipas']],
                ['q' => 'Fungsi tari tradisional selain hiburan?', 'a' => 'Ritual dan budaya', 'opts' => ['Olahraga', 'Ritual dan budaya', 'Perang']],
                ['q' => 'Alat musik pengiring tari tradisional?', 'a' => 'Gamelan', 'opts' => ['Gitar listrik', 'Gamelan', 'Drum set']],
                ['q' => 'Tari tradisional merupakan warisan?', 'a' => 'Budaya', 'opts' => ['Pribadi', 'Budaya', 'Asing']]
            ]
        ]);
    }
}