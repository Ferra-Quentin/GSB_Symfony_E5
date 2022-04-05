<?php

namespace ContainerEJiVxiE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_Command_DebugFirewall_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.command.debug_firewall.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.security.command.debug_firewall.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:firewall', [], 'Display information about your security firewall(s)', false, function () use ($container): \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand {
            return ($container->privates['security.command.debug_firewall'] ?? $container->load('getSecurity_Command_DebugFirewallService'));
        });
    }
}
