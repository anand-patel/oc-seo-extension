<?php namespace AnandPatel\SeoExtension\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Cms\Classes\Theme;
use System\Classes\ApplicationException;



class CmsPage extends ComponentBase
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
        if (!($theme = Theme::getEditTheme())) {
            throw new ApplicationException(Lang::get('cms::lang.theme.edit.not_found'));
        }

        $this->seo_title = $this->page["seo_title"] = empty($this->page->meta_title) ? $this->page->title : $this->page->meta_title;
        $this->seo_description = $this->page["seo_description"] = $this->page->meta_description;
        $this->seo_keywords = $this->page["seo_keywords"] = $this->page->seo_keywords;
        $this->canonical_url = $this->page["canonical_url"] = $this->page->canonical_url;
        $this->redirect_url = $this->page["redirect_url"] = $this->page->redirect_url;
        $this->robot_follow = $this->page["robot_follow"] = $this->page->robot_follow;
        $this->robot_index = $this->page["robot_index"] = $this->page->robot_index;





    }

}