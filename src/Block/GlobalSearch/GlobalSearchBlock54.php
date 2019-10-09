<?php

namespace srag\Plugins\SrSearchPDBlock\Block\GlobalSearch;

use ilSrSearchPDBlockPlugin;

/**
 * Class GlobalSearchBlock54
 *
 * @package srag\Plugins\SrSearchPDBlock\Block\GlobalSearch
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class GlobalSearchBlock54 extends BaseGlobalSearchBlock
{

    /**
     * @return string
     */
    public function getBlockType() : string
    {
        return ilSrSearchPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @return bool
     */
    protected function isRepositoryObject() : bool
    {
        return false;
    }
}
