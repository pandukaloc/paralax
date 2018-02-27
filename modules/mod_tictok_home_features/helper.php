<?php
defined('_JEXEC') or die;

class modfeatures
{

  public function getHtml($categoryid)
    {
        
        $db = JFactory::getDbo();

   $query = $db->getQuery(true)
            ->select($db->quoteName(array('c.id', 'c.title', 'c.introtext', 'c.images','ca.alias', 't.alias' ), array('id', 'title', 'introtext', 'images', 'caalias', 'talias')))

            ->from($db->quoteName('#__content', 'c', '#__categories','ca', '#__tags','t' ))  
               ->join('INNER', $db->quoteName('#__categories', 'ca') . ' ON (' . $db->quoteName('c.catid') . ' = ' . $db->quoteName('ca.id') . ')')

                  ->join('INNER', $db->quoteName('#__contentitem_tag_map', 'tm') . ' ON (' . $db->quoteName('c.id') . ' = ' . $db->quoteName('tm.content_item_id') . ')')

                   ->join('INNER', $db->quoteName('#__tags', 't') . ' ON (' . $db->quoteName('t.id') . ' = ' . $db->quoteName('tm.tag_id') . ')')
                 
                           
            ->where($db->quoteName('c.catid') . '='.$db->Quote($categoryid) . ' AND ' . $db->quoteName('c.state') . '=1' )
            ->order($db->quoteName('c.ordering') . ' ASC');


        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
        
            return $items;

}}

?>
