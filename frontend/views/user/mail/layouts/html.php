<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var \yii\web\View        $this
 * @var yii\mail\BaseMessage $content
 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php $this->head() ?>
</head>
<body bgcolor="#f6f6f6" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; margin: 0; padding: 0;">
<table class="body-wrap" style="border-spacing: 0px;font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; margin: 0; padding: 0px;">
    <tr>
        <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;background-color: #ffffff;">
            Call us 24/7: 123-456-7890  |  www.yourdomain.com
        </td>
    </tr>
    <tr align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">

        <td align="center" class="container" bgcolor="" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; display: block !important; max-width: 500px !important; clear: both !important; margin: 0 auto; padding: 0;">
            <div class="content" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; max-width: 600px; display: block; margin: 0 auto; padding: 0px;background: #f7f7f7; margin-right: 7px; padding: 0px 9px;">
                <table style="border-spacing: 0px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; margin: 0; padding: 0;">
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                        <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                            <?php $this->beginBody() ?>
                            <?= $content ?>
                            <?php $this->endBody() ?>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;"></td>
    </tr>
</table>
<table class="footer-wrap" style="border-spacing: 0px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; clear: both !important; margin: 0; padding: 0;">
    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">

        <td class="container" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">
            <div class="content" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; max-width: 600px; display: block; margin: 0 auto; padding: 0px;">
                <table style="background: url(http://board.art-craft.tk/frontend/web/img/mail/footer-bg.png) 50% 0% no-repeat; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; margin: 0; padding: 0;">
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                        <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                            <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.6; color: #363636; font-weight: bold; margin: 0 0 10px; padding: 0;">
                                Полезные ссылки
                            </p>
                            <div style="width: 350px; margin: 0 auto;">
                                <div style="display: block;width: 92px; height: 103px; float: left;padding: 10px;">
                                    <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/help.png" alt=""></a>
                                </div>
                                <div style="display: block;width: 94px; height: 104px; float: left;padding: 10px;">
                                    <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/feedback.png" alt=""></a>
                                </div>
                                <div style="display: block;width: 93px; height: 99px; float: left;padding: 10px;">
                                    <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/profile.png" alt=""></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                        <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                            <br />
                        </td>
                    </tr>
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                        <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
                            <div style="display: block;width: 50px; height: 56px; float: left;padding: 0 25px;">
                                <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/vk.png" alt=""></a>
                            </div>

                            <div style="display: block;width: 50px; height: 56px; float: left;padding: 0 25px;">
                                <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/inst.png" alt=""></a>
                            </div>

                            <div style="display: block;width: 54px; height: 54px; float: left; padding: 34px 8px 0px 65px;">
                                <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/icon-info.png" alt=""></a>
                            </div>

                            <div style="display: block;width: 50px; height: 56px; float: left;padding: 0 58px 0px 80px;">
                                <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/fb.png" alt=""></a>
                            </div>

                            <div style="display: block;width: 50px; height: 56px; float: left;padding: 0px;">
                                <a href="#"><img src="http://board.art-craft.tk/frontend/web/img/mail/rss.png" alt=""></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-align: center; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 21px; line-height: 1.6; color: #697d1e; font-weight: bold; margin: 0 0 10px; padding: 0;">
                                Полезная информация!
                            </p>
                            <p style="text-align: center; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; color: #697d1e; font-weight: bold; margin: 0 0 33px; padding: 0;">
                                Ваш пароль обеспечивает Вам доступ к разделу<br />
                                “Мой профиль”, где у Вас есть возможность<br />
                                редактировать или удалять объявления, проверять<br />
                                сообщения, управлять подписками и учетной записью.
                            </p>

                        </td>
                    </tr>

                </table>
            </div>
        </td>
    </tr>
</table>
<table class="body-wrap" style="border-spacing: 0px;font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; width: 100%; margin: 0; padding: 0px;">
    <tr>
        <td align="center" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;background-color: #ffffff;">
            <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.6; color: #363636; font-weight: bold; margin: 0 0 10px; padding: 0;">
                Это сообщение было отправлено автоматически.
                Пожалуйста не отвечайте на него.
            </p>
        </td>
    </tr>
</table>

</body>
</html>
<?php $this->endPage() ?>
