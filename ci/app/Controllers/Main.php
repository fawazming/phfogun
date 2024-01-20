<?php

namespace App\Controllers;

class Main extends BaseController
{
    // MSSN2023# 
    // 8274183790677322710  // PHF: 8274183790677322710
    // key:=>AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI  //PHF:AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI
    // Google Photos:: https://photos.app.goo.gl/QfFx1CYivA1awaWu8
    // posts:: https://photos.app.goo.gl/hieLwmvYCXxzmoUB6
    //     APIS
    // Single Page:: https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/pages/2480526254607745?key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI

    // All Pages:: https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/pages?key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI

    // public $ALLPOSTS = "https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/posts?key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI";

    // Search Posts:: https://www.googleapis.com/blogger/v3/blogs/blogId/posts/search?q=query terms

    public function index()
    {
        $jsonld = '
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Pure Heart Islamic Foundation, Ogun State",
          "description": "Discover empowerment, education, and community impact with Pure Heart Islamic Foundation Ogun State. Join us in addressing unique challenges, nurturing minds, and celebrating positive change",
          "url": "https://www.phfogun.org.ng/",
          "logo": "https://phfogun.org.ng/assets/img/phf_logo.png",
          "sameAs": [
            "https://www.facebook.com/phfogun.org",
            "https://twitter.com/phfogun",
            "https://www.instagram.com/phf_ogun"
          ],
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+2348161188334",
              "contactType": "Support"
            }
          ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Istijaba Central Mosque, Behind Health Centre, Obada-Oko",
            "addressLocality": "Abeokuta, Ogun State",
            "postalCode": "110101",
            "addressCountry": "NG"
          }
        ';
        $client = \Config\Services::curlrequest();
        // $smposts = $client->request('GET', "https://galleria.sgm.ng/hieLwmvYCXxzmoUB6");

        $homedata = [
            // 'smposts'=>json_decode($smposts->getBody()),
            'smposts'=>[],
        ];
        echo view('main/header', ['title'=>"Pure Heart Islamic Foundation, Ogun State Chapter|| PHF Ogun", 'desc'=>"Discover empowerment, education, and community impact with Pure Heart Islamic Foundation Ogun State. Join us in addressing unique challenges, nurturing minds, and celebrating positive change", 'jsonld'=>$jsonld]);
        echo view('main/home', $homedata);
        echo view('main/footer');
    }

    public function imf()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"PHF Ogun || Weekly IMF", 'desc'=>"Immerse yourself in a journey of spiritual growth and knowledge at our Weekly Islamic Modelling Forum (IMF)", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/imf.html'));
        echo view('main/footer');
    }

    public function pass()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"PHF Ogun || Annual PASS", 'desc'=>"Experience empowerment, growth, and connection at our flagship event, the Pure Heart Annual Sister's Summit (PASS). This annual gathering is a catalyst for positive change, bringing together Muslim women to delve into crucial discussions spanning health, religion, social issues, and education", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/pass.html'));
        echo view('main/footer');
    }


    public function tday()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"PHF Ogun || Annual Teachers Day", 'desc'=>"We celebrate the builders of our nation", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/teachers.html'));
        echo view('main/footer');
    }


    public function ampal()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"PHF Ogun || AMPAL", 'desc'=>"Assembly of Muslim Prefect and Leaders in Private and Public Schools in Ogun State", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/ampal.html'));
        echo view('main/footer');
    }


    public function gday()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"PHF Ogun || International Girls Day", 'desc'=>"International Girls Day", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/girlsday.html'));
        echo view('main/footer');
    }


    public function phfquiz()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"PHF Ogun || Monthly PHF Quiz", 'desc'=>"Monthly Islamic Quiz", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/quiz.html'));
        echo view('main/footer');
    }
    

    public function about()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"About PHF Ogun", 'desc'=>"Learn more about us", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPage('8976108313562892464'));
        echo view('main/footer');
    }

    public function excos()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"About PHF Ogun Executives", 'desc'=>"Learn more about our executives", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/excos.html'));
        echo view('main/footer');
    }

    public function donate()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"Support Our Noble Cause || PHF Ogun", 'desc'=>"No amount is small", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/donate.html'));
        echo view('main/footer');
    }

    public function programmes()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"Our Programmes || PHF Ogun", 'desc'=>"Official Website", 'jsonld'=>$jsonld]);
        echo view('main/pages', $this->loadPostASPage('2024/01/programmes.html'));
        echo view('main/footer');
    }

    public function gallery()
    {
        $jsonld = '';
        echo view('main/header', ['title'=>"Our News Photo || PHF Ogun", 'desc'=>"Our photos speaks louder than voice", 'jsonld'=>$jsonld]);
        echo view('main/gallery');
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
        $blogURL = "https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/posts?key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI";
        echo view('main/header', ['title'=>"Our Blog || PHF Ogun", 'desc'=>"Read and learn more as it is an obligation from cradle to grave", 'jsonld'=>$jsonld]);
        echo view('main/blogs', ['blogs'=>$this->loadContent($blogURL)->items,]);
        echo view('main/footer');
    }

    public function singleBlog($y,$m,$t)
    {
        $path = $y.'/'.$m.'/'.$t;
        $url = 'https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/posts/bypath?path=/'.$path.'&key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI';
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
                "name": "PHF Ogun"
            },
            "publisher": {
                "@type": "Organization",
                "name": "PHF Ogun",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://phfogun.org.ng/assets/img/phf_logo.png"
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
        echo view('main/header', ['title'=>$data['title']."|| PHF Ogun", 'desc'=>"Read and learn more as it is an obligation from cradle to grave", 'jsonld'=>$jsonld]);
        echo view('main/single_post', $data);
        echo view('main/footer');
    }

    public function loadPage($pageID)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/pages/'.$pageID.'?key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI';
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    public function loadPostASPage($path)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/4537884138680196479/posts/bypath?path=/'.$path.'&key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI';
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    public function loadContent($url)
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $url);
        // dd($response->getBody());
        return json_decode($response->getBody());
    }


    public function trials()
    {
        // $client = \Config\Services::curlrequest();

        // $response = $client->request('GET', "https://www.googleapis.com/blogger/v3/blogs/8274183790677322710/posts?key=AIzaSyD-tkvtxixe1gm3hbr05upblw6P6HYzpKI");
        // var_dump(json_decode($response->getBody())->items );
    }
}
