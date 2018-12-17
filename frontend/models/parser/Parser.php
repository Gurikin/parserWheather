<?php
/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 14.12.18
 * Time: 6:42
 */

namespace frontend\models\parser;


interface Parser
{
    /**
     * @return string
     */
    public function getPregSearch();

    /**
     * @param string $pregSearch
     */
    public function setPregSearch($pregSearch);

    /**
     * @return array
     */
    public function getWheather();
}