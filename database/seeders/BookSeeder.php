<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title'       => 'Harry Potter and the Philosopher\'s Stone',
            'author'      => 'J.K. Rowling',
            'year'        => 1997,
            'category'    => 'Fantasy',
            'is_featured' => true,
            'description' => 'The first book in the beloved fantasy series.',
        ]);

        Book::create([
            'title'       => 'Harry Potter and the Chamber of Secrets',
            'author'      => 'J.K. Rowling',
            'year'        => 1998,
            'category'    => 'Fantasy',
            'is_featured' => false,
            'description' => 'Second book in the Harry Potter series.',
        ]);

        Book::create([
            'title'       => 'Harry Potter and the Prisoner of Azkaban',
            'author'      => 'J.K. Rowling',
            'year'        => 1999,
            'category'    => 'Fantasy',
            'is_featured' => true,
            'description' => 'Third book in the Harry Potter series.',
        ]);

        Book::create([
            'title'       => 'The Great Gatsby',
            'author'      => 'F. Scott Fitzgerald',
            'year'        => 1925,
            'category'    => 'Classic',
            'is_featured' => true,
            'description' => 'A story of the mysteriously wealthy Jay Gatsby.',
        ]);

        Book::create([
            'title'       => 'To Kill a Mockingbird',
            'author'      => 'Harper Lee',
            'year'        => 1960,
            'category'    => 'Classic',
            'is_featured' => true,
            'description' => 'A story of racial injustice and moral growth.',
        ]);

        Book::create([
            'title'       => '1984',
            'author'      => 'George Orwell',
            'year'        => 1949,
            'category'    => 'Classic',
            'is_featured' => false,
            'description' => 'A dystopian social science fiction novel.',
        ]);

        Book::create([
            'title'       => 'Pride and Prejudice',
            'author'      => 'Jane Austen',
            'year'        => 1813,
            'category'    => 'Romance',
            'is_featured' => true,
            'description' => 'A romantic novel following Elizabeth Bennet.',
        ]);

        Book::create([
            'title'       => 'Jane Eyre',
            'author'      => 'Charlotte Brontë',
            'year'        => 1847,
            'category'    => 'Romance',
            'is_featured' => false,
            'description' => 'A novel about an orphaned girl\'s journey.',
        ]);

        Book::create([
            'title'       => 'Wuthering Heights',
            'author'      => 'Emily Brontë',
            'year'        => 1847,
            'category'    => 'Romance',
            'is_featured' => false,
            'description' => 'A tale of passionate and destructive love.',
        ]);

        Book::create([
            'title'       => 'The Hobbit',
            'author'      => 'J.R.R. Tolkien',
            'year'        => 1937,
            'category'    => 'Fantasy',
            'is_featured' => false,
            'description' => 'A fantasy adventure about Bilbo Baggins.',
        ]);

        Book::create([
            'title'       => 'The Lord of the Rings: The Fellowship of the Ring',
            'author'      => 'J.R.R. Tolkien',
            'year'        => 1954,
            'category'    => 'Fantasy',
            'is_featured' => true,
            'description' => 'First volume of the epic fantasy trilogy.',
        ]);

        Book::create([
            'title'       => 'The Alchemist',
            'author'      => 'Paulo Coelho',
            'year'        => 1988,
            'category'    => 'Classic',
            'is_featured' => false,
            'description' => 'A philosophical novel about following your dreams.',
        ]);

        Book::create([
            'title'       => 'Brave New World',
            'author'      => 'Aldous Huxley',
            'year'        => 1932,
            'category'    => 'Classic',
            'is_featured' => false,
            'description' => 'A dystopian vision of a future society.',
        ]);

        Book::create([
            'title'       => 'The Catcher in the Rye',
            'author'      => 'J.D. Salinger',
            'year'        => 1951,
            'category'    => 'Classic',
            'is_featured' => false,
            'description' => 'A story about teenage alienation and loss of innocence.',
        ]);

        Book::create([
            'title'       => 'Little Women',
            'author'      => 'Louisa May Alcott',
            'year'        => 1868,
            'category'    => 'Romance',
            'is_featured' => false,
            'description' => 'The story of the March sisters growing up.',
        ]);

        Book::create([
            'title'       => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe',
            'author'      => 'C.S. Lewis',
            'year'        => 1950,
            'category'    => 'Fantasy',
            'is_featured' => true,
            'description' => 'A children\'s fantasy novel about four siblings.',
        ]);

        Book::create([
            'title'       => 'Romeo and Juliet',
            'author'      => 'William Shakespeare',
            'year'        => 1597,
            'category'    => 'Classic',
            'is_featured' => true,
            'description' => 'A tragedy about two star-crossed lovers.',
        ]);

        Book::create([
            'title'       => 'The Fault in Our Stars',
            'author'      => 'John Green',
            'year'        => 2012,
            'category'    => 'Romance',
            'is_featured' => false,
            'description' => 'A heartbreaking love story about two cancer patients.',
        ]);

        Book::create([
            'title'       => 'Hakdog',
            'author'      => 'Amor Tonio',
            'year'        => 1982,
            'category'    => 'Classic',
            'is_featured' => true,
            'description' => 'Special book by Amor Tonio.',
        ]);

        Book::create([
            'title'       => 'The Da Vinci Code',
            'author'      => 'Dan Brown',
            'year'        => 2003,
            'category'    => 'Fantasy',
            'is_featured' => false,
            'description' => 'A mystery thriller novel.',
        ]);
    }
}
