<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::where('name', 'kelve')->first();

        DB::table('posts')->insert([
            'title' => 'title 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat fringilla elementum. Aenean nec orci tempor enim semper bibendum et ut nisl. Mauris ornare lectus metus, a volutpat metus aliquam at. Mauris eu leo eu lorem porttitor pretium. Fusce vestibulum odio dui, in dictum arcu posuere at. Vestibulum auctor velit ut mauris fringilla posuere in eu tellus. Phasellus tincidunt sollicitudin scelerisque. Vestibulum semper iaculis ipsum at dapibus. Duis interdum pulvinar augue, eu condimentum ipsum porttitor eget. Donec tincidunt vel nulla laoreet commodo. Suspendisse non sapien dapibus, ultrices nisl vel, placerat purus. Vivamus scelerisque tellus sed tortor consectetur bibendum. Praesent auctor sed ligula eu hendrerit. Nullam sit amet fringilla diam, ac congue enim. Vestibulum non neque mauris. Ut imperdiet malesuada orci a pharetra. Praesent et dictum est. Curabitur tincidunt ex dapibus eros gravida, vitae efficitur odio mollis. Nulla sed diam ultricies, eleifend libero nec, volutpat nisi. Morbi sodales libero vitae euismod imperdiet. Etiam aliquam gravida libero. Aenean ac auctor eros. Fusce elit turpis, luctus ac justo in, accumsan pulvinar quam. Nullam at sollicitudin felis.',
            'date' => '2016-02-01',
            'user_id' => $user1->id
        ]);

        DB::table('posts')->insert([
            'title' => 'title 2',
            'content' => 'Vivamus scelerisque tellus sed tortor consectetur bibendum. Praesent auctor sed ligula eu hendrerit. Nullam sit amet fringilla diam, ac congue enim. Vestibulum non neque mauris. Ut imperdiet malesuada orci a pharetra. Praesent et dictum est. Curabitur tincidunt ex dapibus eros gravida, vitae efficitur odio mollis. Nulla sed diam ultricies, eleifend libero nec, volutpat nisi. Morbi sodales libero vitae euismod imperdiet. Etiam aliquam gravida libero. Aenean ac auctor eros. Fusce elit turpis, luctus ac justo in, accumsan pulvinar quam. Nullam at sollicitudin felis. Proin eget magna at libero aliquet gravida. Nulla est erat, feugiat iaculis lacus et, finibus imperdiet massa. Pellentesque dictum sapien nulla, a tincidunt ipsum tempus eu. Mauris bibendum a sapien vitae eleifend. Ut et justo laoreet, pharetra orci in, aliquam mi. Aenean eget elementum massa. Pellentesque efficitur, ex iaculis pretium cursus, mi mauris luctus neque, et vehicula augue quam ut felis. Mauris ultrices ante eu tellus ullamcorper, vitae finibus leo convallis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec at felis magna. Proin et augue et odio sodales pellentesque. In hac habitasse platea dictumst. Cras suscipit ullamcorper ex, eu vehicula lacus vestibulum sit amet. Sed non semper leo. Aenean fermentum tellus sit amet nulla placerat, sit amet venenatis lacus tempor. Ut et nisl non eros condimentum tincidunt. In hendrerit mattis arcu, volutpat interdum eros varius id. Aliquam mollis ultricies elit vel sodales. Fusce blandit est id nunc porttitor vulputate. Aenean at tellus venenatis nibh accumsan pulvinar. In hac habitasse platea dictumst. Nullam fermentum dui ac vulputate tincidunt. Morbi tempor tincidunt leo fermentum dapibus. Nam id posuere mi. Morbi gravida gravida sagittis. Sed id eros suscipit, dignissim dolor id, vestibulum augue. Nullam egestas faucibus ex, sit amet laoreet felis semper sed. Mauris convallis, nulla sed congue bibendum, dolor nisi bibendum risus, ac bibendum libero turpis at arcu. Nulla nec eleifend urna, eu mattis eros. Curabitur dapibus tortor sit amet est efficitur, a eleifend orci vehicula. Nunc volutpat elit nec urna porta volutpat. Cras pulvinar mauris vel mauris bibendum, quis interdum metus varius. Cras neque erat, sollicitudin ut placerat at, convallis vel nulla. Cras sit amet diam libero. Mauris lacus neque, porta in sodales sit amet, commodo in tellus. Morbi pellentesque vel lorem sed tincidunt.',
            'date' => '2016-02-05',
            'user_id' => $user1->id
        ]);

        DB::table('posts')->insert([
            'title' => 'title 3',
            'content' => 'Proin eget magna at libero aliquet gravida. Nulla est erat, feugiat iaculis lacus et, finibus imperdiet massa. Pellentesque dictum sapien nulla, a tincidunt ipsum tempus eu. Mauris bibendum a sapien vitae eleifend. Ut et justo laoreet, pharetra orci in, aliquam mi. Aenean eget elementum massa. Pellentesque efficitur, ex iaculis pretium cursus, mi mauris luctus neque, et vehicula augue quam ut felis. Mauris ultrices ante eu tellus ullamcorper, vitae finibus leo convallis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec at felis magna. Proin et augue et odio sodales pellentesque. In hac habitasse platea dictumst. Cras suscipit ullamcorper ex, eu vehicula lacus vestibulum sit amet. Sed non semper leo. Aenean fermentum tellus sit amet nulla placerat, sit amet venenatis lacus tempor. Ut et nisl non eros condimentum tincidunt. In hendrerit mattis arcu, volutpat interdum eros varius id. Aliquam mollis ultricies elit vel sodales. Fusce blandit est id nunc porttitor vulputate. Aenean at tellus venenatis nibh accumsan pulvinar. In hac habitasse platea dictumst. Nullam fermentum dui ac vulputate tincidunt. Morbi tempor tincidunt leo fermentum dapibus. Nam id posuere mi. Morbi gravida gravida sagittis. Sed id eros suscipit, dignissim dolor id, vestibulum augue. Nullam egestas faucibus ex, sit amet laoreet felis semper sed. Mauris convallis, nulla sed congue bibendum, dolor nisi bibendum risus, ac bibendum libero turpis at arcu. Nulla nec eleifend urna, eu mattis eros. Curabitur dapibus tortor sit amet est efficitur, a eleifend orci vehicula. Nunc volutpat elit nec urna porta volutpat. Cras pulvinar mauris vel mauris bibendum, quis interdum metus varius. Cras neque erat, sollicitudin ut placerat at, convallis vel nulla. Cras sit amet diam libero. Mauris lacus neque, porta in sodales sit amet, commodo in tellus. Morbi pellentesque vel lorem sed tincidunt.',
            'date' => '2016-02-25',
            'user_id' => $user1->id
        ]);
    }
}
