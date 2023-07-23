<?php
namespace CodeRed\LinkOfTheMonth\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
/**
 * Class RandomArrayValueViewHelper
 *
 * @package CodeRed\LinkOfTheMonth\ViewHelpers
 */
class RandomArrayValueViewHelper extends AbstractViewHelper
{
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('array', 'array', '', true);
        $this->registerArgument('count', 'int', '', false,1);
    }

    /**
     * @return mixed|array|null The random element(s) or NULL if the input is empty
     */
    public function render()
    {
        if (empty($this->arguments['array'])) {
            return null;
        }

        if (count($this->arguments['array'])<$this->arguments['count']) {
            $randomItems = $this->arguments['array'];
        }else{

            $randomKeys = array_rand($this->arguments['array'], $this->arguments['count']);

            if ($this->arguments['count'] === 1) {
                return $this->arguments['array'][$randomKeys];
            }

            $randomItems = [];
            foreach ($randomKeys as $key) {
                $randomItems[] = $this->arguments['array'][$key];
            }
        }

        return $randomItems;
    }
}
