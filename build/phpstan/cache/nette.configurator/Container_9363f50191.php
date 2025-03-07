<?php
// source: phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon
// source: /Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../larastan/larastan/extension.neon
// source: /Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../nesbot/carbon/extension.neon
// source: /Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../pestphp/pest/extension.neon
// source: /Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-deprecation-rules/rules.neon
// source: /Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/extension.neon
// source: /Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/rules.neon
// source: /Users/mikael/code/nova-time-field/phpstan.neon.dist
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_9363f50191 extends _PHPStan_772f29794\Nette\DI\Container
{
	protected $tags = [
		'phpstan.parser.richParserNodeVisitor' => [
			'04' => true,
			'05' => true,
			'06' => true,
			'07' => true,
			'08' => true,
			'09' => true,
			'010' => true,
			'011' => true,
			'012' => true,
			'013' => true,
			'014' => true,
			'015' => true,
			'016' => true,
			'017' => true,
			'018' => true,
			'019' => true,
			'020' => true,
			'021' => true,
			'022' => true,
			'089' => true,
			'090' => true,
		],
		'phpstan.stubFilesExtension' => ['044' => true, '046' => true, '047' => true, '048' => true, '0516' => true],
		'phpstan.diagnoseExtension' => ['092' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0107' => true,
			'0108' => true,
			'0109' => true,
			'0120' => true,
			'0121' => true,
			'0228' => true,
			'0239' => true,
			'0245' => true,
			'0246' => true,
			'0251' => true,
			'0286' => true,
			'0313' => true,
			'0340' => true,
			'0341' => true,
			'0348' => true,
			'0349' => true,
			'0350' => true,
			'0351' => true,
			'0352' => true,
			'0353' => true,
			'0452' => true,
			'0453' => true,
			'0454' => true,
			'0455' => true,
			'0456' => true,
			'0458' => true,
			'0464' => true,
			'0466' => true,
			'0467' => true,
			'0468' => true,
			'0469' => true,
			'0470' => true,
			'0471' => true,
			'0472' => true,
			'0474' => true,
			'0475' => true,
			'0483' => true,
			'0484' => true,
			'0485' => true,
			'0486' => true,
			'0504' => true,
			'0525' => true,
			'0526' => true,
			'0527' => true,
			'0528' => true,
			'0529' => true,
			'0530' => true,
			'0531' => true,
			'0548' => true,
			'0549' => true,
			'0550' => true,
		],
		'phpstan.broker.methodsClassReflectionExtension' => [
			'0117' => true,
			'0438' => true,
			'0439' => true,
			'0440' => true,
			'0441' => true,
			'0442' => true,
			'0443' => true,
			'0444' => true,
			'0445' => true,
			'0446' => true,
			'0447' => true,
			'0448' => true,
			'0538' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['0118' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'0119' => true,
			'0284' => true,
			'0449' => true,
			'0450' => true,
			'0451' => true,
			'0457' => true,
		],
		'phpstan.broker.operatorTypeSpecifyingExtension' => ['0175' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0188' => true,
			'0189' => true,
			'0190' => true,
			'0191' => true,
			'0192' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0199' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'0221' => true,
			'0222' => true,
			'0225' => true,
			'0226' => true,
			'0230' => true,
			'0231' => true,
			'0233' => true,
			'0234' => true,
			'0236' => true,
			'0238' => true,
			'0240' => true,
			'0243' => true,
			'0244' => true,
			'0253' => true,
			'0254' => true,
			'0256' => true,
			'0257' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0262' => true,
			'0263' => true,
			'0264' => true,
			'0265' => true,
			'0266' => true,
			'0267' => true,
			'0269' => true,
			'0286' => true,
			'0289' => true,
			'0290' => true,
			'0291' => true,
			'0292' => true,
			'0293' => true,
			'0295' => true,
			'0296' => true,
			'0297' => true,
			'0298' => true,
			'0299' => true,
			'0300' => true,
			'0301' => true,
			'0302' => true,
			'0303' => true,
			'0304' => true,
			'0305' => true,
			'0307' => true,
			'0308' => true,
			'0309' => true,
			'0310' => true,
			'0311' => true,
			'0312' => true,
			'0314' => true,
			'0315' => true,
			'0316' => true,
			'0317' => true,
			'0318' => true,
			'0319' => true,
			'0320' => true,
			'0321' => true,
			'0322' => true,
			'0325' => true,
			'0334' => true,
			'0338' => true,
			'0339' => true,
			'0342' => true,
			'0343' => true,
			'0344' => true,
			'0345' => true,
			'0346' => true,
			'0347' => true,
			'0477' => true,
			'0478' => true,
			'0479' => true,
			'0480' => true,
			'0481' => true,
			'0482' => true,
			'0491' => true,
			'0492' => true,
			'0493' => true,
			'0494' => true,
			'0532' => true,
			'0533' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0204' => true,
			'0220' => true,
			'0235' => true,
			'0273' => true,
			'0283' => true,
			'0287' => true,
			'0288' => true,
			'0306' => true,
			'0323' => true,
			'0324' => true,
			'0326' => true,
			'0327' => true,
			'0328' => true,
			'0329' => true,
			'0330' => true,
			'0331' => true,
			'0332' => true,
			'0333' => true,
			'0335' => true,
			'0337' => true,
			'0487' => true,
			'0488' => true,
			'0489' => true,
			'0490' => true,
			'0545' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0223' => true, '0268' => true, '0270' => true],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0224' => true,
			'0227' => true,
			'0229' => true,
			'0242' => true,
			'0348' => true,
			'0354' => true,
			'0459' => true,
			'0460' => true,
			'0461' => true,
			'0462' => true,
			'0463' => true,
			'0465' => true,
			'0473' => true,
			'0495' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0241' => true,
			'0247' => true,
			'0250' => true,
			'0279' => true,
			'0280' => true,
			'0281' => true,
			'0282' => true,
			'0285' => true,
		],
		'phpstan.dynamicMethodThrowTypeExtension' => ['0248' => true, '0249' => true, '0252' => true],
		'phpstan.functionParameterOutTypeExtension' => ['0271' => true, '0272' => true, '0274' => true],
		'phpstan.functionParameterClosureTypeExtension' => ['0275' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0294' => true, '0546' => true],
		'phpstan.rules.rule' => [
			'0365' => true,
			'0366' => true,
			'0367' => true,
			'0368' => true,
			'0369' => true,
			'0370' => true,
			'0371' => true,
			'0372' => true,
			'0373' => true,
			'0374' => true,
			'0375' => true,
			'0376' => true,
			'0377' => true,
			'0378' => true,
			'0379' => true,
			'0380' => true,
			'0381' => true,
			'0382' => true,
			'0383' => true,
			'0384' => true,
			'0385' => true,
			'0387' => true,
			'0388' => true,
			'0389' => true,
			'0390' => true,
			'0391' => true,
			'0392' => true,
			'0393' => true,
			'0394' => true,
			'0395' => true,
			'0396' => true,
			'0397' => true,
			'0398' => true,
			'0399' => true,
			'0400' => true,
			'0401' => true,
			'0402' => true,
			'0403' => true,
			'0411' => true,
			'0412' => true,
			'0413' => true,
			'0414' => true,
			'0415' => true,
			'0416' => true,
			'0417' => true,
			'0418' => true,
			'0419' => true,
			'0420' => true,
			'0421' => true,
			'0422' => true,
			'0423' => true,
			'0424' => true,
			'0425' => true,
			'0426' => true,
			'0427' => true,
			'0428' => true,
			'0429' => true,
			'0430' => true,
			'0433' => true,
			'0434' => true,
			'0435' => true,
			'0436' => true,
			'0498' => true,
			'0499' => true,
			'0500' => true,
			'0501' => true,
			'0502' => true,
			'0512' => true,
			'0513' => true,
			'0514' => true,
			'0555' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.100' => true,
			'rules.101' => true,
			'rules.102' => true,
			'rules.103' => true,
			'rules.104' => true,
			'rules.105' => true,
			'rules.106' => true,
			'rules.107' => true,
			'rules.108' => true,
			'rules.109' => true,
			'rules.11' => true,
			'rules.110' => true,
			'rules.111' => true,
			'rules.112' => true,
			'rules.113' => true,
			'rules.114' => true,
			'rules.115' => true,
			'rules.116' => true,
			'rules.117' => true,
			'rules.118' => true,
			'rules.119' => true,
			'rules.12' => true,
			'rules.120' => true,
			'rules.121' => true,
			'rules.122' => true,
			'rules.123' => true,
			'rules.124' => true,
			'rules.125' => true,
			'rules.126' => true,
			'rules.127' => true,
			'rules.128' => true,
			'rules.129' => true,
			'rules.13' => true,
			'rules.130' => true,
			'rules.131' => true,
			'rules.132' => true,
			'rules.133' => true,
			'rules.134' => true,
			'rules.135' => true,
			'rules.136' => true,
			'rules.137' => true,
			'rules.138' => true,
			'rules.139' => true,
			'rules.14' => true,
			'rules.140' => true,
			'rules.141' => true,
			'rules.142' => true,
			'rules.143' => true,
			'rules.144' => true,
			'rules.145' => true,
			'rules.146' => true,
			'rules.147' => true,
			'rules.148' => true,
			'rules.149' => true,
			'rules.15' => true,
			'rules.150' => true,
			'rules.151' => true,
			'rules.152' => true,
			'rules.153' => true,
			'rules.154' => true,
			'rules.155' => true,
			'rules.156' => true,
			'rules.157' => true,
			'rules.158' => true,
			'rules.159' => true,
			'rules.16' => true,
			'rules.160' => true,
			'rules.161' => true,
			'rules.162' => true,
			'rules.163' => true,
			'rules.164' => true,
			'rules.165' => true,
			'rules.166' => true,
			'rules.167' => true,
			'rules.168' => true,
			'rules.169' => true,
			'rules.17' => true,
			'rules.170' => true,
			'rules.171' => true,
			'rules.172' => true,
			'rules.173' => true,
			'rules.174' => true,
			'rules.175' => true,
			'rules.176' => true,
			'rules.177' => true,
			'rules.178' => true,
			'rules.179' => true,
			'rules.18' => true,
			'rules.180' => true,
			'rules.181' => true,
			'rules.182' => true,
			'rules.183' => true,
			'rules.184' => true,
			'rules.185' => true,
			'rules.186' => true,
			'rules.187' => true,
			'rules.188' => true,
			'rules.189' => true,
			'rules.19' => true,
			'rules.190' => true,
			'rules.191' => true,
			'rules.192' => true,
			'rules.193' => true,
			'rules.194' => true,
			'rules.195' => true,
			'rules.196' => true,
			'rules.197' => true,
			'rules.198' => true,
			'rules.199' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.200' => true,
			'rules.201' => true,
			'rules.202' => true,
			'rules.203' => true,
			'rules.204' => true,
			'rules.205' => true,
			'rules.206' => true,
			'rules.207' => true,
			'rules.208' => true,
			'rules.209' => true,
			'rules.21' => true,
			'rules.210' => true,
			'rules.211' => true,
			'rules.212' => true,
			'rules.213' => true,
			'rules.214' => true,
			'rules.215' => true,
			'rules.216' => true,
			'rules.217' => true,
			'rules.218' => true,
			'rules.219' => true,
			'rules.22' => true,
			'rules.220' => true,
			'rules.221' => true,
			'rules.222' => true,
			'rules.223' => true,
			'rules.224' => true,
			'rules.225' => true,
			'rules.226' => true,
			'rules.227' => true,
			'rules.228' => true,
			'rules.229' => true,
			'rules.23' => true,
			'rules.230' => true,
			'rules.231' => true,
			'rules.232' => true,
			'rules.233' => true,
			'rules.234' => true,
			'rules.235' => true,
			'rules.236' => true,
			'rules.237' => true,
			'rules.238' => true,
			'rules.239' => true,
			'rules.24' => true,
			'rules.240' => true,
			'rules.241' => true,
			'rules.242' => true,
			'rules.243' => true,
			'rules.244' => true,
			'rules.245' => true,
			'rules.246' => true,
			'rules.247' => true,
			'rules.248' => true,
			'rules.249' => true,
			'rules.25' => true,
			'rules.250' => true,
			'rules.251' => true,
			'rules.252' => true,
			'rules.253' => true,
			'rules.254' => true,
			'rules.255' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.45' => true,
			'rules.46' => true,
			'rules.47' => true,
			'rules.48' => true,
			'rules.49' => true,
			'rules.5' => true,
			'rules.50' => true,
			'rules.51' => true,
			'rules.52' => true,
			'rules.53' => true,
			'rules.54' => true,
			'rules.55' => true,
			'rules.56' => true,
			'rules.57' => true,
			'rules.58' => true,
			'rules.59' => true,
			'rules.6' => true,
			'rules.60' => true,
			'rules.61' => true,
			'rules.62' => true,
			'rules.63' => true,
			'rules.64' => true,
			'rules.65' => true,
			'rules.66' => true,
			'rules.67' => true,
			'rules.68' => true,
			'rules.69' => true,
			'rules.7' => true,
			'rules.70' => true,
			'rules.71' => true,
			'rules.72' => true,
			'rules.73' => true,
			'rules.74' => true,
			'rules.75' => true,
			'rules.76' => true,
			'rules.77' => true,
			'rules.78' => true,
			'rules.79' => true,
			'rules.8' => true,
			'rules.80' => true,
			'rules.81' => true,
			'rules.82' => true,
			'rules.83' => true,
			'rules.84' => true,
			'rules.85' => true,
			'rules.86' => true,
			'rules.87' => true,
			'rules.88' => true,
			'rules.89' => true,
			'rules.9' => true,
			'rules.90' => true,
			'rules.91' => true,
			'rules.92' => true,
			'rules.93' => true,
			'rules.94' => true,
			'rules.95' => true,
			'rules.96' => true,
			'rules.97' => true,
			'rules.98' => true,
			'rules.99' => true,
		],
		'phpstan.collector' => [
			'0404' => true,
			'0405' => true,
			'0406' => true,
			'0407' => true,
			'0408' => true,
			'0409' => true,
			'0410' => true,
			'0431' => true,
			'0432' => true,
			'0518' => true,
			'0519' => true,
			'0520' => true,
			'0521' => true,
			'0522' => true,
		],
		'phpstan.phpDoc.typeNodeResolverExtension' => [
			'0496' => true,
			'0497' => true,
			'0503' => true,
			'0505' => true,
			'0544' => true,
		],
		'phpstan.deprecations.deprecatedScopeResolver' => ['0542' => true],
		'phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension' => ['0547' => true],
	];

	protected $types = ['container' => '_PHPStan_772f29794\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_772f29794\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'0142',
				'0143',
				'0144',
				'0160',
				'0176',
				'0365',
				'0366',
				'0367',
				'0368',
				'0369',
				'0370',
				'0371',
				'0372',
				'0373',
				'0374',
				'0375',
				'0376',
				'0377',
				'0378',
				'0379',
				'0380',
				'0381',
				'0382',
				'0383',
				'0384',
				'0385',
				'0387',
				'0388',
				'0389',
				'0390',
				'0391',
				'0392',
				'0393',
				'0394',
				'0395',
				'0396',
				'0397',
				'0398',
				'0399',
				'0400',
				'0401',
				'0402',
				'0403',
				'0411',
				'0412',
				'0413',
				'0414',
				'0415',
				'0416',
				'0417',
				'0418',
				'0419',
				'0420',
				'0421',
				'0422',
				'0423',
				'0424',
				'0425',
				'0426',
				'0427',
				'0428',
				'0429',
				'0430',
				'0433',
				'0434',
				'0435',
				'0436',
				'0437',
				'0498',
				'0499',
				'0500',
				'0501',
				'0502',
				'0512',
				'0513',
				'0514',
				'0517',
				'0543',
				'0555',
				'0556',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
				'rules.45',
				'rules.46',
				'rules.47',
				'rules.48',
				'rules.49',
				'rules.50',
				'rules.51',
				'rules.52',
				'rules.53',
				'rules.54',
				'rules.55',
				'rules.56',
				'rules.57',
				'rules.58',
				'rules.59',
				'rules.60',
				'rules.61',
				'rules.62',
				'rules.63',
				'rules.64',
				'rules.65',
				'rules.66',
				'rules.67',
				'rules.68',
				'rules.69',
				'rules.70',
				'rules.71',
				'rules.72',
				'rules.73',
				'rules.74',
				'rules.75',
				'rules.76',
				'rules.77',
				'rules.78',
				'rules.79',
				'rules.80',
				'rules.81',
				'rules.82',
				'rules.83',
				'rules.84',
				'rules.85',
				'rules.86',
				'rules.87',
				'rules.88',
				'rules.89',
				'rules.90',
				'rules.91',
				'rules.92',
				'rules.93',
				'rules.94',
				'rules.95',
				'rules.96',
				'rules.97',
				'rules.98',
				'rules.99',
				'rules.100',
				'rules.101',
				'rules.102',
				'rules.103',
				'rules.104',
				'rules.105',
				'rules.106',
				'rules.107',
				'rules.108',
				'rules.109',
				'rules.110',
				'rules.111',
				'rules.112',
				'rules.113',
				'rules.114',
				'rules.115',
				'rules.116',
				'rules.117',
				'rules.118',
				'rules.119',
				'rules.120',
				'rules.121',
				'rules.122',
				'rules.123',
				'rules.124',
				'rules.125',
				'rules.126',
				'rules.127',
				'rules.128',
				'rules.129',
				'rules.130',
				'rules.131',
				'rules.132',
				'rules.133',
				'rules.134',
				'rules.135',
				'rules.136',
				'rules.137',
				'rules.138',
				'rules.139',
				'rules.140',
				'rules.141',
				'rules.142',
				'rules.143',
				'rules.144',
				'rules.145',
				'rules.146',
				'rules.147',
				'rules.148',
				'rules.149',
				'rules.150',
				'rules.151',
				'rules.152',
				'rules.153',
				'rules.154',
				'rules.155',
				'rules.156',
				'rules.157',
				'rules.158',
				'rules.159',
				'rules.160',
				'rules.161',
				'rules.162',
				'rules.163',
				'rules.164',
				'rules.165',
				'rules.166',
				'rules.167',
				'rules.168',
				'rules.169',
				'rules.170',
				'rules.171',
				'rules.172',
				'rules.173',
				'rules.174',
				'rules.175',
				'rules.176',
				'rules.177',
				'rules.178',
				'rules.179',
				'rules.180',
				'rules.181',
				'rules.182',
				'rules.183',
				'rules.184',
				'rules.185',
				'rules.186',
				'rules.187',
				'rules.188',
				'rules.189',
				'rules.190',
				'rules.191',
				'rules.192',
				'rules.193',
				'rules.194',
				'rules.195',
				'rules.196',
				'rules.197',
				'rules.198',
				'rules.199',
				'rules.200',
				'rules.201',
				'rules.202',
				'rules.203',
				'rules.204',
				'rules.205',
				'rules.206',
				'rules.207',
				'rules.208',
				'rules.209',
				'rules.210',
				'rules.211',
				'rules.212',
				'rules.213',
				'rules.214',
				'rules.215',
				'rules.216',
				'rules.217',
				'rules.218',
				'rules.219',
				'rules.220',
				'rules.221',
				'rules.222',
				'rules.223',
				'rules.224',
				'rules.225',
				'rules.226',
				'rules.227',
				'rules.228',
				'rules.229',
				'rules.230',
				'rules.231',
				'rules.232',
				'rules.233',
				'rules.234',
				'rules.235',
				'rules.236',
				'rules.237',
				'rules.238',
				'rules.239',
				'rules.240',
				'rules.241',
				'rules.242',
				'rules.243',
				'rules.244',
				'rules.245',
				'rules.246',
				'rules.247',
				'rules.248',
				'rules.249',
				'rules.250',
				'rules.251',
				'rules.252',
				'rules.253',
				'rules.254',
				'rules.255',
			],
		],
		'PHPStan\Rules\Debug\DebugScopeRule' => [['rules.0']],
		'PHPStan\Rules\Debug\DumpPhpDocTypeRule' => [['rules.1']],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['rules.2']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['rules.3']],
		'PHPStan\Rules\Api\ApiInstanceofRule' => [['rules.4']],
		'PHPStan\Rules\Api\ApiInstanceofTypeRule' => [['rules.5']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['rules.6']],
		'PHPStan\Rules\Api\ApiClassConstFetchRule' => [['rules.7']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['rules.8']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['rules.9']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['rules.10']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['rules.11']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['rules.12']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['rules.13']],
		'PHPStan\Rules\Api\GetTemplateTypeRule' => [['rules.14']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['rules.15']],
		'PHPStan\Rules\Api\OldPhpParser4ClassRule' => [['rules.16']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['rules.17']],
		'PHPStan\Rules\Api\RuntimeReflectionInstantiationRule' => [['rules.18']],
		'PHPStan\Rules\Api\RuntimeReflectionFunctionRule' => [['rules.19']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['rules.20']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['rules.21']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['rules.22']],
		'PHPStan\Rules\Classes\AllowedSubTypesRule' => [['rules.23']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['rules.24']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['rules.25']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['rules.26']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['rules.27']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['rules.28']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['rules.29']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['rules.30']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['rules.31']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['rules.32']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['rules.33']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['rules.34']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['rules.35']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['rules.36']],
		'PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule' => [['rules.37']],
		'PHPStan\Rules\Classes\LocalTypeTraitAliasesRule' => [['rules.38']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['rules.39']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['rules.40']],
		'PHPStan\Rules\Classes\ReadOnlyClassRule' => [['rules.41']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['rules.42']],
		'PHPStan\Rules\Constants\ClassAsClassConstantRule' => [['rules.43']],
		'PHPStan\Rules\Constants\DynamicClassConstantFetchRule' => [['rules.44']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['rules.45']],
		'PHPStan\Rules\Constants\MagicConstantContextRule' => [['rules.46']],
		'PHPStan\Rules\Constants\NativeTypedClassConstantRule' => [['rules.47']],
		'PHPStan\Rules\Constants\FinalPrivateConstantRule' => [['rules.48']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['rules.49']],
		'PHPStan\Rules\Exceptions\NoncapturingCatchRule' => [['rules.50']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['rules.51']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['rules.52']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['rules.53']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['rules.54']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['rules.55']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['rules.56']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['rules.57']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['rules.58']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['rules.59']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['rules.60']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['rules.61']],
		'PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule' => [['rules.62']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['rules.63']],
		'PHPStan\Rules\Functions\PrintfArrayParametersRule' => [['rules.64']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['rules.65']],
		'PHPStan\Rules\Functions\RedefinedParametersRule' => [['rules.66']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['rules.67']],
		'PHPStan\Rules\Ignore\IgnoreParseErrorRule' => [['rules.68']],
		'PHPStan\Rules\Functions\VariadicParametersDeclarationRule' => [['rules.69']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['rules.70']],
		'PHPStan\Rules\Keywords\DeclareStrictTypesRule' => [['rules.71']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['rules.72']],
		'PHPStan\Rules\Methods\AbstractPrivateMethodRule' => [['rules.73']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['rules.74']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['rules.75']],
		'PHPStan\Rules\Methods\ConsistentConstructorRule' => [['rules.76']],
		'PHPStan\Rules\Methods\ConstructorReturnTypeRule' => [['rules.77']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['rules.78']],
		'PHPStan\Rules\Methods\FinalPrivateMethodRule' => [['rules.79']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['rules.80']],
		'PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule' => [['rules.81']],
		'PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule' => [['rules.82']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['rules.83']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['rules.84']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['rules.85']],
		'PHPStan\Rules\Names\UsedNamesRule' => [['rules.86']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['rules.87']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['rules.88']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['rules.89']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['rules.90']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule' => [['rules.91']],
		'PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule' => [['rules.92']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['rules.93']],
		'PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule' => [['rules.94']],
		'PHPStan\Rules\Properties\PropertiesInInterfaceRule' => [['rules.95']],
		'PHPStan\Rules\Properties\PropertyAssignRefRule' => [['rules.96']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['rules.97']],
		'PHPStan\Rules\Properties\PropertyHookAttributesRule' => [['rules.98']],
		'PHPStan\Rules\Properties\PropertyInClassRule' => [['rules.99']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['rules.100']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule' => [['rules.101']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['rules.102']],
		'PHPStan\Rules\Traits\ConflictingTraitConstantsRule' => [['rules.103']],
		'PHPStan\Rules\Traits\ConstantsInTraitsRule' => [['rules.104']],
		'PHPStan\Rules\Traits\TraitAttributesRule' => [['rules.105']],
		'PHPStan\Rules\Types\InvalidTypesInUnionRule' => [['rules.106']],
		'PHPStan\Rules\Variables\UnsetRule' => [['rules.107']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['rules.108']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [['rules.109']],
		'PHPStan\Rules\Constants\ConstantRule' => [['rules.110']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [['rules.111']],
		'PHPStan\Rules\Variables\EmptyRule' => [['rules.112']],
		'PHPStan\Rules\Variables\IssetRule' => [['rules.113']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['rules.114']],
		'PHPStan\Rules\Cast\EchoRule' => [['rules.115']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [['rules.116']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [['rules.117']],
		'PHPStan\Rules\Cast\PrintRule' => [['rules.118']],
		'PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule' => [['rules.119']],
		'PHPStan\Rules\Classes\MethodTagRule' => [['rules.120']],
		'PHPStan\Rules\Classes\MethodTagTraitRule' => [['rules.121']],
		'PHPStan\Rules\Classes\MethodTagTraitUseRule' => [['rules.122']],
		'PHPStan\Rules\Classes\PropertyTagRule' => [['rules.123']],
		'PHPStan\Rules\Classes\PropertyTagTraitRule' => [['rules.124']],
		'PHPStan\Rules\Classes\PropertyTagTraitUseRule' => [['rules.125']],
		'PHPStan\Rules\Classes\MixinTraitRule' => [['rules.126']],
		'PHPStan\Rules\Classes\MixinTraitUseRule' => [['rules.127']],
		'PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule' => [['rules.128']],
		'PHPStan\Rules\Constants\ValueAssignedToClassConstantRule' => [['rules.129']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [['rules.130']],
		'PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule' => [['rules.131']],
		'PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule' => [['rules.132']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [['rules.133']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [['rules.134']],
		'PHPStan\Rules\Generics\EnumAncestorsRule' => [['rules.135']],
		'PHPStan\Rules\Generics\EnumTemplateTypeRule' => [['rules.136']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [['rules.137']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [['rules.138']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [['rules.139']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [['rules.140']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [['rules.141']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeRule' => [['rules.142']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule' => [['rules.143']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [['rules.144']],
		'PHPStan\Rules\Generics\PropertyVarianceRule' => [['rules.145']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [['rules.146']],
		'PHPStan\Rules\Generics\UsedTraitsRule' => [['rules.147']],
		'PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule' => [['rules.148']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [['rules.149']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [['rules.150']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [['rules.151']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [['rules.152']],
		'PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule' => [['rules.153']],
		'PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule' => [['rules.154']],
		'PHPStan\Rules\PhpDoc\FunctionAssertRule' => [['rules.155']],
		'PHPStan\Rules\PhpDoc\MethodAssertRule' => [['rules.156']],
		'PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule' => [['rules.157']],
		'PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule' => [['rules.158']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [['rules.159']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule' => [['rules.160']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [['rules.161']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [['rules.162']],
		'PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule' => [['rules.163']],
		'PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule' => [['rules.164']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [['rules.165']],
		'PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule' => [['rules.166']],
		'PHPStan\Rules\Classes\RequireImplementsRule' => [['rules.167']],
		'PHPStan\Rules\Classes\RequireExtendsRule' => [['rules.168']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule' => [['rules.169']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule' => [['rules.170']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule' => [['rules.171']],
		'PHPStan\Rules\Pure\PureFunctionRule' => [['rules.172']],
		'PHPStan\Rules\Pure\PureMethodRule' => [['rules.173']],
		'PHPStan\Rules\Arrays\ArrayDestructuringRule' => [['rules.174']],
		'PHPStan\Rules\Arrays\ArrayUnpackingRule' => [['rules.175']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [['rules.176']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [['rules.177']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [['rules.178']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [['rules.179']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [['rules.180']],
		'PHPStan\Rules\Exceptions\ThrowExprTypeRule' => [['rules.181']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [['rules.182']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [['rules.183']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['rules.184']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [['rules.185']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [['rules.186']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [['rules.187']],
		'PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule' => [['rules.188']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule' => [['rules.189']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule' => [['rules.190']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule' => [['rules.191']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule' => [['rules.192']],
		'PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule' => [['rules.193']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [['rules.194']],
		'PHPStan\Rules\Variables\ParameterOutAssignedTypeRule' => [['rules.195']],
		'PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule' => [['rules.196']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [['rules.197']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [['rules.198']],
		'PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule' => [['rules.199']],
		'PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule' => [['rules.200']],
		'PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule' => [['rules.201']],
		'PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule' => [['rules.202']],
		'PHPStan\Rules\DeadCode\NoopRule' => [['rules.203']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [['rules.204']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['rules.205']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['rules.206']],
		'PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule' => [['rules.207']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule' => [['rules.208']],
		'PHPStan\Rules\Functions\UselessFunctionReturnValueRule' => [['rules.209']],
		'PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule' => [['rules.210']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule' => [['rules.211']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule' => [['rules.212']],
		'PHPStan\Rules\Methods\NullsafeMethodCallRule' => [['rules.213']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [['rules.214']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [['rules.215']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [['rules.216']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule' => [['rules.217']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule' => [['rules.218']],
		'PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule' => [['rules.219']],
		'PHPStan\Rules\Traits\NotAnalysedTraitRule' => [['rules.220']],
		'PHPStan\Rules\DateTimeInstantiationRule' => [['rules.221']],
		'PHPStan\Rules\Functions\CallUserFuncRule' => [['rules.222']],
		'PHPStan\Rules\Functions\ParameterCastableToStringRule' => [['rules.223']],
		'PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule' => [['rules.224']],
		'PHPStan\Rules\Functions\SortParameterCastableToStringRule' => [['rules.225']],
		'PHPStan\Rules\Regexp\RegularExpressionQuotingRule' => [['rules.226']],
		'Larastan\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule' => [['rules.227']],
		'Larastan\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule' => [['rules.228']],
		'Larastan\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule' => [['rules.229']],
		'Larastan\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule' => [['rules.230']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [['rules.231']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [['rules.232']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [['rules.233']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [['rules.234']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [['rules.235']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [['rules.236']],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [['rules.237']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [['rules.238']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [['rules.239']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [['rules.240']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [['rules.241']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule' => [['rules.242']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule' => [['rules.243']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule' => [['rules.244']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule' => [['rules.245']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [['rules.246']],
		'PHPStan\Rules\PHPUnit\AssertSameBooleanExpectedRule' => [['rules.247']],
		'PHPStan\Rules\PHPUnit\AssertSameNullExpectedRule' => [['rules.248']],
		'PHPStan\Rules\PHPUnit\AssertSameWithCountRule' => [['rules.249']],
		'PHPStan\Rules\PHPUnit\ClassCoversExistsRule' => [['rules.250']],
		'PHPStan\Rules\PHPUnit\ClassMethodCoversExistsRule' => [['rules.251']],
		'PHPStan\Rules\PHPUnit\MockMethodCallRule' => [['rules.252']],
		'PHPStan\Rules\PHPUnit\NoMissingSpaceInClassAnnotationRule' => [['rules.253']],
		'PHPStan\Rules\PHPUnit\NoMissingSpaceInMethodAnnotationRule' => [['rules.254']],
		'PHPStan\Rules\PHPUnit\ShouldCallParentMethodsRule' => [['rules.255']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [
			[
				'03',
				'04',
				'05',
				'06',
				'07',
				'08',
				'09',
				'010',
				'011',
				'012',
				'013',
				'014',
				'015',
				'016',
				'017',
				'018',
				'019',
				'020',
				'021',
				'022',
				'074',
				'089',
				'090',
				'099',
			],
		],
		'PhpParser\NodeVisitor' => [
			[
				'03',
				'04',
				'05',
				'06',
				'07',
				'08',
				'09',
				'010',
				'011',
				'012',
				'013',
				'014',
				'015',
				'016',
				'017',
				'018',
				'019',
				'020',
				'021',
				'022',
				'074',
				'089',
				'090',
				'099',
			],
		],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PHPStan\Parser\AnonymousClassVisitor' => [['04']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['05']],
		'PHPStan\Parser\ArrayFindArgVisitor' => [['06']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['07']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['08']],
		'PHPStan\Parser\ClosureArgVisitor' => [['09']],
		'PHPStan\Parser\ClosureBindToVarVisitor' => [['010']],
		'PHPStan\Parser\ClosureBindArgVisitor' => [['011']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['012']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['013']],
		'PHPStan\Parser\MagicConstantParamDefaultVisitor' => [['014']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['015']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['016']],
		'PHPStan\Parser\StandaloneThrowExprVisitor' => [['017']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['018']],
		'PHPStan\Parser\LastConditionVisitor' => [['019']],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['020']],
		'PHPStan\Parser\VariadicMethodsVisitor' => [['021']],
		'PHPStan\Parser\VariadicFunctionsVisitor' => [['022']],
		'PHPStan\Node\Printer\ExprPrinter' => [['023']],
		'PhpParser\PrettyPrinter\Standard' => [1 => ['024']],
		'PhpParser\PrettyPrinterAbstract' => [1 => ['024']],
		'PhpParser\PrettyPrinter' => [1 => ['024']],
		'PHPStan\Node\Printer\Printer' => [['024']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['025']],
		'PHPStan\Php\PhpVersion' => [['026']],
		'PHPStan\Php\PhpVersionFactory' => [['027']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['028']],
		'PHPStan\Php\ComposerPhpVersionFactory' => [['029']],
		'PHPStan\PhpDocParser\ParserConfig' => [['030']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['031']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['032']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['033']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['034']],
		'PHPStan\PhpDocParser\Printer\Printer' => [['035']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['036']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['037']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['038']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['039']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['040']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['041']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['042']],
		'PHPStan\PhpDoc\StubValidator' => [['043']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['044', '046', '047', '048', '0516']],
		'PHPStan\PhpDoc\SocketSelectStubFilesExtension' => [['044']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['045']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['045']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['046']],
		'PHPStan\PhpDoc\ReflectionClassStubFilesExtension' => [['047']],
		'PHPStan\PhpDoc\ReflectionEnumStubFilesExtension' => [['048']],
		'PHPStan\Analyser\Analyser' => [['049']],
		'PHPStan\Analyser\AnalyserResultFinalizer' => [['050']],
		'PHPStan\Analyser\FileAnalyser' => [['051']],
		'PHPStan\Analyser\IgnoreErrorExtensionProvider' => [['052']],
		'PHPStan\Analyser\LocalIgnoresProcessor' => [['053']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['054']],
		'PHPStan\Analyser\Ignore\IgnoredErrorHelper' => [['055']],
		'PHPStan\Analyser\Ignore\IgnoreLexer' => [['056']],
		'PHPStan\Analyser\InternalScopeFactory' => [['057']],
		'PHPStan\Analyser\LazyInternalScopeFactory' => [['057']],
		'PHPStan\Analyser\ScopeFactory' => [['058']],
		'PHPStan\Analyser\NodeScopeResolver' => [['059']],
		'PHPStan\Analyser\ConstantResolver' => [['060']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['061']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['062']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['063']],
		'PHPStan\Analyser\RicherScopeGetTypeHelper' => [['064']],
		'PHPStan\Cache\Cache' => [['065']],
		'PHPStan\Collectors\Registry' => [['066']],
		'PHPStan\Collectors\RegistryFactory' => [['067']],
		'PHPStan\Command\AnalyseApplication' => [['068']],
		'PHPStan\Command\AnalyserRunner' => [['069']],
		'PHPStan\Command\FixerApplication' => [['070']],
		'PHPStan\Dependency\DependencyResolver' => [['071']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['072']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['073']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['074']],
		'PHPStan\DependencyInjection\Container' => [['075'], ['076']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['076']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['077']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['078']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['079']],
		'PHPStan\DependencyInjection\Type\ParameterOutTypeExtensionProvider' => [['080']],
		'PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider' => [['081']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['082']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['083']],
		'PHPStan\DependencyInjection\Type\ParameterClosureTypeExtensionProvider' => [['084']],
		'PHPStan\File\FileHelper' => [['085']],
		'PHPStan\File\FileExcluderFactory' => [['086']],
		'PHPStan\File\FileExcluderRawFactory' => [['087']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['088']],
		'PHPStan\Parser\DeclarePositionVisitor' => [['089']],
		'PHPStan\Parser\ImmediatelyInvokedClosureVisitor' => [['090']],
		'PHPStan\Parallel\ParallelAnalyser' => [['091']],
		'PHPStan\Diagnose\DiagnoseExtension' => [0 => ['092'], 2 => [1 => 'phpstanDiagnoseExtension']],
		'PHPStan\Parallel\Scheduler' => [['092']],
		'PHPStan\Process\CpuCoreCounter' => [['093']],
		'PHPStan\Reflection\AttributeReflectionFactory' => [['094']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['095']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['096']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [
			[
				'097',
				'0111',
				'0113',
				'0115',
				'0117',
				'0438',
				'0439',
				'0440',
				'0441',
				'0442',
				'0443',
				'0444',
				'0445',
				'0446',
				'0447',
				'0448',
				'0538',
			],
		],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['097']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [
			['098', '0112', '0114', '0115', '0119', '0284', '0449', '0450', '0451', '0457'],
		],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['098']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['099']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['0100']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['0101']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['0102']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['0103']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['0104']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['0105']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['0106']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'0107',
				'0108',
				'0109',
				'0120',
				'0121',
				'0228',
				'0239',
				'0245',
				'0246',
				'0251',
				'0286',
				'0313',
				'0340',
				'0341',
				'0348',
				'0349',
				'0350',
				'0351',
				'0352',
				'0353',
				'0452',
				'0453',
				'0454',
				'0455',
				'0456',
				'0458',
				'0464',
				'0466',
				'0467',
				'0468',
				'0469',
				'0470',
				'0471',
				'0472',
				'0474',
				'0475',
				'0483',
				'0484',
				'0485',
				'0486',
				'0504',
				'0525',
				'0526',
				'0527',
				'0528',
				'0529',
				'0530',
				'0531',
				'0548',
				'0549',
				'0550',
			],
		],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension' => [
			['0107', '0108'],
		],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension' => [['0109']],
		'PHPStan\Reflection\ConstructorsHelper' => [['0110']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension' => [['0111']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension' => [['0112']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['0113']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['0114']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['0115']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['0116']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['0117']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['0118']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['0118']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['0119']],
		'PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension' => [['0120', '0121']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['0122']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['0123']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['0124']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['0128'], ['0125', '0126']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['0125']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['0126']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['0127']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0129']],
		'PHPStan\Rules\AttributesCheck' => [['0130']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0131']],
		'PHPStan\Rules\ClassNameCheck' => [['0132']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0133']],
		'PHPStan\Rules\ClassForbiddenNameCheck' => [['0134']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0135']],
		'PHPStan\Rules\Classes\MethodTagCheck' => [['0136']],
		'PHPStan\Rules\Classes\MixinCheck' => [['0137']],
		'PHPStan\Rules\Classes\PropertyTagCheck' => [['0138']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0139']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0140']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0141'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0141']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0142']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0143']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule' => [['0144']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0145']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0146']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0147']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0148']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0149']],
		'PHPStan\Rules\ParameterCastableToStringCheck' => [['0150']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0151']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0152']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0153']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeCheck' => [['0154']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0155']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0156']],
		'PHPStan\Rules\IssetCheck' => [['0157']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0158']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0159']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0160']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0161']],
		'PHPStan\Rules\Methods\MethodVisibilityComparisonHelper' => [['0162']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0163']],
		'PHPStan\Rules\NullsafeCheck' => [['0164']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0165']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0165']],
		'PHPStan\Rules\Methods\AlwaysUsedMethodExtensionProvider' => [['0166']],
		'PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider' => [['0166']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0167']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0168']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0169']],
		'PHPStan\Rules\PhpDoc\GenericCallableRuleHelper' => [['0170']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck' => [['0171']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0172']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0173']],
		'PHPStan\Rules\Properties\AccessPropertiesCheck' => [['0174']],
		'PHPStan\Type\OperatorTypeSpecifyingExtension' => [['0175']],
		'PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension' => [['0175']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0176']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0177']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0177']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0178']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0179']],
		'PHPStan\Rules\Pure\FunctionPurityCheck' => [['0180']],
		'PHPStan\Rules\RuleLevelHelper' => [['0181']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0182']],
		'PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck' => [['0183']],
		'PHPStan\Type\FileTypeMapper' => [0 => ['0184'], 2 => [1 => 'stubFileTypeMapper']],
		'PHPStan\Type\TypeAliasResolver' => [['0185']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0186']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0187']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0188',
				'0189',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0199',
				'0200',
				'0201',
				'0202',
				'0203',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
				'0221',
				'0222',
				'0225',
				'0226',
				'0230',
				'0231',
				'0233',
				'0234',
				'0236',
				'0238',
				'0240',
				'0243',
				'0244',
				'0253',
				'0254',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0261',
				'0262',
				'0263',
				'0264',
				'0265',
				'0266',
				'0267',
				'0269',
				'0286',
				'0289',
				'0290',
				'0291',
				'0292',
				'0293',
				'0295',
				'0296',
				'0297',
				'0298',
				'0299',
				'0300',
				'0301',
				'0302',
				'0303',
				'0304',
				'0305',
				'0307',
				'0308',
				'0309',
				'0310',
				'0311',
				'0312',
				'0314',
				'0315',
				'0316',
				'0317',
				'0318',
				'0319',
				'0320',
				'0321',
				'0322',
				'0325',
				'0334',
				'0338',
				'0339',
				'0342',
				'0343',
				'0344',
				'0345',
				'0346',
				'0347',
				'0477',
				'0478',
				'0479',
				'0480',
				'0481',
				'0482',
				'0491',
				'0492',
				'0493',
				'0494',
				'0532',
				'0533',
			],
		],
		'PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0192']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0196']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0197']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper' => [['0198']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0200']],
		'PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension' => [['0202']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0203']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0204',
				'0220',
				'0235',
				'0273',
				'0283',
				'0287',
				'0288',
				'0306',
				'0323',
				'0324',
				'0326',
				'0327',
				'0328',
				'0329',
				'0330',
				'0331',
				'0332',
				'0333',
				'0335',
				'0337',
				'0487',
				'0488',
				'0489',
				'0490',
				'0545',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0204',
				'0220',
				'0235',
				'0273',
				'0283',
				'0287',
				'0288',
				'0294',
				'0306',
				'0323',
				'0324',
				'0326',
				'0327',
				'0328',
				'0329',
				'0330',
				'0331',
				'0332',
				'0333',
				'0335',
				'0337',
				'0339',
				'0487',
				'0488',
				'0489',
				'0490',
				'0545',
				'0546',
				'0547',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0204']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0205']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0206']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0207']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0208']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0212']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0214']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0216']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0217']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0218']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0219']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0220']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0221']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0222']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0223', '0268', '0270']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0223']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			[
				'0224',
				'0227',
				'0229',
				'0242',
				'0348',
				'0354',
				'0459',
				'0460',
				'0461',
				'0462',
				'0463',
				'0465',
				'0473',
				'0495',
			],
		],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['0224']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0225']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['0231']],
		'PHPStan\Type\Php\ConstantHelper' => [['0232']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0233']],
		'PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension' => [['0234']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0235']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0236']],
		'PHPStan\Type\Php\DateFunctionReturnTypeHelper' => [['0237']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0238']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0239']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0240']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['0241', '0247', '0250', '0279', '0280', '0281', '0282', '0285'],
		],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0241']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0242']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0243']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0244']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0245', '0246']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0247']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['0248', '0249', '0252']],
		'PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension' => [['0248']],
		'PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension' => [['0249']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0250']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0252']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0253']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0254']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0255']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0257']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0258']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0259']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0260']],
		'PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension' => [['0261']],
		'PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension' => [['0262']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0263']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0264']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0265']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0266']],
		'PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension' => [['0267']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0268']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0269']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0270']],
		'PHPStan\Type\FunctionParameterOutTypeExtension' => [['0271', '0272', '0274']],
		'PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension' => [['0271']],
		'PHPStan\Type\Php\ParseStrParameterOutTypeExtension' => [['0272']],
		'PHPStan\Type\Php\PregMatchTypeSpecifyingExtension' => [['0273']],
		'PHPStan\Type\Php\PregMatchParameterOutTypeExtension' => [['0274']],
		'PHPStan\Type\FunctionParameterClosureTypeExtension' => [['0275']],
		'PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension' => [['0275']],
		'PHPStan\Type\Php\RegexArrayShapeMatcher' => [['0276']],
		'PHPStan\Type\Regex\RegexGroupParser' => [['0277']],
		'PHPStan\Type\Regex\RegexExpressionHelper' => [['0278']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0279']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0280']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0281']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0282']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0283']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0284']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0285']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0286']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0287']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0288']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0289']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0290']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0291']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0292']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0293']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0294', '0546']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0294']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0295']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0296']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0297']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0298']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0299']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0300']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0301']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0302']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0303']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0304']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0305']],
		'PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension' => [['0306']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0307']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0308']],
		'PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension' => [['0309']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0310']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0311']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0312']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0313']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0314']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0315']],
		'PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension' => [['0316']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0317']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0318']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0319']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0320']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0321']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0322']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0323']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0324']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0325']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0326']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0327']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0328']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0329']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0330']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0331']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0332']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0333']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0334']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0335']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0336']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0337']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0338']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0339']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0340']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0341']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0342']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0343']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0344']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0345']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0346']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0347']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0348']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0349', '0350', '0351', '0352', '0353']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0354']],
		'PHPStan\Type\ClosureTypeFactory' => [['0355']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['0356']],
		'PHPStan\Rules\Functions\PrintfHelper' => [['0357']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'currentPhpVersionRichParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionSimpleDirectParser',
				'defaultAnalysisParser',
				'php8Parser',
				'pathRoutingParser',
				'freshStubParser',
				'stubParser',
			],
		],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleDirectParser', 'php8Parser']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser', 'stubParser']],
		'PhpParser\Parser' => [2 => ['phpParserDecorator', 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserFactory' => [2 => ['currentPhpVersionPhpParserFactory']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Reflection\ReflectionProvider' => [0 => ['reflectionProvider'], 2 => [1 => 'betterReflectionProvider']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['originalBetterReflectionReflector'],
			2 => [1 => 'betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [['originalBetterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			2 => ['betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0358']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0359']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0360']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0361', '0362']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0361']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0362']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory' => [['0363']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PhpParser\Parser\Php8' => [2 => ['php8PhpParser']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Parser\StubParser' => [2 => ['freshStubParser']],
		'PHPStan\Diagnose\PHPStanDiagnoseExtension' => [2 => ['phpstanDiagnoseExtension']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
			['0364'],
		],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['0364']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0365']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0366']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0367']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0368']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0369']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0370']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0371']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0372']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0373']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0374']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0375']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0376']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0377']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0378']],
		'PHPStan\Rules\Properties\SetPropertyHookParameterRule' => [['0379']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0380']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0381']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0382']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0383']],
		'PHPStan\Rules\Keywords\RequireFileExistsRule' => [['0384']],
		'PHPStan\Rules\Classes\MixinRule' => [['0385']],
		'PHPStan\Rules\PhpDoc\RequireExtendsCheck' => [['0386']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule' => [['0387']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0388']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [['0389']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0390']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [['0391']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0392']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0393']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0394']],
		'PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule' => [['0395']],
		'PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule' => [['0396']],
		'PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule' => [['0397']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0398']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0399']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0400']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0401']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0402']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0403']],
		'PHPStan\Collectors\Collector' => [
			[
				'0404',
				'0405',
				'0406',
				'0407',
				'0408',
				'0409',
				'0410',
				'0431',
				'0432',
				'0518',
				'0519',
				'0520',
				'0521',
				'0522',
			],
		],
		'PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector' => [['0404']],
		'PHPStan\Rules\DeadCode\PossiblyPureNewCollector' => [['0405']],
		'PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector' => [['0406']],
		'PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector' => [['0407']],
		'PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector' => [['0408']],
		'PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector' => [['0409']],
		'PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector' => [['0410']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0411']],
		'PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule' => [['0412']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0413']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0414']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0415']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0416']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0417']],
		'PHPStan\Rules\Comparison\LogicalXorConstantConditionRule' => [['0418']],
		'PHPStan\Rules\Comparison\MatchExpressionRule' => [['0419']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [['0420']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0421']],
		'PHPStan\Rules\Comparison\ConstantLooseComparisonRule' => [['0422']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0423']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule' => [['0424']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule' => [['0425']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0426']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0427']],
		'PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule' => [['0428']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0429']],
		'PHPStan\Rules\Properties\NullsafePropertyFetchRule' => [['0430']],
		'PHPStan\Rules\Traits\TraitDeclarationCollector' => [['0431']],
		'PHPStan\Rules\Traits\TraitUseCollector' => [['0432']],
		'PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule' => [['0433']],
		'PHPStan\Rules\Functions\RandomIntParametersRule' => [['0434']],
		'PHPStan\Rules\Functions\ArrayFilterRule' => [['0435']],
		'PHPStan\Rules\Functions\ArrayValuesRule' => [['0436']],
		'PHPStan\Rules\Functions\ParameterCastableToNumberRule' => [['0437']],
		'Larastan\Larastan\Methods\RelationForwardsCallsExtension' => [['0438']],
		'Larastan\Larastan\Methods\ModelForwardsCallsExtension' => [['0439']],
		'Larastan\Larastan\Methods\EloquentBuilderForwardsCallsExtension' => [['0440']],
		'Larastan\Larastan\Methods\HigherOrderTapProxyExtension' => [['0441']],
		'Larastan\Larastan\Methods\HigherOrderCollectionProxyExtension' => [['0442']],
		'Larastan\Larastan\Methods\StorageMethodsClassReflectionExtension' => [['0443']],
		'Larastan\Larastan\Methods\Extension' => [['0444']],
		'Larastan\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension' => [['0445']],
		'Larastan\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension' => [['0446']],
		'Larastan\Larastan\Methods\MacroMethodsClassReflectionExtension' => [['0447']],
		'Larastan\Larastan\Methods\ViewWithMethodsClassReflectionExtension' => [['0448']],
		'Larastan\Larastan\Properties\ModelAccessorExtension' => [['0449']],
		'Larastan\Larastan\Properties\ModelPropertyExtension' => [['0450']],
		'Larastan\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension' => [['0451']],
		'Larastan\Larastan\ReturnTypes\HigherOrderTapProxyExtension' => [['0452']],
		'Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension' => [
			['0453', '0454', '0455', '0456'],
		],
		'Larastan\Larastan\Properties\ModelRelationsExtension' => [['0457']],
		'Larastan\Larastan\ReturnTypes\ModelOnlyDynamicMethodReturnTypeExtension' => [['0458']],
		'Larastan\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension' => [['0459']],
		'Larastan\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension' => [['0460']],
		'Larastan\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension' => [['0461']],
		'Larastan\Larastan\ReturnTypes\AuthExtension' => [['0462']],
		'Larastan\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension' => [['0463']],
		'Larastan\Larastan\ReturnTypes\AuthManagerExtension' => [['0464']],
		'Larastan\Larastan\ReturnTypes\DateExtension' => [['0465']],
		'Larastan\Larastan\ReturnTypes\GuardExtension' => [['0466']],
		'Larastan\Larastan\ReturnTypes\RequestFileExtension' => [['0467']],
		'Larastan\Larastan\ReturnTypes\RequestRouteExtension' => [['0468']],
		'Larastan\Larastan\ReturnTypes\RequestUserExtension' => [['0469']],
		'Larastan\Larastan\ReturnTypes\EloquentBuilderExtension' => [['0470']],
		'Larastan\Larastan\ReturnTypes\RelationFindExtension' => [['0471']],
		'Larastan\Larastan\ReturnTypes\RelationCollectionExtension' => [['0472']],
		'Larastan\Larastan\ReturnTypes\ModelFindExtension' => [['0473']],
		'Larastan\Larastan\ReturnTypes\BuilderModelFindExtension' => [['0474']],
		'Larastan\Larastan\ReturnTypes\TestCaseExtension' => [['0475']],
		'Larastan\Larastan\Support\CollectionHelper' => [['0476']],
		'Larastan\Larastan\ReturnTypes\Helpers\AuthExtension' => [['0477']],
		'Larastan\Larastan\ReturnTypes\Helpers\CollectExtension' => [['0478']],
		'Larastan\Larastan\ReturnTypes\Helpers\NowAndTodayExtension' => [['0479']],
		'Larastan\Larastan\ReturnTypes\Helpers\ResponseExtension' => [['0480']],
		'Larastan\Larastan\ReturnTypes\Helpers\ValidatorExtension' => [['0481']],
		'Larastan\Larastan\ReturnTypes\Helpers\LiteralExtension' => [['0482']],
		'Larastan\Larastan\ReturnTypes\CollectionFilterRejectDynamicReturnTypeExtension' => [['0483']],
		'Larastan\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension' => [['0484']],
		'Larastan\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension' => [['0485']],
		'Larastan\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension' => [['0486']],
		'Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension' => [['0487', '0488', '0489', '0490']],
		'Larastan\Larastan\ReturnTypes\Helpers\AppExtension' => [['0491']],
		'Larastan\Larastan\ReturnTypes\Helpers\ValueExtension' => [['0492']],
		'Larastan\Larastan\ReturnTypes\Helpers\StrExtension' => [['0493']],
		'Larastan\Larastan\ReturnTypes\Helpers\TapExtension' => [['0494']],
		'Larastan\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension' => [['0495']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['0496', '0497', '0503', '0505', '0544']],
		'Larastan\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension' => [['0496']],
		'Larastan\Larastan\Types\ViewStringTypeNodeResolverExtension' => [['0497']],
		'Larastan\Larastan\Rules\OctaneCompatibilityRule' => [['0498']],
		'Larastan\Larastan\Rules\NoEnvCallsOutsideOfConfigRule' => [['0499']],
		'Larastan\Larastan\Rules\NoModelMakeRule' => [['0500']],
		'Larastan\Larastan\Rules\NoUnnecessaryCollectionCallRule' => [['0501']],
		'Larastan\Larastan\Rules\ModelAppendsRule' => [['0502']],
		'Larastan\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension' => [['0503']],
		'Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension' => [['0504']],
		'Larastan\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension' => [['0505']],
		'Larastan\Larastan\Properties\MigrationHelper' => [['0506']],
		'Larastan\Larastan\Properties\SquashedMigrationHelper' => [['0507']],
		'Larastan\Larastan\Properties\ModelCastHelper' => [['0508']],
		'Larastan\Larastan\Properties\ModelPropertyHelper' => [['0509']],
		'Larastan\Larastan\Rules\ModelRuleHelper' => [['0510']],
		'Larastan\Larastan\Methods\BuilderHelper' => [['0511']],
		'Larastan\Larastan\Rules\RelationExistenceRule' => [['0512']],
		'Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule' => [['0513', '0514']],
		'Larastan\Larastan\Properties\Schema\PhpMyAdminDataTypeToPhpTypeConverter' => [['0515']],
		'Larastan\Larastan\LarastanStubFilesExtension' => [['0516']],
		'Larastan\Larastan\Rules\UnusedViewsRule' => [['0517']],
		'Larastan\Larastan\Collectors\UsedViewFunctionCollector' => [['0518']],
		'Larastan\Larastan\Collectors\UsedEmailViewCollector' => [['0519']],
		'Larastan\Larastan\Collectors\UsedViewMakeCollector' => [['0520']],
		'Larastan\Larastan\Collectors\UsedViewFacadeMakeCollector' => [['0521']],
		'Larastan\Larastan\Collectors\UsedRouteFacadeViewCollector' => [['0522']],
		'Larastan\Larastan\Collectors\UsedViewInAnotherViewCollector' => [['0523']],
		'Larastan\Larastan\Support\ViewFileHelper' => [['0524']],
		'Larastan\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension' => [['0525']],
		'Larastan\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension' => [['0526']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension' => [['0527']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension' => [['0528']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension' => [['0529']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension' => [['0530']],
		'Larastan\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension' => [['0531']],
		'Larastan\Larastan\ReturnTypes\TransHelperReturnTypeExtension' => [['0532']],
		'Larastan\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension' => [['0533']],
		'Larastan\Larastan\ReturnTypes\AppMakeHelper' => [['0534']],
		'Larastan\Larastan\Internal\ConsoleApplicationResolver' => [['0535']],
		'Larastan\Larastan\Internal\ConsoleApplicationHelper' => [['0536']],
		'Larastan\Larastan\Support\HigherOrderCollectionProxyHelper' => [['0537']],
		'Carbon\PHPStan\MacroExtension' => [['0538']],
		'PHPStan\Rules\Deprecations\DeprecatedClassHelper' => [['0539']],
		'PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider' => [['0540']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeHelper' => [['0541']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeResolver' => [['0542']],
		'PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver' => [['0542']],
		'PHPStan\Rules\Deprecations\CallWithDeprecatedIniOptionRule' => [['0543']],
		'PHPStan\PhpDoc\TypeNodeResolverAwareExtension' => [['0544']],
		'PHPStan\PhpDoc\PHPUnit\MockObjectTypeNodeResolverExtension' => [['0544']],
		'PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension' => [['0545']],
		'PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension' => [['0546']],
		'PHPStan\Type\StaticMethodTypeSpecifyingExtension' => [['0547']],
		'PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension' => [['0547']],
		'PHPStan\Type\PHPUnit\InvocationMockerDynamicReturnTypeExtension' => [['0548']],
		'PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension' => [['0549']],
		'PHPStan\Type\PHPUnit\MockObjectDynamicReturnTypeExtension' => [['0550']],
		'PHPStan\Rules\PHPUnit\CoversHelper' => [['0551']],
		'PHPStan\Rules\PHPUnit\AnnotationHelper' => [['0552']],
		'PHPStan\Rules\PHPUnit\DataProviderHelper' => [['0553']],
		'PHPStan\Rules\PHPUnit\DataProviderHelperFactory' => [['0554']],
		'PHPStan\Rules\PHPUnit\DataProviderDeclarationRule' => [['0555']],
		'PHPStan\Rules\PHPUnit\AssertEqualsIsDiscouragedRule' => [['0556']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('026'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService04(): PHPStan\Parser\AnonymousClassVisitor
	{
		return new PHPStan\Parser\AnonymousClassVisitor;
	}


	public function createService05(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService06(): PHPStan\Parser\ArrayFindArgVisitor
	{
		return new PHPStan\Parser\ArrayFindArgVisitor;
	}


	public function createService07(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService08(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService09(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService010(): PHPStan\Parser\ClosureBindToVarVisitor
	{
		return new PHPStan\Parser\ClosureBindToVarVisitor;
	}


	public function createService011(): PHPStan\Parser\ClosureBindArgVisitor
	{
		return new PHPStan\Parser\ClosureBindArgVisitor;
	}


	public function createService012(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService013(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService014(): PHPStan\Parser\MagicConstantParamDefaultVisitor
	{
		return new PHPStan\Parser\MagicConstantParamDefaultVisitor;
	}


	public function createService015(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService016(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService017(): PHPStan\Parser\StandaloneThrowExprVisitor
	{
		return new PHPStan\Parser\StandaloneThrowExprVisitor;
	}


	public function createService018(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService019(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService020(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService021(): PHPStan\Parser\VariadicMethodsVisitor
	{
		return new PHPStan\Parser\VariadicMethodsVisitor;
	}


	public function createService022(): PHPStan\Parser\VariadicFunctionsVisitor
	{
		return new PHPStan\Parser\VariadicFunctionsVisitor;
	}


	public function createService023(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('024'));
	}


	public function createService024(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService025(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('085'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService026(): PHPStan\Php\PhpVersion
	{
		return $this->getService('027')->create();
	}


	public function createService027(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('028')->create();
	}


	public function createService028(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, ['/Users/mikael/code/nova-time-field']);
	}


	public function createService029(): PHPStan\Php\ComposerPhpVersionFactory
	{
		return new PHPStan\Php\ComposerPhpVersionFactory(['/Users/mikael/code/nova-time-field']);
	}


	public function createService030(): PHPStan\PhpDocParser\ParserConfig
	{
		return new PHPStan\PhpDocParser\ParserConfig(['lines' => true]);
	}


	public function createService031(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer($this->getService('030'));
	}


	public function createService032(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('030'), $this->getService('033'));
	}


	public function createService033(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser($this->getService('030'));
	}


	public function createService034(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser(
			$this->getService('030'),
			$this->getService('032'),
			$this->getService('033')
		);
	}


	public function createService035(): PHPStan\PhpDocParser\Printer\Printer
	{
		return new PHPStan\PhpDocParser\Printer\Printer;
	}


	public function createService036(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0184'), $this->getService('stubPhpDocProvider'));
	}


	public function createService037(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('040'), $this->getService('039'), $this->getService('0169'));
	}


	public function createService038(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('031'), $this->getService('034'));
	}


	public function createService039(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver($this->getService('0122'), $this->getService('096'));
	}


	public function createService040(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('041'),
			$this->getService('0122'),
			$this->getService('0186'),
			$this->getService('060'),
			$this->getService('096')
		);
	}


	public function createService041(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('075'));
	}


	public function createService042(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('031'), $this->getService('032'), $this->getService('040'));
	}


	public function createService043(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('077'));
	}


	public function createService044(): PHPStan\PhpDoc\SocketSelectStubFilesExtension
	{
		return new PHPStan\PhpDoc\SocketSelectStubFilesExtension($this->getService('026'));
	}


	public function createService045(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('075'),
			[
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/Assert.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/AssertionFailedError.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/ExpectationFailedException.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/InvocationMocker.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/MockBuilder.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/MockObject.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/Stub.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/TestCase.stub',
			],
			['/Users/mikael/code/nova-time-field']
		);
	}


	public function createService046(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('026'));
	}


	public function createService047(): PHPStan\PhpDoc\ReflectionClassStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionClassStubFilesExtension($this->getService('026'));
	}


	public function createService048(): PHPStan\PhpDoc\ReflectionEnumStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionEnumStubFilesExtension($this->getService('026'));
	}


	public function createService049(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('051'),
			$this->getService('registry'),
			$this->getService('066'),
			$this->getService('059'),
			50
		);
	}


	public function createService050(): PHPStan\Analyser\AnalyserResultFinalizer
	{
		return new PHPStan\Analyser\AnalyserResultFinalizer(
			$this->getService('registry'),
			$this->getService('052'),
			$this->getService('054'),
			$this->getService('058'),
			$this->getService('053'),
			true
		);
	}


	public function createService051(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('058'),
			$this->getService('059'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('071'),
			$this->getService('052'),
			$this->getService('054'),
			$this->getService('053')
		);
	}


	public function createService052(): PHPStan\Analyser\IgnoreErrorExtensionProvider
	{
		return new PHPStan\Analyser\IgnoreErrorExtensionProvider($this->getService('075'));
	}


	public function createService053(): PHPStan\Analyser\LocalIgnoresProcessor
	{
		return new PHPStan\Analyser\LocalIgnoresProcessor;
	}


	public function createService054(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer;
	}


	public function createService055(): PHPStan\Analyser\Ignore\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\Ignore\IgnoredErrorHelper($this->getService('085'), [], true);
	}


	public function createService056(): PHPStan\Analyser\Ignore\IgnoreLexer
	{
		return new PHPStan\Analyser\Ignore\IgnoreLexer;
	}


	public function createService057(): PHPStan\Analyser\LazyInternalScopeFactory
	{
		return new PHPStan\Analyser\LazyInternalScopeFactory($this->getService('075'));
	}


	public function createService058(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('057'));
	}


	public function createService059(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('096'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('078'),
			$this->getService('080'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0184'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('026'),
			$this->getService('0128'),
			$this->getService('094'),
			$this->getService('036'),
			$this->getService('085'),
			$this->getService('typeSpecifier'),
			$this->getService('083'),
			$this->getService('0177'),
			$this->getService('084'),
			$this->getService('058'),
			true,
			true,
			true,
			['PHPUnit\Framework\Assert' => ['fail', 'markTestIncomplete', 'markTestSkipped']],
			['abort', 'dd'],
			[
				'stdClass',
				'Illuminate\Http\Request',
				'Illuminate\Support\Optional',
				'Pest\Support\HigherOrderTapProxy',
				'Pest\Expectation',
			],
			true,
			true
		);
	}


	public function createService060(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('061')->create();
	}


	public function createService061(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('0122'), $this->getService('075'));
	}


	public function createService062(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('075'),
					$this->container->getService('072'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('045'),
					$this->container->getService('085'),
					'/Users/mikael/code/nova-time-field/build/phpstan/resultCache.php',
					$this->container->getParameter('analysedPaths'),
					['/Users/mikael/code/nova-time-field'],
					'5',
					null,
					[
						'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/Users/mikael/code/nova-time-field/vendor/larastan/larastan/bootstrap.php',
					],
					[],
					[],
					false
				);
			}
		};
	}


	public function createService063(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/Users/mikael/code/nova-time-field/build/phpstan/resultCache.php');
	}


	public function createService064(): PHPStan\Analyser\RicherScopeGetTypeHelper
	{
		return new PHPStan\Analyser\RicherScopeGetTypeHelper($this->getService('096'));
	}


	public function createService065(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService066(): PHPStan\Collectors\Registry
	{
		return $this->getService('067')->create();
	}


	public function createService067(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('075'));
	}


	public function createService068(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('069'),
			$this->getService('050'),
			$this->getService('043'),
			$this->getService('062'),
			$this->getService('055'),
			$this->getService('045')
		);
	}


	public function createService069(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('092'),
			$this->getService('049'),
			$this->getService('091'),
			$this->getService('093')
		);
	}


	public function createService070(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('088'),
			$this->getService('055'),
			$this->getService('045'),
			$this->getParameter('analysedPaths'),
			'/Users/mikael/code/nova-time-field',
			($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
			['1.1.1.2'],
			['/Users/mikael/code/nova-time-field'],
			[
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/mikael/code/nova-time-field/vendor/larastan/larastan/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/nesbot/carbon/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/pestphp/pest/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/rules.neon',
				'/Users/mikael/code/nova-time-field/phpstan.neon.dist',
				'/Users/mikael/code/nova-time-field/phpstan-baseline.neon',
			],
			null,
			[
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/Users/mikael/code/nova-time-field/vendor/larastan/larastan/bootstrap.php',
			],
			null,
			'5'
		);
	}


	public function createService071(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('085'),
			$this->getService('reflectionProvider'),
			$this->getService('073'),
			$this->getService('0184')
		);
	}


	public function createService072(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('074'));
	}


	public function createService073(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0184'), $this->getService('023'));
	}


	public function createService074(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('073'));
	}


	public function createService075(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('076'));
	}


	public function createService076(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService077(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/mikael/code/nova-time-field',
			'/Users/mikael/code/nova-time-field/build/phpstan',
			[
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../larastan/larastan/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../nesbot/carbon/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../pestphp/pest/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-deprecation-rules/rules.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/rules.neon',
				'/Users/mikael/code/nova-time-field/phpstan.neon.dist',
			],
			$this->getParameter('analysedPaths'),
			['/Users/mikael/code/nova-time-field'],
			$this->getParameter('analysedPathsFromConfig'),
			'5',
			null,
			null
		);
	}


	public function createService078(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('075'));
	}


	public function createService079(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('075'));
	}


	public function createService080(): PHPStan\DependencyInjection\Type\ParameterOutTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider($this->getService('075'));
	}


	public function createService081(): PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider($this->getService('075'));
	}


	public function createService082(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('075'));
	}


	public function createService083(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('075'));
	}


	public function createService084(): PHPStan\DependencyInjection\Type\ParameterClosureTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider($this->getService('075'));
	}


	public function createService085(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/mikael/code/nova-time-field');
	}


	public function createService086(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory($this->getService('087'), ['analyseAndScan' => [], 'analyse' => []]);
	}


	public function createService087(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('085'), $analyseExcludes);
			}
		};
	}


	public function createService088(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService089(): PHPStan\Parser\DeclarePositionVisitor
	{
		return new PHPStan\Parser\DeclarePositionVisitor;
	}


	public function createService090(): PHPStan\Parser\ImmediatelyInvokedClosureVisitor
	{
		return new PHPStan\Parser\ImmediatelyInvokedClosureVisitor;
	}


	public function createService091(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService092(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService093(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService094(): PHPStan\Reflection\AttributeReflectionFactory
	{
		return new PHPStan\Reflection\AttributeReflectionFactory($this->getService('096'), $this->getService('0122'));
	}


	public function createService095(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				bool $acceptsNamedArguments,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $phpDocParameterImmediatelyInvokedCallable,
				array $phpDocParameterClosureThisTypes,
				array $attributes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('096'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('094'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$filename,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$phpDocParameterImmediatelyInvokedCallable,
					$phpDocParameterClosureThisTypes,
					$attributes
				);
			}
		};
	}


	public function createService096(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('060'),
			$this->getService('0122'),
			$this->getService('026'),
			$this->getService('082'),
			$this->getService('0356'),
			false
		);
	}


	public function createService097(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService098(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService099(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService0100(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('099'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService0101(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('0103'),
			$this->getService('0104'),
			$this->getService('0102'),
			$this->getService('026')
		);
	}


	public function createService0102(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('0100'),
			$this->getService('fileFinderScan'),
			$this->getService('026'),
			$this->getService('065')
		);
	}


	public function createService0103(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('0102'));
	}


	public function createService0104(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('0106'));
			}
		};
	}


	public function createService0105(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('0100'),
					$fileName
				);
			}
		};
	}


	public function createService0106(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('0105'));
	}


	public function createService0107(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('026'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumBackedCase'
		);
	}


	public function createService0108(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('026'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumUnitCase'
		);
	}


	public function createService0109(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0110(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper($this->getService('075'), ['PHPUnit\Framework\TestCase::setUp']);
	}


	public function createService0111(): PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension;
	}


	public function createService0112(): PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension;
	}


	public function createService0113(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension(['Eloquent']);
	}


	public function createService0114(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension(['Eloquent']);
	}


	public function createService0115(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('058'),
			$this->getService('059'),
			$this->getService('0116'),
			$this->getService('036'),
			$this->getService('097'),
			$this->getService('098'),
			$this->getService('0128'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0122'),
			$this->getService('0184'),
			$this->getService('094'),
			false
		);
	}


	public function createService0116(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionMethod $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $immediatelyInvokedCallableParameters,
				array $phpDocClosureThisTypeParameters,
				bool $acceptsNamedArguments,
				array $attributes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('096'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('094'),
					$this->container->getService('defaultAnalysisParser'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$immediatelyInvokedCallableParameters,
					$phpDocClosureThisTypeParameters,
					$attributes
				);
			}
		};
	}


	public function createService0117(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService0118(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService0119(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			[
				'stdClass',
				'Illuminate\Http\Request',
				'Illuminate\Support\Optional',
				'Pest\Support\HigherOrderTapProxy',
				'Pest\Expectation',
			],
			$this->getService('098')
		);
	}


	public function createService0120(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('026'),
			'PHPStan\Reflection\ClassReflection',
			'getNativeReflection'
		);
	}


	public function createService0121(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('026'),
			'PHPStan\Reflection\Php\BuiltinMethodReflection',
			'getDeclaringClass'
		);
	}


	public function createService0122(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('075'));
	}


	public function createService0123(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('0128'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0184'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('094')
		);
	}


	public function createService0124(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('042'));
	}


	public function createService0125(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('0124'),
			$this->getService('096'),
			$this->getService('026'),
			false
		);
	}


	public function createService0126(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('0125'),
			$this->getService('0100'),
			$this->getService('0184'),
			$this->getService('026'),
			$this->getService('096'),
			$this->getService('0122')
		);
	}


	public function createService0127(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('026'),
			$this->getService('0125'),
			$this->getService('0126')
		);
	}


	public function createService0128(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('0127')->create();
	}


	public function createService0129(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0130(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0147'),
			$this->getService('0132'),
			true
		);
	}


	public function createService0131(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0181'), false, false, false);
	}


	public function createService0132(): PHPStan\Rules\ClassNameCheck
	{
		return new PHPStan\Rules\ClassNameCheck($this->getService('0133'), $this->getService('0134'));
	}


	public function createService0133(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0134(): PHPStan\Rules\ClassForbiddenNameCheck
	{
		return new PHPStan\Rules\ClassForbiddenNameCheck($this->getService('075'));
	}


	public function createService0135(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck(
			[],
			$this->getService('reflectionProvider'),
			$this->getService('040'),
			$this->getService('0163'),
			$this->getService('0132'),
			$this->getService('0169'),
			$this->getService('0153'),
			false,
			true
		);
	}


	public function createService0136(): PHPStan\Rules\Classes\MethodTagCheck
	{
		return new PHPStan\Rules\Classes\MethodTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0153'),
			$this->getService('0163'),
			$this->getService('0169'),
			true,
			false
		);
	}


	public function createService0137(): PHPStan\Rules\Classes\MixinCheck
	{
		return new PHPStan\Rules\Classes\MixinCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0153'),
			$this->getService('0163'),
			$this->getService('0169'),
			true,
			false
		);
	}


	public function createService0138(): PHPStan\Rules\Classes\PropertyTagCheck
	{
		return new PHPStan\Rules\Classes\PropertyTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0153'),
			$this->getService('0163'),
			$this->getService('0169'),
			true,
			false
		);
	}


	public function createService0139(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0140'), true);
	}


	public function createService0140(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			[
				'stdClass',
				'Illuminate\Http\Request',
				'Illuminate\Support\Optional',
				'Pest\Support\HigherOrderTapProxy',
				'Pest\Expectation',
			],
			true
		);
	}


	public function createService0141(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver(
			$this->getService('reflectionProvider'),
			['#^PHPUnit\\\#', '#^SebastianBergmann\\\#'],
			[],
			[],
			[]
		);
	}


	public function createService0142(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0145'));
	}


	public function createService0143(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0145'));
	}


	public function createService0144(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule($this->getService('0145'));
	}


	public function createService0145(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0146(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck(true);
	}


	public function createService0147(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0181'),
			$this->getService('0164'),
			$this->getService('0169'),
			$this->getService('0179'),
			true,
			true,
			true,
			false
		);
	}


	public function createService0148(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0169'),
			$this->getService('026'),
			true,
			false
		);
	}


	public function createService0149(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0181'));
	}


	public function createService0150(): PHPStan\Rules\ParameterCastableToStringCheck
	{
		return new PHPStan\Rules\ParameterCastableToStringCheck($this->getService('0181'));
	}


	public function createService0151(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0152(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0153'),
			$this->getService('0156'),
			$this->getService('0169'),
			[],
			false
		);
	}


	public function createService0153(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0154(): PHPStan\Rules\Generics\MethodTagTemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeCheck($this->getService('0184'), $this->getService('0155'));
	}


	public function createService0155(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0153'),
			$this->getService('0185'),
			true
		);
	}


	public function createService0156(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0157(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0178'), $this->getService('0179'), true, true);
	}


	public function createService0158(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			false,
			true
		);
	}


	public function createService0159(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0132'),
			false,
			true
		);
	}


	public function createService0160(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule($this->getService('0115'), false, false);
	}


	public function createService0161(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('026'));
	}


	public function createService0162(): PHPStan\Rules\Methods\MethodVisibilityComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodVisibilityComparisonHelper;
	}


	public function createService0163(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(false, []);
	}


	public function createService0164(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0165(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('075'));
	}


	public function createService0166(): PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider
	{
		return new PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider($this->getService('075'));
	}


	public function createService0167(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0168(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper(
			$this->getService('096'),
			$this->getService('reflectionProvider'),
			$this->getService('0169'),
			$this->getService('0132'),
			$this->getService('0163'),
			$this->getService('0153'),
			true,
			false
		);
	}


	public function createService0169(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0170(): PHPStan\Rules\PhpDoc\GenericCallableRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\GenericCallableRuleHelper($this->getService('0155'));
	}


	public function createService0171(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck(
			$this->getService('0153'),
			$this->getService('0169'),
			$this->getService('0170')
		);
	}


	public function createService0172(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper($this->getService('040'), $this->getService('0184'), false, false);
	}


	public function createService0173(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0174(): PHPStan\Rules\Properties\AccessPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('026'),
			true,
			false
		);
	}


	public function createService0175(): PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension($this->getService('026'));
	}


	public function createService0176(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('0110'));
	}


	public function createService0177(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('075'));
	}


	public function createService0178(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0179(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0180(): PHPStan\Rules\Pure\FunctionPurityCheck
	{
		return new PHPStan\Rules\Pure\FunctionPurityCheck;
	}


	public function createService0181(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, false, false, false, false, false);
	}


	public function createService0182(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0183(): PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck;
	}


	public function createService0184(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('0122'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('038'),
			$this->getService('037'),
			$this->getService('025'),
			$this->getService('085')
		);
	}


	public function createService0185(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('042'),
			$this->getService('040'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0186(): PHPStan\Type\TypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('075'));
	}


	public function createService0187(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0188(): PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0192(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0193(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0194(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0195(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0197(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0198(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper($this->getService('reflectionProvider'));
	}


	public function createService0199(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension($this->getService('0198'));
	}


	public function createService0200(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0201(): PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension($this->getService('0198'));
	}


	public function createService0202(): PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension;
	}


	public function createService0203(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0204(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0205(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0206(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0207(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0208(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0209(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0211(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0212(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0213(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0214(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0216(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0217(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0218(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension;
	}


	public function createService0219(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0220(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0221(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0222(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0223(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService0225(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0226(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('026'));
	}


	public function createService0227(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0230(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(true);
	}


	public function createService0231(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0232'));
	}


	public function createService0232(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0233(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0234(): PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0235(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0236(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0237(): PHPStan\Type\Php\DateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeHelper;
	}


	public function createService0238(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension($this->getService('0237'));
	}


	public function createService0239(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension($this->getService('0237'));
	}


	public function createService0240(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension($this->getService('0237'));
	}


	public function createService0241(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension($this->getService('026'));
	}


	public function createService0242(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension;
	}


	public function createService0243(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0244(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0245(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('026'), 'DateTime');
	}


	public function createService0246(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('026'), 'DateTimeImmutable');
	}


	public function createService0247(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension($this->getService('026'));
	}


	public function createService0248(): PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension($this->getService('026'));
	}


	public function createService0249(): PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension($this->getService('026'));
	}


	public function createService0250(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension($this->getService('026'));
	}


	public function createService0251(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0252(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0253(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0254(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0255(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('026'));
	}


	public function createService0256(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0255'));
	}


	public function createService0257(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0255'));
	}


	public function createService0258(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0255'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0259(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0260(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0261(): PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension;
	}


	public function createService0262(): PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension;
	}


	public function createService0263(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0264(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0265(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0266(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('026'));
	}


	public function createService0267(): PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0268(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0269(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0270(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0187'));
	}


	public function createService0271(): PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension;
	}


	public function createService0272(): PHPStan\Type\Php\ParseStrParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\ParseStrParameterOutTypeExtension;
	}


	public function createService0273(): PHPStan\Type\Php\PregMatchTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PregMatchTypeSpecifyingExtension($this->getService('0276'));
	}


	public function createService0274(): PHPStan\Type\Php\PregMatchParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\PregMatchParameterOutTypeExtension($this->getService('0276'));
	}


	public function createService0275(): PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension
	{
		return new PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension($this->getService('0276'));
	}


	public function createService0276(): PHPStan\Type\Php\RegexArrayShapeMatcher
	{
		return new PHPStan\Type\Php\RegexArrayShapeMatcher(
			$this->getService('0277'),
			$this->getService('0278'),
			$this->getService('026')
		);
	}


	public function createService0277(): PHPStan\Type\Regex\RegexGroupParser
	{
		return new PHPStan\Type\Regex\RegexGroupParser($this->getService('026'), $this->getService('0278'));
	}


	public function createService0278(): PHPStan\Type\Regex\RegexExpressionHelper
	{
		return new PHPStan\Type\Regex\RegexExpressionHelper($this->getService('096'));
	}


	public function createService0279(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0280(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0281(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0282(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0283(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0284(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0285(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0286(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0287(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0288(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0179'));
	}


	public function createService0289(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0290(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0291(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0292(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0293(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0187'));
	}


	public function createService0294(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0295(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0296(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0297(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0298(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('026'));
	}


	public function createService0299(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0300(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0301(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0302(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0303(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0304(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0305(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0306(): PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension;
	}


	public function createService0307(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0308(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0309(): PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension;
	}


	public function createService0310(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0311(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0312(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0313(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0314(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0315(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('026'));
	}


	public function createService0316(): PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension;
	}


	public function createService0317(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension(null, $this->getService('029'));
	}


	public function createService0318(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0319(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0320(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0321(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0322(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0323(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0324(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0325(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0326(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0327(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0232'));
	}


	public function createService0328(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0329(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0330(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0331(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0287'));
	}


	public function createService0332(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0333(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0336'));
	}


	public function createService0334(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0335(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0336'));
	}


	public function createService0336(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0337(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0338(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0187')
		);
	}


	public function createService0339(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			[
				'stdClass',
				'Illuminate\Http\Request',
				'Illuminate\Support\Optional',
				'Pest\Support\HigherOrderTapProxy',
				'Pest\Expectation',
			]
		);
	}


	public function createService0340(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0341(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0342(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('026'));
	}


	public function createService0343(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0344(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0345(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0346(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0347(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0348(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0349(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0350(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0351(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0352(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0353(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0354(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0355(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('096'),
			$this->getService('0362'),
			$this->getService('originalBetterReflectionReflector'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0356(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService0357(): PHPStan\Rules\Functions\PrintfHelper
	{
		return new PHPStan\Rules\Functions\PrintfHelper($this->getService('026'));
	}


	public function createService0358(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0361'),
			$this->getService('0362'),
			$this->getService('0106'),
			$this->getService('0103'),
			$this->getService('0101'),
			$this->getService('0104'),
			$this->getService('0100'),
			[],
			[],
			$this->getParameter('analysedPaths'),
			['/Users/mikael/code/nova-time-field'],
			$this->getParameter('analysedPathsFromConfig'),
			false
		);
	}


	public function createService0359(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_9363f50191 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\Reflector\Reflector $reflector): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
			{
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('0122'),
					$this->container->getService('096'),
					$this->container->getService('078'),
					$reflector,
					$this->container->getService('0184'),
					$this->container->getService('036'),
					$this->container->getService('026'),
					$this->container->getService('0123'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('095'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('025'),
					$this->container->getService('085'),
					$this->container->getService('0361'),
					$this->container->getService('0128'),
					$this->container->getService('094'),
					[
						'stdClass',
						'Illuminate\Http\Request',
						'Illuminate\Support\Optional',
						'Pest\Support\HigherOrderTapProxy',
						'Pest\Expectation',
					]
				);
			}
		};
	}


	public function createService0360(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('024'),
			$this->getService('026')
		);
	}


	public function createService0361(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0360')->create();
	}


	public function createService0362(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return $this->getService('0363')->create();
	}


	public function createService0363(): PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory(
			$this->getService('024'),
			$this->getService('026')
		);
	}


	public function createService0364(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService0365(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('0132'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0366(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			true
		);
	}


	public function createService0367(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			true
		);
	}


	public function createService0368(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0369(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(true);
	}


	public function createService0370(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule(
			$this->getService('026'),
			$this->getService('0160'),
			true,
			$this->getService('0161'),
			$this->getService('0162'),
			$this->getService('0115'),
			false
		);
	}


	public function createService0371(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, true);
	}


	public function createService0372(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			false
		);
	}


	public function createService0373(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			false
		);
	}


	public function createService0374(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule($this->getService('0174'));
	}


	public function createService0375(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0132')
		);
	}


	public function createService0376(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0169'),
			$this->getService('026'),
			true,
			false
		);
	}


	public function createService0377(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('026'),
			false,
			false
		);
	}


	public function createService0378(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule($this->getService('026'), true, false);
	}


	public function createService0379(): PHPStan\Rules\Properties\SetPropertyHookParameterRule
	{
		return new PHPStan\Rules\Properties\SetPropertyHookParameterRule($this->getService('0163'), true, false);
	}


	public function createService0380(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0181'),
			$this->getService('0178'),
			$this->getService('0179'),
			false
		);
	}


	public function createService0381(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0178'),
			$this->getService('0179'),
			$this->getService('0181'),
			false
		);
	}


	public function createService0382(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0383(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0384(): PHPStan\Rules\Keywords\RequireFileExistsRule
	{
		return new PHPStan\Rules\Keywords\RequireFileExistsRule('/Users/mikael/code/nova-time-field');
	}


	public function createService0385(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule($this->getService('0137'));
	}


	public function createService0386(): PHPStan\Rules\PhpDoc\RequireExtendsCheck
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsCheck($this->getService('0132'), true);
	}


	public function createService0387(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			true
		);
	}


	public function createService0388(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('0147'), $this->getService('0181'), false);
	}


	public function createService0389(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('031'), $this->getService('034'));
	}


	public function createService0390(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('0184'),
			$this->getService('reflectionProvider'),
			$this->getService('0132'),
			$this->getService('0153'),
			$this->getService('0163'),
			$this->getService('0169'),
			true,
			false
		);
	}


	public function createService0391(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('031'), $this->getService('034'));
	}


	public function createService0392(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule($this->getService('0181'), false);
	}


	public function createService0393(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(false);
	}


	public function createService0394(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule(
			$this->getService('0181'),
			$this->getService('0131'),
			false
		);
	}


	public function createService0395(): PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0396(): PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0397(): PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0398(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('0181'), false);
	}


	public function createService0399(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(false);
	}


	public function createService0400(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(true, false, true);
	}


	public function createService0401(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('0139'), true, false, true);
	}


	public function createService0402(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('0139'), true, false, true);
	}


	public function createService0403(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('0139'), true, false, true);
	}


	public function createService0404(): PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector;
	}


	public function createService0405(): PHPStan\Rules\DeadCode\PossiblyPureNewCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureNewCollector($this->getService('reflectionProvider'));
	}


	public function createService0406(): PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector;
	}


	public function createService0407(): PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector($this->getService('reflectionProvider'));
	}


	public function createService0408(): PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector;
	}


	public function createService0409(): PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector;
	}


	public function createService0410(): PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector;
	}


	public function createService0411(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('0177'), [], [], false);
	}


	public function createService0412(): PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule($this->getService('0139'), true, true);
	}


	public function createService0413(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('0139'), true, false, true);
	}


	public function createService0414(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('0139'), true, true);
	}


	public function createService0415(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('0140'), true, false, true);
	}


	public function createService0416(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('0140'), true, false, true);
	}


	public function createService0417(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('0140'), true, false, true);
	}


	public function createService0418(): PHPStan\Rules\Comparison\LogicalXorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\LogicalXorConstantConditionRule($this->getService('0139'), true, false, true);
	}


	public function createService0419(): PHPStan\Rules\Comparison\MatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\MatchExpressionRule($this->getService('0139'), false, true);
	}


	public function createService0420(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule(true, true);
	}


	public function createService0421(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule($this->getService('064'), true, false, true);
	}


	public function createService0422(): PHPStan\Rules\Comparison\ConstantLooseComparisonRule
	{
		return new PHPStan\Rules\Comparison\ConstantLooseComparisonRule(true, false, true);
	}


	public function createService0423(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('0139'), true, true);
	}


	public function createService0424(): PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule($this->getService('0139'), true, true);
	}


	public function createService0425(): PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule($this->getService('0139'), true, true);
	}


	public function createService0426(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0146'));
	}


	public function createService0427(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0184'), $this->getService('0146'));
	}


	public function createService0428(): PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule($this->getService('0184'), $this->getService('0146'));
	}


	public function createService0429(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false);
	}


	public function createService0430(): PHPStan\Rules\Properties\NullsafePropertyFetchRule
	{
		return new PHPStan\Rules\Properties\NullsafePropertyFetchRule;
	}


	public function createService0431(): PHPStan\Rules\Traits\TraitDeclarationCollector
	{
		return new PHPStan\Rules\Traits\TraitDeclarationCollector;
	}


	public function createService0432(): PHPStan\Rules\Traits\TraitUseCollector
	{
		return new PHPStan\Rules\Traits\TraitUseCollector;
	}


	public function createService0433(): PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule
	{
		return new PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule($this->getService('exceptionTypeResolver'), true);
	}


	public function createService0434(): PHPStan\Rules\Functions\RandomIntParametersRule
	{
		return new PHPStan\Rules\Functions\RandomIntParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('026'),
			false
		);
	}


	public function createService0435(): PHPStan\Rules\Functions\ArrayFilterRule
	{
		return new PHPStan\Rules\Functions\ArrayFilterRule($this->getService('reflectionProvider'), true, true);
	}


	public function createService0436(): PHPStan\Rules\Functions\ArrayValuesRule
	{
		return new PHPStan\Rules\Functions\ArrayValuesRule($this->getService('reflectionProvider'), true, true);
	}


	public function createService0437(): PHPStan\Rules\Functions\ParameterCastableToNumberRule
	{
		return new PHPStan\Rules\Functions\ParameterCastableToNumberRule(
			$this->getService('reflectionProvider'),
			$this->getService('0150')
		);
	}


	public function createService0438(): Larastan\Larastan\Methods\RelationForwardsCallsExtension
	{
		return new Larastan\Larastan\Methods\RelationForwardsCallsExtension(
			$this->getService('0511'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0439(): Larastan\Larastan\Methods\ModelForwardsCallsExtension
	{
		return new Larastan\Larastan\Methods\ModelForwardsCallsExtension(
			$this->getService('0511'),
			$this->getService('reflectionProvider'),
			$this->getService('0440')
		);
	}


	public function createService0440(): Larastan\Larastan\Methods\EloquentBuilderForwardsCallsExtension
	{
		return new Larastan\Larastan\Methods\EloquentBuilderForwardsCallsExtension(
			$this->getService('0511'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0441(): Larastan\Larastan\Methods\HigherOrderTapProxyExtension
	{
		return new Larastan\Larastan\Methods\HigherOrderTapProxyExtension;
	}


	public function createService0442(): Larastan\Larastan\Methods\HigherOrderCollectionProxyExtension
	{
		return new Larastan\Larastan\Methods\HigherOrderCollectionProxyExtension($this->getService('0537'));
	}


	public function createService0443(): Larastan\Larastan\Methods\StorageMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\StorageMethodsClassReflectionExtension($this->getService('reflectionProvider'));
	}


	public function createService0444(): Larastan\Larastan\Methods\Extension
	{
		return new Larastan\Larastan\Methods\Extension($this->getService('0116'), $this->getService('reflectionProvider'));
	}


	public function createService0445(): Larastan\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension($this->getService('reflectionProvider'));
	}


	public function createService0446(): Larastan\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension;
	}


	public function createService0447(): Larastan\Larastan\Methods\MacroMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\MacroMethodsClassReflectionExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0355')
		);
	}


	public function createService0448(): Larastan\Larastan\Methods\ViewWithMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\ViewWithMethodsClassReflectionExtension;
	}


	public function createService0449(): Larastan\Larastan\Properties\ModelAccessorExtension
	{
		return new Larastan\Larastan\Properties\ModelAccessorExtension($this->getService('0509'));
	}


	public function createService0450(): Larastan\Larastan\Properties\ModelPropertyExtension
	{
		return new Larastan\Larastan\Properties\ModelPropertyExtension($this->getService('0509'));
	}


	public function createService0451(): Larastan\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension
	{
		return new Larastan\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension($this->getService('0537'));
	}


	public function createService0452(): Larastan\Larastan\ReturnTypes\HigherOrderTapProxyExtension
	{
		return new Larastan\Larastan\ReturnTypes\HigherOrderTapProxyExtension;
	}


	public function createService0453(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Contracts\Container\Container');
	}


	public function createService0454(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Container\Container');
	}


	public function createService0455(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Foundation\Application');
	}


	public function createService0456(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Contracts\Foundation\Application');
	}


	public function createService0457(): Larastan\Larastan\Properties\ModelRelationsExtension
	{
		return new Larastan\Larastan\Properties\ModelRelationsExtension($this->getService('0476'));
	}


	public function createService0458(): Larastan\Larastan\ReturnTypes\ModelOnlyDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelOnlyDynamicMethodReturnTypeExtension;
	}


	public function createService0459(): Larastan\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0460(): Larastan\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension(
			$this->getService('0511'),
			$this->getService('0476'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0461(): Larastan\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension($this->getService('0534'));
	}


	public function createService0462(): Larastan\Larastan\ReturnTypes\AuthExtension
	{
		return new Larastan\Larastan\ReturnTypes\AuthExtension;
	}


	public function createService0463(): Larastan\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0464(): Larastan\Larastan\ReturnTypes\AuthManagerExtension
	{
		return new Larastan\Larastan\ReturnTypes\AuthManagerExtension;
	}


	public function createService0465(): Larastan\Larastan\ReturnTypes\DateExtension
	{
		return new Larastan\Larastan\ReturnTypes\DateExtension;
	}


	public function createService0466(): Larastan\Larastan\ReturnTypes\GuardExtension
	{
		return new Larastan\Larastan\ReturnTypes\GuardExtension;
	}


	public function createService0467(): Larastan\Larastan\ReturnTypes\RequestFileExtension
	{
		return new Larastan\Larastan\ReturnTypes\RequestFileExtension;
	}


	public function createService0468(): Larastan\Larastan\ReturnTypes\RequestRouteExtension
	{
		return new Larastan\Larastan\ReturnTypes\RequestRouteExtension;
	}


	public function createService0469(): Larastan\Larastan\ReturnTypes\RequestUserExtension
	{
		return new Larastan\Larastan\ReturnTypes\RequestUserExtension;
	}


	public function createService0470(): Larastan\Larastan\ReturnTypes\EloquentBuilderExtension
	{
		return new Larastan\Larastan\ReturnTypes\EloquentBuilderExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0476')
		);
	}


	public function createService0471(): Larastan\Larastan\ReturnTypes\RelationFindExtension
	{
		return new Larastan\Larastan\ReturnTypes\RelationFindExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0476')
		);
	}


	public function createService0472(): Larastan\Larastan\ReturnTypes\RelationCollectionExtension
	{
		return new Larastan\Larastan\ReturnTypes\RelationCollectionExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0476')
		);
	}


	public function createService0473(): Larastan\Larastan\ReturnTypes\ModelFindExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelFindExtension($this->getService('reflectionProvider'), $this->getService('0476'));
	}


	public function createService0474(): Larastan\Larastan\ReturnTypes\BuilderModelFindExtension
	{
		return new Larastan\Larastan\ReturnTypes\BuilderModelFindExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0476')
		);
	}


	public function createService0475(): Larastan\Larastan\ReturnTypes\TestCaseExtension
	{
		return new Larastan\Larastan\ReturnTypes\TestCaseExtension;
	}


	public function createService0476(): Larastan\Larastan\Support\CollectionHelper
	{
		return new Larastan\Larastan\Support\CollectionHelper($this->getService('reflectionProvider'));
	}


	public function createService0477(): Larastan\Larastan\ReturnTypes\Helpers\AuthExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\AuthExtension;
	}


	public function createService0478(): Larastan\Larastan\ReturnTypes\Helpers\CollectExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\CollectExtension($this->getService('0476'));
	}


	public function createService0479(): Larastan\Larastan\ReturnTypes\Helpers\NowAndTodayExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\NowAndTodayExtension;
	}


	public function createService0480(): Larastan\Larastan\ReturnTypes\Helpers\ResponseExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ResponseExtension;
	}


	public function createService0481(): Larastan\Larastan\ReturnTypes\Helpers\ValidatorExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ValidatorExtension;
	}


	public function createService0482(): Larastan\Larastan\ReturnTypes\Helpers\LiteralExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\LiteralExtension;
	}


	public function createService0483(): Larastan\Larastan\ReturnTypes\CollectionFilterRejectDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\CollectionFilterRejectDynamicReturnTypeExtension;
	}


	public function createService0484(): Larastan\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension;
	}


	public function createService0485(): Larastan\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension($this->getService('0511'));
	}


	public function createService0486(): Larastan\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension;
	}


	public function createService0487(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(false, 'abort');
	}


	public function createService0488(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(true, 'abort');
	}


	public function createService0489(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(false, 'throw');
	}


	public function createService0490(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(true, 'throw');
	}


	public function createService0491(): Larastan\Larastan\ReturnTypes\Helpers\AppExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\AppExtension($this->getService('0534'));
	}


	public function createService0492(): Larastan\Larastan\ReturnTypes\Helpers\ValueExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ValueExtension;
	}


	public function createService0493(): Larastan\Larastan\ReturnTypes\Helpers\StrExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\StrExtension;
	}


	public function createService0494(): Larastan\Larastan\ReturnTypes\Helpers\TapExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\TapExtension;
	}


	public function createService0495(): Larastan\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0496(): Larastan\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension($this->getService('040'));
	}


	public function createService0497(): Larastan\Larastan\Types\ViewStringTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\ViewStringTypeNodeResolverExtension;
	}


	public function createService0498(): Larastan\Larastan\Rules\OctaneCompatibilityRule
	{
		return new Larastan\Larastan\Rules\OctaneCompatibilityRule;
	}


	public function createService0499(): Larastan\Larastan\Rules\NoEnvCallsOutsideOfConfigRule
	{
		return new Larastan\Larastan\Rules\NoEnvCallsOutsideOfConfigRule;
	}


	public function createService0500(): Larastan\Larastan\Rules\NoModelMakeRule
	{
		return new Larastan\Larastan\Rules\NoModelMakeRule($this->getService('reflectionProvider'));
	}


	public function createService0501(): Larastan\Larastan\Rules\NoUnnecessaryCollectionCallRule
	{
		return new Larastan\Larastan\Rules\NoUnnecessaryCollectionCallRule(
			$this->getService('reflectionProvider'),
			$this->getService('0450'),
			[],
			[]
		);
	}


	public function createService0502(): Larastan\Larastan\Rules\ModelAppendsRule
	{
		return new Larastan\Larastan\Rules\ModelAppendsRule($this->getService('0509'));
	}


	public function createService0503(): Larastan\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension($this->getService('reflectionProvider'));
	}


	public function createService0504(): Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension;
	}


	public function createService0505(): Larastan\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension(
			$this->getService('040'),
			true,
			$this->getService('0509')
		);
	}


	public function createService0506(): Larastan\Larastan\Properties\MigrationHelper
	{
		return new Larastan\Larastan\Properties\MigrationHelper(
			$this->getService('currentPhpVersionSimpleDirectParser'),
			[],
			$this->getService('085'),
			false,
			$this->getService('reflectionProvider')
		);
	}


	public function createService0507(): Larastan\Larastan\Properties\SquashedMigrationHelper
	{
		return new Larastan\Larastan\Properties\SquashedMigrationHelper([], $this->getService('085'), $this->getService('0515'), false);
	}


	public function createService0508(): Larastan\Larastan\Properties\ModelCastHelper
	{
		return new Larastan\Larastan\Properties\ModelCastHelper($this->getService('reflectionProvider'));
	}


	public function createService0509(): Larastan\Larastan\Properties\ModelPropertyHelper
	{
		return new Larastan\Larastan\Properties\ModelPropertyHelper(
			$this->getService('042'),
			$this->getService('0506'),
			$this->getService('0507'),
			$this->getService('0508')
		);
	}


	public function createService0510(): Larastan\Larastan\Rules\ModelRuleHelper
	{
		return new Larastan\Larastan\Rules\ModelRuleHelper;
	}


	public function createService0511(): Larastan\Larastan\Methods\BuilderHelper
	{
		return new Larastan\Larastan\Methods\BuilderHelper($this->getService('reflectionProvider'), true, $this->getService('0447'));
	}


	public function createService0512(): Larastan\Larastan\Rules\RelationExistenceRule
	{
		return new Larastan\Larastan\Rules\RelationExistenceRule($this->getService('0510'));
	}


	public function createService0513(): Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule
	{
		return new Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule(
			$this->getService('reflectionProvider'),
			$this->getService('0147'),
			'Illuminate\Foundation\Bus\Dispatchable'
		);
	}


	public function createService0514(): Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule
	{
		return new Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule(
			$this->getService('reflectionProvider'),
			$this->getService('0147'),
			'Illuminate\Foundation\Events\Dispatchable'
		);
	}


	public function createService0515(): Larastan\Larastan\Properties\Schema\PhpMyAdminDataTypeToPhpTypeConverter
	{
		return new Larastan\Larastan\Properties\Schema\PhpMyAdminDataTypeToPhpTypeConverter;
	}


	public function createService0516(): Larastan\Larastan\LarastanStubFilesExtension
	{
		return new Larastan\Larastan\LarastanStubFilesExtension;
	}


	public function createService0517(): Larastan\Larastan\Rules\UnusedViewsRule
	{
		return new Larastan\Larastan\Rules\UnusedViewsRule($this->getService('0523'), $this->getService('0524'));
	}


	public function createService0518(): Larastan\Larastan\Collectors\UsedViewFunctionCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewFunctionCollector;
	}


	public function createService0519(): Larastan\Larastan\Collectors\UsedEmailViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedEmailViewCollector;
	}


	public function createService0520(): Larastan\Larastan\Collectors\UsedViewMakeCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewMakeCollector;
	}


	public function createService0521(): Larastan\Larastan\Collectors\UsedViewFacadeMakeCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewFacadeMakeCollector;
	}


	public function createService0522(): Larastan\Larastan\Collectors\UsedRouteFacadeViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedRouteFacadeViewCollector;
	}


	public function createService0523(): Larastan\Larastan\Collectors\UsedViewInAnotherViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewInAnotherViewCollector(
			$this->getService('currentPhpVersionSimpleDirectParser'),
			$this->getService('0524')
		);
	}


	public function createService0524(): Larastan\Larastan\Support\ViewFileHelper
	{
		return new Larastan\Larastan\Support\ViewFileHelper([], $this->getService('085'));
	}


	public function createService0525(): Larastan\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension($this->getService('0534'));
	}


	public function createService0526(): Larastan\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension($this->getService('0534'));
	}


	public function createService0527(): Larastan\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension(
			$this->getService('0535'),
			$this->getService('0536')
		);
	}


	public function createService0528(): Larastan\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension($this->getService('0535'));
	}


	public function createService0529(): Larastan\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension(
			$this->getService('0535'),
			$this->getService('0536')
		);
	}


	public function createService0530(): Larastan\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension($this->getService('0535'));
	}


	public function createService0531(): Larastan\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension;
	}


	public function createService0532(): Larastan\Larastan\ReturnTypes\TransHelperReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\TransHelperReturnTypeExtension;
	}


	public function createService0533(): Larastan\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension;
	}


	public function createService0534(): Larastan\Larastan\ReturnTypes\AppMakeHelper
	{
		return new Larastan\Larastan\ReturnTypes\AppMakeHelper;
	}


	public function createService0535(): Larastan\Larastan\Internal\ConsoleApplicationResolver
	{
		return new Larastan\Larastan\Internal\ConsoleApplicationResolver;
	}


	public function createService0536(): Larastan\Larastan\Internal\ConsoleApplicationHelper
	{
		return new Larastan\Larastan\Internal\ConsoleApplicationHelper($this->getService('0535'));
	}


	public function createService0537(): Larastan\Larastan\Support\HigherOrderCollectionProxyHelper
	{
		return new Larastan\Larastan\Support\HigherOrderCollectionProxyHelper($this->getService('reflectionProvider'));
	}


	public function createService0538(): Carbon\PHPStan\MacroExtension
	{
		return new Carbon\PHPStan\MacroExtension($this->getService('reflectionProvider'), $this->getService('0355'));
	}


	public function createService0539(): PHPStan\Rules\Deprecations\DeprecatedClassHelper
	{
		return new PHPStan\Rules\Deprecations\DeprecatedClassHelper($this->getService('reflectionProvider'));
	}


	public function createService0540(): PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider
	{
		return new PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider($this->getService('075'));
	}


	public function createService0541(): PHPStan\Rules\Deprecations\DeprecatedScopeHelper
	{
		return $this->getService('0540')->get();
	}


	public function createService0542(): PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver
	{
		return new PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver;
	}


	public function createService0543(): PHPStan\Rules\Deprecations\CallWithDeprecatedIniOptionRule
	{
		return new PHPStan\Rules\Deprecations\CallWithDeprecatedIniOptionRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541'),
			$this->getService('026')
		);
	}


	public function createService0544(): PHPStan\PhpDoc\PHPUnit\MockObjectTypeNodeResolverExtension
	{
		return new PHPStan\PhpDoc\PHPUnit\MockObjectTypeNodeResolverExtension;
	}


	public function createService0545(): PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0546(): PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension;
	}


	public function createService0547(): PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension;
	}


	public function createService0548(): PHPStan\Type\PHPUnit\InvocationMockerDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\InvocationMockerDynamicReturnTypeExtension;
	}


	public function createService0549(): PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension;
	}


	public function createService0550(): PHPStan\Type\PHPUnit\MockObjectDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\MockObjectDynamicReturnTypeExtension;
	}


	public function createService0551(): PHPStan\Rules\PHPUnit\CoversHelper
	{
		return new PHPStan\Rules\PHPUnit\CoversHelper($this->getService('reflectionProvider'));
	}


	public function createService0552(): PHPStan\Rules\PHPUnit\AnnotationHelper
	{
		return new PHPStan\Rules\PHPUnit\AnnotationHelper;
	}


	public function createService0553(): PHPStan\Rules\PHPUnit\DataProviderHelper
	{
		return $this->getService('0554')->create();
	}


	public function createService0554(): PHPStan\Rules\PHPUnit\DataProviderHelperFactory
	{
		return new PHPStan\Rules\PHPUnit\DataProviderHelperFactory($this->getService('reflectionProvider'), $this->getService('0184'));
	}


	public function createService0555(): PHPStan\Rules\PHPUnit\DataProviderDeclarationRule
	{
		return new PHPStan\Rules\PHPUnit\DataProviderDeclarationRule($this->getService('0553'), false, true);
	}


	public function createService0556(): PHPStan\Rules\PHPUnit\AssertEqualsIsDiscouragedRule
	{
		return new PHPStan\Rules\PHPUnit\AssertEqualsIsDiscouragedRule;
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('0122'),
			$this->getService('096'),
			$this->getService('078'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0184'),
			$this->getService('036'),
			$this->getService('026'),
			$this->getService('0123'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('095'),
			$this->getService('relativePathHelper'),
			$this->getService('025'),
			$this->getService('085'),
			$this->getService('0361'),
			$this->getService('0128'),
			$this->getService('094'),
			[
				'stdClass',
				'Illuminate\Http\Request',
				'Illuminate\Support\Optional',
				'Pest\Support\HigherOrderTapProxy',
				'Pest\Expectation',
			]
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0358')->create();
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/mikael/code/nova-time-field/build/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_9363f50191
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\ParserAbstract
	{
		return $this->getService('currentPhpVersionPhpParserFactory')->create();
	}


	public function createServiceCurrentPhpVersionPhpParserFactory(): PHPStan\Parser\PhpParserFactory
	{
		return new PHPStan\Parser\PhpParserFactory($this->getService('currentPhpVersionLexer'), $this->getService('026'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('03'),
			$this->getService('075'),
			$this->getService('056')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('03'),
			$this->getService('021'),
			$this->getService('022')
		);
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('026'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('0364'),
			true,
			null,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0141');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('086')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('086')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('085'), ['php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('085'), ['php']);
	}


	public function createServiceFreshStubParser(): PHPStan\Parser\StubParser
	{
		return new PHPStan\Parser\StubParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/Users/mikael/code/nova-time-field');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('085'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('02')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('php8PhpParser'),
			$this->getService('03'),
			$this->getService('021'),
			$this->getService('022')
		);
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php8
	{
		return new PhpParser\Parser\Php8($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServicePhpstanDiagnoseExtension(): PHPStan\Diagnose\PHPStanDiagnoseExtension
	{
		return new PHPStan\Diagnose\PHPStanDiagnoseExtension(
			$this->getService('026'),
			null,
			$this->getService('085'),
			['/Users/mikael/code/nova-time-field'],
			[
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/mikael/code/nova-time-field/vendor/larastan/larastan/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/nesbot/carbon/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/pestphp/pest/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/rules.neon',
				'/Users/mikael/code/nova-time-field/phpstan.neon.dist',
				'/Users/mikael/code/nova-time-field/phpstan-baseline.neon',
			],
			$this->getService('029')
		);
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('075'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/Users/mikael/code/nova-time-field',
			$this->getParameter('analysedPaths')
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DebugScopeRule
	{
		return new PHPStan\Rules\Debug\DebugScopeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\DumpPhpDocTypeRule
	{
		return new PHPStan\Rules\Debug\DumpPhpDocTypeRule($this->getService('reflectionProvider'), $this->getService('035'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__100(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('026'));
	}


	public function createServiceRules__101(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule;
	}


	public function createServiceRules__102(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule($this->getService('0278'));
	}


	public function createServiceRules__103(): PHPStan\Rules\Traits\ConflictingTraitConstantsRule
	{
		return new PHPStan\Rules\Traits\ConflictingTraitConstantsRule($this->getService('096'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__104(): PHPStan\Rules\Traits\ConstantsInTraitsRule
	{
		return new PHPStan\Rules\Traits\ConstantsInTraitsRule($this->getService('026'));
	}


	public function createServiceRules__105(): PHPStan\Rules\Traits\TraitAttributesRule
	{
		return new PHPStan\Rules\Traits\TraitAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__106(): PHPStan\Rules\Types\InvalidTypesInUnionRule
	{
		return new PHPStan\Rules\Types\InvalidTypesInUnionRule;
	}


	public function createServiceRules__107(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule($this->getService('0179'), $this->getService('026'));
	}


	public function createServiceRules__108(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createServiceRules__109(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('0182'));
	}


	public function createServiceRules__11(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('0129'));
	}


	public function createServiceRules__110(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule;
	}


	public function createServiceRules__111(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('0182'));
	}


	public function createServiceRules__112(): PHPStan\Rules\Variables\EmptyRule
	{
		return new PHPStan\Rules\Variables\EmptyRule($this->getService('0157'));
	}


	public function createServiceRules__113(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('0157'));
	}


	public function createServiceRules__114(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('0157'));
	}


	public function createServiceRules__115(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('0181'));
	}


	public function createServiceRules__116(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('0181'));
	}


	public function createServiceRules__117(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('023'), $this->getService('0181'));
	}


	public function createServiceRules__118(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('0181'));
	}


	public function createServiceRules__119(): PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule
	{
		return new PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule;
	}


	public function createServiceRules__12(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__120(): PHPStan\Rules\Classes\MethodTagRule
	{
		return new PHPStan\Rules\Classes\MethodTagRule($this->getService('0136'));
	}


	public function createServiceRules__121(): PHPStan\Rules\Classes\MethodTagTraitRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitRule($this->getService('0136'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__122(): PHPStan\Rules\Classes\MethodTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitUseRule($this->getService('0136'));
	}


	public function createServiceRules__123(): PHPStan\Rules\Classes\PropertyTagRule
	{
		return new PHPStan\Rules\Classes\PropertyTagRule($this->getService('0138'));
	}


	public function createServiceRules__124(): PHPStan\Rules\Classes\PropertyTagTraitRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitRule($this->getService('0138'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__125(): PHPStan\Rules\Classes\PropertyTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitUseRule($this->getService('0138'));
	}


	public function createServiceRules__126(): PHPStan\Rules\Classes\MixinTraitRule
	{
		return new PHPStan\Rules\Classes\MixinTraitRule($this->getService('0137'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__127(): PHPStan\Rules\Classes\MixinTraitUseRule
	{
		return new PHPStan\Rules\Classes\MixinTraitUseRule($this->getService('0137'));
	}


	public function createServiceRules__128(): PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule;
	}


	public function createServiceRules__129(): PHPStan\Rules\Constants\ValueAssignedToClassConstantRule
	{
		return new PHPStan\Rules\Constants\ValueAssignedToClassConstantRule;
	}


	public function createServiceRules__13(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__130(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__131(): PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule;
	}


	public function createServiceRules__132(): PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule;
	}


	public function createServiceRules__133(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('0152'), $this->getService('0151'));
	}


	public function createServiceRules__134(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('0155'));
	}


	public function createServiceRules__135(): PHPStan\Rules\Generics\EnumAncestorsRule
	{
		return new PHPStan\Rules\Generics\EnumAncestorsRule($this->getService('0152'), $this->getService('0151'));
	}


	public function createServiceRules__136(): PHPStan\Rules\Generics\EnumTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\EnumTemplateTypeRule;
	}


	public function createServiceRules__137(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('0184'), $this->getService('0155'));
	}


	public function createServiceRules__138(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('0156'));
	}


	public function createServiceRules__139(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('0152'), $this->getService('0151'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Api\GetTemplateTypeRule
	{
		return new PHPStan\Rules\Api\GetTemplateTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__140(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('0155'));
	}


	public function createServiceRules__141(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('0184'), $this->getService('0155'));
	}


	public function createServiceRules__142(): PHPStan\Rules\Generics\MethodTagTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeRule($this->getService('0154'));
	}


	public function createServiceRules__143(): PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule(
			$this->getService('0154'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__144(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('0156'));
	}


	public function createServiceRules__145(): PHPStan\Rules\Generics\PropertyVarianceRule
	{
		return new PHPStan\Rules\Generics\PropertyVarianceRule($this->getService('0156'));
	}


	public function createServiceRules__146(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('0184'), $this->getService('0155'));
	}


	public function createServiceRules__147(): PHPStan\Rules\Generics\UsedTraitsRule
	{
		return new PHPStan\Rules\Generics\UsedTraitsRule($this->getService('0184'), $this->getService('0152'));
	}


	public function createServiceRules__148(): PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule
	{
		return new PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule;
	}


	public function createServiceRules__149(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__15(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule;
	}


	public function createServiceRules__150(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('023'), $this->getService('0181'));
	}


	public function createServiceRules__151(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('0181'));
	}


	public function createServiceRules__152(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule($this->getService('0181'));
	}


	public function createServiceRules__153(): PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule($this->getService('0167'));
	}


	public function createServiceRules__154(): PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule($this->getService('0167'));
	}


	public function createServiceRules__155(): PHPStan\Rules\PhpDoc\FunctionAssertRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionAssertRule($this->getService('0168'));
	}


	public function createServiceRules__156(): PHPStan\Rules\PhpDoc\MethodAssertRule
	{
		return new PHPStan\Rules\PhpDoc\MethodAssertRule($this->getService('0168'));
	}


	public function createServiceRules__157(): PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule($this->getService('0169'), $this->getService('0153'));
	}


	public function createServiceRules__158(): PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule($this->getService('0153'), $this->getService('0169'));
	}


	public function createServiceRules__159(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('0184'), $this->getService('0171'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Api\OldPhpParser4ClassRule
	{
		return new PHPStan\Rules\Api\OldPhpParser4ClassRule;
	}


	public function createServiceRules__160(): PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule($this->getService('0184'), $this->getService('0171'));
	}


	public function createServiceRules__161(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule(
			$this->getService('0153'),
			$this->getService('0169'),
			$this->getService('0170')
		);
	}


	public function createServiceRules__162(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('0184'));
	}


	public function createServiceRules__163(): PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule($this->getService('0184'));
	}


	public function createServiceRules__164(): PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule
	{
		return new PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule($this->getService('0172'));
	}


	public function createServiceRules__165(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('0184'), $this->getService('0172'));
	}


	public function createServiceRules__166(): PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule
	{
		return new PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule;
	}


	public function createServiceRules__167(): PHPStan\Rules\Classes\RequireImplementsRule
	{
		return new PHPStan\Rules\Classes\RequireImplementsRule;
	}


	public function createServiceRules__168(): PHPStan\Rules\Classes\RequireExtendsRule
	{
		return new PHPStan\Rules\Classes\RequireExtendsRule;
	}


	public function createServiceRules__169(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule;
	}


	public function createServiceRules__17(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('0129'));
	}


	public function createServiceRules__170(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule($this->getService('0386'));
	}


	public function createServiceRules__171(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0386')
		);
	}


	public function createServiceRules__172(): PHPStan\Rules\Pure\PureFunctionRule
	{
		return new PHPStan\Rules\Pure\PureFunctionRule($this->getService('0180'));
	}


	public function createServiceRules__173(): PHPStan\Rules\Pure\PureMethodRule
	{
		return new PHPStan\Rules\Pure\PureMethodRule($this->getService('0180'));
	}


	public function createServiceRules__174(): PHPStan\Rules\Arrays\ArrayDestructuringRule
	{
		return new PHPStan\Rules\Arrays\ArrayDestructuringRule($this->getService('0181'), $this->getService('0131'));
	}


	public function createServiceRules__175(): PHPStan\Rules\Arrays\ArrayUnpackingRule
	{
		return new PHPStan\Rules\Arrays\ArrayUnpackingRule($this->getService('026'), $this->getService('0181'));
	}


	public function createServiceRules__176(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('0181'));
	}


	public function createServiceRules__177(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('0181'));
	}


	public function createServiceRules__178(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('0181'));
	}


	public function createServiceRules__179(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('0181'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Api\RuntimeReflectionInstantiationRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionInstantiationRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__180(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('0181'));
	}


	public function createServiceRules__181(): PHPStan\Rules\Exceptions\ThrowExprTypeRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExprTypeRule($this->getService('0181'));
	}


	public function createServiceRules__182(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('0149'));
	}


	public function createServiceRules__183(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('0149'));
	}


	public function createServiceRules__184(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('0149'));
	}


	public function createServiceRules__185(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('0181'));
	}


	public function createServiceRules__186(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('0149'));
	}


	public function createServiceRules__187(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('0181'));
	}


	public function createServiceRules__188(): PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule
	{
		return new PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule;
	}


	public function createServiceRules__189(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule($this->getService('0179'), $this->getService('0110'));
	}


	public function createServiceRules__19(): PHPStan\Rules\Api\RuntimeReflectionFunctionRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionFunctionRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__190(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule($this->getService('0179'), $this->getService('0110'));
	}


	public function createServiceRules__191(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule($this->getService('0179'));
	}


	public function createServiceRules__192(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule($this->getService('0179'));
	}


	public function createServiceRules__193(): PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule
	{
		return new PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule;
	}


	public function createServiceRules__194(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('0181'), $this->getService('0179'));
	}


	public function createServiceRules__195(): PHPStan\Rules\Variables\ParameterOutAssignedTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutAssignedTypeRule($this->getService('0181'));
	}


	public function createServiceRules__196(): PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule($this->getService('0181'));
	}


	public function createServiceRules__197(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('0181'));
	}


	public function createServiceRules__198(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createServiceRules__199(): PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule;
	}


	public function createServiceRules__2(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__20(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('023'));
	}


	public function createServiceRules__200(): PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule;
	}


	public function createServiceRules__201(): PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule;
	}


	public function createServiceRules__202(): PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule;
	}


	public function createServiceRules__203(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('023'));
	}


	public function createServiceRules__204(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createServiceRules__205(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule($this->getService('0165'));
	}


	public function createServiceRules__206(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule($this->getService('0166'));
	}


	public function createServiceRules__207(): PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule
	{
		return new PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule;
	}


	public function createServiceRules__208(): PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__209(): PHPStan\Rules\Functions\UselessFunctionReturnValueRule
	{
		return new PHPStan\Rules\Functions\UselessFunctionReturnValueRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__21(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__210(): PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__211(): PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule($this->getService('0181'));
	}


	public function createServiceRules__212(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule(
			$this->getService('0181'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__213(): PHPStan\Rules\Methods\NullsafeMethodCallRule
	{
		return new PHPStan\Rules\Methods\NullsafeMethodCallRule;
	}


	public function createServiceRules__214(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule;
	}


	public function createServiceRules__215(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule;
	}


	public function createServiceRules__216(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule;
	}


	public function createServiceRules__217(): PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule($this->getService('0183'));
	}


	public function createServiceRules__218(): PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule($this->getService('0183'));
	}


	public function createServiceRules__219(): PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule($this->getService('0177'), $this->getService('0179'));
	}


	public function createServiceRules__22(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('026'));
	}


	public function createServiceRules__220(): PHPStan\Rules\Traits\NotAnalysedTraitRule
	{
		return new PHPStan\Rules\Traits\NotAnalysedTraitRule;
	}


	public function createServiceRules__221(): PHPStan\Rules\DateTimeInstantiationRule
	{
		return new PHPStan\Rules\DateTimeInstantiationRule;
	}


	public function createServiceRules__222(): PHPStan\Rules\Functions\CallUserFuncRule
	{
		return new PHPStan\Rules\Functions\CallUserFuncRule($this->getService('reflectionProvider'), $this->getService('0147'));
	}


	public function createServiceRules__223(): PHPStan\Rules\Functions\ParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\ParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0150')
		);
	}


	public function createServiceRules__224(): PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0150')
		);
	}


	public function createServiceRules__225(): PHPStan\Rules\Functions\SortParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\SortParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0150')
		);
	}


	public function createServiceRules__226(): PHPStan\Rules\Regexp\RegularExpressionQuotingRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionQuotingRule($this->getService('reflectionProvider'), $this->getService('0278'));
	}


	public function createServiceRules__227(): Larastan\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule
	{
		return new Larastan\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule;
	}


	public function createServiceRules__228(): Larastan\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule
	{
		return new Larastan\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule;
	}


	public function createServiceRules__229(): Larastan\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule
	{
		return new Larastan\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule;
	}


	public function createServiceRules__23(): PHPStan\Rules\Classes\AllowedSubTypesRule
	{
		return new PHPStan\Rules\Classes\AllowedSubTypesRule;
	}


	public function createServiceRules__230(): Larastan\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule
	{
		return new Larastan\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule($this->getService('0535'));
	}


	public function createServiceRules__231(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__232(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__233(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__234(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__235(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__236(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__237(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__238(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__239(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__24(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__240(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__241(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__242(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule(
			$this->getService('0539'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__243(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule(
			$this->getService('0539'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__244(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule(
			$this->getService('0539'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__245(): PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule($this->getService('0541'));
	}


	public function createServiceRules__246(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0541')
		);
	}


	public function createServiceRules__247(): PHPStan\Rules\PHPUnit\AssertSameBooleanExpectedRule
	{
		return new PHPStan\Rules\PHPUnit\AssertSameBooleanExpectedRule;
	}


	public function createServiceRules__248(): PHPStan\Rules\PHPUnit\AssertSameNullExpectedRule
	{
		return new PHPStan\Rules\PHPUnit\AssertSameNullExpectedRule;
	}


	public function createServiceRules__249(): PHPStan\Rules\PHPUnit\AssertSameWithCountRule
	{
		return new PHPStan\Rules\PHPUnit\AssertSameWithCountRule;
	}


	public function createServiceRules__25(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__250(): PHPStan\Rules\PHPUnit\ClassCoversExistsRule
	{
		return new PHPStan\Rules\PHPUnit\ClassCoversExistsRule($this->getService('0551'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__251(): PHPStan\Rules\PHPUnit\ClassMethodCoversExistsRule
	{
		return new PHPStan\Rules\PHPUnit\ClassMethodCoversExistsRule($this->getService('0551'), $this->getService('0184'));
	}


	public function createServiceRules__252(): PHPStan\Rules\PHPUnit\MockMethodCallRule
	{
		return new PHPStan\Rules\PHPUnit\MockMethodCallRule;
	}


	public function createServiceRules__253(): PHPStan\Rules\PHPUnit\NoMissingSpaceInClassAnnotationRule
	{
		return new PHPStan\Rules\PHPUnit\NoMissingSpaceInClassAnnotationRule($this->getService('0552'));
	}


	public function createServiceRules__254(): PHPStan\Rules\PHPUnit\NoMissingSpaceInMethodAnnotationRule
	{
		return new PHPStan\Rules\PHPUnit\NoMissingSpaceInMethodAnnotationRule($this->getService('0552'));
	}


	public function createServiceRules__255(): PHPStan\Rules\PHPUnit\ShouldCallParentMethodsRule
	{
		return new PHPStan\Rules\PHPUnit\ShouldCallParentMethodsRule;
	}


	public function createServiceRules__26(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0181'),
			$this->getService('0132'),
			$this->getService('026')
		);
	}


	public function createServiceRules__27(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRules__28(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule;
	}


	public function createServiceRules__29(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('0132'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__3(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__30(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('0132'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__31(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('0132'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__32(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('0132'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__33(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('0147'),
			$this->getService('0132')
		);
	}


	public function createServiceRules__34(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createServiceRules__35(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('026'));
	}


	public function createServiceRules__36(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule($this->getService('0135'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule($this->getService('0135'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Classes\LocalTypeTraitAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitAliasesRule($this->getService('0135'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRules__4(): PHPStan\Rules\Api\ApiInstanceofRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__40(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createServiceRules__41(): PHPStan\Rules\Classes\ReadOnlyClassRule
	{
		return new PHPStan\Rules\Classes\ReadOnlyClassRule($this->getService('026'));
	}


	public function createServiceRules__42(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createServiceRules__43(): PHPStan\Rules\Constants\ClassAsClassConstantRule
	{
		return new PHPStan\Rules\Constants\ClassAsClassConstantRule;
	}


	public function createServiceRules__44(): PHPStan\Rules\Constants\DynamicClassConstantFetchRule
	{
		return new PHPStan\Rules\Constants\DynamicClassConstantFetchRule($this->getService('026'), $this->getService('0181'));
	}


	public function createServiceRules__45(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('026'));
	}


	public function createServiceRules__46(): PHPStan\Rules\Constants\MagicConstantContextRule
	{
		return new PHPStan\Rules\Constants\MagicConstantContextRule;
	}


	public function createServiceRules__47(): PHPStan\Rules\Constants\NativeTypedClassConstantRule
	{
		return new PHPStan\Rules\Constants\NativeTypedClassConstantRule($this->getService('026'));
	}


	public function createServiceRules__48(): PHPStan\Rules\Constants\FinalPrivateConstantRule
	{
		return new PHPStan\Rules\Constants\FinalPrivateConstantRule;
	}


	public function createServiceRules__49(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__5(): PHPStan\Rules\Api\ApiInstanceofTypeRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__50(): PHPStan\Rules\Exceptions\NoncapturingCatchRule
	{
		return new PHPStan\Rules\Exceptions\NoncapturingCatchRule;
	}


	public function createServiceRules__51(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('026'));
	}


	public function createServiceRules__52(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__53(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0164'));
	}


	public function createServiceRules__54(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__55(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('026'));
	}


	public function createServiceRules__56(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule(
			$this->getService('0148'),
			$this->getService('026')
		);
	}


	public function createServiceRules__57(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0147')
		);
	}


	public function createServiceRules__58(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0148'));
	}


	public function createServiceRules__59(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0148'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__60(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__61(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__62(): PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule
	{
		return new PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule;
	}


	public function createServiceRules__63(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__64(): PHPStan\Rules\Functions\PrintfArrayParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfArrayParametersRule($this->getService('0357'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__65(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('0357'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__66(): PHPStan\Rules\Functions\RedefinedParametersRule
	{
		return new PHPStan\Rules\Functions\RedefinedParametersRule;
	}


	public function createServiceRules__67(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0164'));
	}


	public function createServiceRules__68(): PHPStan\Rules\Ignore\IgnoreParseErrorRule
	{
		return new PHPStan\Rules\Ignore\IgnoreParseErrorRule;
	}


	public function createServiceRules__69(): PHPStan\Rules\Functions\VariadicParametersDeclarationRule
	{
		return new PHPStan\Rules\Functions\VariadicParametersDeclarationRule;
	}


	public function createServiceRules__7(): PHPStan\Rules\Api\ApiClassConstFetchRule
	{
		return new PHPStan\Rules\Api\ApiClassConstFetchRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__70(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createServiceRules__71(): PHPStan\Rules\Keywords\DeclareStrictTypesRule
	{
		return new PHPStan\Rules\Keywords\DeclareStrictTypesRule($this->getService('023'));
	}


	public function createServiceRules__72(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__73(): PHPStan\Rules\Methods\AbstractPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\AbstractPrivateMethodRule;
	}


	public function createServiceRules__74(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('0158'), $this->getService('0147'));
	}


	public function createServiceRules__75(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('0159'), $this->getService('0147'));
	}


	public function createServiceRules__76(): PHPStan\Rules\Methods\ConsistentConstructorRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorRule($this->getService('0161'), $this->getService('0162'));
	}


	public function createServiceRules__77(): PHPStan\Rules\Methods\ConstructorReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ConstructorReturnTypeRule;
	}


	public function createServiceRules__78(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0148'));
	}


	public function createServiceRules__79(): PHPStan\Rules\Methods\FinalPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\FinalPrivateMethodRule;
	}


	public function createServiceRules__8(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__80(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0158'), $this->getService('026'));
	}


	public function createServiceRules__81(): PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule
	{
		return new PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule;
	}


	public function createServiceRules__82(): PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule
	{
		return new PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule($this->getService('026'));
	}


	public function createServiceRules__83(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__84(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__85(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0159'), $this->getService('026'));
	}


	public function createServiceRules__86(): PHPStan\Rules\Names\UsedNamesRule
	{
		return new PHPStan\Rules\Names\UsedNamesRule;
	}


	public function createServiceRules__87(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0164'));
	}


	public function createServiceRules__88(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule($this->getService('0181'));
	}


	public function createServiceRules__89(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0174'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__90(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0375'));
	}


	public function createServiceRules__91(): PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule($this->getService('0148'));
	}


	public function createServiceRules__92(): PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule
	{
		return new PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule;
	}


	public function createServiceRules__93(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule($this->getService('0110'));
	}


	public function createServiceRules__94(): PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule($this->getService('0110'));
	}


	public function createServiceRules__95(): PHPStan\Rules\Properties\PropertiesInInterfaceRule
	{
		return new PHPStan\Rules\Properties\PropertiesInInterfaceRule($this->getService('026'));
	}


	public function createServiceRules__96(): PHPStan\Rules\Properties\PropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\PropertyAssignRefRule($this->getService('026'), $this->getService('0179'));
	}


	public function createServiceRules__97(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__98(): PHPStan\Rules\Properties\PropertyHookAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyHookAttributesRule($this->getService('0130'));
	}


	public function createServiceRules__99(): PHPStan\Rules\Properties\PropertyInClassRule
	{
		return new PHPStan\Rules\Properties\PropertyInClassRule($this->getService('026'));
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/mikael/code/nova-time-field');
	}


	public function createServiceStubFileTypeMapper(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('0122'),
			$this->getService('stubParser'),
			$this->getService('038'),
			$this->getService('037'),
			$this->getService('025'),
			$this->getService('085')
		);
	}


	public function createServiceStubParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('freshStubParser'), 256);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('stubParser'),
			$this->getService('stubFileTypeMapper'),
			$this->getService('045')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('075'));
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'bootstrapFiles' => [
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/Users/mikael/code/nova-time-field/vendor/larastan/larastan/bootstrap.php',
			],
			'excludePaths' => ['analyseAndScan' => [], 'analyse' => []],
			'level' => 5,
			'paths' => ['/Users/mikael/code/nova-time-field/src'],
			'exceptions' => [
				'implicitThrows' => true,
				'reportUncheckedExceptionDeadCatch' => true,
				'uncheckedExceptionRegexes' => ['#^PHPUnit\\\#', '#^SebastianBergmann\\\#'],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => true],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'checkParameterCastableToNumberFunctions' => false,
				'skipCheckGenericClasses' => [],
				'stricterFunctionMap' => false,
				'reportPreciseLineForUnusedFunctionParameter' => false,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => true,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => true,
			'checkFunctionNameCase' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => true,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => false,
			'checkThisOnly' => false,
			'checkUnionTypes' => false,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'strictRulesInstalled' => false,
			'deprecationRulesInstalled' => true,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'reportAnyTypeWideningInVarTag' => false,
			'reportPossiblyNonexistentGeneralArrayOffset' => false,
			'reportPossiblyNonexistentConstantArrayOffset' => false,
			'checkMissingOverrideMethodAttribute' => false,
			'mixinExcludeClasses' => ['Eloquent'],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteScopeWithBlock' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => ['PHPUnit\Framework\TestCase::setUp'],
			'treatPhpDocTypesAsCertain' => true,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tips' => ['treatPhpDocTypesAsCertain' => true],
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => true,
			'typeAliases' => [],
			'universalObjectCratesClasses' => [
				'stdClass',
				'Illuminate\Http\Request',
				'Illuminate\Support\Optional',
				'Pest\Support\HigherOrderTapProxy',
				'Pest\Expectation',
			],
			'stubFiles' => [
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/Assert.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/AssertionFailedError.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/ExpectationFailedException.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/InvocationMocker.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/MockBuilder.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/MockObject.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/Stub.stub',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/stubs/TestCase.stub',
			],
			'earlyTerminatingMethodCalls' => ['PHPUnit\Framework\Assert' => ['fail', 'markTestIncomplete', 'markTestSkipped']],
			'earlyTerminatingFunctionCalls' => ['abort', 'dd'],
			'resultCachePath' => '/Users/mikael/code/nova-time-field/build/phpstan/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'E_ALL',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'sourceLocatorPlaygroundMode' => false,
			'__validate' => true,
			'checkOctaneCompatibility' => true,
			'noEnvCallsOutsideOfConfig' => true,
			'noModelMake' => true,
			'noUnnecessaryCollectionCall' => true,
			'noUnnecessaryCollectionCallOnly' => [],
			'noUnnecessaryCollectionCallExcept' => [],
			'squashedMigrationsPath' => [],
			'databaseMigrationsPath' => [],
			'disableMigrationScan' => false,
			'disableSchemaScan' => false,
			'viewDirectories' => [],
			'checkModelProperties' => true,
			'checkUnusedViews' => false,
			'checkModelAppends' => true,
			'phpunit' => ['convertUnionToIntersectionType' => true],
			'tmpDir' => '/Users/mikael/code/nova-time-field/build/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/mikael/code/nova-time-field/build/phpstan',
			'rootDir' => '/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/mikael/code/nova-time-field',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../larastan/larastan/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../nesbot/carbon/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../../pestphp/pest/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-deprecation-rules/rules.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/rules.neon',
				'/Users/mikael/code/nova-time-field/phpstan.neon.dist',
			],
			'allConfigFiles' => [
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/mikael/code/nova-time-field/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/mikael/code/nova-time-field/vendor/larastan/larastan/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/nesbot/carbon/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/pestphp/pest/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/extension.neon',
				'/Users/mikael/code/nova-time-field/vendor/phpstan/phpstan-phpunit/rules.neon',
				'/Users/mikael/code/nova-time-field/phpstan.neon.dist',
				'/Users/mikael/code/nova-time-field/phpstan-baseline.neon',
			],
			'composerAutoloaderProjectPaths' => ['/Users/mikael/code/nova-time-field'],
			'generateBaselineFile' => null,
			'usedLevel' => '5',
			'cliAutoloadFile' => null,
			'env' => [
				'PHPSTAN_ORIGINAL_INIS' => '/opt/homebrew/etc/php/8.3/php.ini:/opt/homebrew/etc/php/8.3/conf.d/error_log.ini:/opt/homebrew/etc/php/8.3/conf.d/ext-opcache.ini:/opt/homebrew/etc/php/8.3/conf.d/php-memory-limits.ini',
				'NVM_INC' => '/Users/mikael/.nvm/versions/node/v20.14.0/include/node',
				'TERM_PROGRAM' => 'WarpTerminal',
				'LESS_TERMCAP_md' => '',
				'NVM_CD_FLAGS' => '-q',
				'COMPOSER_BINARY' => '/opt/homebrew/Cellar/composer/2.8.1/bin/composer',
				'SHELL' => '/bin/zsh',
				'TERM' => 'xterm-256color',
				'WARP_HONOR_PS1' => '0',
				'HISTSIZE' => '32768',
				'TMPDIR' => '/var/folders/kc/kxb5r2cx7j34t3n2r155lbg80000gn/T/',
				'HOMEBREW_REPOSITORY' => '/opt/homebrew',
				'TERM_PROGRAM_VERSION' => 'v0.2025.02.19.08.02.stable_05',
				'XDEBUG_HANDLER_SETTINGS' => '/private/var/folders/kc/kxb5r2cx7j34t3n2r155lbg80000gn/T/2kuRlS|1|*|*|/opt/homebrew/etc/php/8.3/php.ini:/opt/homebrew/etc/php/8.3/conf.d/error_log.ini:/opt/homebrew/etc/php/8.3/conf.d/ext-opcache.ini:/opt/homebrew/etc/php/8.3/conf.d/php-memory-limits.ini|3.3.2',
				'PHPRC' => '/private/var/folders/kc/kxb5r2cx7j34t3n2r155lbg80000gn/T/2kuRlS',
				'LC_ALL' => 'en_US.UTF-8',
				'HERD_PHP_83_INI_SCAN_DIR' => '/Users/mikael/Library/Application Support/Herd/config/php/83/',
				'PHP_INI_SCAN_DIR' => '',
				'USER' => 'mikael',
				'HISTFILESIZE' => '32768',
				'HISTORY_IGNORE' => '(ls|cd|cd -|pwd|exit|date|* --help)',
				'NVM_DIR' => '/Users/mikael/.nvm',
				'LS_COLORS' => 'di=1;36:ln=35:so=32:pi=33:ex=31:bd=34;46:cd=34;43:su=30;41:sg=30;46:tw=30;42:ow=30;43',
				'COMMAND_MODE' => 'unix2003',
				'SSH_AUTH_SOCK' => '/private/tmp/com.apple.launchd.4vfjgMnmAp/Listeners',
				'WARP_IS_LOCAL_SHELL_SESSION' => '1',
				'__CF_USER_TEXT_ENCODING' => '0x1F5:0x0:0x1',
				'HOMEBREW_NO_AUTO_UPDATE' => '1',
				'COLUMNS' => '184',
				'WARP_USE_SSH_WRAPPER' => '1',
				'PAGER' => 'less',
				'XDEBUG_CONFIG' => 'idekey=PHPSTORM',
				'LSCOLORS' => 'Gxfxcxdxbxegedabagacad',
				'PATH' => '/Users/mikael/code/nova-time-field/vendor/bin:/Users/mikael/.spin/bin:/Users/mikael/Library/Application Support/Herd/bin/:/Users/mikael/.nvm/versions/node/v20.14.0/bin:/opt/homebrew/Cellar/qt@5/5.15.13_1/bin/:/opt/homebrew/opt/mysql-client/bin:/Users/mikael/.local/bin:/usr/local/bin:/Users/mikael/.composer/vendor/bin:/Users/mikael/.dotfiles/bin:/opt/homebrew/bin:/opt/homebrew/sbin:/usr/local/bin:/System/Cryptexes/App/usr/bin:/usr/bin:/bin:/usr/sbin:/sbin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/local/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/appleinternal/bin:/Library/Apple/usr/bin:/usr/local/go/bin:/Users/mikael/Library/Application Support/JetBrains/Toolbox/scripts:/Users/mikael/.orbstack/bin:/Users/mikael/.composer/vendor/bin',
				'HERD_PHP_84_INI_SCAN_DIR' => '/Users/mikael/Library/Application Support/Herd/config/php/84/',
				'_' => '/opt/homebrew/Cellar/php/8.3.12_1/bin/php',
				'__CFBundleIdentifier' => 'dev.warp.Warp-Stable',
				'PWD' => '/Users/mikael/code/nova-time-field',
				'EDITOR' => 'vim',
				'LANG' => 'en_US.UTF-8',
				'XPC_FLAGS' => '0x0',
				'LINES' => '51',
				'HISTIGNORE' => 'ls:cd:cd -:pwd:exit:date:* --help',
				'XPC_SERVICE_NAME' => '0',
				'HISTCONTROL' => 'ignoredups',
				'SHELL_VERBOSITY' => '1',
				'HOME' => '/Users/mikael',
				'SHLVL' => '4',
				'MANPAGER' => 'less -X',
				'LANGUAGE' => 'C',
				'GREP_OPTIONS' => '--color=auto',
				'HOMEBREW_PREFIX' => '/opt/homebrew',
				'COMPOSER_ORIGINAL_INIS' => '/opt/homebrew/etc/php/8.3/php.ini:/opt/homebrew/etc/php/8.3/conf.d/error_log.ini:/opt/homebrew/etc/php/8.3/conf.d/ext-opcache.ini:/opt/homebrew/etc/php/8.3/conf.d/php-memory-limits.ini',
				'LOGNAME' => 'mikael',
				'LESS' => '-R',
				'LC_CTYPE' => 'UTF-8',
				'SSH_SOCKET_DIR' => '~/.ssh',
				'NVM_BIN' => '/Users/mikael/.nvm/versions/node/v20.14.0/bin',
				'GIT_ASKPASS' => 'echo',
				'HOMEBREW_CELLAR' => '/opt/homebrew/Cellar',
				'INFOPATH' => '/opt/homebrew/share/info:',
				'HERD_PHP_74_INI_SCAN_DIR' => '/Users/mikael/Library/Application Support/Herd/config/php/74/',
				'CONDA_CHANGEPS1' => 'false',
				'COLORTERM' => 'truecolor',
			],
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'analysedPaths': return null;
			case $key === 'analysedPathsFromConfig': return null;
			case $key === 'sysGetTempDir': return sys_get_temp_dir();
			case $key === 'pro': return [
			'dnsServers' => ['1.1.1.2'],
			'tmpDir' => ($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
		];
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map(function ($key) { $this->getParameter($key); }, [
			'analysedPaths',
			'analysedPathsFromConfig',
			'sysGetTempDir',
			'pro',
		]);
		return parent::getParameters();
	}
}
