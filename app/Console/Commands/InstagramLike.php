<?php

namespace App\Console\Commands;

use App\LikedImage;
use GuzzleHttp\Exception\ClientException as ClientException;

use Illuminate\Console\Command;

class InstagramLike extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insta:like';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Like images for a given tag set';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // This varible help stop the script if it has performed too many requests to the API
        $break = false;

        // Define the varible for later use
        $like_recent = [];

        $tags = \Config::get('instagram.tags');
        shuffle($tags);

        $this->line('Grabbing tags');

        foreach ($tags as $i => $tag) {

            $this->line('Liking images tagged ' . $tag);

            $res = $this->instaConnect('https://api.instagram.com/v1/tags/'.$tag.'/media/recent', 'get');

            if ($res['success'] === false) {

                $this->error('Something went wrong in the response');
                // return redirect()->route('home')->with(['fail_message' => $tag . ' tag cannot be like at the moment']);
                continue 1;
            }

            $break = $res['break'];

            if($break)break;

            foreach ($res['data']['data'] as $ii => $ee) {

                if($break)break;
                $actions = '';

                if (\Config::get('instagram.like.do') && (\Config::get('instagram.like.min_likes') == 0 || $ee['likes']['count'] > \Config::get('instagram.like.min_likes')) && (\Config::get('instagram.like.max_likes') == 0 || $ee['likes']['count'] < \Config::get('instagram.like.max_likes'))) {

                    $likeAlready = LikedImage::where('image_id', '=', $ee['id'])->get();

                    if (! $likeAlready->isEmpty()) {
                        $this->line('Already liked image');
                        continue;
                    }

                    $actions = $this->instaConnect('https://api.instagram.com/v1/media/' . $ee['id'] . '/likes', 'post');

                    if ($actions['success'] !== true) {
                        $this->error('Something went wrong!');
                    }

                    $liked = LikedImage::create([
                        'image_id' => $ee['id']
                    ]);

                    $this->line('Liked Image: ' . $ee['id'] . ' From tag ' . $tag);

                    $this->line('Waiting 120');
                    sleep(120);
                }

                if(\Config::get('instagram.like.debugging')) $data[] = [
                    //'tags' => $ee['tags'],
                    'comments_count' => $ee['comments']['count'],
                    'created_time' => $ee['created_time'],
                    'created_time_formatted' => date('H:i d-m-Y',$ee['created_time']),
                    'like_count' => $ee['likes']['count'],
                    'image' => $ee['images']['standard_resolution']['url'],
                    'username' => $ee['user']['username'],
                    'user_id' => $ee['user']['id'],
                    'id' => $ee['id'],
                    'actions' => $actions,
                ];
            }

            if(\Config::get('instagram.like.debugging')){
                $instart[] = $data;
                unset($data);
            }
        }
    }

    function instaConnect($url, $method = 'get')
    {
        // Instanciate guzzle client
        $client = new \GuzzleHttp\Client();

        // Add access token to URL
        $url = $url.'?access_token=' . \Config::get('instagram.access_token');

        // Try to make call
        try {

            // Make the request
            $instagramResponse = $client->request($method, $url);

        // Catch request exception
        } catch (ClientException $e) {

            $error = [
                'success' => false,
                'error' => $e->getMessage(),
            ];

            $this->error(implode(',', $error));

            // Return exception
            return $error;
        }

        // Grab response content
        $instagramResponse = $instagramResponse->getBody()->getContents();

        // json decode response
        $res = json_decode($instagramResponse, true);

        switch (true) {
            case $res['meta']['code'] == 429:

                // Break status true
                $break = true;
                break;

            default:

                // Break status false
                $break = false;
                break;
        }

        // Return response sussess, data, and break status
        return [
            'success' => true,
            'data' => $res,
            'break' => $break
        ];
    }
}
