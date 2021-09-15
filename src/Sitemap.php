<?php

namespace Ichinya\SitemapGenerator;

class Sitemap
{
    /** @var array */
    private $list = [];
    private $listGroup = [];
    private $changefreq = 'weekly';
    private $priority = 0.5;
    private $group = '';

    public function __construct($changefreq = 'weekly', $priority = 0.5)
    {
        $this->changefreq = $changefreq;
        $this->priority = $priority;
    }

    public function addUrl($loc, $last_mod_timestamp = null, $changefreq = null, $priority = null)
    {
        $loc = htmlspecialchars($loc);
        $lastmod = date('Y-m-d', $last_mod_timestamp);
        if (!isset($changefreq)) $changefreq = $this->changefreq;
        if (!isset($priority)) $priority = $this->priority;
        $url = compact('loc', 'lastmod', 'changefreq', 'priority');
        if (empty($this->group)) {
            $this->list[] = $url;
        } else {
            $this->listGroup[$this->group][] = $url;
        }
        return $this;
    }

    public function setGroup($name)
    {
        $this->group = $name;
        return $this;
    }

    public function getList(): array
    {
        return $this->list;
    }
    public function getListGroup(): array
    {
        return $this->listGroup;
    }

}
