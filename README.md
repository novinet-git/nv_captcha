# nvCaptcha-AddOn für REDAXO 5

Redaxo 5 Addon zum Einblenden und Überprüfen eines Capcha-Codes in yform-Formularen

## Beispiel Output

```php
$yform->setValueField('php', ['captcha_code','CaptchaLabel','<?php echo nvCaptcha::getCaptcha(); ?>']);
$yform->setValidateField('customfunction', array("captcha_code", "nvCaptcha::isSpam","", "Spammer haben keine Chance"));
```