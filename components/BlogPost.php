<?php namespace AnandPatel\SeoExtension\Components;

use Cms\Classes\ComponentBase;
use Event;

class BlogPost extends ComponentBase
{

    public $page;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $canonical_url;
    public $redirect_url;
    public $robot_index;
    public $robot_follow;

    public function componentDetails()
    {
        return [
            'name'        => 'SEO Blog Post',
            'description' => 'Inject SEO Fields of blog post'
        ];
    }

    public function defineProperties()
    {
        return [
            "post" => [
                    "title" => "data",
                    "default" => "post"
            ]
        ];
    }

}