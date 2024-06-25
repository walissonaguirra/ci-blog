<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Post extends Seeder
{
    public function run()
    {
        $data = [
            ['title' => 'In Search of Lost Time', 'slug' => mb_strtolower(mb_url_title('In Search of Lost Time')), 'content' => 'Marcel Proust'],
            ['title' => 'Ulysses', 'slug' => mb_strtolower(mb_url_title('Ulysses')), 'content' => 'James Joyce'],
            ['title' => 'Don Quixote', 'slug' => mb_strtolower(mb_url_title('Don Quixote')), 'content' => 'Miguel de Cervantes'],
            ['title' => 'One Hundred Years of Solitude', 'slug' => mb_strtolower(mb_url_title('One Hundred Years of Solitude')), 'content' => 'Gabriel Garcia Marquez'],
            ['title' => 'The Great Gatsby', 'slug' => mb_strtolower(mb_url_title('The Great Gatsby')), 'content' => 'F. Scott Fitzgerald'],
            ['title' => 'Moby Dick', 'slug' => mb_strtolower(mb_url_title('Moby Dick')), 'content' => 'Herman Melville'],
            ['title' => 'War and Peace', 'slug' => mb_strtolower(mb_url_title('War and Peace')), 'content' => 'Leo Tolstoy'],
            ['title' => 'Hamlet', 'slug' => mb_strtolower(mb_url_title('Hamlet')), 'content' => 'William Shakespeare'],
            ['title' => 'The Odyssey', 'slug' => mb_strtolower(mb_url_title('The Odyssey')), 'content' => 'Homer'],
            ['title' => 'Madame Bovary', 'slug' => mb_strtolower(mb_url_title('Madame Bovary')), 'content' => 'Gustave Flaubert'],
            ['title' => 'Winnie the Pooh', 'slug' => mb_strtolower(mb_url_title('Winnie the Pooh')), 'content' => 'A.A. Milne'],
        ];

        $post = new \App\Models\Post();
        $post->insertBatch($data);
    }
}
