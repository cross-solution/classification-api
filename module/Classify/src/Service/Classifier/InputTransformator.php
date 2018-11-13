<?php
/**
 * ML
 *
 * @filesource
 * @copyright 2018 Cross Solution <http://cross-solution.de>
 */

/** */

namespace Classify\Service\Classifier;

use Phpml\FeatureExtraction\TfIdfTransformer;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WordTokenizer;

/**
 * ${CARET}
 *
 * @author Mathias Gelhausen <gelhausen@cross-solution.de>
 * @todo   write test
 */
class InputTransformator
{
    private $vectorizer;
    private $transformer;

    public function __construct()
    {
        $this->vectorizer = new TokenCountVectorizer(new WordTokenizer());
        $this->transformer = new TfIdfTransformer();
    }

    public function train($samples)
    {
        $this->vectorizer->fit($samples);
        $this->vectorizer->transform($samples);

        $this->transformer->fit($samples);
        $this->transformer->transform($samples);

        return $samples;

    }

    public function transform($input)
    {
        $input = [$input];
        $this->vectorizer->transform($input);
        $this->transformer->transform($input);

        return $input;
    }
}
