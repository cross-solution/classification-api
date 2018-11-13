<?php
/**
 * ML
 *
 * @filesource
 * @author    Carsten Bleek <bleek@cross-solution.de>
 * @copyright 2013-2018 Cross Solution (http://cross-solution.de)
 * @version   GIT: $Id$
 * @license   https://yawik.org/LICENSE.txt MIT
 */

namespace Classify\Service\Classifier;

use Phpml\Classification\NaiveBayes;
use Phpml\Estimator;

/**
 * Class SentimentAnalysis
 * @package PhpmlExercise\Classification
 */
class SentimentAnalysis implements Estimator {

    protected $classifier;
    protected $transformer;

    public function __construct()
    {
        $this->classifier = new NaiveBayes();
        $this->transformer = new InputTransformator();

    }

    public function train($samples, $labels) {
        $samples = $this->transformer->train($samples);
        $this->classifier->train($samples, $labels);
    }

    public function predict($input) {
        $input = $this->transformer->transform($input);
        return $this->classifier->predict($input);
    }
}
