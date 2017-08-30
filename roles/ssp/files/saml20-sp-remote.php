<?php
$metadata['https://engine.surfconext.nl/authentication/sp/metadata'] = array (
  'entityid' => 'https://engine.surfconext.nl/authentication/sp/metadata',
  'description' => 
  array (
    'nl' => 'SURFconext is een samenwerkingsinfrastructuur die nieuwe vormen van samenwerken mogelijk maakt door diensten van verschillende aanbieders te combineren.',
    'en' => 'SURFconext is a collaboration infrastructure that creates new opportunities to collaborate online based on a combination of applications from different providers.',
  ),
  'OrganizationName' => 
  array (
    'nl' => 'SURFnet BV',
    'en' => 'SURFnet BV',
  ),
  'name' => 
  array (
    'nl' => 'SURFconext | SURFnet',
    'en' => 'SURFconext | SURFnet',
  ),
  'OrganizationDisplayName' => 
  array (
    'nl' => 'SURFnet',
    'en' => 'SURFnet',
  ),
  'url' => 
  array (
    'nl' => 'http://www.surfnet.nl/nl/Pages/default.aspx',
    'en' => 'http://www.surfnet.nl/en/Pages/default.aspx',
  ),
  'OrganizationURL' => 
  array (
    'nl' => 'http://www.surfnet.nl/nl/Pages/default.aspx',
    'en' => 'http://www.surfnet.nl/en/Pages/default.aspx',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'support',
      'givenName' => 'SURFconext',
      'surName' => 'Helpdesk',
      'emailAddress' => 
      array (
        0 => 'help@surfconext.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'SURFconext',
      'surName' => 'Technical Support',
      'emailAddress' => 
      array (
        0 => 'support@surfconext.nl',
      ),
    ),
    2 => 
    array (
      'contactType' => 'administrative',
      'givenName' => 'SURFconext',
      'surName' => 'Administrative Contact',
      'emailAddress' => 
      array (
        0 => 'support@surfconext.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://engine.surfconext.nl/authentication/sp/consume-assertion',
      'index' => 0,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),

  'authproc' => array(
    10 => array(
        'class' => 'core:AttributeMap',
        //'pbdf.pbdf.surfnet.institute' => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
        'pbdf.pbdf.surfnet.type' => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
        'pbdf.pbdf.surfnet.id' => 'urn:mace:dir:attribute-def:uid',
        'pbdf.pbdf.surfnet.fullname' => 'urn:mace:dir:attribute-def:cn',
        'pbdf.pbdf.surfnet.fullname' => 'urn:mace:dir:attribute-def:displayName',
        'pbdf.pbdf.surfnet.firstname' => 'urn:mace:dir:attribute-def:givenName',
        'pbdf.pbdf.surfnet.familyname' => 'urn:mace:dir:attribute-def:sn',
        'pbdf.pbdf.surfnet.email' => 'urn:mace:dir:attribute-def:mail',
    ),
    20 => array(
        'class' => 'core:AttributeAdd',
        'urn:mace:terena.org:attribute-def:schacHomeOrganization' => array('privacybydesign.foundation'),
    ),
  ),
/*
  'attributes' => 
  array (
    0 => 'urn:mace:dir:attribute-def:displayName',
    1 => 'urn:mace:dir:attribute-def:mail',
    2 => 'urn:mace:dir:attribute-def:uid',
    3 => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
  ),
  'attributes.required' => 
  array (
    0 => 'urn:mace:dir:attribute-def:uid',
    1 => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
  ),
*/
  'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIID3zCCAsegAwIBAgIJAMVC9xn1ZfsuMA0GCSqGSIb3DQEBCwUAMIGFMQswCQYDVQQGEwJOTDEQMA4GA1UECAwHVXRyZWNodDEQMA4GA1UEBwwHVXRyZWNodDEVMBMGA1UECgwMU1VSRm5ldCBCLlYuMRMwEQYDVQQLDApTVVJGY29uZXh0MSYwJAYDVQQDDB1lbmdpbmUuc3VyZmNvbmV4dC5ubCAyMDE0MDUwNTAeFw0xNDA1MDUxNDIyMzVaFw0xOTA1MDUxNDIyMzVaMIGFMQswCQYDVQQGEwJOTDEQMA4GA1UECAwHVXRyZWNodDEQMA4GA1UEBwwHVXRyZWNodDEVMBMGA1UECgwMU1VSRm5ldCBCLlYuMRMwEQYDVQQLDApTVVJGY29uZXh0MSYwJAYDVQQDDB1lbmdpbmUuc3VyZmNvbmV4dC5ubCAyMDE0MDUwNTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAKthMDbB0jKHefPzmRu9t2h7iLP4wAXr42bHpjzTEk6gttHFb4l/hFiz1YBI88TjiH6hVjnozo/YHA2c51us+Y7g0XoS7653lbUN/EHzvDMuyis4Xi2Ijf1A/OUQfH1iFUWttIgtWK9+fatXoGUS6tirQvrzVh6ZstEp1xbpo1SF6UoVl+fh7tM81qz+Crr/Kroan0UjpZOFTwxPoK6fdLgMAieKSCRmBGpbJHbQ2xxbdykBBrBbdfzIX4CDepfjE9h/40ldw5jRn3e392jrS6htk23N9BWWrpBT5QCk0kH3h/6F1Dm6TkyG9CDtt73/anuRkvXbeygI4wml9bL3rE8CAwEAAaNQME4wHQYDVR0OBBYEFD+Ac7akFxaMhBQAjVfvgGfY8hNKMB8GA1UdIwQYMBaAFD+Ac7akFxaMhBQAjVfvgGfY8hNKMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAC8L9D67CxIhGo5aGVu63WqRHBNOdo/FAGI7LURDFeRmG5nRw/VXzJLGJksh4FSkx7aPrxNWF1uFiDZ80EuYQuIv7bDLblK31ZEbdg1R9LgiZCdYSr464I7yXQY9o6FiNtSKZkQO8EsscJPPy/Zp4uHAnADWACkOUHiCbcKiUUFu66dX0Wr/v53Gekz487GgVRs8HEeT9MU1reBKRgdENR8PNg4rbQfLc3YQKLWK7yWnn/RenjDpuCiePj8N8/80tGgrNgK/6fzM3zI18sSywnXLswxqDb/J+jgVxnQ6MrsTf1urM8MnfcxG/82oHIwfMh/sXPCZpo+DTLkhQxctJ3M=',
    ),
  ),
  'saml20.sign.assertion' => true,
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'nl' => 'SURFconext | SURFnet',
      'en' => 'SURFconext | SURFnet',
    ),
    'Description' => 
    array (
      'nl' => 'SURFconext is een samenwerkingsinfrastructuur die nieuwe vormen van samenwerken mogelijk maakt door diensten van verschillende aanbieders te combineren.',
      'en' => 'SURFconext is a collaboration infrastructure that creates new opportunities to collaborate online based on a combination of applications from different providers.',
    ),
    'InformationURL' => 
    array (
    ),
    'PrivacyStatementURL' => 
    array (
    ),
    'Logo' => 
    array (
      0 => 
      array (
        'url' => 'https://static.surfconext.nl/media/idp/surfnet.png',
        'height' => 44,
        'width' => 108,
      ),
    ),
  ),
);
