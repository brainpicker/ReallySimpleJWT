<?php

namespace ReallySimpleJWT\Helper;

/**
 * A helper trait to encode and decode json.
 *
 * @author Rob Waller <rdwaller1984@googlemail.com>
 */
trait JsonEncoder
{
    /**
     * Consumes an associative array of data and returns a json string. Will
     * return the string 'false' if it fails to encode.
     *
     * @param array $jsonArray
     * @return string
     */
    public function jsonEncode($jsonArray)
    {
        return (string) json_encode($jsonArray);
    }

    /**
     * Consumes a json string and decodes it, will always return an
     * associative array.
     *
     * @param string $json
     * @return array
     */
    public function jsonDecode($json)
    {
        return (array) json_decode($json, true);
    }
}
