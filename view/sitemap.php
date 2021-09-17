<?php
echo  '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <?php foreach ($urls as $url) : ?>
        <url>
            <?php if (!empty($url['loc'])) : ?>
                <loc><?=  $url['loc'] ; ?></loc>
                <?php if (!empty($url['lastmod'])) : ?>
                    <lastmod><?=  $url['lastmod'] ; ?></lastmod>
                <?php endif; ?>
                <?php if (!empty($url['changefreq'])) : ?>
                    <changefreq><?=  $url['changefreq'] ; ?></changefreq>
                <?php endif; ?>
                <?php if (!empty($url['priority'])) : ?>
                    <priority><?=  $url['priority'] ; ?></priority>
                <?php endif; ?>
            <?php endif; ?>
        </url>
    <?php endforeach; ?>
</urlset>