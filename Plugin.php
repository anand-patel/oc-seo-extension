<?php namespace anandpatel\seoextension;

use AnandPatel\SeoExtension\classes\Helper;
use Cms\Classes\Page;
use Cms\Classes\Theme;
use System\Classes\PluginBase;
use System\Classes\PluginManager;
use System\Classes\SettingsManager;

/**
 * SeoExtension Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'anandpatel.seoextension::lang.plugin.name',
            'description' => 'anandpatel.seoextension::lang.plugin.description',
            'author'      => 'AnandPatel',
            'icon'        => 'icon-search'
        ];
    }


    public function registerComponents()
    {
        return [
            'AnandPatel\SeoExtension\Components\BlogPost' => 'SeoBlogPost',
            'AnandPatel\SeoExtension\Components\StaticPage' => 'SeoStaticPage',
            'AnandPatel\SeoExtension\Components\CmsPage' => 'SeoCmsPage',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'anandpatel.seoextension::lang.settings.label',
                'description' => 'anandpatel.seoextension::lang.settings.description',
                'icon'        => 'icon-search',
                'category'    =>  SettingsManager::CATEGORY_MYSETTINGS,
                'permissions' => ['anandpatel.seoextension.settings.edit'],
                'class'       => 'AnandPatel\SeoExtension\Models\Settings',
                'order'       => 100
            ]
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'generateTitle' => [$this, 'generateTitle'],
                'generateCanonicalUrl' => [$this, 'generateCanonicalUrl'],
                'otherMetaTags' => [$this ,'otherMetaTags'],
                'generateOgTags' => [$this,'generateOgTags']
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'anandpatel.seoextension.settings.edit' => [
                'label' => 'anandpatel.seoextension::lang.settings.permissions.settings_edit',
                'tab' => 'anandpatel.seoextension::lang.plugin.name'
            ]
        ];
    }

    public function generateOgTags($post)
    {
        $helper = new Helper();

        $ogMetaTags = $helper->generateOgMetaTags($post);
        return $ogMetaTags;
    }

    public function otherMetaTags()
    {
        $helper = new Helper();

        $otherMetaTags = $helper->otherMetaTags();
        return $otherMetaTags;
    }

    public function generateTitle($title)
    {
        $helper = new Helper();
        $title = $helper->generateTitle($title);
        return $title;
    }

    public function generateCanonicalUrl($url)
    {
        $helper = new Helper();
        $canonicalUrl = $helper->generateCanonicalUrl();
        return $canonicalUrl;
    }


    public function register()
    {
        \Event::listen('backend.form.extendFields', function ($widget) {
            if (PluginManager::instance()->hasPlugin('RainLab.Pages') && $widget->model instanceof \RainLab\Pages\Classes\Page) {
                if ($widget->isNested) { return; }
                
                $widget->addFields([
                        'viewBag[seo_title]' => [
                        'label'   => 'anandpatel.seoextension::lang.editor.meta_title',
                        'type'    => 'text',
                        'tab'     => 'cms::lang.editor.meta'
                        ],
                        'viewBag[seo_description]' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.meta_description',
                            'type'    => 'textarea',
                            'size'    => 'tiny',
                            'tab'     => 'cms::lang.editor.meta'
                        ],
                        'viewBag[seo_keywords]' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.meta_keywords',
                            'type'    => 'textarea',
                            'size'    => 'tiny',
                            'tab'     => 'cms::lang.editor.meta'
                        ],
                        'viewBag[canonical_url]' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.canonical_url',
                            'type'    => 'text',
                            'tab'     => 'cms::lang.editor.meta',
                            'span'    => 'left'
                        ],
                        'viewBag[redirect_url]' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.redirect_url',
                            'type'    => 'text',
                            'tab'     => 'cms::lang.editor.meta',
                            'span'    => 'right'

                        ],
                        'viewBag[robot_index]' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.robot_index',
                            'type'    => 'dropdown',
                            'tab'     => 'cms::lang.editor.meta',
                            'options' => $this->getIndexOptions(),
                            'default' => 'index',
                            'span'    => 'left'
                        ],
                        'viewBag[robot_follow]' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.robot_follow',
                            'type'    => 'dropdown',
                            'tab'     => 'cms::lang.editor.meta',
                            'options' => $this->getFollowOptions(),
                            'default' => 'follow',
                            'span'    => 'right'
                        ],
                ],
                'primary');
            }

            if (PluginManager::instance()->hasPlugin('RainLab.Blog') && $widget->model instanceof \RainLab\Blog\Models\Post) {
                if ($widget->isNested) { return; }
                
                $widget->addFields([
                        'seo_title' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.meta_title',
                            'type'    => 'text',
                            'tab'     => 'SEO'
                        ],
                        'seo_description' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.meta_description',
                            'type'    => 'textarea',
                            'size'    => 'tiny',
                            'tab'     => 'SEO'
                        ],
                        'seo_keywords' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.meta_keywords',
                            'type'    => 'textarea',
                            'size'    => 'tiny',
                            'tab'     => 'SEO'
                        ],
                        'canonical_url' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.canonical_url',
                            'type'    => 'text',
                            'tab'     => 'SEO',
                            'span'    => 'left'
                        ],
                        'redirect_url' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.redirect_url',
                            'type'    => 'text',
                            'tab'     => 'SEO',
                            'span'    => 'right'

                        ],
                        'robot_index' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.robot_index',
                            'type'    => 'dropdown',
                            'tab'     => 'SEO',
                            'options' => $this->getIndexOptions(),
                            'default' => 'index',
                            'span'    => 'left'
                        ],
                        'robot_follow' => [
                            'label'   => 'anandpatel.seoextension::lang.editor.robot_follow',
                            'type'    => 'dropdown',
                            'tab'     => 'SEO',
                            'options' => $this->getFollowOptions(),
                            'default' => 'follow',
                            'span'    => 'right'
                        ],
                    ],
                    'secondary');
            }

            if (!$widget->model instanceof \Cms\Classes\Page) {
                return;
            }

            if (!($theme = Theme::getEditTheme())) {
                throw new ApplicationException(Lang::get('cms::lang.theme.edit.not_found'));
            }
    
            if ($widget->isNested) { return; }
                
            $widget->addFields(
                [
                    'settings[seo_keywords]' => [
                        'label'   => 'anandpatel.seoextension::lang.editor.meta_keywords',
                        'type'    => 'textarea',
                        'tab'     => 'cms::lang.editor.meta',
                        'size'    => 'tiny',
                        'placeholder' => "hello"
                    ],
                    'settings[canonical_url]' => [
                        'label'   => 'anandpatel.seoextension::lang.editor.canonical_url',
                        'type'    => 'text',
                        'tab'     => 'cms::lang.editor.meta',
                        'span'    => 'left'
                    ],
                    'settings[redirect_url]' => [
                        'label'   => 'anandpatel.seoextension::lang.editor.redirect_url',
                        'type'    => 'text',
                        'tab'     => 'cms::lang.editor.meta',
                        'span'    => 'right'

                    ],
                    'settings[robot_index]' => [
                        'label'   => 'anandpatel.seoextension::lang.editor.robot_index',
                        'type'    => 'dropdown',
                        'tab'     => 'cms::lang.editor.meta',
                        'options' => $this->getIndexOptions(),
                        'default' => 'index',
                        'span'    => 'left'
                    ],
                    'settings[robot_follow]' => [
                        'label'   => 'anandpatel.seoextension::lang.editor.robot_follow',
                        'type'    => 'dropdown',
                        'tab'     => 'cms::lang.editor.meta',
                        'options' => $this->getFollowOptions(),
                        'default' => 'follow',
                        'span'    => 'right'
                    ],
                ],
                'primary'
            );
        });
    }


    private function getIndexOptions()
    {
        return ["index"=>"index","noindex"=>"noindex"];
    }

    private function getFollowOptions()
    {
        return ["follow"=>"follow","nofollow"=>"nofollow"];
    }
}
