<?php namespace Galdan\Email\Classes\ImapClient;


class Charset
{
    private $outputEncoding;
    private $validEncodings;

    /**
     * Charset constructor.
     *
     * @param string $outputEncoding
     */
    public function __construct($outputEncoding = 'utf-8')
    {
        // check if the mb_ extension is enabled
        if (!extension_loaded('mbstring')) {
            throw new \InvalidArgumentException('The mbstring is required');
        }

        $this->validEncodings = array_map('strtolower', mb_list_encodings());

        // validate the output encoding
        if (!$this->isValidEncoding($outputEncoding)) {
            throw new \InvalidArgumentException('Invalid $outputEncoding passed');
        }

        $this->outputEncoding = $outputEncoding;
    }

    /**
     * Check for valid encoding
     *
     * @param $encoding
     * @return bool
     */
    private function isValidEncoding($encoding)
    {
        return in_array(strtolower($encoding), $this->validEncodings);
    }

    /**
     * Convert the encoding of the passed $string
     *
     * @param $string
     * @param null $inputEncoding
     * @return string
     */
    public function convert($string, $inputEncoding = null)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException('Invalid $string passed');
        }

        // try to "guess" the input encoding
        if ($inputEncoding === null) {
            $inputEncoding = mb_detect_encoding($string);
        }

        // validate the input encoding
        if ($inputEncoding === null || $inputEncoding === false || !$this->isValidEncoding($inputEncoding)) {
            throw new \InvalidArgumentException('Invalid $inputEncoding passed');
        }

        // convert the string and return the result
        $mbSubstituteCharacter = mb_substitute_character();
        mb_substitute_character('none');
        $result = mb_convert_encoding($string, $this->outputEncoding, $inputEncoding);
        mb_substitute_character($mbSubstituteCharacter);

        return $result;
    }
}