<?php
defined('_JEXEC') or die;

class modpagebanner
{

    public function getHtml($categoryid)
    {
        
        $db = JFactory::getDbo();


        $query = $db->getQuery(true)
            ->select($db->quoteName(array('c.id', 'c.title', 'c.introtext', 'c.images','ca.alias' ), array('id', 'title', 'introtext', 'images', 'caalias')))

            ->from($db->quoteName('#__content', 'c', '#__categories','ca'))  
               ->join('INNER', $db->quoteName('#__categories', 'ca') . ' ON (' . $db->quoteName('c.catid') . ' = ' . $db->quoteName('ca.id') . ')')
                           
            ->where($db->quoteName('c.catid') . '='.$db->Quote($categoryid) . ' AND ' . $db->quoteName('c.state') . '=1' )
            ->order($db->quoteName('c.ordering') . ' ASC');


        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
        
            return $items;

    }

   

}

?>
