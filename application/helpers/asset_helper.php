<?php 

if ( ! function_exists('css_url'))
{
	function css_url ($nom)
	{
		return base_url() . 'assets/css/' . $nom . '.css?v=1';
	}
}


if ( ! function_exists('js_url'))
{
	function js_url ($nom)
	{
		return base_url().'assets/js/'.$nom.'.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url ($nom)
	{
		return base_url().'assets/img/'.$nom;
	}
}
?>