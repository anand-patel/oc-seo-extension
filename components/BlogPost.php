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
            'name'        => 'CmsPage Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $slug = $this->propertyOrParam('idParam');
        $post = BlogPost::isPublished()->where('slug', '=', $slug)->first();
        tracelog($post);
    }

}