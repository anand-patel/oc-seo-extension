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
    }


} 