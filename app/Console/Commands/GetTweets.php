<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Usertts;
use Twitter;

class GetTweets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweets:get {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a list of a user tweets';

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
        //
        $user = $this->argument('user');
        $usertts = Twitter::getUserTimeline(['screen_name' => $user, 'count' => 1, 'format' => 'json']);

        $itens = json_decode($usertts);
        foreach ($itens as $key => $value) {

        $tweets = new Usertts();
        $tweets->tweeted_at = $value->created_at;
        $tweets->screen_name = $value->user->screen_name;
        $tweets->content = $value->text;
        $tweets->rt_count = $value->retweet_count;
        $tweets->fav_count = $value->favorite_count;
        $tweets->save();

        }
    }
}
