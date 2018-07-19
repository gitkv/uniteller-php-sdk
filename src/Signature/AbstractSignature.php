<?php
/**
 * Created by Roquie.
 * E-mail: roquie0@gmail.com
 * GitHub: Roquie
 */

namespace Tmconsulting\Uniteller\Signature;


use Tmconsulting\Uniteller\ArraybleInterface;

/**
 * Class Signature
 *
 * @package Tmconsulting\Client
 */
abstract class AbstractSignature implements SignatureInterface, ArraybleInterface
{

    /**
     * Create signature for send payment request.
     *
     * @return string
     */
    public function create()
    {
        $string = join('&', array_map(function ($item) {
            return md5($item);
        }, $this->toArray()));

        return strtoupper(md5($string));
    }
}