<?php
/* This file is part of the XP framework's EASC API
 *
 * $Id: FeedHome.class.php 9339 2007-01-19 17:07:29Z friebe $
 */

  uses('net.xp_framework.beans.entities.FeedValue');

  /**
   * Feed remote home interface
   *
   * @purpose  Demo class  
   */
  interface FeedHome {

    /**
     * Create method
     *
     * @param   net.xp_framework.beans.entities.FeedValue data
     * @return  net.xp_framework.beans.entities.Feed
     */  
    public function create($data);
  
    /**
     * Finder method
     *
     * @param   lang.types.Long primaryKey
     * @return  net.xp_framework.beans.entities.Feed
     */
    public function findByPrimaryKey($primaryKey);

    /**
     * Finder method
     *
     * @return  net.xp_framework.beans.entities.Feed[]
     */
    public function findAll();
  
  }
?>
