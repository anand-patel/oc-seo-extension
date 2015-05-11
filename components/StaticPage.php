<?php namespace AnandPatel\SeoExtension\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use Cms\Classes\Theme;
use AnandPatel\SeoExtension\models\Settings;
use Request;

class StaticPage extends ComponentBase
{
    public $page;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $canonical_url;
    public $redirect_url;
    public $robot_index;
    public $robot_follow;
    public $title;

    public $ogTitle;
    public $ogUrl;
    public $ogDescription;
    public $ogSiteName;
    public $ogFbAppId;
    public $ogLocale;
    public $ogImage;


    public function componentDetails()
    {
        return [
            'name'        => 'anandpatel.seoextension::lang.component.static.name',
            'description' => 'anandpatel.seoextension::lang.component.static.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $url = Request::path();

        // Remove language prefix in case it exists (e.g. from "/en/my-page" to "/my-page")
        if (class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            $url = substr($url, 3);

        if (!strlen($url))
            $url = '/';

        $router = new Router(Theme::getActiveTheme());
        $this->page = $this->page['page'] = $router->findByUrl($url);

        if ($this->page) {
            $this->seo_title = $this->page['seo_title'] = $this->page->getViewBag()->property('seo_title');
            $this->title = $this->page['title'] = $this->page->getViewBag()->property('title');
            $this->seo_description = $this->page['seo_description'] = $this->page->getViewBag()->property('seo_description');
            $this->seo_keywords = $this->page['seo_keywords'] = $this->page->getViewBag()->property('seo_keywords');
            $this->canonical_url = $this->page['canonical_url'] = $this->page->getViewBag()->property('canonical_url');
            $this->redirect_url = $this->page['redirect_url'] = $this->page->getViewBag()->property('redirect_url');
            $this->robot_index = $this->page['robot_index'] = $this->page->getViewBag()->property('robot_index');
            $this->robot_follow = $this->page['robot_follow'] = $this->page->getViewBag()->property('robot_follow');

            $settings = Settings::instance();

            if($settings->enable_og_tags)
            {
                $this->ogTitle = empty($this->page->meta_title) ? $this->page->title : $this->page->meta_title;
                $this->ogDescription = $this->page->meta_description;
                $this->ogUrl = empty($this->page->canonical_url) ? Request::url() : $this->page->canonical_url ;
                $this->ogSiteName = $settings->og_sitename;
                $this->ogFbAppId = $settings->og_fb_appid;
            }
        }

    }

}
