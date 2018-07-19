<?php
/**
 * Created by Roquie.
 * E-mail: roquie0@gmail.com
 * GitHub: Roquie
 */

namespace Tmconsulting\Uniteller\Signature;

/**
 * Interface SignatureInterface
 *
 * @package Tmconsulting\Client
 */
interface SignatureInterface
{
    /**
     * Create signature for send payment request.
     *
     * @return string
     */
    public function create();

    /**
     * Array params signature
     *
     * @return array
     */
    public function toArray();
}
