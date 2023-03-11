<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Butterflies',
            'author' => 'Ale',
            'publisher' => 'Nexterday Publisher',
            'date_of_issue' => 'November 1, 2021',
            'isbn' => '978-6-23-986050-9',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1640765947i/59966545.jpg',
            'premis' => 'Ra yang baik, Tulisan kamu makin cantik tiap bulannya. Gambar-gambar yang kamu buat juga semakin menggemaskan. Tapi, aku masih bertanya-tanya kenapa kamu nggak pernah menulis alamat pengirim. Surat balasanku nggak akan pernah bisa sampai, Ra. Ra, kalau nanti kamu sudah masuk kelas 6 SD, kamu akan belajar tentang struktur surat. Salah satunya, alamat dan tanggal surat, agar pembaca bisa tahu dimana dan kapan penulis menulis surat. Tapi, nggak apa-apa, mungkin suratku bisa sampai ke kamu dengan cara yang tak terduga.',
            'genre' => 'Romance, Fiction',
        ]);
    }
}
