<?php

namespace App\Console\Commands;

use App\Person;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class GetData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '从服务器获取数据';

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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function handle()
    {
        $client = new Client();
        for ($page=1; $page<=9849; $page++) {
            $response = $client->request('GET', 'http://***.***.***.***/api/users?page=' . $page);
            //TODO 自行添加IP地址
            $data = json_decode((string)$response->getBody(), true);

            foreach ($data['data']['list'] as $tmp) {
                $person = [];
                $person['user_id'] = $tmp['id'];
                $person['name'] = $tmp['name'];
                $person['department'] = $tmp['deptName'];
                Person::create($person);
            }
            sleep(1);
        }
    }
}
