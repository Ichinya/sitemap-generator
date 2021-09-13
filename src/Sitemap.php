<?php

namespace ichinya\SitemapGenerator;

class Sitemap
{
    private $list = [];

    public function addModel($model)
    {

    }

    public function addUrl($loc, $lastmod = null, $changefreq = null, $priority = null)
    {
        $url = compact('loc', 'lastmod', 'changefreq', 'priority');
        $list[] = $url;
    }


}