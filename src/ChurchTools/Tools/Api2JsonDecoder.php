<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ChurchTools\Tools;

/**
 * Description of Api2JsonDecoder
 *
 * @author a.schild
 */
class Api2JsonDecoder extends \Symfony\Component\Serializer\Encoder\JsonDecode implements \Symfony\Component\Serializer\Encoder\DecoderInterface
{
    
    /**
     * Decodes data.
     * We intercept the call here to allow fixind non-compliant answers from CT,
     * Currently the privacyPolicyAgreement field should return an object, but
     * when empty it return an empty array.
     *
     * @param string $data    The encoded JSON string to decode
     * @param string $format  Must be set to JsonEncoder::FORMAT
     * @param array  $context An optional set of options for the JSON decoder; see below
     *
     * @return mixed
     *
     * @throws NotEncodableValueException
     *
     * @see https://php.net/json_decode
     */
    public function decode($data, $format, array $context = [])
    {
        $childData= $data;
        $toReplace= "\"privacyPolicyAgreement\":[]";
        $toReplaceWith= "\"privacyPolicyAgreement\":{}";
        
        if (strpos($data, $toReplace)) {
            $childData= str_replace($toReplace, $toReplaceWith, $data);
        }
        return parent::decode($childData, $format, $context);
    }
}
