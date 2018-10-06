<?php
//Dynamically add Javascript files to header page
if(!function_exists('addJs')){
    function addJs($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_js = $ci->config->item('header_js');
        if(empty($file)){
            return;
        }
        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $header_js[] = $item;
            }
            $ci->config->set_item('header_js',$header_js);
        }else{
            $str = $file;
            $header_js[] = $str;
            $ci->config->set_item('header_js',$header_js);
        }
    }
}
//Dynamically add CSS files to header page
if(!function_exists('addCss')){
    function addCss($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');
        if(empty($file)){
            return;
        }
        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $header_css[] = $item;
            }
            $ci->config->set_item('header_css',$header_css);
        }else{
            $str = $file;
            $header_css[] = $str;
            $ci->config->set_item('header_css',$header_css);
        }
    }
}
//Putting our CSS and JS files together
if(!function_exists('putHeaders')){
    function putHeaders()
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');
        $header_js  = $ci->config->item('header_js');
        foreach($header_css AS $item){
            $str .= '<link rel="stylesheet" href="assets/css/'.$item . ' type="text/css" />'."\n";
        }
        foreach($header_js AS $item){
            $str .= '<script type="text/javascript" src="assets/js/'.$item .'"></script>'."\n";
        }
        return $str;
    }
}

if(!function_exists('putCss')){
    function putCss()
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');

        if ($header_css)
        {
            foreach($header_css AS $item){
                $str .= '<link rel="stylesheet" href="assets/'.$item.'" type="text/css" />'."\n";
            }
        }
        return $str;
    }
}

if(!function_exists('putJs')){
    function putJs()
    {
        $str = '';
        $ci = &get_instance();
        $header_js = $ci->config->item('header_js');
        
        if ($header_js)
        {
            foreach($header_js AS $item){
                $str .= '<script type="text/javascript" src="assets/'.$item.'"></script>'."\n";
            }
        }
        return $str;
    }
}