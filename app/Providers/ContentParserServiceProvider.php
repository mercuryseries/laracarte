<?php

namespace Laracarte\Providers;

use Laracarte\ContentParser\ContentParser;
use Laracarte\ContentParser\MarkdownTransformer;
use Illuminate\Support\ServiceProvider;

class ContentParserServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ContentParser::class, function () {
            return new ContentParser(new MarkdownTransformer);
        });
    }
}
