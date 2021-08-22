<?php class nvCaptcha
{


    public function __construct()
    {
    }

    public function getCaptcha()
    {
        $addon = rex_addon::get('nv_captcha');
        require_once($addon->getAssetsUrl('vendor/securimage/securimage.php'));
        $oSecurimage = new SecurImage;
        $sHtml = $oSecurimage->getCaptchaHtml();
        return $sHtml;
    }

    public function isSpam()
    {
        $addon = rex_addon::get('nv_captcha');
        require_once($addon->getAssetsUrl('vendor/securimage/securimage.php'));
        $image = new Securimage();
        if ($image->check($_POST['captcha_code']) == true) {
            return false;
        }
        return true;
    }
}
