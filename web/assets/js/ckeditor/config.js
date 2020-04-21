
CKEDITOR.plugins.addExternal('fmath_formula', 'plugins/fmath_formula/', 'plugin.js');

CKEDITOR.editorConfig = function( config )
{
//syntax post
//config.extraPlugins = 'syntaxhighlight';
//config.toolbar_Full.push(['Code']);	

//rumus post
		config.extraPlugins = 'fmath_formula';
		config.toolbar_Full.push(['fmath_formula']);	
	
};







