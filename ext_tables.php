<?php

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Hilzweb.com Template');

Tx_Flux_Core::registerProviderExtensionKey($_EXTKEY, 'Page');
Tx_Flux_Core::registerProviderExtensionKey($_EXTKEY, 'Content');