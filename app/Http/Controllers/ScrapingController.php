<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
class ScrapingController extends Controller
{
    public function scraping (Client $client){
      

        
         for ($i=0; $i<35; $i++){
            $crawler = $client->request('GET', 
            "https://www.computrabajo.com.mx/trabajo-de-desarrollador?q=Desarrollador&p=$i");

            $this->getScraper($crawler);
         }

         return redirect()->route('post.index');
       
    }
    public function getScraper(Crawler $crawler){
        $crawler->filter("[class='bRS bClick ']")->each(function (Crawler $node) {
           
            $title = $node->filter("[class='tO']")->first()->text();
            $location = $node->filter("[itemprop='addressLocality']")->first()->text();
            $description = $node->filter('p')->first()->text();
            $url = $node->filter("[class='js-o-link']")->first()->attr('href');
           
            Post::create([
                'title' => $title,
                'location' => $location,
                'description' => $description,
                'url' => "https://www.computrabajo.com.mx/".$url
            ]);
        });
    }
}