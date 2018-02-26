<?php
defined('_JEXEC') or die;

class modpageramdomfeatures
{

    public function getcalalias($categoryid)
    {
        $db = JFactory::getDbo();


        $query = $db->getQuery(true)
            ->select($db->quoteName(array('ca.id', 'ca.alias'), array('id', 'caalias')))
            ->from($db->quoteName('#__categories', 'ca'))
            ->where($db->quoteName('ca.id') . '=' . $db->Quote($categoryid) . ' AND ' . $db->quoteName('ca.published') . '=1');


        $db->setQuery($query);
        $items = ($items = $db->loadObject()) ? $items : array();

        return $items;
    }

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
