<?php namespace AnandPatel\SeoExtension\Components;

use Cms\Classes\ComponentBase;

class BlogPost extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'BlogPost Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        // Double event hook that affects user #2 only
        \RainLab\Blog\Models\Post::extend(function($model) {
            $model->bindEvent('model.afterFetch', function() use ($model) {

                traceLog($model->toArray());

            });
        });
    }

}