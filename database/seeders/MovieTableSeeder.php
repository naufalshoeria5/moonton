<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = [
            [
                'name'              => 'The Shawshank Redemption',
                'slug'              => 'the-shahshank-redemption',
                'category'          => 'Drama',
                'video_url'         => 'https://www.youtube.com/watch?v=DwFTfVKxjBc',
                'thumbnail'         => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fimage&psig=AOvVaw21LK-0Vk5L9wTDmWHtFX-I&ust=1678869242914000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIi-p7iB2_0CFQAAAAAdAAAAABAE',
                'rating'            => 9.4,
                'is_featured'       => 1
            ],
            [
                'name'              => 'The Shawshank Update',
                'slug'              => 'the-shahshank-update',
                'category'          => 'Comendy',
                'video_url'         => 'https://www.youtube.com/watch?v=DwFTfVKxjBc',
                'thumbnail'         => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fimage&psig=AOvVaw21LK-0Vk5L9wTDmWHtFX-I&ust=1678869242914000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIi-p7iB2_0CFQAAAAAdAAAAABAE',
                'rating'            => 6.4,
                'is_featured'       => 1
            ],
            [
                'name'              => 'The a',
                'slug'              => 'the-shahshank-redemption',
                'category'          => 'Drama',
                'video_url'         => 'https://www.youtube.com/watch?v=DwFTfVKxjBc',
                'thumbnail'         => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fimage&psig=AOvVaw21LK-0Vk5L9wTDmWHtFX-I&ust=1678869242914000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIi-p7iB2_0CFQAAAAAdAAAAABAE',
                'rating'            => 9.4,
                'is_featured'       => 0
            ],
            [
                'name'              => 'The b',
                'slug'              => 'the-shahshank-update',
                'category'          => 'Comendy',
                'video_url'         => 'https://www.youtube.com/watch?v=DwFTfVKxjBc',
                'thumbnail'         => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fimage&psig=AOvVaw21LK-0Vk5L9wTDmWHtFX-I&ust=1678869242914000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIi-p7iB2_0CFQAAAAAdAAAAABAE',
                'rating'            => 6.4,
                'is_featured'       => 1
            ]
        ];

        Movie::insert($movie);
    }
}
