<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Group::class, 3)->create();

        factory(App\Level::class)->create(['name' => 'Oro']);
        factory(App\Level::class)->create(['name' => 'Plata']);
        factory(App\Level::class)->create(['name' => 'Bronze']);

        factory(App\User::class, 5)->create()->each(function ($user) {

            /* crear perfil y asociarlo al usuario*/
            $profile = $user->profile()->save(factory(App\Profile::class)->make());

            /* asociamos una localizacion al perfil de usuario */
            $profile->location()->save(factory(App\Location::class)->make());

            /* asociar el usuario a grupos */
            $user->groups()->attach($this->array(rand(1, 3)));

            /* setear una imagen al usuario Imagen */
            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'https://lorempixel.com/90/90/'
            ]));
        });

        factory(App\Category::class, 4)->create();

        factory(App\Tag::class, 12)->create();

        factory(App\Post::class, 40)->create()->each(function ($post) {
            /* asocioamos una imagen al post */
            $post->image()->save(factory(App\Image::class)->make());

            /* asociamos etiquetas a la publicacion */
            $post->tags()->attach($this->array(rand(1, 12)));

            /* añadimos comentarios a la publicacion */
            $number_comments = rand(1, 6);
            for ($i = 0; $i < $number_comments; $i++) {
                $post->comments()->save(factory(App\Comment::class)->make());
            }
        });

        factory(App\Video::class, 40)->create()->each(function ($video) {
            /* asocioamos una imagen al video */
            $video->image()->save(factory(App\Image::class)->make());

            /* asociamos etiquetas a la publicacion */
            $video->tags()->attach($this->array(rand(1, 12)));

            /* añadimos comentarios a la pubblicacion */
            $number_comments = rand(1, 6);
            for ($i = 0; $i < $number_comments; $i++) {
                $video->comments()->save(factory(App\Comment::class)->make());
            }
        });
    }

    public function array($max)
    {
        $array = [];

        for ($i = 1; $i < $max; $i++) {
            $array = $i;
        }

        return $array;
    }
}
