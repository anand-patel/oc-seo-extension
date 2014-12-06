<?php namespace AnandPatel\SeoExtension\classes;

use AnandPatel\SeoExtension\Models\Settings;
use Request;
class Helper {

    public $settings;

    public function __construct()
    {
        $this->settings = Settings::instance();
    }


    public function generateTitle($title)
    {
        $settings = $this->settings;
        $new_title = "";

        if($settings->enable_title)
        {
            $position = $settings->title_position;
            $site_title = $settings->title;

            if($position == 'prefix')
            {
                $new_title = $site_title . " " . $title;
            }
            else
            {
                $new_title = $title . " " . $site_title;
            }
        }
        else
        {
            $new_title = $title;
        }
        return $new_title;
    }

    function generateCanonicalUrl()
    {
        $settings = $this->settings;

        if($settings->enable_canonical_url)
        {
            return '<link rel="canonical" href="'. Request::url().'"/>';
        }

        return "";
    }

    public function otherMetaTags()
    {
        $settings = $this->settings;

        if($settings->other_tags)
        {
            return $settings->other_tags;
        }

        return "";

    }

    public function generateOgMetaTags($post)
    {
        $settings = $this->settings;

        if($settings->enable_og_tags)
        {
            $ogTags = "";
            if($settings->og_fb_appid)
                $ogTags  .= '<meta property="fb:app_id" content="'.$settings->og_fb_appid.'" />' ."\n" ;

            if($settings->og_sitename)
                $ogTags  .= '<meta property="og:site_name" content="'.$settings->og_sitename .'" />'."\n" ;

            if($post->seo_description)
                $ogTags  .= '<meta property="og:description" content="'.$post->seo_description.'" />'."\n" ;

            $ogTitle = empty($post->meta_title) ? $post->title : $post->meta_title;
            $ogUrl = empty($post->canonical_url) ? Request::url() : $this->page->canonical_url ;

            $ogTags .= '<meta property="og:title" content="'. $ogTitle .'" />'."\n" ;

            $ogTags .= '<meta property="og:url" content="'. $ogUrl .'" />';

            return $ogTags;
        }
    }


}
