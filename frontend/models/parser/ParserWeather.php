<?php
/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 11.12.18
 * Time: 7:40
 */

namespace frontend\models\parser;


class ParserWeather extends AParser
{
    /**
     * @var array result of parsing
     */
    private $wheather = array();

    /**
     * @return array
     */
    public function getWheather() {
        if (!empty($this->content)) {
            preg_match_all($this->getPregSearch(), $this->content,$this->wheather);
        }
        return $this->wheather;
    }

    /**
     * @return string
     */
    public function getContent() {
        return $this->content;
    }


}