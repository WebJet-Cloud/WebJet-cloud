<?php



# Preparing integrated on the sitemap
$generator->addURL('/'.$general['index']['url']['default'], new DateTime(), 'monthly', 0.5, null);
$generator->addURL('/'.$general['services']['url']['default'], new DateTime(), 'monthly', 0.5, null);
$generator->addURL('/'.$services['cybersecurity']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$services['marketing']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$services['webmaster']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$services['developper']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$services['seo']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$services['consulting']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$about['index']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$email['index']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$email['ask-quotes']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$sponsor['index']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$partner['index']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['pages']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['cgu']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['cgv']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['dmca']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['legal']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['policy-privacy']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['rgpd']['url']['default'], new DateTime(), 'weekly', 1, null);
$generator->addURL('/'.$law['cookies']['url']['default'], new DateTime(), 'weekly', 1, null);


?>


