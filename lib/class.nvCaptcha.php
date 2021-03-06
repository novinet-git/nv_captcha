<?php class nvCaptcha
{


    public function __construct()
    {
    }

    public static function getCaptcha($aOptions = array())
    {
        require_once(rex_path::assets('addons/nv_captcha/vendor/securimage/securimage.php'));
        $oSecurimage = new SecurImage;
        $aOptions["input_text"] = "Bitte den abgebildeten Code eingeben *";
        $aOptions["input_attributes"] = array("class" => "form-control mb-3");
        $aOptions["disable_flash_fallback"] = true;

        $sHtml = $oSecurimage->getCaptchaHtml($aOptions);
        return $sHtml;
    }

    public static function isSpam()
    {
        require_once(rex_path::assets('addons/nv_captcha/vendor/securimage/securimage.php'));
        $oSecurimage = new SecurImage();
        if ($oSecurimage->check($_POST['captcha_code']) == true) {
            return false;
        }
        return true;
    }
}
