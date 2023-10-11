<?php

namespace App\Controllers;

class Main extends BaseController
{
    // MSSN2023# 
    // 8585963344503326343 
    // key:=>AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls
    // Google Photos:: https://photos.app.goo.gl/QfFx1CYivA1awaWu8
    // posts:: https://photos.app.goo.gl/hieLwmvYCXxzmoUB6
    //     APIS
    // Single Page:: https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/pages/2480526254607745?key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls

    // All Pages:: https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/pages?key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls

    // public $ALLPOSTS = "https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/posts?key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls";

    // Search Posts:: https://www.googleapis.com/blogger/v3/blogs/blogId/posts/search?q=query terms

    public function index()
    {
        $jsonld = '
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "MSSN Remo",
          "description": "Official website of MSSN Remo, promoting Islamic knowledge and values among students in Remo(Sagamu, Ikenne, Iperu...)",
          "url": "https://www.mssnremo.com.ng/",
          "logo": "https://new.mssnremo.com.ng/assets/img/mssnremologo.webp",
          "sameAs": [
            "https://www.facebook.com/mssnremo",
            "https://twitter.com/mssnremo",
            "https://www.instagram.com/mssnremo"
          ],
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+2349031306022",
              "contactType": "Student support"
            }
          ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "12, Abiodun Ogunyanwo St.",
            "addressLocality": "Sagamu, Ogun State",
            "postalCode": "121101",
            "addressCountry": "NG"
          }
        ';
        $client = \Config\Services::curlrequest();
        // $smposts = $client->request('GET', "https://galleria.sgm.ng/hieLwmvYCXxzmoUB6");

        $homedata = [
            // 'smposts'=>json_decode($smposts->getBody()),
            'smposts'=>[],
        ];
        echo view('main/header', ['title'=>"PHF Ogun", 'desc'=>"Welcome to our official page", 'jsonld'=>$jsonld]);
        echo view('main/home', $homedata);
        echo view('main/footer');
    }

    public function usrah()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"MSSN Remo || Weekly Usrah", 'desc'=>"Weekly programme for everybody", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPage('2480526254607745'));
        echo view('main/footer');
    }


    public function about()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"About MSSN Remo", 'desc'=>"Learn more about us", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPage('8976108313562892464'));
        echo view('main/footer');
    }

    public function excos()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"About MSSN Remo Executives", 'desc'=>"Learn more about our executives", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPage('603951292426024454'));
        echo view('main/footer');
    }

    public function donate()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"Support Our Noble Cause || MSSN Remo", 'desc'=>"No amount is small", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPage('6840498145856313383'));
        echo view('main/footer');
    }

    public function aboutAlqudwa()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"About Al-Qudwa Publications || MSSN Remo", 'desc'=>"Read and learn more as it is an obligation from cradle to grave", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPage('1051628629869955887'));
        echo view('main/footer');
    }

    public function alqudwa()
    {
        $jsonld = '';
        $blogURL = "https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/posts?key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls";
        echo view('main/header', ['title'=>"Al-Qudwa Publications || MSSN Remo", 'desc'=>"Read and learn more as it is an obligation from cradle to grave", 'jsonld'=>$jsonld]);
        echo view('main/blogs', ['blogs'=>$this->loadContent($blogURL)->items,]);
        echo view('main/footer');
    }

    public function singleBlog($y,$m,$t)
    {
        $path = $y.'/'.$m.'/'.$t;
        $url = 'https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/posts/bypath?path=/'.$path.'&key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls';
        $res = $this->loadContent($url);
        $re = '/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i';preg_match($re, $res->content, $matches, PREG_OFFSET_CAPTURE, 0); $extractedIMG = $matches[1][0];
        $cleanText = preg_replace('/<(?:[^"\'>]|".*?"|\'.*?\')*>|<\/?[a-zA-Z]+\b[^>]*>|[\r\n\t]+/s', '', $res->content);
        $jsonld = '
            "@context": "https://schema.org",
            "@type": "BlogPosting",
            "headline": "'.$res->title.'",
            "image": "'.$extractedIMG.'",
            "datePublished": "'.$res->published.'",
            "dateModified": "'.$res->updated.'",
            "author": {
                "@type": "Person",
                "name": "MSSN Remo"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Al-Qudwa",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://new.mssnremo.com.ng/assets/img/mssnremologo.webp"
                }
            },
            "description": "'.substr($cleanText, 0, 300).'",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "'.base_url('blog/'.$path).'"
            }';
        $data = [
            'id' => $res->id,
            'published' => explode('T', $res->published)[0] ,
            'title' => $res->title,
            'content' => $res->content,
        ];
        echo view('main/header', ['title'=>$data['title']."|| Al-Qudwa Publications || MSSN Remo", 'desc'=>"Read and learn more as it is an obligation from cradle to grave", 'jsonld'=>$jsonld]);
        echo view('main/single_post', $data);
        echo view('main/footer');
    }

    public function loadPage($pageID)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/pages/'.$pageID.'?key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls';
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    public function loadContent($url)
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $url);
        return json_decode($response->getBody());
    }


    public function trials()
    {
        // $client = \Config\Services::curlrequest();

        // $response = $client->request('GET', "https://www.googleapis.com/blogger/v3/blogs/8585963344503326343/posts?key=AIzaSyDyJNoiXSa4g7GcHKB4DOdSR5xvrNtZJls");
        // var_dump(json_decode($response->getBody())->items );
    }
}
