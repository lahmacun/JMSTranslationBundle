<?php

namespace JMS\TranslationBundle\Translation\Loader;

/**
 * Loader Interface for the bundle.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
use JMS\TranslationBundle\Model\MessageCatalogue;

interface LoaderInterface
{
    /**
     * Loads a MessageCatalogue from the file.
     *
     * The difference to Symfony's interface is that any loader is
     * expected to return the MessageCatalogue from the bundle which
     * contains more translation information.
     *
     * @param mixed  $resource
     * @param string $locale
     * @param string $domain
     * @return MessageCatalogue
     */
    function load($resource, $locale, $domain = 'messages');
}