<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // In tags table migration we have:
        // $table->string('name', 30);
        // $table->string('slug')->unique();

        $tags = [
            'Today',
            'Yesterday',
            'Tomorrow',
            'Monday', 
            'Thuesday', 
            'Wednesday', 
            'Thursday', 
            'Friday', 
            'Saturday', 
            'Sunday',  
            'Rock',   
            'Metal',
            'Blues',  
            'House', 
            'Chill', 
            'R&B', 
            'Pop', 
            'Jazz', 
            'Punk',
            'Palermo',
            'Mazara', 
            'Castelvetrano',
            'Marsala',    
            'Messina',
            'Campobello di Mazara',  
        ];

        foreach($tags as $element){
            $tag = new Tag();
            $tag->name = $element;
            $tag->slug = Str::slug($tag->name);
            $tag->save();
        }
    }
}
