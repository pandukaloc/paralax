<?php
defined('_JEXEC') or die;

class Modpagenavigation
{

public function getHtml()
{
    $db = JFactory::getDbo();
    $query = $db->getQuery(true)
        ->select($db->quoteName(array('m.id', 'm.title', 'm.alias', 'm.params', 'm.type', 'm.link', 'm.path'), array('id', 'title', 'alias', 'params', 'type', 'link', 'path')))
        ->from($db->quoteName('#__menu', 'm'))
        ->where($db->quoteName('m.menutype') . '="mainmenu"' . ' AND ' . $db->quoteName('m.published') . '=1' . ' AND ' . $db->quoteName('m.level') . '=1')
        ->order($db->quoteName('m.lft') . ' ASC');
    
    $db->setQuery($query);
    $itemslevel1 =  ($itemslevel1 = $db->loadObjectList())?$itemslevel1:array();

  
$menuItem="";

    foreach ($itemslevel1 as $itemlevel1) {
$url=$itemlevel1->link;
 
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        $catid=$query['id'];
 $db = JFactory::getDbo();
    $query = $db->getQuery(true)
        ->select($db->quoteName(array('cat.alias'), array('alias')))
        ->from($db->quoteName('#__categories', 'cat'))
        ->where($db->quoteName('cat.id') . '='. $db->Quote($catid));   
    $db->setQuery($query);
    $catid =  ($items = $db->loadObject())?$items:array();
        if ($itemlevel1->type != "heading") {
            $class = '';
            if($currentmenuitem == $itemlevel1->id){
                $class='class="active"';
            }
            $menuItem .= " <li" . $class . ">";
            $menuItem .= "<a href=\"#$catid->alias\" class=\"scroll-link\"><span>$itemlevel1->title</span></a>";
            $menuItem .= "</li>";


        } else {
            $query = $db->getQuery(true)->select($db->quoteName(array(
                'm.id',
                'm.title',
                'm.alias',
                'm.params',
                'm.type',
                'm.link',
                'm.path',
                'm.type'
            ), array(
                'id',
                'title',
                'alias',
                'params',
                'type',
                'link',
                'path',
                'type'
            )))->from($db->quoteName('#__menu', 'm'))->where($db->quoteName('m.menutype') . '="mainmenu"' . ' AND ' . $db->quoteName('m.published') . '=1' . ' AND ' . $db->quoteName('m.level') . '=2' . ' AND ' . $db->quoteName('m.parent_id') . '=' . $db->Quote($itemlevel1->id))->order($db->quoteName('m.lft') . ' ASC');

            $db->setQuery($query);
            $itemslevel2 = $db->loadObjectList();


            $menuItem .= '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"   role="button" aria-haspopup="true" aria-expanded="false"><span>'
                . $itemlevel1->title . '</span> <span class="dropdown-icon"></span></a>
 <ul class="dropdown-menu">';

            foreach ($itemslevel2 as $itemlevel2) {
 if($currentmenuitem == $itemlevel2->id){
                $class='class="active"';
            }
                $menuItem .= '<li '.$class.'><a href="' . $itemlevel2->path . '"><span>' . $itemlevel2->title . '</span></a></li>';




            }
            $menuItem .= "</ul></li>";
        }


       




    }
   
    return $menuItem;


}
}

?>
