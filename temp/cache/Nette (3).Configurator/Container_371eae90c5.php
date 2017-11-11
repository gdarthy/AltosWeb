<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app/config/config.neon 
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app/config/config.local.neon 

class Container_371eae90c5 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'Symfony\Component\Translation\Translator' => [1 => ['translation.default']],
			'Symfony\Component\Translation\TranslatorBagInterface' => [1 => ['translation.default']],
			'Symfony\Component\Translation\TranslatorInterface' => [1 => ['translation.default']],
			'Kdyby\Translation\ITranslator' => [1 => ['translation.default']],
			'Nette\Localization\ITranslator' => [1 => ['translation.default']],
			'Kdyby\Translation\Translator' => [1 => ['translation.default']],
			'Nette\Object' => [
				1 => [
					'translation.catalogueCompiler',
					'translation.panel',
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.helpers',
					'translation.fallbackResolver',
					'translation.catalogueFactory',
					'translation.loader',
				],
				0 => ['translation.userLocaleResolver.param', 'translation.extractor.latte'],
			],
			'Kdyby\Translation\CatalogueCompiler' => [1 => ['translation.catalogueCompiler']],
			'Tracy\IBarPanel' => [1 => ['translation.panel']],
			'Kdyby\Translation\Diagnostics\Panel' => [1 => ['translation.panel']],
			'Kdyby\Translation\IUserLocaleResolver' => [
				['translation.userLocaleResolver.param'],
				[
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.userLocaleResolver',
				],
			],
			'Kdyby\Translation\LocaleResolver\LocaleParamResolver' => [['translation.userLocaleResolver.param']],
			'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver' => [1 => ['translation.userLocaleResolver.acceptHeader']],
			'Kdyby\Translation\LocaleResolver\SessionResolver' => [1 => ['translation.userLocaleResolver.session']],
			'Kdyby\Translation\TemplateHelpers' => [1 => ['translation.helpers']],
			'Kdyby\Translation\FallbackResolver' => [1 => ['translation.fallbackResolver']],
			'Kdyby\Translation\CatalogueFactory' => [1 => ['translation.catalogueFactory']],
			'Symfony\Component\Translation\MessageSelector' => [1 => ['translation.selector']],
			'Symfony\Component\Translation\Extractor\ExtractorInterface' => [1 => ['translation.extractor'], 0 => ['translation.extractor.latte']],
			'Symfony\Component\Translation\Extractor\ChainExtractor' => [1 => ['translation.extractor']],
			'Kdyby\Translation\Extractors\LatteExtractor' => [['translation.extractor.latte']],
			'Symfony\Component\Translation\Writer\TranslationWriter' => [1 => ['translation.writer']],
			'Symfony\Component\Translation\Dumper\FileDumper' => [
				[
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				],
			],
			'Symfony\Component\Translation\Dumper\DumperInterface' => [
				[
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				],
			],
			'Symfony\Component\Translation\Dumper\PhpFileDumper' => [['translation.dumper.php']],
			'Symfony\Component\Translation\Dumper\XliffFileDumper' => [['translation.dumper.xliff']],
			'Symfony\Component\Translation\Dumper\PoFileDumper' => [['translation.dumper.po']],
			'Symfony\Component\Translation\Dumper\MoFileDumper' => [['translation.dumper.mo']],
			'Symfony\Component\Translation\Dumper\YamlFileDumper' => [['translation.dumper.yml']],
			'Kdyby\Translation\Dumper\NeonFileDumper' => [['translation.dumper.neon']],
			'Symfony\Component\Translation\Dumper\QtFileDumper' => [['translation.dumper.qt']],
			'Symfony\Component\Translation\Dumper\CsvFileDumper' => [['translation.dumper.csv']],
			'Symfony\Component\Translation\Dumper\IniFileDumper' => [['translation.dumper.ini']],
			'Symfony\Component\Translation\Dumper\IcuResFileDumper' => [['translation.dumper.res']],
			'Kdyby\Translation\IResourceLoader' => [1 => ['translation.loader']],
			'Kdyby\Translation\TranslationLoader' => [1 => ['translation.loader']],
			'Symfony\Component\Translation\Loader\FileLoader' => [
				[
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
					'translation.loader.json',
				],
			],
			'Symfony\Component\Translation\Loader\ArrayLoader' => [
				[
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
					'translation.loader.json',
					'translation.loader.neon',
				],
			],
			'Symfony\Component\Translation\Loader\LoaderInterface' => [
				[
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.xlf',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.ts',
					'translation.loader.csv',
					'translation.loader.res',
					'translation.loader.dat',
					'translation.loader.ini',
					'translation.loader.json',
					'translation.loader.neon',
				],
			],
			'Symfony\Component\Translation\Loader\PhpFileLoader' => [['translation.loader.php']],
			'Symfony\Component\Translation\Loader\YamlFileLoader' => [['translation.loader.yml']],
			'Symfony\Component\Translation\Loader\XliffFileLoader' => [['translation.loader.xlf']],
			'Symfony\Component\Translation\Loader\PoFileLoader' => [['translation.loader.po']],
			'Symfony\Component\Translation\Loader\MoFileLoader' => [['translation.loader.mo']],
			'Symfony\Component\Translation\Loader\QtFileLoader' => [['translation.loader.ts']],
			'Symfony\Component\Translation\Loader\CsvFileLoader' => [['translation.loader.csv']],
			'Symfony\Component\Translation\Loader\IcuResFileLoader' => [['translation.loader.res', 'translation.loader.dat']],
			'Symfony\Component\Translation\Loader\IcuDatFileLoader' => [['translation.loader.dat']],
			'Symfony\Component\Translation\Loader\IniFileLoader' => [['translation.loader.ini']],
			'Symfony\Component\Translation\Loader\JsonFileLoader' => [['translation.loader.json']],
			'Kdyby\Translation\Loader\NeonFileLoader' => [['translation.loader.neon']],
			'Nette\Application\UI\Presenter' => [['application.1', 'application.3', 'application.4']],
			'Nette\Application\UI\Control' => [['application.1', 'application.3', 'application.4']],
			'Nette\Application\UI\Component' => [['application.1', 'application.3', 'application.4']],
			'Nette\ComponentModel\Container' => [['application.1', 'application.3', 'application.4']],
			'Nette\ComponentModel\Component' => [['application.1', 'application.3', 'application.4']],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'ArrayAccess' => [['application.1', 'application.3', 'application.4']],
			'Nette\Application\UI\IStatePersistent' => [['application.1', 'application.3', 'application.4']],
			'Nette\Application\UI\ISignalReceiver' => [['application.1', 'application.3', 'application.4']],
			'Nette\ComponentModel\IComponent' => [['application.1', 'application.3', 'application.4']],
			'Nette\ComponentModel\IContainer' => [['application.1', 'application.3', 'application.4']],
			'Nette\Application\UI\IRenderable' => [['application.1', 'application.3', 'application.4']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.1']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.2']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.3']],
			'App\Presenters\TinymcePresenter' => [1 => ['application.4']],
			'NetteModule\ErrorPresenter' => [1 => ['application.5']],
			'NetteModule\MicroPresenter' => [1 => ['application.6']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'application.1' => 'App\Presenters\Error4xxPresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\HomepagePresenter',
			'application.4' => 'App\Presenters\TinymcePresenter',
			'application.5' => 'NetteModule\ErrorPresenter',
			'application.6' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'translation.catalogueCompiler' => 'Kdyby\Translation\CatalogueCompiler',
			'translation.catalogueFactory' => 'Kdyby\Translation\CatalogueFactory',
			'translation.default' => 'Kdyby\Translation\Translator',
			'translation.dumper.csv' => 'Symfony\Component\Translation\Dumper\CsvFileDumper',
			'translation.dumper.ini' => 'Symfony\Component\Translation\Dumper\IniFileDumper',
			'translation.dumper.mo' => 'Symfony\Component\Translation\Dumper\MoFileDumper',
			'translation.dumper.neon' => 'Kdyby\Translation\Dumper\NeonFileDumper',
			'translation.dumper.php' => 'Symfony\Component\Translation\Dumper\PhpFileDumper',
			'translation.dumper.po' => 'Symfony\Component\Translation\Dumper\PoFileDumper',
			'translation.dumper.qt' => 'Symfony\Component\Translation\Dumper\QtFileDumper',
			'translation.dumper.res' => 'Symfony\Component\Translation\Dumper\IcuResFileDumper',
			'translation.dumper.xliff' => 'Symfony\Component\Translation\Dumper\XliffFileDumper',
			'translation.dumper.yml' => 'Symfony\Component\Translation\Dumper\YamlFileDumper',
			'translation.extractor' => 'Symfony\Component\Translation\Extractor\ChainExtractor',
			'translation.extractor.latte' => 'Kdyby\Translation\Extractors\LatteExtractor',
			'translation.fallbackResolver' => 'Kdyby\Translation\FallbackResolver',
			'translation.helpers' => 'Kdyby\Translation\TemplateHelpers',
			'translation.loader' => 'Kdyby\Translation\TranslationLoader',
			'translation.loader.csv' => 'Symfony\Component\Translation\Loader\CsvFileLoader',
			'translation.loader.dat' => 'Symfony\Component\Translation\Loader\IcuDatFileLoader',
			'translation.loader.ini' => 'Symfony\Component\Translation\Loader\IniFileLoader',
			'translation.loader.json' => 'Symfony\Component\Translation\Loader\JsonFileLoader',
			'translation.loader.mo' => 'Symfony\Component\Translation\Loader\MoFileLoader',
			'translation.loader.neon' => 'Kdyby\Translation\Loader\NeonFileLoader',
			'translation.loader.php' => 'Symfony\Component\Translation\Loader\PhpFileLoader',
			'translation.loader.po' => 'Symfony\Component\Translation\Loader\PoFileLoader',
			'translation.loader.res' => 'Symfony\Component\Translation\Loader\IcuResFileLoader',
			'translation.loader.ts' => 'Symfony\Component\Translation\Loader\QtFileLoader',
			'translation.loader.xlf' => 'Symfony\Component\Translation\Loader\XliffFileLoader',
			'translation.loader.yml' => 'Symfony\Component\Translation\Loader\YamlFileLoader',
			'translation.panel' => 'Kdyby\Translation\Diagnostics\Panel',
			'translation.selector' => 'Symfony\Component\Translation\MessageSelector',
			'translation.userLocaleResolver' => 'Kdyby\Translation\IUserLocaleResolver',
			'translation.userLocaleResolver.acceptHeader' => 'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver',
			'translation.userLocaleResolver.param' => 'Kdyby\Translation\LocaleResolver\LocaleParamResolver',
			'translation.userLocaleResolver.session' => 'Kdyby\Translation\LocaleResolver\SessionResolver',
			'translation.writer' => 'Symfony\Component\Translation\Writer\TranslationWriter',
		],
		'tags' => [
			'inject' => [
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'translation.catalogueCompiler' => FALSE,
				'translation.catalogueFactory' => FALSE,
				'translation.default' => FALSE,
				'translation.dumper.csv' => FALSE,
				'translation.dumper.ini' => FALSE,
				'translation.dumper.mo' => FALSE,
				'translation.dumper.neon' => FALSE,
				'translation.dumper.php' => FALSE,
				'translation.dumper.po' => FALSE,
				'translation.dumper.qt' => FALSE,
				'translation.dumper.res' => FALSE,
				'translation.dumper.xliff' => FALSE,
				'translation.dumper.yml' => FALSE,
				'translation.extractor' => FALSE,
				'translation.extractor.latte' => FALSE,
				'translation.fallbackResolver' => FALSE,
				'translation.helpers' => FALSE,
				'translation.loader' => FALSE,
				'translation.loader.csv' => FALSE,
				'translation.loader.dat' => FALSE,
				'translation.loader.ini' => FALSE,
				'translation.loader.json' => FALSE,
				'translation.loader.mo' => FALSE,
				'translation.loader.neon' => FALSE,
				'translation.loader.php' => FALSE,
				'translation.loader.po' => FALSE,
				'translation.loader.res' => FALSE,
				'translation.loader.ts' => FALSE,
				'translation.loader.xlf' => FALSE,
				'translation.loader.yml' => FALSE,
				'translation.selector' => FALSE,
				'translation.userLocaleResolver' => FALSE,
				'translation.userLocaleResolver.acceptHeader' => FALSE,
				'translation.userLocaleResolver.param' => FALSE,
				'translation.userLocaleResolver.session' => FALSE,
				'translation.writer' => FALSE,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\Error4xxPresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\HomepagePresenter',
				'application.4' => 'App\Presenters\TinymcePresenter',
				'application.5' => 'NetteModule\ErrorPresenter',
				'application.6' => 'NetteModule\MicroPresenter',
			],
			'translation.dumper' => [
				'translation.dumper.csv' => 'csv',
				'translation.dumper.ini' => 'ini',
				'translation.dumper.mo' => 'mo',
				'translation.dumper.neon' => 'neon',
				'translation.dumper.php' => 'php',
				'translation.dumper.po' => 'po',
				'translation.dumper.qt' => 'qt',
				'translation.dumper.res' => 'res',
				'translation.dumper.xliff' => 'xliff',
				'translation.dumper.yml' => 'yml',
			],
			'translation.extractor' => ['translation.extractor.latte' => 'latte'],
			'translation.loader' => [
				'translation.loader.csv' => 'csv',
				'translation.loader.dat' => 'dat',
				'translation.loader.ini' => 'ini',
				'translation.loader.json' => 'json',
				'translation.loader.mo' => 'mo',
				'translation.loader.neon' => 'neon',
				'translation.loader.php' => 'php',
				'translation.loader.po' => 'po',
				'translation.loader.res' => 'res',
				'translation.loader.ts' => 'ts',
				'translation.loader.xlf' => 'xlf',
				'translation.loader.yml' => 'yml',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct()
	{
		parent::__construct([
			'appDir' => 'D:\DiskGoogle\Webs\wamp64\www\altos\app',
			'wwwDir' => 'D:\DiskGoogle\Webs\wamp64\www\altos\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'consoleMode' => FALSE,
			'tempDir' => 'D:\DiskGoogle\Webs\wamp64\www\altos\app/../temp',
		]);
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\HomepagePresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->translator = $this->getService('translation.default');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\TinymcePresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\Presenters\TinymcePresenter($this->getService('database.default.context'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		$service->onRequest[] = [
			$this->getService('translation.userLocaleResolver.param'),
			'onRequest',
		];
		$self = $this; $service->onStartup[] = function () use ($self) { $self->getService('translation.default'); };
		$service->onRequest[] = [$this->getService('translation.panel'), 'onRequest'];
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'D:\DiskGoogle\Webs\wamp64\www\altos\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('D:\DiskGoogle\Webs\wamp64\www\altos\app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('D:\DiskGoogle\Webs\wamp64\www\altos\app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=d98012_altos',
			'root', NULL, NULL);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_371eae90c5_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), NULL);
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Translation\CatalogueCompiler
	 */
	public function createServiceTranslation__catalogueCompiler()
	{
		$service = new Kdyby\Translation\CatalogueCompiler(new Kdyby\Translation\Caching\PhpFileStorage('D:\DiskGoogle\Webs\wamp64\www\altos\app/../temp/cache',
			$this->getService('cache.journal')), $this->getService('translation.fallbackResolver'),
			$this->getService('translation.catalogueFactory'));
		$service->enableDebugMode();
		return $service;
	}


	/**
	 * @return Kdyby\Translation\CatalogueFactory
	 */
	public function createServiceTranslation__catalogueFactory()
	{
		$service = new Kdyby\Translation\CatalogueFactory($this->getService('translation.fallbackResolver'),
			$this->getService('translation.loader'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Translator
	 */
	public function createServiceTranslation__default()
	{
		$service = new Kdyby\Translation\Translator($this->getService('translation.userLocaleResolver'),
			$this->getService('translation.selector'), $this->getService('translation.catalogueCompiler'),
			$this->getService('translation.fallbackResolver'), $this->getService('translation.loader'));
		$this->getService('translation.userLocaleResolver.param')->setTranslator($service);
		$service->setDefaultLocale('en');
		$service->setLocaleWhitelist(NULL);
		$service->setFallbackLocales(['en_US']);
		$this->getService('translation.panel')->register($service);
		$service->addResource('neon', 'D:\DiskGoogle\Webs\wamp64\www\altos\app/lang\ui.cs_CZ.neon',
			'cs_CZ', 'ui');
		$service->addResource('neon', 'D:\DiskGoogle\Webs\wamp64\www\altos\app/lang\ui.en_US.neon',
			'en_US', 'ui');
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\CsvFileDumper
	 */
	public function createServiceTranslation__dumper__csv()
	{
		$service = new Symfony\Component\Translation\Dumper\CsvFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\IniFileDumper
	 */
	public function createServiceTranslation__dumper__ini()
	{
		$service = new Symfony\Component\Translation\Dumper\IniFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\MoFileDumper
	 */
	public function createServiceTranslation__dumper__mo()
	{
		$service = new Symfony\Component\Translation\Dumper\MoFileDumper;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Dumper\NeonFileDumper
	 */
	public function createServiceTranslation__dumper__neon()
	{
		$service = new Kdyby\Translation\Dumper\NeonFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\PhpFileDumper
	 */
	public function createServiceTranslation__dumper__php()
	{
		$service = new Symfony\Component\Translation\Dumper\PhpFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\PoFileDumper
	 */
	public function createServiceTranslation__dumper__po()
	{
		$service = new Symfony\Component\Translation\Dumper\PoFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\QtFileDumper
	 */
	public function createServiceTranslation__dumper__qt()
	{
		$service = new Symfony\Component\Translation\Dumper\QtFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\IcuResFileDumper
	 */
	public function createServiceTranslation__dumper__res()
	{
		$service = new Symfony\Component\Translation\Dumper\IcuResFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\XliffFileDumper
	 */
	public function createServiceTranslation__dumper__xliff()
	{
		$service = new Symfony\Component\Translation\Dumper\XliffFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\YamlFileDumper
	 */
	public function createServiceTranslation__dumper__yml()
	{
		$service = new Symfony\Component\Translation\Dumper\YamlFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Extractor\ChainExtractor
	 */
	public function createServiceTranslation__extractor()
	{
		$service = new Symfony\Component\Translation\Extractor\ChainExtractor;
		$service->addExtractor('latte', $this->getService('translation.extractor.latte'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Extractors\LatteExtractor
	 */
	public function createServiceTranslation__extractor__latte()
	{
		$service = new Kdyby\Translation\Extractors\LatteExtractor;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\FallbackResolver
	 */
	public function createServiceTranslation__fallbackResolver()
	{
		$service = new Kdyby\Translation\FallbackResolver;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\TemplateHelpers
	 */
	public function createServiceTranslation__helpers()
	{
		$service = $this->getService('translation.default')->createTemplateHelpers();
		if (!$service instanceof Kdyby\Translation\TemplateHelpers) {
			throw new Nette\UnexpectedValueException('Unable to create service \'translation.helpers\', value returned by factory is not Kdyby\Translation\TemplateHelpers type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Translation\TranslationLoader
	 */
	public function createServiceTranslation__loader()
	{
		$service = new Kdyby\Translation\TranslationLoader;
		$service->injectServiceIds([
			'php' => 'translation.loader.php',
			'yml' => 'translation.loader.yml',
			'xlf' => 'translation.loader.xlf',
			'po' => 'translation.loader.po',
			'mo' => 'translation.loader.mo',
			'ts' => 'translation.loader.ts',
			'csv' => 'translation.loader.csv',
			'res' => 'translation.loader.res',
			'dat' => 'translation.loader.dat',
			'ini' => 'translation.loader.ini',
			'json' => 'translation.loader.json',
			'neon' => 'translation.loader.neon',
		], $this);
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\CsvFileLoader
	 */
	public function createServiceTranslation__loader__csv()
	{
		$service = new Symfony\Component\Translation\Loader\CsvFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IcuDatFileLoader
	 */
	public function createServiceTranslation__loader__dat()
	{
		$service = new Symfony\Component\Translation\Loader\IcuDatFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IniFileLoader
	 */
	public function createServiceTranslation__loader__ini()
	{
		$service = new Symfony\Component\Translation\Loader\IniFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\JsonFileLoader
	 */
	public function createServiceTranslation__loader__json()
	{
		$service = new Symfony\Component\Translation\Loader\JsonFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\MoFileLoader
	 */
	public function createServiceTranslation__loader__mo()
	{
		$service = new Symfony\Component\Translation\Loader\MoFileLoader;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Loader\NeonFileLoader
	 */
	public function createServiceTranslation__loader__neon()
	{
		$service = new Kdyby\Translation\Loader\NeonFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\PhpFileLoader
	 */
	public function createServiceTranslation__loader__php()
	{
		$service = new Symfony\Component\Translation\Loader\PhpFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\PoFileLoader
	 */
	public function createServiceTranslation__loader__po()
	{
		$service = new Symfony\Component\Translation\Loader\PoFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IcuResFileLoader
	 */
	public function createServiceTranslation__loader__res()
	{
		$service = new Symfony\Component\Translation\Loader\IcuResFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\QtFileLoader
	 */
	public function createServiceTranslation__loader__ts()
	{
		$service = new Symfony\Component\Translation\Loader\QtFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\XliffFileLoader
	 */
	public function createServiceTranslation__loader__xlf()
	{
		$service = new Symfony\Component\Translation\Loader\XliffFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\YamlFileLoader
	 */
	public function createServiceTranslation__loader__yml()
	{
		$service = new Symfony\Component\Translation\Loader\YamlFileLoader;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Diagnostics\Panel
	 */
	public function createServiceTranslation__panel()
	{
		$service = new Kdyby\Translation\Diagnostics\Panel('D:\DiskGoogle\Webs\wamp64\www\altos');
		$service->setLocaleWhitelist(NULL);
		$service->setLocaleResolvers([
			$this->getService('translation.userLocaleResolver.param'),
			$this->getService('translation.userLocaleResolver.acceptHeader'),
		]);
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\MessageSelector
	 */
	public function createServiceTranslation__selector()
	{
		$service = new Symfony\Component\Translation\MessageSelector;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\IUserLocaleResolver
	 */
	public function createServiceTranslation__userLocaleResolver()
	{
		$service = new Kdyby\Translation\LocaleResolver\ChainResolver;
		$service->addResolver($this->getService('translation.userLocaleResolver.acceptHeader'));
		$service->addResolver($this->getService('translation.userLocaleResolver.param'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\AcceptHeaderResolver
	 */
	public function createServiceTranslation__userLocaleResolver__acceptHeader()
	{
		$service = new Kdyby\Translation\LocaleResolver\AcceptHeaderResolver($this->getService('http.request'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\LocaleParamResolver
	 */
	public function createServiceTranslation__userLocaleResolver__param()
	{
		$service = new Kdyby\Translation\LocaleResolver\LocaleParamResolver;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\SessionResolver
	 */
	public function createServiceTranslation__userLocaleResolver__session()
	{
		$service = new Kdyby\Translation\LocaleResolver\SessionResolver($this->getService('session.session'),
			$this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Writer\TranslationWriter
	 */
	public function createServiceTranslation__writer()
	{
		$service = new Symfony\Component\Translation\Writer\TranslationWriter;
		$service->addDumper('php', $this->getService('translation.dumper.php'));
		$service->addDumper('xliff', $this->getService('translation.dumper.xliff'));
		$service->addDumper('po', $this->getService('translation.dumper.po'));
		$service->addDumper('mo', $this->getService('translation.dumper.mo'));
		$service->addDumper('yml', $this->getService('translation.dumper.yml'));
		$service->addDumper('neon', $this->getService('translation.dumper.neon'));
		$service->addDumper('qt', $this->getService('translation.dumper.qt'));
		$service->addDumper('csv', $this->getService('translation.dumper.csv'));
		$service->addDumper('ini', $this->getService('translation.dumper.ini'));
		$service->addDumper('res', $this->getService('translation.dumper.res'));
		return $service;
	}


	public function initialize()
	{
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		if ($tmp = $this->getByType("Nette\Http\Session", FALSE)) { $tmp->start(); Tracy\Debugger::dispatch(); };
		Kdyby\Translation\Diagnostics\Panel::registerBluescreen();
	}

}



class Container_371eae90c5_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_371eae90c5 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('D:\DiskGoogle\Webs\wamp64\www\altos\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile[] = function($engine) { Kdyby\Translation\Latte\TranslateMacros::install($engine->getCompiler()); };
		$service->addFilter('translate', [$this->container->getService('translation.helpers'), 'translate']);
		$service->addFilter('getTranslator', [$this->container->getService('translation.helpers'), 'getTranslator']);
		return $service;
	}

}
