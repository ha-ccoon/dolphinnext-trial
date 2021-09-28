<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'simplesamlphp/simplesamlphp';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'gettext/gettext' => 'v4.8.4@58bc0f7f37e78efb0f9758f93d4a0f669f0f84a1',
  'gettext/languages' => '2.6.0@38ea0482f649e0802e475f0ed19fa993bcb7a618',
  'phpfastcache/riak-client' => '3.4.3@d771f75d16196006604a30bb15adc1c6a9b0fcc9',
  'phpmailer/phpmailer' => 'v6.3.0@4a08cf4cdd2c38d12ee2b9fa69e5d235f37a6dcb',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'robrichards/xmlseclibs' => '3.1.1@f8f19e58f26cdb42c54b214ff8a820760292f8df',
  'simplesamlphp/assert' => 'v0.0.13@5429921b320ca4f9d1844225884ac52f649ea1e3',
  'simplesamlphp/composer-module-installer' => 'v1.1.8@45161b5406f3e9c82459d0f9a5a1dba064953cfa',
  'simplesamlphp/saml2' => 'v4.2.1@3bc980feb96ecf57898014c1bb5b26f0859f1316',
  'simplesamlphp/simplesamlphp-module-adfs' => 'v0.9.6@425e5ebbdd097c92fe5265a6b48d32a3095c7237',
  'simplesamlphp/simplesamlphp-module-authcrypt' => 'v0.9.3@9a2c1a761e2d94394a4f2d3499fd6f0853899530',
  'simplesamlphp/simplesamlphp-module-authfacebook' => 'v0.9.3@9152731e939ad4a49e0f06da5f0009ebde0d2b5c',
  'simplesamlphp/simplesamlphp-module-authorize' => 'v0.9.3@0593bfcb84fca9d9133f415246ab8ca51b412c92',
  'simplesamlphp/simplesamlphp-module-authtwitter' => 'v0.9.1@29a15e58061222632fea9eb2c807aef5e2c0d54a',
  'simplesamlphp/simplesamlphp-module-authwindowslive' => 'v0.9.1@f40aecec6c0adaedb6693309840c98cec783876e',
  'simplesamlphp/simplesamlphp-module-authx509' => 'v0.9.8@66525b1ec4145ec8d0d0e9db4534624b6be4c1fb',
  'simplesamlphp/simplesamlphp-module-authyubikey' => 'v0.9.1@8c27bfeb4981d2e6fa40a831e945f40c5a4ad3d2',
  'simplesamlphp/simplesamlphp-module-cas' => 'v0.9.1@63b72e4600550c507cdfc32fdd208ad59a64321e',
  'simplesamlphp/simplesamlphp-module-cdc' => 'v0.9.1@16a5bfac7299e04e5feb472af328e07598708166',
  'simplesamlphp/simplesamlphp-module-consent' => 'v0.9.6@2f84d15e96afb5a32b6d1cff93370f501ca7867d',
  'simplesamlphp/simplesamlphp-module-consentadmin' => 'v0.9.1@466e8d0d751f0080162d78e63ab2e125b24d17a1',
  'simplesamlphp/simplesamlphp-module-discopower' => 'v0.9.1@006c0617610f1bae11cf4d17e8ce4c509239a60e',
  'simplesamlphp/simplesamlphp-module-exampleattributeserver' => 'v1.0.0@63e0323e81c32bc3c9eaa01ea45194bb10153708',
  'simplesamlphp/simplesamlphp-module-expirycheck' => 'v0.9.3@59c59cdf87e2679257b46c07bb4c27666a11cc20',
  'simplesamlphp/simplesamlphp-module-ldap' => 'v0.9.10@78f04cbe41bfb9dcbcdeff4b5f12e67c060e1a77',
  'simplesamlphp/simplesamlphp-module-memcachemonitor' => 'v0.9.2@900b5c6b59913d9013b8dae090841a127ae55ae5',
  'simplesamlphp/simplesamlphp-module-memcookie' => 'v1.2.2@39535304e8d464b7baa1e82cb441fa432947ff57',
  'simplesamlphp/simplesamlphp-module-metarefresh' => 'v0.9.6@e284306a7097297765b5b78a4e28f19f18d4e001',
  'simplesamlphp/simplesamlphp-module-negotiate' => 'v0.9.10@db05ff40399c66e3f14697a8162da6b2fbdab47d',
  'simplesamlphp/simplesamlphp-module-oauth' => 'v0.9.2@d14d7aca6e699ec12b3f4dd0128373faa1a2cc61',
  'simplesamlphp/simplesamlphp-module-preprodwarning' => 'v0.9.2@8e032de33a75eb44857dc06d886ad94ee3af4638',
  'simplesamlphp/simplesamlphp-module-radius' => 'v0.9.3@36bd0f39f9a13f7eb96ead97c97c3634aa1c3f2d',
  'simplesamlphp/simplesamlphp-module-riak' => 'v0.9.1@c1a9d9545cb4e05b9205b34624850bb777aca991',
  'simplesamlphp/simplesamlphp-module-sanitycheck' => 'v0.9.1@15d6664eae73a233c3c4c72fd8a5c2be72b6ed2a',
  'simplesamlphp/simplesamlphp-module-smartattributes' => 'v0.9.1@b45d3ecd916e359a9cae05f9ae9df09b5c42f4e6',
  'simplesamlphp/simplesamlphp-module-sqlauth' => 'v0.9.2@a53475236787630d7872ca97445f7e75f2609257',
  'simplesamlphp/simplesamlphp-module-statistics' => 'v0.9.6@03fb6bdbbf5ce0a0cb257208db79aacac227ac10',
  'simplesamlphp/twig-configurable-i18n' => 'v2.3.4@e2bffc7eed3112a0b3870ef5b4da0fd74c7c4b8a',
  'symfony/cache' => 'v4.4.20@8fa248b0105d962ac279ae973dee2a32ae009dee',
  'symfony/cache-contracts' => 'v1.1.10@8d5489c10ef90aa7413e4921fc3c0520e24cbed7',
  'symfony/config' => 'v4.4.20@98606c6fa1a8f55ff964ccdd704275bf5b9f71b3',
  'symfony/console' => 'v4.4.20@c98349bda966c70d6c08b4cd8658377c94166492',
  'symfony/debug' => 'v4.4.20@157bbec4fd773bae53c5483c50951a5530a2cc16',
  'symfony/dependency-injection' => 'v4.4.20@4b3e341ce4436df9a9abc2914cb120b4d41796d7',
  'symfony/error-handler' => 'v4.4.20@a191550d46b73a527b9d244f185fef439d41cf15',
  'symfony/event-dispatcher' => 'v4.4.20@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v4.4.20@715e7a531bdae109a828f9e91629e5b3b2926beb',
  'symfony/finder' => 'v4.4.20@2543795ab1570df588b9bbd31e1a2bd7037b94f6',
  'symfony/framework-bundle' => 'v4.4.20@5b5aefc0542e2b42f6f3b9b90d6ef2ff75fee19a',
  'symfony/http-client-contracts' => 'v1.1.10@7e86f903f9720d0caa7688f5c29a2de2d77cbb89',
  'symfony/http-foundation' => 'v4.4.20@02d968647fe61b2f419a8dc70c468a9d30a48d3a',
  'symfony/http-kernel' => 'v4.4.20@4f36548465489f293b05406f1770492f6efb8adb',
  'symfony/mime' => 'v4.4.20@6db092f97cd6eee8d4b2026e3a8fa3f576b396d4',
  'symfony/polyfill-ctype' => 'v1.22.1@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/routing' => 'v4.4.20@69919991c845b34626664ddc9b3aef9d09d2a5df',
  'symfony/service-contracts' => 'v1.1.9@b776d18b303a39f56c63747bcb977ad4b27aca26',
  'symfony/var-dumper' => 'v4.4.20@a1eab2f69906dc83c5ddba4632180260d0ab4f7f',
  'symfony/var-exporter' => 'v4.4.20@3a3ea598bba6901d20b58c2579f68700089244ed',
  'symfony/yaml' => 'v4.4.20@29e61305e1c79d25f71060903982ead8f533e267',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.13.1@57e96259776ddcacf1814885fc3950460c8e18ef',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'whitehat101/apr1-md5' => 'v1.0.0@8b261c9fc0481b4e9fa9d01c6ca70867b5d5e819',
  'amphp/amp' => 'v2.5.2@efca2b32a7580087adb8aabbff6be1dc1bb924a9',
  'amphp/byte-stream' => 'v1.8.0@f0c20cf598a958ba2aa8c6e5a71c697d652c7088',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
  'composer/xdebug-handler' => '1.4.5@f28d44c286812c714741478d968104c5e604a1d4',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'felixfbecker/advanced-json-rpc' => 'v3.2.0@06f0b06043c7438959dbdeed8bb3f699a19be22e',
  'felixfbecker/language-server-protocol' => '1.5.1@9d846d1f5cf101deee7a61c8ba7caa0a975cd730',
  'mikey179/vfsstream' => 'v1.6.8@231c73783ebb7dd9ec77916c10037eff5a2b6efe',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'netresearch/jsonmapper' => 'v2.1.0@e0f1e33a71587aca81be5cffbb9746510e1fe04e',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.2@472b687829041c24b25f475e14c2f38a09edf1c2',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'simplesamlphp/simplesamlphp-test-framework' => 'v0.1.2@f54a646a95f7b928d06a36d5f7f8303ac07f09b2',
  'squizlabs/php_codesniffer' => '3.5.8@9d583721a7157ee997f235f327de038e7ea6dac4',
  'symfony/http-client' => 'v4.4.20@67c5af7489b3c2eea771abd973243f5c58f5fb40',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'vimeo/psalm' => '3.18.2@19aa905f7c3c7350569999a93c40ae91ae4e1626',
  'webmozart/glob' => '4.1.0@3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'simplesamlphp/simplesamlphp' => 'v1.19.1@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
