<?php
/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 14.12.18
 * Time: 6:45
 */

namespace frontend\models\parser;


abstract class AParser implements Parser
{
    /**
     * @var string content for the parsing
     */
    protected $content = "";

    /**
     * @var string regular expression for the parsing
     */
    protected $pregSearch = '';

    /**
     * parserWeather constructor.
     * @param string $source
     */
    public function __construct($source) {
        $f = str_replace('−','-',file_get_contents($source));
        $this->content = $f;
    }

    /**
     * @return string
     */
    public function getPregSearch() {
        return $this->pregSearch;
    }

    /**
     * @param string $pregSearch
     */
    public function setPregSearch($pregSearch) {
        $this->pregSearch = $pregSearch;
    }
}