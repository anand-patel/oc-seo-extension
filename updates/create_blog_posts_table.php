<?php namespace AnandPatel\SeoExtension\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use System\Classes\PluginManager;
class CreateBlogPostsTable extends Migration
{

    public function up()
    {
        if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
        {
            Schema::table('rainlab_blog_posts', function($table)
            {
                $table->string('seo_title')->nullable();
                $table->string('seo_description')->nullable();
                $table->string('seo_keywords')->nullable();
                $table->string('canonical_url')->nullable();
                $table->string('redirect_url')->nullable();
                $table->string('robot_index')->nullable();
                $table->string('robot_follow')->nullable();
            });
        }
    }

    public function down()
    {
        if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
        {
            Schema::table('rainlab_blog_posts', function($table)
            {
                $table->dropColumn('seo_title');
                $table->dropColumn('seo_description');
                $table->dropColumn('seo_keywords');
                $table->dropColumn('canonical_url');
                $table->dropColumn('redirect_url');
                $table->dropColumn('robot_index');
                $table->dropColumn('robot_follow');
            });
        }

    }

}
