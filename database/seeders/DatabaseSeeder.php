<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "applicant_category" => "student",
            "birth" => "2003/02/02",
            "password" => "admin",
            "content_creator" => true
        ]);

        Category::create([
            "category_name" => "HTML",
            "level" => "Basic",
            "description" => "HTML stands for 'Hypertext Markup Language.' It is a programming language used to create and structure the content of web pages. HTML is used to define the structure and appearance of elements on a web page, such as text, images, links, and more.HTML serves as the foundation for most of the web pages we encounter. When you visit a website, a web browser reads and interprets the HTML code to display the web page's content correctly.",
            "slug" => "html"
        ]);
        Category::create([
            "category_name" => "CSS",
            "level" => "Basic",
            "description" => "CSS (Cascading Style Sheets) adalah bahasa pemrograman yang digunakan untuk mengendalikan tampilan dan tata letak elemen-elemen HTML dalam dokumen web. Ini adalah teknologi yang sangat penting dalam pengembangan web, karena memungkinkan pengembang web untuk mengatur gaya, warna, ukuran, posisi, dan banyak aspek tampilan lainnya dari elemen-elemen dalam halaman web.",
            "slug" => "css"
        ]);
        Category::create([
            "category_name" => "Javascript",
            "level" => "Basic & Beginner",
            "description" => "JavaScript is one of the core components in front-end web development. As a programming language executed in the user's web browser, JavaScript enables developers to create interactive and dynamic user experiences. It is an essential tool in web design creativity and the development of better user experiences.",
            "slug" => "javascript"
        ]);
        Category::create([
            "category_name" => "Other",
            "level" => "Basic & Beginner",
            "description" => "other",
            "slug" => "other"
        ]);
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [HTML] - Episode 01 - Apa itu HTML",
            "link" => "https://youtu.be/wriGST3vp5M?si=t9PEq2AcfNzThVR5",
            "description" => "HTML, singkatan dari HyperText Markup Language, adalah bahasa pemrograman standar yang digunakan untuk membuat dan mengatur struktur halaman web. Ini adalah fondasi dari hampir semua situs web yang Anda temui saat menjelajah di internet.
        HTML bekerja dengan menggunakan 'markup' atau 'tag' untuk memberikan instruksi kepada browser web tentang bagaimana struktur halaman harus ditampilkan. Dengan menggunakan serangkaian tag yang disusun dalam dokumen HTML, Anda dapat menentukan elemen-elemen seperti judul, paragraf, gambar, tautan, dan banyak lagi.",
            "maker" => "Kelas Terbuka"
        ]);

        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [HTML] - Episode 04 - Heading dan Paragraph",
            "link" => "https://youtu.be/bd03BfqfOSk?si=3np4_dUMg9_JuiMj",
            "description" => "Heading dan Paragraf adalah dua elemen fundamental dalam bahasa markup HTML yang membentuk struktur dasar dari setiap halaman web. Mereka berfungsi untuk memberikan hierarki dan memisahkan konten, memungkinkan pembaca dan mesin pencari untuk memahami dengan jelas tentang apa yang terdapat pada halaman tersebut.
        Heading, diwakili oleh tag <h1> hingga <h6>, digunakan untuk menandai judul atau sub-judul di dalam dokumen. <h1> mewakili judul utama dan memiliki tingkat prioritas tertinggi, sementara <h6> adalah tingkatan terendah. Dengan menggunakan heading dengan bijak, Anda dapat membuat struktur hierarkis yang memandu pembaca melalui konten Anda dengan jelas.
        Paragraf, diwakili oleh tag <p>, digunakan untuk menata teks dalam bentuk paragraf. Ini adalah elemen dasar untuk menuliskan teks naratif atau deskriptif. Dengan memisahkan teks ke dalam paragraf, Anda mempermudah pembaca untuk memahami dan mencerna informasi dengan lebih baik.",
            "maker" => "Kelas Terbuka"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "CSS Dasar - 2 - Anatomi CSS",
            "link" => "https://youtu.be/8lXDi2Mxp9c?si=TF6Ktwkpmi0a3YLK",
            "description" => "Video CSS Dasar: Anatomi CSS adalah panduan komprehensif yang membongkar struktur dasar dari Cascading Style Sheets (CSS) dalam pengembangan web. Dalam video ini, Anda akan mendalami komponen-komponen esensial yang membentuk bahasa CSS, memungkinkan Anda untuk mengontrol dan mempercantik tata letak dan tampilan dari elemen-elemen HTML pada situs web Anda.
        Anda akan memulai dengan memahami komponen utama dalam sintaks CSS, termasuk selektor, properti, dan nilai. Setiap elemen akan diuraikan dengan jelas untuk memberikan fondasi yang kuat dalam memahami dan menggunakan CSS dengan efektif.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "CSS Dasar - 3 - Penempatan CSS",
            "link" => "https://youtu.be/bnnislprJro?si=0kvEW7_Ncoz8SNvW",
            "description" => "Video CSS Dasar: Penempatan CSS adalah panduan komprehensif yang membahas strategi dan teknik untuk menempatkan elemen pada halaman web menggunakan Cascading Style Sheets (CSS). Dalam video ini, Anda akan mempelajari berbagai metode untuk mengatur dan mengelola posisi elemen secara efektif, sehingga memungkinkan Anda untuk menciptakan tata letak yang terorganisir dan menarik.
        Anda akan memulai dengan memahami konsep dasar seperti box model, yang membentuk dasar dari bagaimana elemen ditampilkan di halaman web. Video ini akan membimbing Anda melalui properti CSS yang memungkinkan penyesuaian presisi terhadap posisi, seperti position, float, dan display.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "CSS Dasar - 4 - Font Styling",
            "link" => "https://youtu.be/nPHed3_oPvY?si=M4A-LzKzM0aLoUUZ",
            "description" => "Video CSS Dasar: Font Styling adalah panduan mendalam yang mengajarkan cara mengelola dan mempercantik teks pada halaman web menggunakan Cascading Style Sheets (CSS). Dalam video ini, Anda akan mempelajari berbagai teknik untuk mengubah jenis, ukuran, warna, dan gaya huruf sehingga dapat memberikan tampilan yang menarik dan profesional pada teks konten.
        Kami akan memulai dengan membahas berbagai properti CSS yang memungkinkan Anda untuk mengontrol penataan teks, termasuk font-family, font-size, dan line-height. Selain itu, Anda akan belajar tentang properti yang memungkinkan Anda untuk menyesuaikan penampilan teks, seperti font-weight, font-style, dan text-decoration.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [HTML] - Episode 05 - Underline, Superscript dan Subscript",
            "link" => "https://youtu.be/F9Joj-lm4T0?si=bHCgwshiSujIS_KF",
            "description" => "Underline (<u>): Tag <u> digunakan untuk memberikan efek garis bawah pada teks. Ini berguna untuk menyorot atau menekankan kata atau frasa tertentu. Misalnya, ketika Anda ingin memberi penekanan khusus pada suatu kata dalam kalimat, Anda dapat menggunakan tag <u>.
        Superscript (<sup>): Tag <sup> digunakan untuk menampilkan teks di atas garis dasar, memberi efek tulisan atas (seperti eksponen dalam notasi matematika). Ini sering digunakan untuk menunjukkan angka pangkat atau simbol yang mengapit, seperti dalam persamaan kimia atau notasi matematika.
        Subscript (<sub>): Tag <sub> digunakan untuk menampilkan teks di bawah garis dasar, memberi efek tulisan bawah. Ini umumnya digunakan untuk menunjukkan indeks atau simbol yang mengapit, seperti dalam persamaan kimia atau notasi matematika.",
            "maker" => "Kelas Terbuka"
        ]);

        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [HTML] - Episode 06 - Line Break dan Horizontal Rule",
            "link" => "https://youtu.be/C3g0-M5Raws?si=T9SQxq3XMZLG6xWx",
            "description" => "Line Break dan Horizontal Rule adalah dua elemen penting dalam bahasa markup HTML yang memungkinkan Anda untuk mengontrol tata letak dan memisahkan konten pada halaman web Anda.
        Line Break (<br>): Tag <br> digunakan untuk membuat jeda baris baru di dalam teks atau konten. Ketika tag ini digunakan, teks atau elemen selanjutnya akan dimulai pada baris berikutnya. Ini berguna untuk memisahkan paragraf atau menata konten dalam cara tertentu, terutama jika Anda ingin membagi informasi menjadi baris-baris terpisah.
        Horizontal Rule (<hr>): Tag <hr> digunakan untuk membuat garis horizontal yang memisahkan konten. Ini memberikan tanda visual yang jelas untuk memisahkan bagian-bagian tertentu dari halaman web Anda. Garis horizontal ini sering digunakan untuk memisahkan bagian header dari konten utama atau untuk menandai peralihan antara topik-topik berbeda.",
            "maker" => "Kelas Terbuka"
        ]);


Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "1 menghubungkan file javascript dan kode pertama",
    "link" => "https://youtu.be/q6uYDRHqY5w?si=3_4G606n6wxzTufG",
    "description" => "Video ini membimbing Anda dalam proses menghubungkan file JavaScript ke halaman web dan menunjukkan langkah pertama dalam menulis kode JavaScript. Anda akan belajar cara menyematkan file JavaScript ke dalam dokumen HTML Anda menggunakan tag <script> dan menulis kode sederhana untuk memastikan koneksi berfungsi.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah, mulai dari menyisipkan file JavaScript eksternal hingga menulis kode pertama Anda. Tutorial ini akan memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
    "maker" => "Sekolah Koding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "2 membuat variabel",
    "link" => "https://youtu.be/9yMqIxTg7VI?si=YeP9JqC4V--ilzf0",
    "description" => "Video ini membahas cara membuat variabel dalam bahasa pemrograman JavaScript. Anda akan mempelajari langkah-langkah dasar untuk mendeklarasikan variabel, memberikan nilai, dan memanfaatkannya dalam skrip JavaScript Anda.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami sintaksis untuk membuat variabel. Tutorial ini memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
    "maker" => "Sekolah koding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "3 tipe data string",
    "link" => "https://youtu.be/yL138EO6Q0w?si=aFo8bfpPV6vyL-KD",
    "description" => "Video ini membahas tipe data string dalam bahasa pemrograman JavaScript. Anda akan memahami apa itu string, bagaimana cara mendefinisikannya, dan berbagai operasi yang dapat dilakukan pada data string, termasuk penggabungan (concatenation), pengindeksan karakter, dan banyak lagi.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami konsep tipe data string dan cara memanipulasinya dalam JavaScript. Tutorial ini memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
    "maker" => "Sekolah koding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "9 metode string",
    "link" => "https://youtu.be/7_hszi4WUtc?si=nynYtVF41mGlLx2v",
    "description" => "Video ini membahas berbagai metode yang dapat digunakan untuk memanipulasi dan memanipulasi data string dalam bahasa pemrograman JavaScript. Anda akan mempelajari sejumlah metode bawaan yang memungkinkan Anda untuk melakukan operasi seperti mencari substring, mengubah kapitalisasi, memotong, dan banyak lagi.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami berbagai metode string yang tersedia dalam JavaScript. Tutorial ini akan memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
    "maker" => "Sekolah Koding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "TUTORIAL JAVASCRIPT OOP (BAHASA INDONESIA)",
    "link" => "https://youtu.be/aviAyIK5oSU?si=syWnAPhbHLcHpMSC",
    "description" => "Video ini adalah tutorial dalam Bahasa Indonesia yang membahas konsep Pemrograman Berorientasi Objek (OOP) dalam bahasa pemrograman JavaScript. Anda akan mempelajari prinsip dasar OOP seperti kelas, objek, properti, dan metode, serta bagaimana mengimplementasikannya dalam JavaScript.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menerapkan konsep OOP dalam JavaScript. Tutorial ini memberikan contoh praktis dan penjelasan terperinci untuk memperkuat pemahaman Anda.",
    "maker" => "Programmer Zaman Now"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "TUTORIAL JAVASCRIPT STANDARD LIBRARY (BAHASA INDONESIA)",
    "link" => "https://youtu.be/oFTeb4Lkwek?si=2AbKK9fjTip-uoxr",
    "description" => "Video ini adalah tutorial dalam Bahasa Indonesia yang membahas Pustaka Standar JavaScript. Anda akan diajarkan berbagai fungsi dan objek yang sudah disediakan oleh JavaScript untuk memudahkan pengembangan aplikasi web, termasuk manipulasi string, operasi matematika, manipulasi array, dan banyak lagi.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menggunakan berbagai bagian dari Pustaka Standar JavaScript. Tutorial ini memberikan contoh praktis dan penjelasan terperinci untuk memperkuat pemahaman Anda.",
    "maker" => "Programmer Zaman Now"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "TUTORIAL JAVASCRIPT DOM (BAHASA INDONESIA)",
    "link" => "https://youtu.be/vaPutSH0sYg?si=smSHa6sQLxFNCURd",
    "description" => "Video ini adalah tutorial dalam Bahasa Indonesia yang membahas DOM (Document Object Model) di JavaScript. Anda akan mempelajari bagaimana DOM memungkinkan interaksi dan manipulasi halaman web secara dinamis, termasuk mengakses elemen, mengubah konten, dan menanggapi peristiwa.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami struktur DOM dan cara menggunakannya untuk memanipulasi elemen halaman web. Tutorial ini memberikan contoh praktis dan penjelasan terperinci untuk memperkuat pemahaman Anda.",
    "maker" => "Programmer Zaman Now"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "TUTORIAL JAVASCRIPT ASYNC (BAHASA INDONESIA)",
    "link" => "https://youtu.be/qwL6ISjbaaE?si=uZYzEymiBliflxHU",
    "description" => "Video ini adalah tutorial dalam Bahasa Indonesia yang membahas konsep asynchronous programming dalam bahasa pemrograman JavaScript. Anda akan mempelajari cara menggunakan asynchrony untuk mengatasi operasi yang membutuhkan waktu, seperti pengambilan data dari server atau operasi I/O.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami cara mengelola asynchronous code dengan menggunakan callback functions, Promises, dan async/await. Tutorial ini memberikan contoh praktis dan penjelasan terperinci untuk memperkuat pemahaman Anda.",
    "maker" => "Programmer Zaman Now"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "Belajar Javascript Pemula - Part#8 Pembuatan PopUp Box Javascript",
    "link" => "https://youtu.be/Y9bBRMeY9Hg?si=lF-HGjYdoxY_MQty",
    "description" => "Video ini adalah bagian ke-8 dari seri 'Belajar Javascript untuk Pemula'. Pada episode ini, Anda akan diajarkan cara membuat PopUp Box menggunakan bahasa pemrograman JavaScript. Anda akan mempelajari langkah-langkah untuk membuat kotak pesan atau jendela pop-up yang muncul di halaman web Anda.
Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami cara menggunakan JavaScript untuk membuat PopUp Box. Tutorial ini memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
    "maker" => "Serverkoding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "Belajar Javascript Pemula - Part#9 Perulangan While Pada Javascript",
    "link" => "https://youtu.be/vpEbsjGqDtY?si=JWlp8Pvtsgdxx8hE",
    "description" => "Video ini adalah bagian ke-9 dari seri 'Belajar Javascript untuk Pemula'. Pada episode ini, Anda akan mempelajari konsep perulangan menggunakan struktur while dalam bahasa pemrograman JavaScript. Anda akan dipandu untuk memahami sintaksis dan cara menggunakan perulangan while untuk menjalankan blok kode secara berulang.
Dalam tutorial ini, Anda akan diberikan contoh konkret dan panduan visual untuk memperkuat pemahaman Anda tentang penggunaan perulangan while di JavaScript. Anda akan belajar cara membuat loop yang akan berjalan selama kondisi tertentu terpenuhi.",
    "maker" => "Serverkoding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "Belajar Javascript Pemula - Part#10 Perulangan For Pada Javascript",
    "link" => "https://youtu.be/SWZvcLwSQ7U?si=FflxrZkc0DVrW5Ye",
    "description" => "Video ini adalah bagian ke-10 dari seri 'Belajar Javascript untuk Pemula'. Pada episode ini, Anda akan mempelajari konsep perulangan menggunakan struktur for dalam bahasa pemrograman JavaScript. Anda akan dipandu untuk memahami sintaksis dan cara menggunakan perulangan for untuk menjalankan blok kode secara berulang.
Dalam tutorial ini, Anda akan diberikan contoh konkret dan panduan visual untuk memperkuat pemahaman Anda tentang penggunaan perulangan for di JavaScript. Anda akan belajar cara membuat loop yang memungkinkan Anda mengatur inisialisasi, kondisi, dan ekspresi terupdate.",
    "maker" => "Serverkoding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "Belajar Javascript Pemula - Part#11 Pengkondisian If Else Javascript",
    "link" => "https://youtu.be/BM1i-FczaWM?si=GEu1XpBFIU-fglYM",
    "description" => "Video ini adalah bagian ke-11 dari seri 'Belajar Javascript untuk Pemula'. Pada episode ini, Anda akan mempelajari konsep pengkondisian menggunakan struktur if-else dalam bahasa pemrograman JavaScript. Anda akan dipandu untuk memahami sintaksis dan cara menggunakan if-else untuk membuat keputusan berdasarkan kondisi tertentu.
Dalam tutorial ini, Anda akan diberikan contoh konkret dan panduan visual untuk memperkuat pemahaman Anda tentang penggunaan pengkondisian if-else di JavaScript. Anda akan belajar cara mengevaluasi kondisi dan menentukan tindakan yang harus diambil berdasarkan hasil evaluasi tersebut.",
    "maker" => "Serverkoding"
]);

Video::create([
    "category_id" => 3,
    "uploader_id" => 1,
    "title" => "Belajar Javascript Pemula - Part#12 Pengkondisian Else If Javascript",
    "link" => "https://youtu.be/yATssN9x1d4?si=azdf-coaCkeKffaI",
    "description" => "Video ini adalah bagian ke-12 dari seri 'Belajar Javascript untuk Pemula'. Pada episode ini, Anda akan memperdalam konsep pengkondisian dengan mempelajari struktur else if dalam bahasa pemrograman JavaScript. Anda akan dipandu untuk memahami sintaksis dan cara menggunakan else if untuk membuat serangkaian pengecekan kondisi yang berbeda.
Dalam tutorial ini, Anda akan diberikan contoh konkret dan panduan visual untuk memperkuat pemahaman Anda tentang penggunaan pengkondisian else if di JavaScript. Anda akan belajar cara mengevaluasi berbagai kondisi dan menentukan tindakan yang harus diambil berdasarkan hasil evaluasi tersebut.",
    "maker" => "Serverkoding"
]);

        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : Table (10/13)",
            "link" => "https://youtu.be/7-QNafrXigs?si=hIYhbAwfYndBei9V",
            "description" => "Elemen table adalah salah satu dari banyak elemen yang penting dalam bahasa markup HTML. Ini memungkinkan pembuat halaman web untuk menyusun dan menampilkan data dalam bentuk tabel terstruktur dengan baris dan kolom. Video 'HTML Dasar: Table' adalah tutorial yang dirancang untuk memberikan pemahaman mendalam tentang cara membuat dan mengelola tabel dalam bahasa markup HTML. Tutorial ini akan membimbing Anda melalui langkah-langkah dasar dalam membuat tabel dengan HTML, memungkinkan Anda untuk menyusun dan menampilkan data dalam format yang terstruktur.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : Table Merging (11/13)",
            "link" => "https://youtu.be/qs8G2XWf7Yk?si=2WBkikuse4y85s-P",
            "description" => "Video 'HTML Dasar: Table Merging' adalah tutorial lanjutan yang membahas teknik-teknik khusus untuk menggabungkan sel-sel dalam tabel menggunakan bahasa markup HTML. Dalam video ini, Anda akan mempelajari cara mengubah tata letak tabel dengan menggabungkan sel-sel untuk menciptakan struktur yang lebih kompleks dan terorganisir.
        Tutorial ini akan membimbing Anda melalui penggunaan atribut '<rowspan>' dan '<colspan>', yang memungkinkan Anda untuk menggabungkan sel-sel secara vertikal dan horizontal, memungkinkan untuk tata letak yang lebih kompleks dan efisien. Anda juga akan memahami cara memanfaatkan atribut-atribut ini dengan bijak untuk menyesuaikan tabel sesuai dengan kebutuhan spesifik Anda.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : Form (12/13)",
            "link" => "https://youtu.be/LQf_Jj7jbCI?si=PhFVXnNfLufoJNLu",
            "description" => "Video 'HTML Dasar: Form' adalah tutorial yang membahas penggunaan elemen form dalam bahasa markup HTML. Tutorial ini dirancang untuk memberikan pemahaman mendalam tentang cara membuat formulir interaktif yang memungkinkan pengguna untuk mengirimkan data ke server.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Sesi 1 -  Belajar Web Styling CSS Dari 0 Untuk Pemula Dalam 1 JAM",
            "link" => "https://youtu.be/71a2zeC71gk?si=gJwFosVcT4-9PS_S",
            "description" => "Video Belajar Web Styling CSS Dari 0 Untuk Pemula Dalam 1 JAM adalah peluang sempurna bagi pemula untuk memahami dasar-dasar styling web menggunakan bahasa pemrograman CSS. Dalam satu jam intensif, kursus ini akan membimbing Anda melalui langkah-langkah mendasar untuk membuat tata letak dan desain yang menarik untuk situs web Anda.",
            "maker" => "Dea Afrizal"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | Mengenal Properti dan Selektor Dasar CSS",
            "link" => "https://youtu.be/8NpcAcSmRU8?si=A4lLA9G9i_AThXxJ",
            "description" => "Video ini adalah panduan komprehensif untuk pemula yang ingin memulai perjalanan mereka dalam pengembangan web dengan HTML dan CSS. Fokus dari video ini adalah memperkenalkan Anda pada properti dan selektor dasar dalam CSS, yang memungkinkan Anda untuk mengubah tampilan dan gaya elemen HTML.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami berbagai properti CSS seperti warna, font, ukuran, dan tata letak. Anda juga akan belajar tentang selektor dasar untuk menargetkan elemen tertentu di halaman web Anda.
        Video ini memberikan contoh praktis dan ilustrasi visual untuk memperkuat pemahaman Anda tentang penggunaan CSS. Dengan mengikuti tutorial ini, Anda akan dapat meningkatkan penampilan dan presentasi dari halaman web Anda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dari Nol Sampai Mahir | Untuk Pemula | Tag Mark Pada HTML",
            "link" => "https://youtu.be/gHusXyPkDtM?si=3ml5aL4d_9f4lsDF",
            "description" => "Video ini merupakan bagian dari seri tutorial 'Belajar HTML Dari Nol Sampai Mahir' yang dirancang khusus untuk pemula yang ingin memahami dasar-dasar HTML dan mengembangkan keterampilan dalam pengkodean web. Fokus dari video ini adalah memberikan pemahaman mendalam mengenai penggunaan tag 'mark' dalam HTML.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan mengimplementasikan tag HTML 'mark' untuk menandai dan memberi penekanan pada teks penting atau istimewa pada halaman web Anda. Anda akan belajar cara menggunakan tag 'mark' untuk membuat teks berbeda secara visual, menyoroti informasi kunci bagi pengguna.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dari Nol Sampai Mahir Untuk Pemula | Tag ABBR Membuat Singkatan Pada HTML",
            "link" => "https://youtu.be/oOaFIey2-bQ?si=lb5wNLZTLNg15AtF",
            "description" => "Video ini merupakan bagian dari serangkaian tutorial 'Belajar HTML Dari Nol Sampai Mahi' yang dirancang khusus untuk pemula yang ingin memahami dasar-dasar HTML dan mengembangkan keterampilan dalam pengkodean web. Fokus dari video ini adalah penggunaan tag 'ABBR' dalam HTML untuk membuat singkatan atau akronim pada halaman web Anda.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan mengimplementasikan tag HTML 'ABBR' untuk memberikan definisi atau ekspansi dari singkatan yang digunakan dalam konten Anda. Anda akan belajar cara menggunakan tag ini untuk memberikan klarifikasi bagi pengguna terkait dengan arti dari singkatan yang mungkin kurang familiar.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dari Nol Sampai Mahir Untuk Pemula | HTML Entity | Membuat Copyright di html",
            "link" => "https://youtu.be/EHiGPJnz-zY?si=S-hB1PZjGYd4-6fz",
            "description" => "Video ini adalah bagian penting dari seri tutorial 'Belajar HTML Dari Nol Sampai Mahir' yang khusus dirancang untuk pemula yang ingin memahami dasar-dasar HTML dan memperluas keterampilan dalam pengkodean web. Fokus dari video ini adalah penggunaan HTML Entity untuk menyisipkan simbol khusus, seperti tanda hak cipta (©), ke dalam halaman web Anda.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami konsep HTML Entity dan cara menggunakannya untuk menampilkan karakter khusus secara tepat dalam dokumen HTML Anda. Anda akan belajar bagaimana menyertakan simbol hak cipta untuk menunjukkan kepemilikan intelektual atau hak cipta pada konten Anda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dari Nol Sampai Mahir | Untuk Pemula | Tag Small",
            "link" => "https://youtu.be/fMyFZ-fGvUE?si=6l7OMIdkysdliwaI",
            "description" => "Video ini adalah bagian dari serangkaian tutorial 'Belajar HTML Dari Nol Sampai Mahir', dirancang khusus untuk pemula yang ingin menguasai dasar-dasar HTML dan memperluas kemampuan dalam pengembangan web. Fokus dari video ini adalah tag HTML 'small', yang digunakan untuk menunjukkan teks dengan ukuran font yang lebih kecil.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menerapkan tag 'small' dalam HTML. Anda akan belajar cara menggunakan tag ini untuk menurunkan ukuran font pada teks tertentu, memberikan penekanan atau detail tambahan pada konten Anda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dari Nol Sampai Mahir | Untuk Pemula | List Element",
            "link" => "https://youtu.be/Y379HgKK-9I?si=t0p5Q7co2j9Ze-mj",
            "description" => "Video ini merupakan bagian penting dari seri tutorial 'Belajar HTML Dari Nol Sampai Mahir', khusus dirancang untuk pemula yang ingin memahami dasar-dasar HTML dan memperluas kemampuan dalam pengembangan web. Pada video ini, fokusnya adalah pada elemen daftar (List Element) dalam HTML.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menerapkan elemen daftar seperti <ul> (Unordered List) untuk membuat daftar tak terurut dan <ol> (Ordered List) untuk membuat daftar terurut. Anda juga akan belajar cara menambahkan elemen <li> (List Item) untuk mengisi konten dari setiap elemen daftar.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : Image (9/13)",
            "link" => "https://youtu.be/yb_emYhY3Pc?si=H2LIvMsP9ZWvoqQt",
            "description" => "Video ini merupakan bagian dari seri tutorial mengenai dasar-dasar HTML, dengan fokus pada penanganan gambar atau elemen <img>. Dalam tutorial ini, Anda akan diajarkan cara menyisipkan dan menampilkan gambar dalam dokumen HTML Anda.
        Anda akan mempelajari cara menggunakan tag <img> berserta atribut-atributnya, seperti src (sumber gambar), alt (teks alternatif), dan width/height (lebar/tinggi). Tutorial ini juga akan membahas praktik terbaik dalam pengoptimalan gambar untuk kecepatan dan responsifitas situs web.",
            "maker" => "Web Programming Unpas"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : List (7/13)",
            "link" => "https://youtu.be/gLHEoeupIZs?si=Yw2f9twLuBCTh17_",
            "description" => "Video ini adalah bagian dari seri tutorial mengenai dasar-dasar HTML, dengan fokus pada penggunaan elemen daftar. Dalam tutorial ini, Anda akan mempelajari cara membuat dan mengelola daftar di dalam dokumen HTML Anda.
        Tutorial ini akan membahas elemen <ul> untuk daftar tak terurut (Unordered List), <ol> untuk daftar terurut (Ordered List), dan <li> untuk setiap elemen dalam daftar. Anda akan belajar cara menyusun dan mengubah struktur daftar sesuai kebutuhan.",
            "maker" => "Web Programming Unpas"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : Hyperlink (8/13)",
            "link" => "https://youtu.be/QIlBOI-hTuA?si=Y3t3vQ93JIWS24wd",
            "description" => "Video ini merupakan bagian dari seri tutorial mengenai dasar-dasar HTML, dengan fokus pada penggunaan hyperlink atau tautan. Dalam tutorial ini, Anda akan mempelajari cara membuat dan mengelola tautan ke halaman atau sumber lain di dalam dokumen HTML Anda.
        Anda akan belajar cara menggunakan tag <a> berserta atribut-atributnya seperti href (URL tujuan), target (pilihan pembukaan tautan), dan text (teks tautan yang terlihat). Tutorial ini juga akan mencakup cara membuat tautan ke bagian tertentu dalam halaman yang sama (anchor links).",
            "maker" => "Web Programming Unpas"
        ]);
        
        Video::create([
            "category_id" => 1,
            "uploader_id" => 1,
            "title" => "HTML Dasar : Heading (6/13)",
            "link" => "https://youtu.be/SMetRBdIh-8?si=JKiZZrOxKZ2r2ulC",
            "description" => "Video ini merupakan bagian dari seri tutorial mengenai dasar-dasar HTML, dengan fokus pada penggunaan elemen heading atau judul. Dalam tutorial ini, Anda akan mempelajari cara menggunakan tag <h1> hingga <h6> untuk menandai tingkatan penting dalam dokumen HTML Anda.
        Anda akan belajar cara memilih dan menata judul-judul dengan benar, serta mengenali perbedaan antara heading dari level satu hingga level enam. Tutorial ini juga akan membahas praktik terbaik dalam penggunaan judul untuk memperbaiki struktur dan navigasi konten web Anda.",
            "maker" => "Web Programming Unpas"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | Group Selector Pada CSS",
            "link" => "https://youtu.be/_ryPm4FGwus?si=Vey9i3WLhOl6VULo",
            "description" => "Video ini adalah bagian penting dari seri tutorial 'Belajar HTML Dan CSS Dari Nol Untuk Pemula'. Fokus dari video ini adalah memperkenalkan konsep Group Selector dalam CSS, yang memungkinkan Anda untuk menggabungkan dan menerapkan gaya kepada beberapa elemen secara bersamaan.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami cara menggunakan Group Selector untuk menyederhanakan dan mengoptimalkan kode CSS Anda. Anda akan belajar bagaimana mengelompokkan elemen dengan tag, kelas, atau ID yang sama, sehingga memungkinkan Anda untuk menerapkan gaya secara efisien.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | Elemen Spesifik Selector Pada CSS",
            "link" => "https://youtu.be/PK8LfL39vAw?si=HE-vThD5UtTZueSR",
            "description" => "Video ini adalah bagian penting dari seri tutorial 'Belajar HTML Dan CSS Dari Nol Untuk Pemula'. Fokus dari video ini adalah memperkenalkan konsep Elemen Spesifik Selector dalam CSS, yang memungkinkan Anda untuk menargetkan dan mengubah gaya elemen tertentu di halaman web Anda.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami cara menggunakan Elemen Spesifik Selector untuk menyesuaikan gaya dan tata letak dari elemen khusus dalam dokumen HTML Anda. Anda akan belajar bagaimana menentukan elemen dengan tag, kelas, atau ID tertentu, sehingga memungkinkan Anda untuk menerapkan gaya secara spesifik.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | Cara Mengubah Warna Dan Gaya Link Saat di Hover",
            "link" => "https://youtu.be/dNBpp3MYvVs?si=X6kxC694xObtQU7i",
            "description" => "Video ini adalah bagian penting dari seri tutorial 'Belajar HTML Dan CSS Dari Nol Untuk Pemula'. Fokus dari video ini adalah mempelajari cara mengubah warna dan gaya dari tautan (link) ketika pengguna mengarahkan kursor mouse ke atasnya (hover) menggunakan CSS.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami cara menerapkan gaya pada tautan saat di hover. Anda akan belajar cara menggunakan pseudo-class :hover dan menyesuaikan properti seperti warna, font, atau tata letak untuk menciptakan interaksi yang menarik.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | CSS Font Family Property: Mengubah Jenis Huruf Teks",
            "link" => "https://youtu.be/U_PPCMbkv90?si=3YmmoAnTK45FoH8F",
            "description" => "Video ini adalah bagian penting dari seri tutorial 'Belajar HTML Dan CSS Dari Nol Untuk Pemula'. Fokus dari video ini adalah mempelajari cara mengubah jenis huruf atau font dari teks menggunakan properti CSS 'font-family'.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menerapkan properti 'font-family' untuk mengubah tampilan dan gaya huruf pada halaman web Anda. Anda akan belajar cara memilih jenis huruf yang sesuai dengan desain dan tujuan dari konten Anda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | Tutorial Membuat Garis Bawah pada Teks Menggunakan CSS",
            "link" => "https://youtu.be/wLx5tamquzc?si=lkZ0u7ULicTPTi7m",
            "description" => "Video ini merupakan bagian integral dari seri tutorial 'Belajar HTML Dan CSS Dari Nol Untuk Pemula'. Fokus dari video ini adalah memandu Anda dalam membuat garis bawah pada teks menggunakan CSS, untuk memberikan penekanan visual dan mempercantik tampilan halaman web Anda.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menerapkan properti CSS untuk membuat garis bawah pada teks. Anda akan belajar cara menggunakan properti 'text-decoration' untuk menciptakan efek garis bawah yang elegan dan berbeda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Tutorial CSS - Mengubah Huruf Teks Menjadi Kapital dengan Text Transform",
            "link" => "https://youtu.be/_byPL8ojgc4?si=uZPJoQwAKNQHqILh",
            "description" => "Video ini merupakan tutorial yang membahas penggunaan properti CSS 'text-transform' untuk mengubah huruf teks menjadi kapital. Dalam video ini, Anda akan belajar cara menggunakan properti ini untuk memodifikasi tampilan teks pada halaman web Anda.
        Tutorial ini akan membimbing Anda langkah demi langkah dalam memahami dan menerapkan properti 'text-transform' dalam CSS. Anda akan memahami berbagai nilai seperti uppercase (huruf kapital), lowercase (huruf kecil), dan capitalize (huruf awal kalimat kapital).",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar CSS: Cara Mengatur Perataan Teks dan Tulisan di CSS Dengan Mudah | Property Text Align",
            "link" => "https://youtu.be/L7jneRWa1nE?si=iNYpmKYq4fX75ec9",
            "description" => "Video ini adalah tutorial yang membahas cara mengatur perataan teks dan tulisan di CSS dengan menggunakan properti 'text-align'. Dalam video ini, Anda akan mempelajari cara memanfaatkan properti ini untuk mengubah tata letak dan perataan teks pada halaman web Anda.
        Tutorial ini akan membimbing Anda langkah demi langkah dalam memahami dan menerapkan properti 'text-align' dalam CSS. Anda akan belajar cara mengatur teks menjadi rata kiri, tengah, kanan, atau rata blok (justify) sesuai dengan preferensi desain Anda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Cara Mengatur Spasi Antar Baris Pada Text Menggunakan Line Height di CSS",
            "link" => "https://youtu.be/mufwJm6DETA?si=q1eH-klPoSCmIpiV",
            "description" => "Video ini adalah panduan praktis tentang cara mengatur spasi antar baris pada teks menggunakan properti CSS 'line-height'. Dalam tutorial ini, Anda akan mempelajari cara memanfaatkan properti ini untuk mengatur jarak antara baris pada teks di halaman web Anda.
        Tutorial ini akan membimbing Anda langkah demi langkah dalam memahami dan menerapkan properti 'line-height' dalam CSS. Anda akan belajar cara menyesuaikan spasi antar baris untuk mencapai tata letak teks yang optimal dan mudah dibaca.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar HTML Dan CSS Dari Nol Untuk Pemula | Dimensi Pada CSS Cara Menentukan Lebar dan Tinggi CSS",
            "link" => "https://youtu.be/9fDtuY0SqFY?si=w3EOhhMxVT1ODiEo",
            "description" => "Video ini adalah bagian penting dari seri tutorial 'Belajar HTML Dan CSS Dari Nol Untuk Pemula'. Fokus dari video ini adalah memandu Anda dalam cara menentukan dimensi, yaitu lebar (width) dan tinggi (height), menggunakan CSS untuk elemen halaman web Anda.
        Dalam tutorial ini, Anda akan dipandu langkah demi langkah dalam memahami dan menerapkan properti CSS untuk mengatur dimensi dari elemen-elemen pada halaman web. Anda akan belajar cara menyesuaikan lebar dan tinggi dengan presisi, sehingga dapat mencapai tata letak yang sesuai dengan desain Anda.",
            "maker" => "Kelas Komputer Online"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [CSS] - Episode 23 - Lists Style",
            "link" => "https://youtu.be/aanpEgDI-6g?si=0f5uiapwdm3AVanH",
            "description" => "Episode ini dari seri Belajar Web Dasar [CSS]' fokus pada gaya dan penataan elemen daftar (lists) menggunakan CSS. Anda akan diajarkan berbagai teknik untuk memodifikasi tampilan daftar, termasuk pengaturan simbol, spasi antar elemen, dan gaya penomoran.
        Dalam video ini, Anda akan dipandu langkah demi langkah dalam memahami cara menggunakan CSS untuk mengubah dan memperindah tampilan elemen daftar pada halaman web Anda. Tutorial ini akan memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
            "maker" => "Kelas Terbuka"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [CSS] - Episode 24 - Table Style",
            "link" => "https://youtu.be/Ds4Aru39rak?si=Xo4Dm0485o9Uo3n4",
            "description" => "Pada episode ini dari seri 'Belajar Web Dasar [CSS]', Anda akan mempelajari cara mengubah gaya dan penataan dari tabel menggunakan CSS. Tutorial ini akan membimbing Anda melalui berbagai teknik untuk memodifikasi tampilan tabel, termasuk mengubah warna latar belakang, mengatur border, dan mengubah font.
        Dalam video ini, Anda akan dipandu langkah demi langkah dalam memahami cara menggunakan CSS untuk mengkustomisasi dan memperindah tampilan tabel pada halaman web Anda. Tutorial ini akan memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
            "maker" => "Kelas Terbuka"
        ]);
        
        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "Belajar Web Dasar [CSS] - Episode 25.5 - Images Style",
            "link" => "https://youtu.be/sO4AupmNzX0?si=oqh_WdA-LwHrobMJ",
            "description" => "Pada episode khusus ini dari seri 'Belajar Web Dasar [CSS]'', Anda akan diajarkan cara mengubah dan mempercantik tampilan gambar menggunakan CSS. Tutorial ini akan memberikan wawasan tentang berbagai teknik untuk mengatur ukuran, memodifikasi efek hover, dan menyesuaikan tata letak gambar.
        Dalam video ini, Anda akan dipandu langkah demi langkah dalam memahami cara menggunakan CSS untuk mengkustomisasi tampilan gambar pada halaman web Anda. Tutorial ini akan memberikan contoh praktis dan panduan visual untuk memperkuat pemahaman Anda.",
            "maker" => "Kelas Terbuka"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "SESI2 - HTML CSS JS (Implementasi Logika Sederhana)",
            "link" => "https://youtu.be/Mb6Np6QURDY?si=tTwuynefju9Ra1WB",
            "description" => "Tutorial HTML CSS JS (Implementasi Logika Sederhana) adalah panduan praktis untuk mempelajari dasar-dasar pengembangan web dengan menggunakan HTML, CSS, dan JavaScript. Dengan fokus pada implementasi logika sederhana, kursus ini memungkinkan Anda untuk memahami bagaimana ketiga bahasa ini dapat bekerja bersama untuk menciptakan pengalaman web yang menarik dan fungsional.
        Kami akan memulai dengan membangun fondasi Anda dalam HTML, memungkinkan Anda untuk membuat struktur dasar dari halaman web. Kemudian, kami akan membimbing Anda dalam penerapan gaya dan tata letak dengan menggunakan CSS, memberikan situs web Anda tampilan yang menarik dan profesional.",
            "maker" => "Dea Afrizal"
        ]);

        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "CSS Dasar - 1 - Pendahuluan",
            "link" => "https://youtu.be/CleFk3BZB3g?si=F0As6H8AQIn2dj61",
            "description" => "Video tutorial CSS Dasar: Pendahuluan adalah langkah pertama yang sempurna bagi siapa pun yang ingin memahami dasar-dasar Cascading Style Sheets (CSS) dalam pengembangan web. Dalam video ini, Anda akan diperkenalkan dengan bahasa yang memungkinkan Anda mengontrol tampilan dan tata letak dari elemen-elemen HTML pada situs web Anda.
        Kami akan memulai dengan memberikan pemahaman mendalam tentang apa itu CSS dan bagaimana ia berinteraksi dengan HTML. Anda akan belajar tentang sintaks dasar, selektor, dan properti CSS yang umum digunakan. Selain itu, video ini akan membimbing Anda melalui prinsip-prinsip desain yang baik dan praktik terbaik dalam penggunaan CSS.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "ARRAY pada JAVASCRIPT : SLICE & SPLICE",
            "link" => "https://www.youtube.com/watch?v=9aMb10KJhsk",
            "description" => "Video 'ARRAY pada JavaScript: Metode Slice & Splice' adalah tutorial yang fokus pada dua metode krusial untuk memanipulasi array dalam bahasa pemrograman JavaScript. Metode Slice dan Splice memungkinkan Anda untuk memotong atau memodifikasi array sesuai dengan kebutuhan spesifik Anda.",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "ARRAY pada JAVASCRIPT : FOREACH & MAP",
            "link" => "https://www.youtube.com/watch?v=PUiEP7PBfh0",
            "description" => "Video 'ARRAY pada JavaScript: Metode ForEach & Map' adalah tutorial yang memfokuskan pada dua metode penting untuk memanipulasi array dalam bahasa pemrograman JavaScript. Metode ForEach dan Map memungkinkan Anda untuk melakukan operasi pada setiap elemen dalam array, dengan cara yang berbeda.",
            "maker" => "Web Programming UNPAS"
        ]);


        Video::create([
            "category_id" => 2,
            "uploader_id" => 1,
            "title" => "CSS Dasar - 5 - Text Styling",
            "link" => "https://youtu.be/xih8giA7S3Q?si=E5rXyXcY3etfyFuS",
            "description" => "Video CSS Dasar: Text Styling adalah panduan komprehensif yang mengajarkan cara memanipulasi dan mempercantik teks pada halaman web menggunakan Cascading Style Sheets (CSS). Dalam video ini, Anda akan mempelajari berbagai teknik untuk mengubah tampilan, gaya, dan ukuran teks sehingga dapat menciptakan konten yang menarik dan mudah dibaca.
        Kami akan memulai dengan memperkenalkan Anda pada properti CSS penting untuk mengelola penataan teks, termasuk font-family, font-size, dan line-height. Selain itu, Anda akan belajar cara menyesuaikan penampilan teks seperti bolding (penebalan), italicizing (pengmiringan), dan underlining (penggarisan).",
            "maker" => "Web Programming UNPAS"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "Belajar Dasar Pemrograman Javascript 1 Jam",
            "link" => "https://youtu.be/mD6uSGSjgr4?si=zWw2rjIvw0e5HUMG",
            "description" => "Video 'Belajar Dasar Pemrograman Javascript dalam 1 Jam' adalah kursus singkat yang dirancang untuk memberikan pengantar cepat dan efektif tentang bahasa pemrograman JavaScript. Dalam video ini, Anda akan diajak untuk memahami dasar-dasar JavaScript, termasuk sintaks dasar, variabel, tipe data, operasi, dan struktur kontrol.
        video ini disusun dengan metode yang mudah diikuti, memungkinkan pemula untuk memahami konsep-konsep fundamental dalam JavaScript dalam waktu singkat. Anda akan melihat contoh-contoh praktis dan latihan sederhana yang membantu memperkuat pemahaman Anda.",
            "maker" => "Dea Afrizal"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "Belajar Dasar Pemrograman Javascript - DOM",
            "link" => "https://youtu.be/Y8wDTG7qjuA?si=TV1gQlyIn988_RsC",
            "description" => "Video 'Belajar Dasar Pemrograman Javascript - DOM' adalah tutorial yang fokus pada memahami dan memanipulasi DOM (Document Object Model) menggunakan bahasa pemrograman JavaScript. DOM adalah representasi struktur dokumen HTML atau XML di dalam browser, yang memungkinkan Anda untuk berinteraksi dengan elemen-elemen pada halaman web.",
            "maker" => "Dea Afrizal"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "Belajar Dasar Pemrograman Javascript - Array",
            "link" => "https://youtu.be/LzfFoGuk_M0?si=IBzVeLDBw1EYn3Zz",
            "description" => "Video 'Belajar Dasar Pemrograman JavaScript - Array' adalah tutorial yang difokuskan pada pemahaman dan penggunaan struktur data penting dalam JavaScript, yaitu Array. Array adalah kumpulan elemen yang dapat menyimpan berbagai jenis data dan memungkinkan akses yang mudah ke setiap elemennya.",
            "maker" => "Dea Afrizal"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "Belajar Dasar Pemrograman Javascript - Function",
            "link" => "https://youtu.be/YGU2trDhR4o?si=YSxPSJG2d05WKrcQ",
            "description" => "Video 'Belajar Dasar Pemrograman JavaScript - Function' adalah tutorial yang difokuskan pada konsep fundamental dalam pemrograman JavaScript, yaitu function (fungsi). Function adalah blok kode yang dapat digunakan kembali untuk melakukan tugas tertentu atau menghitung nilai.",
            "maker" => "Dea Afrizal"
        ]);

        Video::create([
            "category_id" => 3,
            "uploader_id" => 1,
            "title" => "Belajar Dasar Pemrograman Javascript - Looping",
            "link" => "https://youtu.be/i0PouKa61bg?si=v46nM9kkOSjQh0CJ",
            "description" => "Video 'Belajar Dasar Pemrograman JavaScript - Looping' adalah tutorial yang fokus pada konsep pengulangan atau looping dalam bahasa pemrograman JavaScript. Pengulangan adalah cara yang efektif untuk mengeksekusi serangkaian pernyataan atau tugas berulang kali, berdasarkan kondisi atau selama kondisi tertentu terpenuhi.",
            "maker" => "Dea Afrizal"
        ]);
    }
}
