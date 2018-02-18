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
            ->where($db->quoteName('m.menutype') . '="mainmenu"' . ' AND ' . $db->quoteName('m.published') . '=1' . ' AND ' . $db->quoteName('m.level') . '=1' )
            ->order($db->quoteName('m.lft') . ' ASC');


        $db->setQuery($query);
        $items = $db->loadObjectList();

        $menuItem = "<ul class=\"nav navbar-nav\" id=\"mainNav\">";

        foreach ($items as $item) {
            if ($db->loadResult()) {
                $menuItem .= " <li class=\"active\" id=\"firstLink\">";
                $menuItem .= "<a href=\"#\" class=\"scroll-link\">$item->title</a>";
                $menuItem .= "</li>";


            }

        }

        $menuItem.="</ul>";
        return $menuItem;

    }

    public function getHtmlmob()
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true)
            ->select($db->quoteName(array('m.id', 'm.title', 'm.alias', 'm.params', 'm.type', 'm.link', 'm.path'), array('id', 'title', 'alias', 'params', 'type', 'link', 'path')))
            ->from($db->quoteName('#__menu', 'm'))
            ->where($db->quoteName('m.menutype') . '="mainmenu"' . ' AND ' . $db->quoteName('m.published') . '=1' . ' AND ' . $db->quoteName('m.level') . '=2' . ' AND ' . $db->quoteName('m.id') . '!=101')
            ->order($db->quoteName('m.lft') . ' ASC');


        $db->setQuery($query);
        $items = $db->loadObjectList();
        $menuItem = "<ul class=\"nav navbar-nav\" id=\"mainNav\">";
        foreach ($items as $item) {
            if ($db->loadResult()) {
                $menuItem .= " <li class=\"active\" id=\"firstLink\">";
                $menuItem .= "<a href=\"#\" class=\"scroll-link\">$item->title</a>";
                $menuItem .= "</li>";
                $menuItem .= "</a>";


            }
        }
        return $menuItem;
    }

}

?>
