<?php
//Plugin loader -- By Nikolaj
global $pluginbuckets, $plugins;
if (isset($pluginbuckets[$bucket]))
{
	foreach ($pluginbuckets[$bucket] as $plugin)
	{
		if (isset($plugins[$plugin]))
		{
			$self = $plugins[$plugin];
			$selfsettings = Settings::$pluginsettings[$plugin];
			include("./plugins/".$plugins[$plugin]['dir']."/".$bucket.".php");
			unset($self);
		}
	}
	unset($self);
}
?>
