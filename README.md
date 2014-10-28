SEO-Extension
=============

###Inject SEO fields to CMS Pages, Static Pages and Blog.

This plugin add SEO fields to CMS Pages, Static Pages and Blog, and for using it you simply need to drop component on layout/page.

currently included fields:
* Meta Title
* Meta Description
* Meta Keywords
* Canonical URL
* Meta Redirect to other URL
* Robot Index & Follow

__*more fields will be added on request__

####Features
* *__New__* Open Graph(og) Tags added for better sharing on social networking sites like Facebook
* *__New__* Settings added in backend to configure meta and Open Graph tags


####Future
* Add more fields on request.
* Integration of SEO optimizer to optimize page(if possible).

####Like this plugin?
If you like this plugin, give this plugin a Like or Make donation with PayPal.


#Documentation

#####**Installation**
To install this plugin you have to click on __add to project__ or need to type __AnandPatel.SeoExtension__ in Backend *System > updates > intall plugin*


The plugin currently includes three components:
* SEO CMS Page
* SEO Blog Post
* SEO Static Page

#####**SEO CMS Page**
Drop this component in layout`s head section

code of layout look like this

``````````````````
    <html>
        <head>
            {% component 'SeoCmsPage' %}
        </head>
        <body>
           {% page %}
        </body>
    </html>
``````````````````


#####**SEO Blog Post**
Drop this component on CMS Page on which you have dropped blogPost Component(i.e you want to show blog post).

pass parameter __data = post__

here is code of CMS page for Blog Post Page.

``````````````````
    {% component 'blogPost' %}
    {% component 'SeoBlogPost' data=post %}
``````````````````

> for using this component you must place SeoCMSPage component on layout.

#####**SEO Static Page**
Drop this component on Static Pages layout`s head section

code of static page layout look like this

``````````````````
    <html>
        <head>
            {% component 'SeoStaticPage' %}
        </head>
        <body>
            {% component 'staticMenu' %}
            {% component 'staticBreadcrumbs' %}
            {% page %}
        </body>
    </html>
``````````````````

####Configuration
To configure this Plugin goto Backend *System* then find *My Settings* in left side bar, then click on *SEO Extension* , you will get Configuration options.(refer screenshots)