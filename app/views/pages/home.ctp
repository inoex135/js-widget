<h2>Demo Widget Product</h2>
<p>Backend Administration can be accessed at <?php echo $html->link('admin page', '/products');?></p>
<p>
    To use widget at client, please copy paste script below:
    <pre>
    <xmp>
        <script type='text/javascript' src='<?php echo $html->url('/widget/js',true)?>'></script>
        <script type='text/javascript'>
            var theme = 'single';/*or thumb to change the theme*/
            load(theme);
        </script>
    </xmp>
    </pre> 
</p>
<h3>Instalation</h3>
<ul>
    <li>Pre requisites : apache, mysql, mod_rewrite enabled</li>
    <li>Dump the sql database</li>
    <li>Change the app/config/database.php, set properly according to your setting.</li>
</ul>