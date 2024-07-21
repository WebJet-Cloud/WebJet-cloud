
<!doctype html>
<html lang="<?php echo $i18n->getLang().'-'.strtoupper($i18n->getLang()); ?>" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if(empty($title)){ ?>
<title><?php echo $JSeo['name'] ?></title>
<meta property="og:title" content="<?php echo $JSeo['name']; ?>"/>
<meta name="twitter:title" content="<?php echo $JSeo['name']; ?>"/>
<?php } else { ?>
<title><?php echo $JSeo['name'].' - '.$title; ?></title>
<meta property="og:title" content="<?php echo $JSeo['name'].' - '.$title; ?>"/>
<meta property="og:image:alt" content="<?php echo $title; ?>"/>
<meta name="twitter:title" content="<?php echo $JSeo['name'].' - '.$title; ?>"/>
<?php } ?>
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<meta property="og:locale" content="<?php echo $i18n->getLang().'_'.strtoupper($i18n->getLang()); ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo $description; ?>"/>
<?php if(empty($urls)){ ?>
<meta property="og:url" content="<?php echo $protocols.'://'.$domainTLD; ?>/"/>
<link rel="canonical" href="<?php echo $protocols.'://'.$domainTLD; ?>/"/>
<?php } else { ?>
<meta property="og:url" content="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>/"/>
<link rel="canonical" href="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>/"/>
<?php } ?>
<meta property="og:site_name" content="<?php echo $JSeo['name']; ?>" />
<meta property="og:updated_time" content="<?php echo $JSeo['date-update']; ?>"/>
<meta property="og:image" content="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']; ?>"/>
<meta property="og:image:secure_url" content="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']; ?>"/>
<meta property="og:image:width" content="1920" />
<meta property="og:image:height" content="1080" />
<meta property="og:image:type" content="image/webp"/>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="<?php echo $description; ?>"/>
<meta name="twitter:image" content="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']; ?>"/>
<link rel="icon" href="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']['size']['32x32']; ?>" sizes="32x32" />
<link rel="icon" href="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']['size']['192x192']; ?>" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']['size']['180x180']; ?>"/>
<meta name="msapplication-TileImage" content="<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']['size']['270x270']; ?>"/>
<link rel="dns-prefetch" href="//<?php echo $domainTLD; ?>">
<script type="application/ld+json">{
    "@context":"https://schema.org",
    <?php if(empty($JSeo['local']['address']['street'])){ ?>
    "@graph":[{
        "@type":"Place",
        "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#place",
        "address":{
            "@type":"PostalAddress",
            "streetAddress":"<?php echo $JSeo['local']['address']['street']; ?>",
            "addressLocality":"<?php echo $JSeo['local']['address']['city']; ?>",
            "addressRegion":"<?php echo $JSeo['local']['address']['region']; ?>",
            "postalCode":"<?php echo $JSeo['local']['address']['zipcode']; ?>",
            "addressCountry":"<?php echo $JSeo['local']['address']['contry']; ?>"
        }
    },
    <?php } ?>
    {
        <?php if(empty($JSeo['logo']['type-entreprise'])){ ?>"@type":["<?php echo $JSeo['logo']['type-entreprise']; ?>","Organization"],<?php } ?>
        "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#organization",
        "name":"<?php echo $JSeo['local']['organisation-names']; ?>",
        "url":"<?php echo $protocols.'://'.$domainTLD; ?>",
        "email":"<?php echo $JSeo['local']['email']; ?>",
        <?php if(empty($JSeo['local']['address']['street'])){ ?>
        "address":{
            "@type":"PostalAddress",
            "streetAddress":"<?php echo $JSeo['local']['address']['street']; ?>",
            "addressLocality":"<?php echo $JSeo['local']['address']['city']; ?>",
            "addressRegion":"<?php echo $JSeo['local']['address']['region']; ?>",
            "postalCode":"<?php echo $JSeo['local']['address']['zipcode']; ?>",
            "addressCountry":"<?php echo $JSeo['local']['address']['contry']; ?>"
        },<?php } ?>
        <?php if(empty($JSeo['local']['number-phone']['service-client'])){ ?>
        "contactPoint":[
        {
            "@type":"ContactPoint",
            "telephone":"<?php echo $JSeo['local']['number-phone']['service-client']; ?>",
            "contactType":"customer support"
        }],<?php } ?>
        "description":"<?php echo $description; ?>",
        <?php if(empty($JSeo['local']['additional-info']['legal-name'])){ ?>"legalName":"<?php echo $JSeo['local']['additional-info']['legal-name']; ?>",<?php } ?>
        <?php if(empty($JSeo['local']['additional-info']['funding-name'])){ ?>"foundingDate":"<?php echo $JSeo['local']['additional-info']['funding-name']; ?>",<?php } ?>
        <?php if(empty($JSeo['local']['additional-info']['duns'])){ ?>"duns":"<?php echo $JSeo['local']['additional-info']['duns']; ?>",<?php } ?>
        <?php if(empty($JSeo['local']['additional-info']['vat-id'])){ ?>"vatID":"<?php echo $JSeo['local']['additional-info']['vat-id']; ?>",<?php } ?>
        <?php if(empty($JSeo['local']['additional-info']['number-employed'])){ ?>
        "numberOfEmployees":{
            "@type":"QuantitativeValue",
            "value":"<?php echo $JSeo['local']['additional-info']['number-employed']; ?>"
        },<?php } ?>
        <?php if(empty($JSeo['local']['additional-info']['tax-id'])){ ?>"taxID":"<?php echo $JSeo['local']['additional-info']['tax-id']; ?>",<?php } ?>
        "location":{
            "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#place"
        }
    },
    {
        "@type":"WebSite",
        "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#website",
        "url":"<?php echo $protocols.'://'.$domainTLD; ?>",
        "name":"<?php echo $JSeo['local']['organisation-names']; ?>",
        "alternateName":"<?php echo $JSeo['local']['alternative-names']; ?>",
        "publisher":{
            "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#organization"
        },
        "inLanguage":"<?php echo $i18n->getLang().'-'.strtoupper($i18n->getLang()); ?>"
    },
    {
        "@type":"ImageObject",
        "@id":"<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']; ?>",
        "url":"<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']; ?>",
        "width":"1920",
        "height":"1080",
        "inLanguage":"<?php echo $i18n->getLang().'-'.strtoupper($i18n->getLang()); ?>"
    },
    {
        "@type":"WebPage",
        "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#webpage",
        "url":"<?php echo $protocols.'://'.$domainTLD; ?>/",
        "name":"<?php echo $JSeo['name'].' - '.$title; ?>",
        "datePublished":"<?php echo $JSeo['date-publish']; ?>",
        "dateModified":"<?php echo $JSeo['date-update']; ?>",
        "about":{
            "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#organization"
        },
        "isPartOf":{
            "@id":"<?php echo $protocols.'://'.$domainTLD; ?>/#website"
        },
        "primaryImageOfPage":{
            "@id":"<?php echo $protocols.'://'.$domainTLD.'/'.$JSeo['logo']; ?>"
        },
        "inLanguage":"<?php echo $i18n->getLang().'-'.strtoupper($i18n->getLang()); ?>"
    }]
}
</script>


   
<link rel="stylesheet" href='style.css'> 


</head>

<body>

<!-- Put here start body -->